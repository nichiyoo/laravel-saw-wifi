@php
  use App\Enums\VariableType;
  use Repo\SawEngine\Enums\AttributeType;
@endphp

<x-dashboard-layout>
  <x-dashboard.heading>
    <x-slot:title>{{ trans('calculate.title') }}</x-slot:title>
    <x-slot:description>{{ trans('calculate.description') }}</x-slot:description>
  </x-dashboard.heading>

  <div class="grid gap-6">
    <x-ui.card>
      <x-slot:header>
        <i data-lucide="lightbulb" class="size-5 text-primary-500"></i>
        <h5>{{ trans('calculate.explanation.title') }}</h5>
      </x-slot:header>

      <div class="grid gap-3 text-sm leading-relaxed text-base-600">
        <p>{!! trans('calculate.explanation.ranked_first', [
            'kemantren' => $top->candidate->kemantren,
            'score' => number_format($top->score, 4),
        ]) !!}</p>
        <p>{!! trans('calculate.explanation.evaluated', ['count' => $total]) !!}</p>
        <p>{!! trans('calculate.explanation.weights', ['url' => route('metrics.index')]) !!}</p>
      </div>
    </x-ui.card>

    <x-ui.table>
      <x-slot:title>
        <i data-lucide="trophy" class="size-5 text-primary-500"></i>
        <h4>{{ trans('calculate.ranking.title') }}</h4>
      </x-slot:title>

      <x-slot:head>
        <th>{{ trans('calculate.ranking.rank') }}</th>
        <th>{{ trans('calculate.ranking.kemantren') }}</th>
        @foreach ($criteria as $criterion)
          <th>{{ $criterion->variable->label() }}</th>
        @endforeach
        <th>{{ trans('calculate.ranking.score') }}</th>
      </x-slot:head>

      <x-slot:body>
        @forelse ($ranked as $item)
          <tr>
            <td class="w-10">
              <span @class([
                  'flex items-center justify-center rounded-full size-7',
                  'bg-primary-100 text-primary-700 font-semibold' => $item->rank <= 3,
                  'bg-base-100 text-base-500' => $item->rank > 3,
              ])>
                {{ $item->rank }}
              </span>
            </td>
            <td class="font-medium">{{ $item->candidate->kemantren }}</td>
            @foreach ($criteria as $criterion)
              <td>
                @php
                  $value = match ($criterion->variable->value) {
                      'self_funding' => number_format($item->candidate->self_funding),
                      default => number_format($item->candidate->{$criterion->variable->value}),
                  };
                @endphp
                {{ $value }}
              </td>
            @endforeach
            <td class="font-bold text-primary-600">{{ number_format($item->score, 4) }}</td>
          </tr>
        @empty
          <x-ui.empty colspan="{{ 3 + $criteria->count() }}" />
        @endforelse
      </x-slot:body>
    </x-ui.table>

    {{ $ranked->links() }}

    <x-ui.table>
      <x-slot:title>
        <i data-lucide="calculator" class="size-5 text-primary-500"></i>
        <h4>{{ trans('calculate.criteria.title') }}</h4>
      </x-slot:title>

      <x-slot:head>
        <th>{{ trans('calculate.criteria.variable') }}</th>
        <th>{{ trans('calculate.criteria.type') }}</th>
        <th>{{ trans('calculate.criteria.weight') }}</th>
      </x-slot:head>

      <x-slot:body>
        @foreach ($criteria as $criterion)
          <tr>
            <td>{{ $criterion->variable->label() }}</td>
            <td>
              <x-ui.badge class="{{ $criterion->type->style() }}">
                {{ $criterion->type->label() }}
              </x-ui.badge>
            </td>
            <td>{{ $criterion->weight }}%</td>
          </tr>
        @endforeach
      </x-slot:body>
    </x-ui.table>
  </div>
</x-dashboard-layout>

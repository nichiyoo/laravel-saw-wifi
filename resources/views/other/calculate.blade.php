@php
  use App\Enums\VariableType;
  use Repo\SawEngine\Enums\AttributeType;
@endphp

<x-dashboard-layout>
  <x-dashboard.heading>
    <x-slot:title>DSS Calculation</x-slot:title>
    <x-slot:description>SAW ranking of kemantren based on weighted criteria</x-slot:description>
  </x-dashboard.heading>

  <div class="grid gap-6">
    <x-ui.card>
      <x-slot:header>
        <i data-lucide="lightbulb" class="size-5 text-primary-500"></i>
        <h5>What This Means</h5>
      </x-slot:header>

      <div class="grid gap-3 text-sm leading-relaxed text-base-600">
        <p>
          <strong>{{ $top->candidate->kemantren }}</strong> ranked first with a score of
          <strong>{{ number_format($top->score, 4) }}</strong>, making it the highest-priority kemantren for new JSS
          free Wi-Fi access point placement based on the current criteria and weights.
        </p>
        <p>
          A total of <strong>{{ $total }} kemantren</strong> were evaluated using the Simple Additive Weighting
          (SAW) method. Benefit criteria (green) reward higher raw values more JSS users or higher population
          density increases the score. Cost criteria (yellow) reward lower raw values fewer existing access
          points or less community self-funding indicates greater need.
        </p>
        <p>
          Weights can be adjusted at any time from the <a href="{{ route('metrics.index') }}"
            class="text-primary-500 hover:underline">Metrics page</a> to reflect current policy priorities, and the
          calculation can be re-run instantly.
        </p>
      </div>
    </x-ui.card>

    <x-ui.table>
      <x-slot:title>
        <i data-lucide="trophy" class="size-5 text-primary-500"></i>
        <h4>Ranking Results</h4>
      </x-slot:title>

      <x-slot:head>
        <th>Rank</th>
        <th>Kemantren</th>
        @foreach ($criteria as $criterion)
          <th>{{ $criterion->variable->label() }}</th>
        @endforeach
        <th>Score</th>
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
        <h4>Used Criteria</h4>
      </x-slot:title>

      <x-slot:head>
        <th>Variable</th>
        <th>Type</th>
        <th>Weight</th>
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

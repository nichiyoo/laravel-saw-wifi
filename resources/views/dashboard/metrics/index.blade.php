@php
  use Repo\SawEngine\Enums\AttributeType;
@endphp

<x-dashboard-layout>
  <x-dashboard.heading>
    <x-slot:title>{{ trans('metrics.index.title') }}</x-slot:title>
    <x-slot:description>{{ trans('metrics.index.description', ['app' => config('app.name')]) }}</x-slot:description>
  </x-dashboard.heading>

  <x-ui.table>
    <x-slot:title>
      <i data-lucide="bar-chart-3" class="size-5 text-primary-500"></i>
      <h4>{{ trans('metrics.index.table_title') }}</h4>
    </x-slot:title>

    <x-slot:action class="justify-between">
      <form action="{{ route('metrics.index') }}" method="GET" class="flex flex-col gap-2 xl:flex-row xl:items-center">
        <x-ui.input name="search" value="{{ request()->get('search') }}" :placeholder="trans('metrics.index.search')">
          <x-slot:left>
            <i data-lucide="search" class="text-base-500 size-5"></i>
          </x-slot:left>
        </x-ui.input>
      </form>

      <div class="flex items-center gap-2">
        @if (request()->has('search'))
          <a href="{{ route('metrics.index') }}">
            <x-ui.button variant="outline">
              <i data-lucide="x" class="size-5"></i>
              <span>{{ trans('metrics.index.reset') }}</span>
            </x-ui.button>
          </a>
        @endif

        @can('create', App\Models\Metric::class)
          <a href="{{ route('metrics.create') }}">
            <x-ui.button>
              <i data-lucide="plus" class="size-5"></i>
              <span>{{ trans('metrics.index.add') }}</span>
            </x-ui.button>
          </a>
        @endcan
      </div>
    </x-slot:action>

    <x-slot:head>
      <th>{{ trans('metrics.index.no') }}</th>
      <th>{{ trans('metrics.index.variable') }}</th>
      <th>{{ trans('metrics.index.description') }}</th>
      <th>{{ trans('metrics.index.type') }}</th>
      <th>{{ trans('metrics.index.weight') }}</th>
      <th>{{ trans('metrics.index.actions') }}</th>
    </x-slot:head>

    <x-slot:body>
      @forelse ($metrics as $metric)
        <tr>
          <td class="w-10">{{ $metrics->firstItem() + $loop->index }}</td>
          <td>
            <a href="{{ route('metrics.show', $metric) }}" class="font-medium hover:text-primary-500">
              {{ $metric->variable->label() }}
            </a>
          </td>
          <td>{{ $metric->description ?? '-' }}</td>
          <td>
            <x-ui.badge class="{{ $metric->type->style() }}">
              {{ $metric->type->label() }}
            </x-ui.badge>
          </td>
          <td>{{ $metric->weight }}</td>
          <td>
            <div class="flex items-center gap-4">
              @can('update', $metric)
                <a href="{{ route('metrics.edit', $metric) }}" class="text-primary-500">
                  {{ trans('metrics.index.edit') }}
                </a>
              @endcan
              @can('delete', $metric)
                <x-delete id="{{ $metric->id }}" title="{{ $metric->variable->label() }}"
                  route="{{ route('metrics.destroy', $metric) }}" />
              @endcan
            </div>
          </td>
        </tr>
      @empty
        <x-ui.empty colspan="6" />
      @endforelse
    </x-slot:body>
  </x-ui.table>

  {{ $metrics->links() }}
</x-dashboard-layout>

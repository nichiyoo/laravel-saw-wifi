@php
  use Repo\SawEngine\Enums\AttributeType;
@endphp

<x-dashboard-layout>
  <x-dashboard.heading>
    <x-slot:title>Metrics List</x-slot:title>
    <x-slot:description>Manage list of metrics criteria in {{ config('app.name', 'Laravel') }}</x-slot:description>
  </x-dashboard.heading>

  <x-ui.table>
    <x-slot:title>
      <i data-lucide="bar-chart-3" class="size-5 text-primary-500"></i>
      <h4>Metrics Table</h4>
    </x-slot:title>

    <x-slot:action class="justify-between">
      <form action="{{ route('metrics.index') }}" method="GET" class="flex flex-col gap-2 xl:flex-row xl:items-center">
        <x-ui.input name="search" value="{{ request()->get('search') }}" placeholder="Search by variable">
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
              <span>Reset</span>
            </x-ui.button>
          </a>
        @endif

        @can('create', App\Models\Metric::class)
          <a href="{{ route('metrics.create') }}">
            <x-ui.button>
              <i data-lucide="plus" class="size-5"></i>
              <span>Metric</span>
            </x-ui.button>
          </a>
        @endcan
      </div>
    </x-slot:action>

    <x-slot:head>
      <th>No</th>
      <th>Variable</th>
      <th>Description</th>
      <th>Type</th>
      <th>Weight</th>
      <th>Actions</th>
    </x-slot:head>

    <x-slot:body>
      @forelse ($metrics as $metric)
        <tr>
          <td class="w-10">{{ $metrics->firstItem() + $loop->index }}</td>
          <td>{{ $metric->variable->label() }}</td>
          <td>{{ $metric->description ?? '-' }}</td>
          <td>
            <span class="px-2 py-1 text-xs font-medium rounded-full {{ $metric->type->style() }}">
              {{ $metric->type->label() }}
            </span>
          </td>
          <td>{{ $metric->weight }}</td>
          <td>
            <div class="flex items-center gap-4">
              @can('update', $metric)
                <a href="{{ route('metrics.edit', $metric) }}" class="text-primary-500">
                  Edit
                </a>
              @endcan
              @can('delete', $metric)
                <x-delete id="{{ $metric->ulid }}" title="{{ $metric->variable->label() }}"
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

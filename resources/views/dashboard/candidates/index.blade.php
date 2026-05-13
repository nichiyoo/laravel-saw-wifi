<x-dashboard-layout>
  <x-dashboard.heading>
    <x-slot:title>Candidates List</x-slot:title>
    <x-slot:description>Manage list of candidate regions in {{ config('app.name', 'Laravel') }}</x-slot:description>
  </x-dashboard.heading>

  <x-ui.table>
    <x-slot:title>
      <i data-lucide="map" class="size-5 text-primary-500"></i>
      <h4>Candidates Table</h4>
    </x-slot:title>

    <x-slot:action class="justify-between">
      <form action="{{ route('candidates.index') }}" method="GET"
        class="flex flex-col gap-2 xl:flex-row xl:items-center">
        <x-ui.input name="search" value="{{ request()->get('search') }}" placeholder="Search by kemantren">
          <x-slot:left>
            <i data-lucide="search" class="text-base-500 size-5"></i>
          </x-slot:left>
        </x-ui.input>
      </form>

      <div class="flex items-center gap-2">
        @if (request()->has('search'))
          <a href="{{ route('candidates.index') }}">
            <x-ui.button variant="outline">
              <i data-lucide="x" class="size-5"></i>
              <span>Reset</span>
            </x-ui.button>
          </a>
        @endif

        @can('create', App\Models\Candidate::class)
          <a href="{{ route('candidates.create') }}">
            <x-ui.button>
              <i data-lucide="plus" class="size-5"></i>
              <span>Candidate</span>
            </x-ui.button>
          </a>
        @endcan
      </div>
    </x-slot:action>

    <x-slot:head>
      <th>No</th>
      <th>Kemantren</th>
      <th>BPS Code</th>
      <th>Kemendagri Code</th>
      <th>JSS Users</th>
      <th>WiFi Count</th>
      <th>Population Density</th>
      <th>Self Funding</th>
      <th>Actions</th>
    </x-slot:head>

    <x-slot:body>
      @forelse ($candidates as $candidate)
        <tr>
          <td class="w-10">{{ $candidates->firstItem() + $loop->index }}</td>
          <td>
            <a href="{{ route('candidates.show', $candidate) }}" class="font-medium hover:text-primary-500">
              {{ $candidate->kemantren }}
            </a>
          </td>
          <td>{{ $candidate->bps_code }}</td>
          <td>{{ $candidate->kemendagri_code }}</td>
          <td>{{ number_format($candidate->jss_users) }}</td>
          <td>{{ $candidate->wifi_count }}</td>
          <td>{{ number_format($candidate->population_density) }}</td>
          <td><x-ui.currency amount="{{ $candidate->self_funding }}" /></td>
          <td>
            <div class="flex items-center gap-4">
              @can('update', $candidate)
                <a href="{{ route('candidates.edit', $candidate) }}" class="text-primary-500">
                  Edit
                </a>
              @endcan
              @can('delete', $candidate)
                <x-delete id="{{ $candidate->ulid }}" title="{{ $candidate->kemantren }}"
                  route="{{ route('candidates.destroy', $candidate) }}" />
              @endcan
            </div>
          </td>
        </tr>
      @empty
        <x-ui.empty colspan="9" />
      @endforelse
    </x-slot:body>
  </x-ui.table>

  {{ $candidates->links() }}
</x-dashboard-layout>

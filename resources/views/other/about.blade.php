<x-dashboard-layout>
  <x-dashboard.heading>
    <x-slot:title>{{ trans('about.title') }}</x-slot:title>
    <x-slot:description>{{ trans('about.description') }}</x-slot:description>
  </x-dashboard.heading>

  <x-ui.card>
    <x-slot:header>
      <i data-lucide="info" class="size-5 text-primary-500"></i>
      <h5>{{ trans('about.overview.title') }}</h5>
    </x-slot:header>

    <div class="grid gap-4 text-sm leading-relaxed">
      <p>{{ trans('about.overview.body') }}</p>

      <h6 class="font-semibold text-base-800">{{ trans('about.background.title') }}</h6>

      <p>{{ trans('about.background.body') }}</p>
    </div>
  </x-ui.card>

  <x-ui.card>
    <x-slot:header>
      <i data-lucide="sigma" class="size-5 text-primary-500"></i>
      <h5>{{ trans('about.saw.title') }}</h5>
    </x-slot:header>

    <div class="grid gap-4 text-sm leading-relaxed">
      <p>{{ trans('about.saw.p1') }}</p>
      <p>{{ trans('about.saw.p2') }}</p>
      <p>{{ trans('about.saw.p3') }}</p>
    </div>
  </x-ui.card>


  <x-ui.table>
    <x-slot:title>
      <i data-lucide="table" class="size-5 text-primary-500"></i>
      <h4>{{ trans('about.criteria.title') }}</h4>
    </x-slot:title>

    <x-slot:head>
      <th>{{ trans('about.criteria.code') }}</th>
      <th>{{ trans('about.criteria.criterion') }}</th>
      <th>{{ trans('about.criteria.type') }}</th>
      <th>{{ trans('about.criteria.weight') }}</th>
    </x-slot:head>

    <x-slot:body>
      @foreach ($metrics as $metric)
        <tr>
          <td>C{{ $loop->iteration }}</td>
          <td>{{ $metric->variable->label() }}</td>
          <td>
            <x-ui.badge class="{{ $metric->type->style() }}">
              {{ $metric->type->label() }}
            </x-ui.badge>
          </td>
          <td>{{ $metric->weight * 100 }}%</td>
        </tr>
      @endforeach
    </x-slot:body>

    <x-slot:footer>
      <div class="grid gap-2 text-sm">
        <p>{{ trans('about.criteria.footer') }}</p>
      </div>
    </x-slot:footer>
  </x-ui.table>

  <x-ui.card>
    <x-slot:header>
      <i data-lucide="book-open" class="size-5 text-primary-500"></i>
      <h5>{{ trans('about.references.title') }}</h5>
    </x-slot:header>

    <ul class="grid gap-2 text-sm list-disc list-inside">
      <li>Fishburn, P. C. (1967). Additive utilities with incomplete product set.</li>
      <li>Kusumadewi, S. et al. (2006). <em>Fuzzy Multi-Attribute Decision Making</em>. Graha Ilmu.</li>
      <li>Satu Data Indonesia, <a href="https://data.go.id" target="_blank"
          class="text-primary-500 hover:underline">data.go.id</a></li>
    </ul>
  </x-ui.card>

  <x-ui.card>
    <x-slot:header>
      <i data-lucide="download" class="size-5 text-primary-500"></i>
      <h5>{{ trans('about.downloads.title') }}</h5>
    </x-slot:header>

    <div class="flex flex-wrap gap-3">
      <a href="{{ route('dashboard.dataset') }}">
        <x-ui.button>
          <i data-lucide="file-text" class="size-5"></i>
          <span>{{ trans('about.downloads.dataset') }}</span>
        </x-ui.button>
      </a>
      <a href="{{ route('dashboard.journal') }}">
        <x-ui.button variant="outline">
          <i data-lucide="file-text" class="size-5"></i>
          <span>{{ trans('about.downloads.journal') }}</span>
        </x-ui.button>
      </a>
    </div>
  </x-ui.card>
</x-dashboard-layout>

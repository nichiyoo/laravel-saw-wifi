<x-dashboard-layout>
  <x-dashboard.heading>
    <x-slot:title>{{ trans('candidates.create.title') }}</x-slot:title>
    <x-slot:description>{{ trans('candidates.create.description', ['app' => config('app.name')]) }}</x-slot:description>
  </x-dashboard.heading>

  <x-ui.card as="form" method="post" action="{{ route('candidates.store') }}">
    <x-slot:header>
      <i data-lucide="map" class="size-5 text-primary-500"></i>
      <h5>{{ trans('candidates.create.card_title') }}</h5>
    </x-slot:header>

    @csrf
    @include('dashboard.candidates.form', [
        'candidate' => new \App\Models\Candidate(),
    ])

    <x-slot:footer class="justify-end">
      <a href="{{ route('candidates.index') }}">
        <x-ui.button variant="outline" type="button">
          <span>{{ trans('candidates.create.cancel') }}</span>
        </x-ui.button>
      </a>

      <x-ui.button>
        <span>{{ trans('candidates.create.submit') }}</span>
        <i data-lucide="arrow-up-right" class="size-5"></i>
      </x-ui.button>
    </x-slot:footer>
  </x-ui.card>
</x-dashboard-layout>

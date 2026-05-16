<x-dashboard-layout>
  <x-dashboard.heading>
    <x-slot:title>{{ trans('candidates.show.title') }}</x-slot:title>
    <x-slot:description>{{ trans('candidates.show.description', ['app' => config('app.name')]) }}</x-slot:description>
  </x-dashboard.heading>

  <x-ui.card>
    <x-slot:header>
      <i data-lucide="map" class="size-5 text-primary-500"></i>
      <h5>{{ trans('candidates.show.card_title') }}</h5>
    </x-slot:header>

    @include('dashboard.candidates.form', [
        'candidate' => $candidate,
        'disabled' => true,
    ])

    <x-slot:footer class="justify-end">
      <a href="{{ route('candidates.index') }}">
        <x-ui.button variant="outline" type="button">
          <span>{{ trans('candidates.show.back') }}</span>
        </x-ui.button>
      </a>
    </x-slot:footer>
  </x-ui.card>
</x-dashboard-layout>

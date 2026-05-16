<x-dashboard-layout>
  <x-dashboard.heading>
    <x-slot:title>{{ trans('metrics.show.title') }}</x-slot:title>
    <x-slot:description>{{ trans('metrics.show.description', ['app' => config('app.name')]) }}</x-slot:description>
  </x-dashboard.heading>

  <x-ui.card>
    <x-slot:header>
      <i data-lucide="bar-chart-3" class="size-5 text-primary-500"></i>
      <h5>{{ trans('metrics.show.card_title') }}</h5>
    </x-slot:header>

    @include('dashboard.metrics.form', [
        'metric' => $metric,
        'disabled' => true,
    ])

    <x-slot:footer class="justify-end">
      <a href="{{ route('metrics.index') }}">
        <x-ui.button variant="outline" type="button">
          <span>{{ trans('metrics.show.back') }}</span>
        </x-ui.button>
      </a>
    </x-slot:footer>
  </x-ui.card>
</x-dashboard-layout>

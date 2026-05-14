<x-dashboard-layout>
  <x-dashboard.heading>
    <x-slot:title>Metric Details</x-slot:title>
    <x-slot:description>View metric criteria information in {{ config('app.name', 'Laravel') }}</x-slot:description>
  </x-dashboard.heading>

  <x-ui.card>
    <x-slot:header>
      <i data-lucide="bar-chart-3" class="size-5 text-primary-500"></i>
      <h5>Metric Information</h5>
    </x-slot:header>

    @include('dashboard.metrics.form', [
        'metric' => $metric,
        'disabled' => true,
    ])

    <x-slot:footer class="justify-end">
      <a href="{{ route('metrics.index') }}">
        <x-ui.button variant="outline" type="button">
          <span>Back</span>
        </x-ui.button>
      </a>
    </x-slot:footer>
  </x-ui.card>
</x-dashboard-layout>

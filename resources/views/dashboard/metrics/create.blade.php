<x-dashboard-layout>
  <x-dashboard.heading>
    <x-slot:title>Add Metric</x-slot:title>
    <x-slot:description>Create a new metric criteria in {{ config('app.name', 'Laravel') }}</x-slot:description>
  </x-dashboard.heading>

  <x-ui.card as="form" method="post" action="{{ route('metrics.store') }}">
    <x-slot:header>
      <i data-lucide="bar-chart-3" class="size-5 text-primary-500"></i>
      <h5>Metric Information</h5>
    </x-slot:header>

    @csrf
    @include('dashboard.metrics.form', [
        'metric' => new \App\Models\Metric(),
    ])

    <x-slot:footer class="justify-end">
      <a href="{{ route('metrics.index') }}">
        <x-ui.button variant="outline" type="button">
          <span>Cancel</span>
        </x-ui.button>
      </a>

      <x-ui.button>
        <span>Create</span>
        <i data-lucide="arrow-up-right" class="size-5"></i>
      </x-ui.button>
    </x-slot:footer>
  </x-ui.card>
</x-dashboard-layout>

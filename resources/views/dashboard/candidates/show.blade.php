<x-dashboard-layout>
  <x-dashboard.heading>
    <x-slot:title>Candidate Details</x-slot:title>
    <x-slot:description>View candidate region information in {{ config('app.name', 'Laravel') }}</x-slot:description>
  </x-dashboard.heading>

  <x-ui.card>
    <x-slot:header>
      <i data-lucide="map" class="size-5 text-primary-500"></i>
      <h5>Candidate Information</h5>
    </x-slot:header>

    @include('dashboard.candidates.form', [
        'candidate' => $candidate,
        'disabled' => true,
    ])

    <x-slot:footer class="justify-end">
      <a href="{{ route('candidates.index') }}">
        <x-ui.button variant="outline" type="button">
          <span>Back</span>
        </x-ui.button>
      </a>
    </x-slot:footer>
  </x-ui.card>
</x-dashboard-layout>

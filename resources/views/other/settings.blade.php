<x-dashboard-layout>
  <x-dashboard.heading>
    <x-slot:title>Settings</x-slot:title>
    <x-slot:description>Manage application settings and preferences.</x-slot:description>
  </x-dashboard.heading>

  <x-ui.card as="form" method="post" action="{{ route('settings.store') }}">
    <x-slot:header>
      <i data-lucide="settings" class="size-5 text-primary-500"></i>
      <h5>General Settings</h5>
    </x-slot:header>

    @csrf
    <div class="xl:grid-cols-2 form">
      <div class="field col-span-full">
        <div class="flex items-center justify-between">
          <div>
            <x-ui.label value="User Registration" />
            <p class="text-sm text-base-500">Allow new users to create an account</p>
          </div>
          <x-ui.switch name="registration_enabled" :checked="$registration_enabled" />
        </div>
        <x-ui.errors :messages="$errors->get('registration_enabled')" />
      </div>
    </div>

    <x-slot:footer class="justify-end">
      <x-ui.button>
        <span>Save</span>
        <i data-lucide="arrow-up-right" class="size-5"></i>
      </x-ui.button>
    </x-slot:footer>
  </x-ui.card>
</x-dashboard-layout>

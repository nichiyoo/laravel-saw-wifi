<x-dashboard-layout>
  <x-dashboard.heading>
    <x-slot:title>Settings</x-slot:title>
    <x-slot:description>Manage application settings and preferences.</x-slot:description>
  </x-dashboard.heading>

  <x-ui.card as="form" method="post" action="{{ route('settings.store') }}">
    @csrf

    <x-slot:header>
      <i data-lucide="settings" class="size-5 text-primary-500"></i>
      <h5>General Settings</h5>
    </x-slot:header>

    <div class="xl:grid-cols-2 form">
      <div class="field col-span-full">
        <div class="flex items-center justify-between">
          <div>
            <x-ui.label value="User Registration" />
            <p class="text-sm text-base-500">Allow new users to create an account</p>
          </div>
          <x-ui.switch name="registration_enabled" :checked="(bool) $registration_enabled" />
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

  <x-ui.card as="form" method="post" action="{{ route('settings.store') }}">
    @csrf

    <x-slot:header>
      <i data-lucide="search" class="size-5 text-primary-500"></i>
      <h5>SEO Settings</h5>
    </x-slot:header>

    <div class="xl:grid-cols-2 form">
      <div class="field">
        <x-ui.label for="seo_title" value="Site Title" />
        <x-ui.input type="text" name="seo_title" id="seo_title" value="{{ old('seo_title', $seo_title) }}"
          placeholder="Enter site title" />
        <x-ui.errors :messages="$errors->get('seo_title')" />
      </div>

      <div class="field">
        <x-ui.label for="seo_author" value="Author" />
        <x-ui.input type="text" name="seo_author" id="seo_author" value="{{ old('seo_author', $seo_author) }}"
          placeholder="Enter author name" />
        <x-ui.errors :messages="$errors->get('seo_author')" />
      </div>

      <div class="field col-span-full">
        <x-ui.label for="seo_description" value="Description" />
        <x-ui.textarea name="seo_description" id="seo_description" rows="3"
          placeholder="Enter meta description">{{ old('seo_description', $seo_description) }}</x-ui.textarea>
        <x-ui.errors :messages="$errors->get('seo_description')" />
      </div>

      <div class="field col-span-full">
        <x-ui.label for="seo_keywords" value="Keywords" />
        <x-ui.input type="text" name="seo_keywords" id="seo_keywords"
          value="{{ old('seo_keywords', $seo_keywords) }}" placeholder="Comma-separated keywords" />
        <x-ui.errors :messages="$errors->get('seo_keywords')" />
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

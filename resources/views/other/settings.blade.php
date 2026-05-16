<x-dashboard-layout>
  <x-dashboard.heading>
    <x-slot:title>{{ trans('settings.title') }}</x-slot:title>
    <x-slot:description>{{ trans('settings.description') }}</x-slot:description>
  </x-dashboard.heading>

  <x-ui.card as="form" method="post" action="{{ route('settings.store') }}">
    @csrf

    <x-slot:header>
      <i data-lucide="settings" class="size-5 text-primary-500"></i>
      <h5>{{ trans('settings.general.title') }}</h5>
    </x-slot:header>

    <div class="xl:grid-cols-2 form">
      <div class="field col-span-full">
        <div class="flex items-center justify-between">
          <div>
            <x-ui.label :value="trans('settings.general.registration')" />
            <p class="text-sm text-base-500">{{ trans('settings.general.registration_desc') }}</p>
          </div>
          <x-ui.switch name="registration_enabled" :checked="(bool) $registration_enabled" />
        </div>
        <x-ui.errors :messages="$errors->get('registration_enabled')" />
      </div>
    </div>

    <x-slot:footer class="justify-end">
      <x-ui.button>
        <span>{{ trans('settings.save') }}</span>
        <i data-lucide="arrow-up-right" class="size-5"></i>
      </x-ui.button>
    </x-slot:footer>
  </x-ui.card>

  <x-ui.card as="form" method="post" action="{{ route('settings.store') }}">
    @csrf

    <x-slot:header>
      <i data-lucide="search" class="size-5 text-primary-500"></i>
      <h5>{{ trans('settings.seo.title') }}</h5>
    </x-slot:header>

    <div class="xl:grid-cols-2 form">
      <div class="field">
        <x-ui.label for="seo_title" :value="trans('settings.seo.site_title')" />
        <x-ui.input type="text" name="seo_title" id="seo_title" value="{{ old('seo_title', $seo_title) }}"
          :placeholder="trans('settings.seo.site_title_placeholder')" />
        <x-ui.errors :messages="$errors->get('seo_title')" />
      </div>

      <div class="field">
        <x-ui.label for="seo_author" :value="trans('settings.seo.author')" />
        <x-ui.input type="text" name="seo_author" id="seo_author" value="{{ old('seo_author', $seo_author) }}"
          :placeholder="trans('settings.seo.author_placeholder')" />
        <x-ui.errors :messages="$errors->get('seo_author')" />
      </div>

      <div class="field col-span-full">
        <x-ui.label for="seo_description" :value="trans('settings.seo.description')" />
        <x-ui.textarea name="seo_description" id="seo_description" rows="3"
          :placeholder="trans('settings.seo.description_placeholder')">{{ old('seo_description', $seo_description) }}</x-ui.textarea>
        <x-ui.errors :messages="$errors->get('seo_description')" />
      </div>

      <div class="field col-span-full">
        <x-ui.label for="seo_keywords" :value="trans('settings.seo.keywords')" />
        <x-ui.input type="text" name="seo_keywords" id="seo_keywords"
          value="{{ old('seo_keywords', $seo_keywords) }}" :placeholder="trans('settings.seo.keywords_placeholder')" />
        <x-ui.errors :messages="$errors->get('seo_keywords')" />
      </div>
    </div>

    <x-slot:footer class="justify-end">
      <x-ui.button>
        <span>{{ trans('settings.save') }}</span>
        <i data-lucide="arrow-up-right" class="size-5"></i>
      </x-ui.button>
    </x-slot:footer>
  </x-ui.card>
</x-dashboard-layout>

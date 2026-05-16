@php
  use App\Enums\Language;
  use CodeZero\LocalizedRoutes\Facades\LocaleConfig;

  $current = App::getLocale();
  $locales = LocaleConfig::getLocales();
@endphp

<x-ui.button variant="ghost" size="icon" aria-expanded="false" data-dropdown-toggle="language"
  data-dropdown-placement="bottom-start" tooltip="{{ trans('dashboard.language.title') }}">
  <i data-lucide="languages" class="size-5"></i>
</x-ui.button>

<div id="language"
  class="z-50 hidden overflow-hidden bg-white border divide-y min-w-56 divide-base-200 rounded-xl border-base-200">

  <div class="px-4 py-3 text-sm">
    <span class="block font-semibold text-base-900">{{ trans('dashboard.language.title') }}</span>
    <span class="block truncate text-base-500">{{ trans('dashboard.language.desc') }}</span>
  </div>

  <ul class="text-sm list-none">
    @foreach ($locales as $locale)
      <li>
        <a href="{{ Route::localizedUrl($locale) }}" class="flex items-center gap-2 px-4 py-2 hover:bg-base-100">
          <span class="{{ Language::tryFrom($locale)->icon() }} size-5 rounded-full bg-cover drop-shadow-sm"></span>
          {{ Language::tryFrom($locale)->label() }}
        </a>
      </li>
    @endforeach
  </ul>
</div>

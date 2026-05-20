@php
  use App\Enums\RoleType;
  use App\Helpers\ArrayHelper;

  $props = $attributes
      ->class([
          'border-r border-base-200',
          'fixed top-0 left-0 z-40 h-screen',
          'transition-transform -translate-x-full bg-white md:translate-x-0',
      ])
      ->merge([
          'id' => 'sidebar',
          'class' => 'w-full',
          'aria-label' => trans('nav.sidebar.sidenav'),
      ]);

  $navigations = ArrayHelper::collection([
      [
          'id' => 'about',
          'label' => trans('nav.sidebar.about'),
          'menus' => [
              [
                  'type' => 'link',
                  'href' => route('dashboard.about'),
                  'active' => request()->routeIs('dashboard.about'),
                  'name' => trans('nav.sidebar.about_project'),
                  'icon' => 'book-open',
              ],
          ],
      ],
      [
          'id' => 'candidates',
          'label' => trans('nav.sidebar.candidates_data'),
          'menus' => [
              [
                  'type' => 'link',
                  'href' => route('candidates.index'),
                  'active' => request()->routeIs('candidates.*') && !request()->routeIs('candidates.create'),
                  'name' => trans('nav.sidebar.candidate_list'),
                  'icon' => 'map',
                  'show' => true,
              ],
              [
                  'type' => 'link',
                  'href' => route('candidates.create'),
                  'active' => request()->routeIs('candidates.create'),
                  'name' => trans('nav.sidebar.create_candidate'),
                  'icon' => 'plus',
                  'show' => Auth::user()->role == RoleType::ADMIN,
              ],
          ],
      ],
      [
          'id' => 'metrics',
          'label' => trans('nav.sidebar.metrics_data'),
          'menus' => [
              [
                  'type' => 'link',
                  'href' => route('metrics.index'),
                  'active' => request()->routeIs('metrics.*') && !request()->routeIs('metrics.create'),
                  'name' => trans('nav.sidebar.metric_list'),
                  'icon' => 'bar-chart-3',
                  'show' => true,
              ],
              [
                  'type' => 'link',
                  'href' => route('metrics.create'),
                  'active' => request()->routeIs('metrics.create'),
                  'name' => trans('nav.sidebar.create_metric'),
                  'icon' => 'plus',
                  'show' => Auth::user()->role == RoleType::ADMIN,
              ],
          ],
      ],
      [
          'id' => 'calculation',
          'label' => trans('nav.sidebar.dss_calculation'),
          'menus' => [
              [
                  'type' => 'link',
                  'href' => route('calculate.index'),
                  'active' => request()->routeIs('calculate.*'),
                  'name' => trans('nav.sidebar.run_calculation'),
                  'icon' => 'calculator',
              ],
          ],
      ],
  ]);

  $user = Auth::user();
@endphp

<aside {{ $props }}>
  <div class="flex flex-col h-full gap-6 overflow-y-auto">
    <div class="sticky top-0 z-10 bg-white border-b border-base-200">
      <a href="{{ route('dashboard') }}" class="flex items-center h-20 px-6">
        <x-ui.logo class="max-w-40" />
      </a>
    </div>

    @foreach ($navigations as $navigation)
      <div class="grid gap-2">
        <h3 class="px-6 text-sm font-medium text-base-400">{{ $navigation->label }}</h3>
        <ul>
          @foreach ($navigation->menus as $menu)
            <li class="relative text-sm font-medium">
              @if ($menu->active)
                <div class="absolute top-0 right-0 w-1 h-full bg-primary-500"></div>
              @endif

              @isset($menu->show)
                @continue(!$menu->show)
              @endisset

              @isset($menu->count)
                <div class="absolute text-center transform -translate-y-1/2 right-6 top-1/2">
                  <div class="rounded-md text-primary-500 size-5 bg-primary-100">{{ $menu->count }}</div>
                </div>
              @endisset

              <a href="{{ $menu->href }}"
                class="flex items-center gap-3 p-3 px-6 hover:bg-primary-50 @if ($menu->active) bg-primary-50 @endif">
                <i data-lucide="{{ $menu->icon }}" class="size-5 text-primary-500"></i>
                <span>{{ $menu->name }}</span>
              </a>
            </li>
          @endforeach
        </ul>
      </div>
    @endforeach
  </div>

  <div class="absolute bottom-0 left-0 z-20 w-full bg-white border-t border-base-200">
    <div class="flex items-center h-16 gap-2 px-6 item-center">
      @can('viewAny', App\Models\Setting::class)
        <a href="{{ route('settings.index') }}">
          <x-ui.button size="icon" variant="ghost" tooltip="{{ trans('nav.sidebar.settings_page') }}"
            class="rounded-full size-8">
            <i data-lucide="settings" class="size-5"></i>
          </x-ui.button>
        </a>
      @endcan

      <a href="{{ route('dashboard.help') }}">
        <x-ui.button size="icon" variant="ghost" tooltip="{{ trans('nav.sidebar.help_page') }}"
          class="rounded-full size-8">
          <i data-lucide="help-circle" class="size-5"></i>
        </x-ui.button>
      </a>
      <x-dashboard.language />
    </div>
  </div>
</aside>

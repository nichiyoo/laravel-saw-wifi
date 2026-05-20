@php
  use App\Enums\RoleType;
  use App\Helpers\ArrayHelper;

  $menus = ArrayHelper::collection([
      [
          'name' => trans('nav.profile'),
          'url' => route('profile.show'),
          'icon' => 'user2',
          'show' => true,
      ],
      [
          'name' => trans('nav.settings'),
          'url' => route('settings.index'),
          'icon' => 'settings',
          'show' => Gate::allows('viewAny', App\Models\Setting::class),
      ],
      [
          'name' => trans('nav.help'),
          'url' => route('dashboard.help'),
          'icon' => 'life-buoy',
          'show' => true,
      ],
  ]);

  $props = $attributes->merge([
      'type' => 'button',
      'aria-expanded' => 'false',
      'data-dropdown-toggle' => 'profile',
      'data-dropdown-placement' => 'bottom-start',
  ]);
@endphp

<button {{ $props }}>
  <x-ui.avatar name="{{ Auth::user()->name }}" alt="{{ Auth::user()->name }}" />
  <span class="sr-only">{{ trans('nav.open_user_menu') }}</span>
</button>

<div id="profile"
  class="z-50 hidden overflow-hidden bg-white border divide-y min-w-56 divide-base-200 rounded-xl border-base-200">

  <div class="px-4 py-3 text-sm">
    <span class="block font-semibold text-base-900">{{ Auth::user()->name }}</span>
    <span class="block truncate text-base-500">{{ Auth::user()->email }}</span>
  </div>

  <ul class="text-sm list-none">
    @foreach ($menus as $menu)
      @if ($menu->show)
        <li>
          <a href="{{ $menu->url }}" class="flex items-center gap-2 px-4 py-2 hover:bg-base-100">
            <i data-lucide="{{ $menu->icon }}" class="size-4"></i>
            {{ $menu->name }}
          </a>
        </li>
      @endif
    @endforeach

    @development
      <li class="border-t border-base-200"></li>

      @foreach (RoleType::cases() as $role)
        <li>
          <a href="{{ route('development.impersonate', ['role' => $role]) }}"
            class="flex items-center gap-2 px-4 py-2 hover:bg-base-100 hover:text-indigo-500">
            <i data-lucide="shield-alert" class="size-4"></i>
            {{ trans('nav.development.login_as', ['role' => $role->label()]) }}
          </a>
        </li>
      @endforeach

      <li>
        <a href="{{ route('development.migrate') }}"
          class="flex items-center gap-2 px-4 py-2 hover:bg-base-100 hover:text-red-500">
          <i data-lucide="database" class="size-4"></i>
          {{ trans('nav.development.reseed') }}
        </a>
      </li>

      <li>
        <a href="{{ route('development.reset') }}"
          class="flex items-center gap-2 px-4 py-2 hover:bg-base-100 hover:text-red-500">
          <i data-lucide="database" class="size-4"></i>
          {{ trans('nav.development.reset') }}
        </a>
      </li>
    @enddevelopment
  </ul>

  <form method="POST" action="{{ route('logout') }}">
    @csrf
    <button type="submit" class="block w-full p-4 text-sm text-left text-red-500 hover:text-white hover:bg-red-500">
      {{ trans('nav.sign_out') }}
    </button>
  </form>
</div>

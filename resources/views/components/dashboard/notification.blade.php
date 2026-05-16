<x-ui.button variant="ghost" size="icon" aria-expanded="false" data-dropdown-toggle="notification"
  data-dropdown-placement="bottom-start" tooltip="{{ trans('dashboard.notifications.tooltip') }}">
  <i data-lucide="bell" class="size-5"></i>
  <span class="sr-only">{{ trans('dashboard.notifications.tooltip') }}</span>
</x-ui.button>

<div id="notification"
  class="z-50 hidden overflow-hidden bg-white border divide-y w-96 divide-base-200 rounded-xl border-base-200 text-base-700">

  <div class="px-4 py-3 text-sm">
    <span class="block font-semibold text-base-900">{{ trans('dashboard.notifications.title') }}</span>
    <span class="block truncate text-base-500">{{ trans('dashboard.notifications.unread') }}</span>
  </div>

  <div class="grid place-items-center h-80">
    <div class="flex items-center gap-2 text-sm text-base-500">
      <i data-lucide="bell-off" class="size-4"></i>
      <span class="block">{{ trans('dashboard.notifications.empty') }}</span>
    </div>
  </div>
</div>

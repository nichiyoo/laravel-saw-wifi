<x-guest-layout>
  <x-ui.heading>
    <x-slot:title>{{ trans('auth.verify_email.title') }}</x-slot:title>
    <x-slot:description>{{ trans('auth.verify_email.desc') }}</x-slot:description>
  </x-ui.heading>


  <form method="POST" action="{{ route('verification.send') }}">
    @csrf

    <div class="flex items-center justify-between mt-4">
      <x-ui.button>
        <span>{{ trans('auth.verify_email.button') }}</span>
        <i data-lucide="arrow-up-right" class="size-5"></i>
      </x-ui.button>

      <form method="POST" action="{{ route('logout') }}">
        @csrf
        <x-ui.button variant="destructive">
          {{ trans('auth.verify_email.logout') }}
        </x-ui.button>
      </form>
    </div>
  </form>
</x-guest-layout>

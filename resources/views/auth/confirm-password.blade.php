<x-guest-layout>
  <x-ui.heading>
    <x-slot:title>{{ trans('auth.confirm_password.title') }}</x-slot:title>
    <x-slot:description>{{ trans('auth.confirm_password.desc') }}</x-slot:description>
  </x-ui.heading>

  <form method="POST" action="{{ route('password.confirm') }}" class="form">
    @csrf

    <div class="field">
      <x-ui.label for="password" :value="trans('auth.password')" />
      <x-ui.input id="password" type="password" name="password" required autocomplete="current-password"
        :placeholder="trans('auth.password_placeholder')">
        <x-slot:left>
          <i data-lucide="lock" class="text-base-500 size-5"></i>
        </x-slot:left>
      </x-ui.input>
      <x-ui.errors :messages="$errors->get('password')" />
    </div>

    <x-ui.button>
      <span>{{ trans('auth.confirm_password.button') }}</span>
      <i data-lucide="arrow-up-right" class="size-5"></i>
    </x-ui.button>
  </form>
</x-guest-layout>

<x-guest-layout>
  <x-ui.heading>
    <x-slot:title>{{ trans('auth.reset_password.title') }}</x-slot:title>
    <x-slot:description>{{ trans('auth.reset_password.desc') }}</x-slot:description>
  </x-ui.heading>

  <form method="POST" action="{{ route('password.update') }}" class="form">
    @csrf

    <input type="hidden" name="token" value="{{ $request->route('token') }}">

    <div class="field">
      <x-ui.label for="email" :value="trans('auth.email')" />
      <x-ui.input id="email" type="email" name="email" :value="old('email', $request->email)" required autofocus
        autocomplete="username" :placeholder="trans('auth.email_placeholder')">
        <x-slot:left>
          <i data-lucide="mail" class="text-base-500 size-5"></i>
        </x-slot:left>
      </x-ui.input>
      <x-ui.errors :messages="$errors->get('email')" />
    </div>

    <div class="field">
      <x-ui.label for="password" :value="trans('auth.password')" />
      <x-ui.input id="password" type="password" name="password" required autocomplete="new-password"
        :placeholder="trans('auth.password_placeholder')">
        <x-slot:left>
          <i data-lucide="lock" class="text-base-500 size-5"></i>
        </x-slot:left>
      </x-ui.input>
      <x-ui.errors :messages="$errors->get('password')" />
    </div>

    <div class="field">
      <x-ui.label for="password_confirmation" :value="trans('auth.confirm_password')" />
      <x-ui.input id="password_confirmation" type="password" name="password_confirmation" required
        autocomplete="new-password" :placeholder="trans('auth.confirm_password')">
        <x-slot:left>
          <i data-lucide="lock" class="text-base-500 size-5"></i>
        </x-slot:left>
      </x-ui.input>
      <x-ui.errors :messages="$errors->get('password_confirmation')" />
    </div>

    <x-ui.button>
      <span>{{ trans('auth.reset_password.button') }}</span>
      <i data-lucide="arrow-up-right" class="size-5"></i>
    </x-ui.button>
  </form>
</x-guest-layout>

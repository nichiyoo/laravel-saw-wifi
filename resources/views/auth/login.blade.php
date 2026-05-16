@php
  use App\Models\Setting;
@endphp

<x-guest-layout>
  <x-ui.heading>
    <x-slot:title>{{ trans('auth.login.title') }}</x-slot:title>
    <x-slot:description>{{ trans('auth.login.desc') }}</x-slot:description>
  </x-ui.heading>

  <form method="POST" action="{{ route('login') }}" class="form">
    @csrf

    <div class="field">
      <x-ui.label for="email" :value="trans('auth.email')" />
      <x-ui.input type="email" name="email" value="{{ old('email') }}" required autofocus autocomplete="username"
        :placeholder="trans('auth.email_placeholder')">
        <x-slot:left>
          <i data-lucide="mail" class="text-base-500 size-5"></i>
        </x-slot:left>
      </x-ui.input>
      <x-ui.errors :messages="$errors->get('email')" />
    </div>

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
      <span>{{ trans('auth.login_button') }}</span>
      <i data-lucide="arrow-up-right" class="size-5"></i>
    </x-ui.button>


    @if (Setting::get('registration_enabled'))
      <p class="text-center">
        {!! trans('auth.register_link', ['url' => route('register')]) !!}
      </p>
    @endif
  </form>
</x-guest-layout>

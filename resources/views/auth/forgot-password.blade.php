<x-guest-layout>
  <x-ui.heading>
    <x-slot:title>{{ trans('auth.forgot_password.title') }}</x-slot:title>
    <x-slot:description>{{ trans('auth.forgot_password.desc') }}</x-slot:description>
  </x-ui.heading>

  <form method="POST" action="{{ route('password.email') }}" class="form">
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

    <x-ui.button>
      <span>{{ trans('auth.forgot_password.button') }}</span>
      <i data-lucide="arrow-up-right" class="size-5"></i>
    </x-ui.button>

    <p class="text-center">
      <a href="{{ route('login') }}" class="text-primary-500">{{ trans('auth.back_to_login') }}</a>
    </p>
  </form>
</x-guest-layout>

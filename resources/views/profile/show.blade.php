@php
  use App\Enums\RoleType;
  $user = Auth::user();
@endphp

<x-dashboard-layout>
  <x-dashboard.heading>
    <x-slot:title>{{ trans('profile.show.title') }}</x-slot:title>
    <x-slot:description>{{ trans('profile.show.description') }}</x-slot:description>
  </x-dashboard.heading>

  <div class="grid items-start gap-6">
    <x-ui.card>
      <x-slot:header>
        <h5>{{ trans('profile.show.card_title') }}</h5>
      </x-slot:header>

      <div class="grid-cols-2 form">
        <div class="field">
          <x-ui.label for="name" :value="trans('profile.show.name')" />
          <x-ui.input readonly name="name" type="text" value="{{ $user->name }}">
            <x-slot:left>
              <i data-lucide="user" class="text-base-400 size-5"></i>
            </x-slot:left>
          </x-ui.input>
        </div>

        <div class="field">
          <x-ui.label for="role" :value="trans('profile.show.role')" />
          <x-ui.input readonly name="role" type="text" value="{{ $user->role->label() }}">
            <x-slot:left>
              <i data-lucide="key" class="text-base-400 size-5"></i>
            </x-slot:left>
          </x-ui.input>
        </div>

        <div class="field col-span-full">
          <x-ui.label for="email" :value="trans('profile.show.email')" />
          <x-ui.input readonly name="email" type="email" value="{{ $user->email }}">
            <x-slot:left>
              <i data-lucide="mail" class="text-base-400 size-5"></i>
            </x-slot:left>
          </x-ui.input>
        </div>

        <div class="field">
          <x-ui.label for="created_at" :value="trans('profile.show.created_at')" />
          <x-ui.input readonly name="created_at" type="date" value="{{ $user->created_at->format('Y-m-d') }}">
            <x-slot:left>
              <i data-lucide="calendar" class="text-base-400 size-5"></i>
            </x-slot:left>
          </x-ui.input>
        </div>

        <div class="field">
          <x-ui.label for="updated_at" :value="trans('profile.show.updated_at')" />
          <x-ui.input readonly name="updated_at" type="date" value="{{ $user->updated_at->format('Y-m-d') }}">
            <x-slot:left>
              <i data-lucide="calendar" class="text-base-400 size-5"></i>
            </x-slot:left>
          </x-ui.input>
        </div>
      </div>

      <x-slot:footer class="justify-end">
        <a href="{{ route('profile.edit') }}">
          <x-ui.button>
            <span>{{ trans('profile.show.edit') }}</span>
            <i data-lucide="arrow-up-right" class="size-5"></i>
          </x-ui.button>
        </a>
      </x-slot:footer>
    </x-ui.card>
  </div>

</x-dashboard-layout>

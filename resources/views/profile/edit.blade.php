<x-dashboard-layout>
  <x-dashboard.heading>
    <x-slot:title>{{ trans('profile.edit.title') }}</x-slot:title>
    <x-slot:description>{{ trans('profile.edit.description') }}</x-slot:description>
  </x-dashboard.heading>

  <div class="grid items-start gap-6 xl:grid-cols-2">
    <x-ui.card as="form" method="post" action="{{ route('profile.update') }}">
      <x-slot:header>
        <h5>{{ trans('profile.edit.profile.title') }}</h5>
      </x-slot:header>

      @csrf
      @method('PATCH')
      @include('profile.partials.update')

      <x-slot:footer>
        <x-ui.button>
          <span>{{ trans('profile.edit.profile.save') }}</span>
          <i data-lucide="arrow-up-right" class="size-5"></i>
        </x-ui.button>
      </x-slot:footer>
    </x-ui.card>

    <x-ui.card as="form" method="post" action="{{ route('password.update') }}">
      <x-slot:header>
        <h5>{{ trans('profile.edit.password.title') }}</h5>
      </x-slot:header>

      @csrf
      @method('PUT')
      @include('profile.partials.password')

      <x-slot:footer>
        <x-ui.button>
          <span>{{ trans('profile.edit.password.update') }}</span>
          <i data-lucide="arrow-up-right" class="size-5"></i>
        </x-ui.button>
      </x-slot:footer>
    </x-ui.card>

    <x-ui.card class="col-span-full">
      <x-slot:header>
        <h5>{{ trans('profile.edit.delete.title') }}</h5>
      </x-slot:header>

      @include('profile.partials.delete')

      <x-slot:footer class="justify-end">
        <x-ui.button x-data="" x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')"
          variant="destructive">
          {{ trans('profile.edit.delete.button') }}
        </x-ui.button>
      </x-slot:footer>
    </x-ui.card>
  </div>
</x-dashboard-layout>

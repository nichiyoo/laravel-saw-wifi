<div class="grid gap-6">
  <p class="text-sm text-base-600">
    {{ trans('profile.edit.delete.description') }}
  </p>

  <x-modal name="confirm-user-deletion" :show="$errors->userDeletion->isNotEmpty()" focusable>
    <x-ui.card as="form" method="post" action="{{ route('profile.destroy') }}">
      @csrf
      @method('delete')

      <x-slot:header>
        <h5>{{ trans('profile.edit.delete.modal_title') }}</h5>
      </x-slot:header>

      <div class="form">
        <p class="text-base-600">
          {{ trans('profile.edit.delete.modal_description') }}
        </p>

        <div>
          <x-ui.input id="password" name="password" type="password" :placeholder="trans('profile.edit.delete.modal_password')"
            autocomplete="current-password">
            <x-slot:left>
              <i data-lucide="lock" class="text-base-400 size-5"></i>
            </x-slot:left>
          </x-ui.input>
          <x-ui.errors :messages="$errors->userDeletion->get('password')" />
        </div>
      </div>

      <x-slot:footer>
        <x-ui.button type="button" variant="secondary" x-on:click="$dispatch('close')">
          {{ trans('profile.edit.delete.cancel') }}
        </x-ui.button>
        <x-ui.button type="submit" variant="destructive" class="ml-2">
          {{ trans('profile.edit.delete.confirm') }}
        </x-ui.button>
      </x-slot:footer>
    </x-ui.card>
  </x-modal>
</div>

@php
  $readonly = $readonly ?? false;
@endphp

<div class="xl:grid-cols-2 form">
  <div class="field col-span-full">
    <x-ui.label for="kemantren" value="Kemantren" required />
    <x-ui.input id="kemantren" name="kemantren" type="text" value="{{ old('kemantren', $candidate->kemantren) }}"
      required autofocus placeholder="Enter kemantren name" :readonly="$readonly">
      <x-slot:left>
        <i data-lucide="map-pin" class="text-base-400 size-5"></i>
      </x-slot:left>
    </x-ui.input>
    <x-ui.errors :messages="$errors->get('kemantren')" />
  </div>

  <div class="field">
    <x-ui.label for="bps_code" value="BPS Code" required />
    <x-ui.input id="bps_code" name="bps_code" type="text" value="{{ old('bps_code', $candidate->bps_code) }}"
      required placeholder="Enter BPS code" :readonly="$readonly">
      <x-slot:right>
        <i data-lucide="building" class="text-base-400 size-5"></i>
      </x-slot:right>
    </x-ui.input>
    <x-ui.errors :messages="$errors->get('bps_code')" />
  </div>

  <div class="field">
    <x-ui.label for="kemendagri_code" value="Kemendagri Code" required />
    <x-ui.input id="kemendagri_code" name="kemendagri_code" type="text"
      value="{{ old('kemendagri_code', $candidate->kemendagri_code) }}" required placeholder="Enter Kemendagri code"
      :readonly="$readonly">
      <x-slot:right>
        <i data-lucide="building" class="text-base-400 size-5"></i>
      </x-slot:right>
    </x-ui.input>
    <x-ui.errors :messages="$errors->get('kemendagri_code')" />
  </div>

  <div class="field">
    <x-ui.label for="jss_users" value="JSS Users" required />
    <x-ui.input id="jss_users" name="jss_users" type="number" value="{{ old('jss_users', $candidate->jss_users) }}"
      required placeholder="Enter JSS users count" :readonly="$readonly">
      <x-slot:right>
        <i data-lucide="users" class="text-base-400 size-5"></i>
      </x-slot:right>
    </x-ui.input>
    <x-ui.errors :messages="$errors->get('jss_users')" />
  </div>

  <div class="field">
    <x-ui.label for="wifi_count" value="WiFi Count" required />
    <x-ui.input id="wifi_count" name="wifi_count" type="number" value="{{ old('wifi_count', $candidate->wifi_count) }}"
      required placeholder="Enter WiFi count" :readonly="$readonly">
      <x-slot:right>
        <i data-lucide="wifi" class="text-base-400 size-5"></i>
      </x-slot:right>
    </x-ui.input>
    <x-ui.errors :messages="$errors->get('wifi_count')" />
  </div>

  <div class="field">
    <x-ui.label for="population_density" value="Population Density" required />
    <x-ui.input id="population_density" name="population_density" type="number"
      value="{{ old('population_density', $candidate->population_density) }}" required
      placeholder="Enter population density" :readonly="$readonly">
      <x-slot:right>
        <i data-lucide="layers" class="text-base-400 size-5"></i>
      </x-slot:right>
    </x-ui.input>
    <x-ui.errors :messages="$errors->get('population_density')" />
  </div>

  <div class="field">
    <x-ui.label for="self_funding" value="Self Funding" required />
    <x-ui.input id="self_funding" name="self_funding" type="number"
      value="{{ old('self_funding', $candidate->self_funding) }}" required placeholder="Enter self funding amount"
      :readonly="$readonly">
      <x-slot:right>
        <i data-lucide="wallet" class="text-base-400 size-5"></i>
      </x-slot:right>
    </x-ui.input>
    <x-ui.errors :messages="$errors->get('self_funding')" />
  </div>
</div>

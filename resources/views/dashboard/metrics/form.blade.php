@php
  $readonly = $readonly ?? false;
@endphp

<div class="xl:grid-cols-2 form">
  <div class="field">
    <x-ui.label for="variable" value="Variable" required />
    <x-ui.select id="variable" name="variable" required :readonly="$readonly">
      <option value="">Select variable</option>
      @foreach ($variables as $variable)
        <option value="{{ $variable }}" @selected(old('variable', $metric->variable) === $variable)>
          {{ $variable }}
        </option>
      @endforeach
    </x-ui.select>
    <x-ui.errors :messages="$errors->get('variable')" />
  </div>

  <div class="field col-span-full">
    <x-ui.label for="description" value="Description" />
    <x-ui.textarea id="description" name="description" rows="3"
      placeholder="Enter description (optional)" :readonly="$readonly">{{ old('description', $metric->description) }}</x-ui.textarea>
    <x-ui.errors :messages="$errors->get('description')" />
  </div>

  <div class="field">
    <x-ui.label for="type" value="Type" required />
    <x-ui.select id="type" name="type" required :readonly="$readonly">
      <option value="">Select type</option>
      @foreach (App\Enums\MetricType::cases() as $enum)
        <option value="{{ $enum->value }}" @selected(old('type', $metric->type?->value) === $enum->value)>
          {{ $enum->label() }}
        </option>
      @endforeach
    </x-ui.select>
    <x-ui.errors :messages="$errors->get('type')" />
  </div>

  <div class="field">
    <x-ui.label for="weight" value="Weight" required />
    <x-ui.input id="weight" name="weight" type="number" step="0.01" value="{{ old('weight', $metric->weight) }}"
      required placeholder="Enter weight value"
      :readonly="$readonly">
      <x-slot:left>
        <i data-lucide="weight" class="text-base-400 size-5"></i>
      </x-slot:left>
    </x-ui.input>
    <x-ui.errors :messages="$errors->get('weight')" />
  </div>
</div>

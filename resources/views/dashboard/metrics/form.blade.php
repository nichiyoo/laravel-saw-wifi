@php
  use Repo\SawEngine\Enums\AttributeType;

  $disabled = $disabled ?? false;
@endphp

<div class="xl:grid-cols-2 form">
  <div class="field">
    <x-ui.label for="variable" :value="trans('metrics.form.variable')" required />
    <x-ui.select id="variable" name="variable" required :disabled="$disabled">
      <option value="">{{ trans('metrics.form.variable_placeholder') }}</option>
      @foreach ($variables as $variable)
        <option value="{{ $variable->value }}" @selected(old('variable', $metric->variable?->value) === $variable->value)>
          {{ $variable->label() }}
        </option>
      @endforeach
    </x-ui.select>
    <x-ui.errors :messages="$errors->get('variable')" />
  </div>

  <div class="field col-span-full">
    <x-ui.label for="description" :value="trans('metrics.form.description')" />
    <x-ui.textarea id="description" name="description" rows="3" :placeholder="trans('metrics.form.description_placeholder')"
      :disabled="$disabled">{{ old('description', $metric->description) }}</x-ui.textarea>
    <x-ui.errors :messages="$errors->get('description')" />
  </div>

  <div class="field">
    <x-ui.label for="type" :value="trans('metrics.form.type')" required />
    <x-ui.select id="type" name="type" required :disabled="$disabled">
      <option value="">{{ trans('metrics.form.type_placeholder') }}</option>
      @foreach (AttributeType::cases() as $enum)
        <option value="{{ $enum->value }}" @selected(old('type', $metric->type?->value) === $enum->value)>
          {{ $enum->label() }}
        </option>
      @endforeach
    </x-ui.select>
    <x-ui.errors :messages="$errors->get('type')" />
  </div>

  <div class="field">
    <x-ui.label for="weight" :value="trans('metrics.form.weight')" required />
    <x-ui.input id="weight" name="weight" type="number" step="0.01" value="{{ old('weight', $metric->weight) }}"
      required :placeholder="trans('metrics.form.weight_placeholder')" :disabled="$disabled">
      <x-slot:left>
        <i data-lucide="weight" class="text-base-400 size-5"></i>
      </x-slot:left>
    </x-ui.input>
    <x-ui.errors :messages="$errors->get('weight')" />
  </div>
</div>

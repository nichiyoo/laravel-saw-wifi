@props([
    'name' => null,
    'checked' => false,
    'value' => '1',
])

@php
  $props = $attributes->class([])->merge([
      'class' => 'relative inline-flex items-center cursor-pointer',
  ]);
@endphp

<label {{ $props }}>
  <input type="hidden" name="{{ $name }}" value="0">
  <input type="checkbox" name="{{ $name }}" value="{{ $value }}" class="sr-only peer"
    @checked($checked)>
  <div
    class="w-11 h-6 peer-focus:outline-none rounded-full peer bg-base-200 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-base-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-primary-500">
  </div>
</label>

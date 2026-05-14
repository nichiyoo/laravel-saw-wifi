@props([
    'rows' => 3,
])

@php
  $props = $attributes
      ->class([
          'placeholder:text-base-400',
          'disabled:text-base-600 disabled:cursor-default',
          'border border-base-200 focus:ring-primary-500 focus:border-primary-500',
      ])
      ->merge([
          'class' => 'w-full text-sm px-4 p-3 rounded-lg',
      ]);
@endphp

<textarea {{ $props }} rows="{{ $rows }}">{{ $slot }}</textarea>

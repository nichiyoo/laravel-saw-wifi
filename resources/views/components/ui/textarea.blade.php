@props([
    'rows' => 3,
    'disabled' => false,
])

@php
  $props = $attributes
      ->class([
          'placeholder:text-base-400',
          'disabled:text-base-600 disabled:cursor-not-allowed' => $disabled,
          'read-only:text-base-600 read-only:cursor-default read-only:pointer-events-none',
          'border border-base-200 focus:ring-primary-500 focus:border-primary-500',
      ])
      ->merge([
          'class' => 'w-full text-sm px-4 p-3 rounded-lg',
          'disabled' => $disabled,
      ]);
@endphp

<textarea {{ $props }} rows="{{ $rows }}">{{ $slot }}</textarea>

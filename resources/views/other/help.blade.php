<x-dashboard-layout>
  <x-dashboard.heading>
    <x-slot:title>{{ trans('help.title') }}</x-slot:title>
    <x-slot:description>{{ trans('help.description') }}</x-slot:description>
  </x-dashboard.heading>

  <div class="grid items-start gap-4">
    @foreach ($faqs as $faq)
      <x-ui.accordion :open="$loop->first">
        <x-slot:title>{{ $faq->question }}</x-slot:title>
        <x-slot:description>{{ $faq->answer }}</x-slot:description>
      </x-ui.accordion>
    @endforeach
  </div>
</x-dashboard-layout>

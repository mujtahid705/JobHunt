<x-layout>
@include("partials._hero")
@include("partials._search")

<div class="bg-gray-50 border border-gray-200 rounded p-6">
@unless (count($listings) == 0)

@foreach ($listings as $item)
    <x-listing-card :item="$item" />
@endforeach

@else
    <p>No listings found...</p>
@endunless
</div>

</x-layout>
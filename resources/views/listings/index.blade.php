<x-layout>
@include("partials._hero")
@include("partials._search")

<div class="bg-gray-50 border border-gray-200 rounded p-6">

    <div>
        @unless (count($listings) == 0)

        @foreach ($listings as $item)
            <x-listing-card :item="$item" />
        @endforeach

        @else
            <p>No listings found...</p>
        @endunless
    </div>
    <div class="mt-6 p-4 flex justify-center">
        {{$listings->links()}}
    </div>
</div>


</x-layout>
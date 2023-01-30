<x-layout>
<x-section/>
<x-search/>
 <div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4"
            >
            @unless(count($listings)==0)
            @foreach ($listings as $row)
              <x-listCard :row="$row"/>
            @endforeach
            @else
            <p>No listings data</p>
            @endunless
            </div>
            <div class="mt-5 p-4">
            {{$listings->links()}}
            </div>
</x-layout>
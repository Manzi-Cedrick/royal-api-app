@props(['row'])
<x-card class="p-0">
                    <div class="flex">
                        <img
                            class="hidden w-48 mr-6 md:block"
                            src="{{ $row->logo ? asset('storage/'.$row->logo) : asset('/images/no-image.png')}}"
                            alt="No image"
                        />
                        <div>
                            <h3 class="text-2xl">
                                <a href="/listings/{{$row->id}}">{{$row->title}}</a>
                            </h3>
                            <div class="text-xl font-bold mb-4">{{$row->company}}</div>
                           <x-tag :tagName="$row->tags"/>
                            <div class="text-lg mt-4">
                                <i class="fa-solid fa-location-dot"></i> {{$row->location}}
                            </div>
                        </div>
                    </div>
                </x-card>
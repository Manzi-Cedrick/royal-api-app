 <x-layout>
 <a href="/" class="inline-block text-black ml-4 mb-4"
                ><i class="fa-solid fa-arrow-left"></i> Back
            </a>
            <div class="mx-4">
                <div class="bg-gray-50 border border-gray-200 p-10 rounded">
                    <div
                        class="flex flex-col items-center justify-center text-center"
                    >
                        <img
                            class="w-48 mr-6 mb-6"
                            src="{{ $listings->logo ? asset(' storage/ '. $listings->logo) : asset('/images/no-image.png')}}"
                            alt=""
                        />

                        <h3 class="text-2xl mb-2"></h3>
                        <div class="text-xl font-bold mb-4">{{$listings->company}}</div>
                        <x-tag :tagName="$listings->tags"/>
                        <div class="text-lg my-4">
                            <i class="fa-solid fa-location-dot"></i> {{$listings->location}}
                        </div>
                        <div class="border border-gray-200 w-full mb-6"></div>
                        <div>
                            <h3 class="text-3xl font-bold mb-4">
                                Job Description
                            </h3>
                            <div class="text-lg space-y-6">
                                <p>
                                   {{$listings->description}}
                                </p>
                                <p>
                                    Lorem, ipsum dolor sit amet consectetur
                                    adipisicing elit. Quaerat praesentium eos
                                    consequuntur ex voluptatum necessitatibus
                                    odio quos cupiditate iste similique rem in,
                                    voluptates quod maxime animi veritatis illum
                                    quo sapiente.
                                </p>

                                <a
                                    href="mailto:{{$listings->email}}"
                                    class="block bg-laravel text-white mt-6 py-2 rounded-xl hover:opacity-80"
                                    ><i class="fa-solid fa-envelope"></i>
                                    {{$listings->email}}</a
                                >

                                <a
                                    href="{{$listings->website}}"
                                    target="_blank"
                                    class="block bg-black text-white py-2 rounded-xl hover:opacity-80"
                                    ><i class="fa-solid fa-globe"></i> {{$listings->website}}</a>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <x-card class="mt-5 flex space-x-6 ">
            <a href="/listings/{{$listings->id}}/edit" class="inline-block text-black ml-4 mb-4"
                ><i class="fa-solid mr-2 fa-pencil"></i>Edit
            </a>
            <form action="/listings/{{$listings->id}}/delete" class='text-red-500' method='POST'>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn"><i class="fa-solid mr-2 fa-trash"></i>Delete</button>
            </form>
            </x-card>
            </x-layout>
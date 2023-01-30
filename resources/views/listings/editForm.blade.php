<x-layout>
<x-card class="mx-4">
                <div
                    class="bg-gray-50 border border-gray-200 p-10 rounded max-w-lg mx-auto mt-24"
                >
                    <header class="text-center">
                        <h2 class="text-2xl font-bold uppercase mb-1">
                            Edit
                        </h2>
                        <p class="mb-4">Edit: {{$listings->title}}</p>
                    </header>

                    <form action="/listings/{{$listings->id}}/update" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-6">
                            <label
                                for="company"
                                class="inline-block text-lg mb-2"
                                >Company Name</label
                            >
                            <input
                                type="text"
                                class="border border-gray-200 rounded p-2 w-full"
                                name="company"
                                value="{{$listings->company}}"
                            />
                            @error('company')
                                <p class="text-red-500 ">{{$message}}</p>
                            @enderror
                        </div>

                        <div class="mb-6">
                            <label for="title" class="inline-block text-lg mb-2"
                                >Job Title</label
                            >
                            <input
                                type="text"
                                class="border border-gray-200 rounded p-2 w-full"
                                name="title"
                                placeholder="Example: Senior Laravel Developer"
                               value="{{$listings->title}}"
                            />
                             @error('title')
                                <small class="text-red-500 ">{{$message}}</small>
                            @enderror
                        </div>

                        <div class="mb-6">
                            <label
                                for="location"
                                class="inline-block text-lg mb-2"
                                >Job Location</label
                            >
                            <input
                                type="text"
                                class="border border-gray-200 rounded p-2 w-full"
                                name="location"
                               value="{{$listings->location}}"
                                placeholder="Example: Remote, Boston MA, etc"
                            />
                              @error('location')
                                <small class="text-red-500 ">{{$message}}</small>
                            @enderror
                        </div>

                        <div class="mb-6">
                            <label for="email" class="inline-block text-lg mb-2"
                                >Contact Email</label
                            >
                            <input
                                type="text"
                                class="border border-gray-200 rounded p-2 w-full"
                                name="email"
                                value="{{$listings->email}}"
                            />
                              @error('email')
                                <small class="text-red-500 ">{{$message}}</small>
                            @enderror
                        </div>

                        <div class="mb-6">
                            <label
                                for="website"
                                class="inline-block text-lg mb-2"
                            >
                                Website/Application URL
                            </label>
                            <input
                                type="text"
                                class="border border-gray-200 rounded p-2 w-full"
                                name="website"
                                value="{{$listings->website}}"
                            />
                              @error('website')
                                <small class="text-red-500 ">{{$message}}</small>
                            @enderror
                        </div>

                        <div class="mb-6">
                            <label for="tags" class="inline-block text-lg mb-2">
                                Tags (Comma Separated)
                            </label>
                            <input
                                type="text"
                                class="border border-gray-200 rounded p-2 w-full"
                                name="tags"
                                placeholder="Example: Laravel, Backend, Postgres, etc"
                                value="{{$listings->tags}}"
                            />
                              @error('tags')
                                <small class="text-red-500 ">{{$message}}</small>
                            @enderror
                        </div>

                        <div class="mb-6">
                            <label for="logo" class="inline-block text-lg mb-2">
                                Company Logo
                            </label>
                            <input
                                type="file"
                                class="border border-gray-200 rounded p-2 w-full"
                                name="logo"
                               value="{{$listings->logo}}"
                            />
                             @error('logo')
                                <small class="text-red-500 ">{{$message}}</small>
                            @enderror
                        </div>

                        <div class="mb-6">
                            <label
                                for="description"
                                class="inline-block text-lg mb-2"
                            >
                                Job Description
                            </label>
                            <textarea
                                class="border border-gray-200 rounded p-2 w-full"
                                name="description"
                                rows="10"
                                placeholder="Include tasks, requirements, salary, etc"
                            >{{$listings->description}}</textarea>
                              @error('description')
                                <small class="text-red-500 ">{{$message}}</small>
                            @enderror
                        </div>

                        <div class="mb-6">
                            <button
                                type="submit"
                                class="bg-laravel text-white rounded py-2 px-4 hover:bg-black"
                            >
                                Update Gig
                            </button>

                    </form>
                            <a href="/" class="text-black ml-4"> Back </a>
                        </div>
                </div>
            </x-card>
            </x-layout>
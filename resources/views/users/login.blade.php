<x-layout>
            <div class="mx-4">
                <div
                    class="bg-gray-50 border border-gray-200 px-10 py-6 rounded max-w-lg mx-auto mt-24"
                >
                    <header class="text ">
                        <h2 class="text-2xl py-4 font-bold uppercase ">
                            Welcome
                        </h2>
                        <p class=" py-4">Welcome to our application. Feel free to explore from the recent view.</p>
                    </header>
                    @if (Session::has('success'))
                    <div class="flex p-4 mb-4 text-sm text-green-800 border border-green-300 rounded-lg bg-green-50 drk:bg-gray-800 dark:text-green-400 dark:border-green-800" role="alert">
                        <svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
                        <span class="sr-only">Info</span>
                    <div>
                        <span class="font-medium"> {{ Session::get('success') }}!</span> Change a few things up and try submitting again.
                    </div>
                    </div>
                    @endif
                    <form action="/authenticate" method="POST">
                        @csrf
                        @method('POST')
                        <div class="mb-6">
                            <label for="email" class="inline-block text-sm font-semibold mb-2"
                                >Email</label
                            >
                            <input
                                type="email"
                                class="border border-gray-200 rounded p-2 w-full"
                                name="email"
                                value="{{old('email')}}"
                            />
                            @error('email')
                            <small class="text-red-500 ">{{$message}}</small>
                            @enderror
                        </div>

                        <div class="mb-6">
                            <label
                                for="password"
                                class="inline-block text-sm font-semibold mb-2"
                            >
                                Password
                            </label>
                            <input
                                type="password"
                                class="border border-gray-200 rounded p-2 w-full"
                                name="password"
                                value="{{old('password')}}"
                            />
                            @error('password')
                            <small class="text-red-500 ">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="mb-6">
                            <button
                                type="submit"
                                class="bg-laravel text-white rounded py-4 w-full px-4 hover:bg-black"
                            >
                                Sign In
                            </button>
                        </div>

                        <div class="mt-8">
                            <p>
                                Don't have an account?
                                <a href="/register" class="text-laravel"
                                    >Register</a
                                >
                            </p>
                        </div>
                    </form>
                </div>
            </div>
</x-layout>
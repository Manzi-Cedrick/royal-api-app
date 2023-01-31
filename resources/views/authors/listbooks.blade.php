<x-layout>
    <div class="flex justify-start  bg-red500">
        <x-sidebar />
        <div class="relative w-[80vw] overflow-x-auto shadow-md sm:rounded-lg">
            <div class="p-4 py-4 flex justify-between place-items-center bg-slate-100 ">
                <h1 class="font-semibold">Welcome to Books! - By {{$title}}</h1>
                <div class="flex gap-4 place-items-center">
                    <div class="pb-4 bg- d:bg-gray-900">
                        <label for="table-search" class="sr-only">Search</label>
                        <div class="relative mt-1">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                <svg class="w-5 h-5 text-gray-500 d:text-gray-400" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <input type="text" id="table-search" class="block py-2.5 px-2 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 d:bg-gray-700 d:border-gray-600 d:placeholder-gray-400 d:text-white d:focus:ring-blue-500 d:focus:border-blue-500" placeholder="Search for items">
                        </div>
                    </div>
                    <div>
                    <a href="create/book" class="text-white flex place-items-center gap-4 bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 shadow-lg shadow-blue-500/50 dark:shadow-lg dark:shadow-blue-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 ">
                            <i class="fa-solid fa-plus"></i>    
                        Add Book</a>
                    </div>
                </div>
            </div>
            <table class="w-full text-sm text-left text-gray-500 d:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 d:bg-gray-700 d:text-gray-400">
                    <tr>
                        <th scope="col" class="p-4">
                            <div class="flex items-center">
                                <input id="checkbox-all-search" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 d:focus:ring-blue-600 d:ring-offset-gray-800 d:focus:ring-offset-gray-800 focus:ring-2 d:bg-gray-700 d:border-gray-600">
                                <label for="checkbox-all-search" class="sr-only">checkbox</label>
                            </div>
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Book title
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Release Date
                        </th>
                        <th scope="col" class="px-6 py-3">
                            isbn
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Number of pages
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @unless(count($data)==0)
                    @foreach ($data as $row)
                    <x-bookmanage :row="$row" />
                    @endforeach
                    @else
                    <p>No data</p>
                    @endunless
                </tbody>
            </table>
        </div>
    </div>

</x-layout>
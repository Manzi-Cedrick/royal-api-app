<x-layout>
    <div class="flex justify-start  bg-red500">
        <x-sidebar />
        <div class="relative w-[80vw] overflow-x-auto shadow-md sm:rounded-lg">
            <div class="p-4 py-6 flex justify-between place-items-center bg-slate-100 ">
                <h1 class="font-semibold">Welcome to Books! - By {{$title}}</h1>

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
                            Description
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
                    <x-singlebook :row="$row" />
            @endforeach
            @else
            <div class="w-full flex items-center justify-center">
                <p>No data</p>
            </div>
            @endunless
            </tbody>
            </table>
        </div>
    </div>

</x-layout>
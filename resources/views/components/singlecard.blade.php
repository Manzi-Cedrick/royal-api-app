@props(['row'])
<x-card class="p-0">
<tr onclick="window.location=`{{ route('author.show', ['id' => $row['id']]) }}`" class="bg-white border-b d:bg-gray-800 d:border-gray-700 hover:bg-gray-50 d:hover:bg-gray-600">
                <td class="w-4 p-4">
                    <div class="flex items-center">
                        <input id="checkbox-table-search-1" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 d:focus:ring-blue-600 d:ring-offset-gray-800 d:focus:ring-offset-gray-800 focus:ring-2 d:bg-gray-700 d:border-gray-600">
                        <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                    </div>
                </td>
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap d:text-white">
                    {{$row['first_name']}}
                </th>
                <td class="px-6 py-4">
                {{$row['last_name']}}
                </td>
                <td class="px-6 py-4">
                {{$row['gender']}}
                </td>
                <td class="px-6 py-4">
                {{$row['birthday']}}
                </td>
                <td class="px-6 py-4">
                {{$row['place_of_birth']}}
                </td>
                
                <td class="px-6 flex gap-6 py-4">
                    <a href="#" class="font-medium text-blue-600 d:text-blue-500 hover:underline"><i class="fa-solid fa-pencil"></i></a>
                    <a href="#" class="font-medium text-red-600 d:text-blue-500 hover:underline"><i class="fa-solid fa-trash"></i></a>
                </td>
            </tr>
</x-card>
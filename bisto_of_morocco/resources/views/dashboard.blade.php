<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                    
                </div>
            </div>
        </div>
    </div>

    <div>

        <a href="{{route('add')}}" class="relative inline-flex items-center justify-center p-0.5 mb-2 mr-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-pink-500 to-orange-400 group-hover:from-pink-500 group-hover:to-orange-400 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-pink-200 dark:focus:ring-pink-800">
            <span class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                add plate
            </span>
          </a>


          <div>
            
<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Plate id
                </th>
                <th scope="col" class="px-6 py-3">
                    Plate name
                </th>
                <th scope="col" class="px-6 py-3">
                    plate price
                </th>
                <th scope="col" class="px-6 py-3">
                    plate image
                </th>
                <th scope="col" class="px-6 py-3">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>

            @foreach ($data as $item)

            <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{ $item->id}}
                </th>
                <td class="px-6 py-4">
                    {{ $item->name}}
                </td>
                <td class="px-6 py-4">
                    {{ $item->price}}
                </td>
                <td class="px-6 py-4">
                    {{ $item->image}}
                </td>
                <td class="px-6 py-4">
                    <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">delete</a>
                    <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">update</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

          </div>


    </div>
</x-app-layout>

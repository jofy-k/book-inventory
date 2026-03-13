@props(['edit' => '#', 'show' => '#', 'delete' => '#'])<td class="border border-gray-300 p-6">{{ $slot }}
    <div class="flex justify-center">
        <div class="pr-2"> <a href="{{ $show }}"
                class="btn border border-blue-500 bg-blue-500 text-white rounded-md px-4 py-2 mt-4 hover:bg-blue-600 hover:border-blue-600">View</a>
        </div>
        <div class="pl-2"><a href="{{ $edit }}"
                class="btn border border-green-500 bg-green-500 text-white rounded-md px-4 py-2 mt-4 hover:bg-green-600 hover:border-green-600">
                Edit</a></div>
        <div class="pl-2"><a href="{{ $delete }}"
                class="btn border border-red-500 bg-red-500 text-white rounded-md px-4 py-2 mt-4 hover:bg-red-600 hover:border-red-600">Delete</a>
        </div>
</td>

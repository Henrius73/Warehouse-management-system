<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Admin Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form action="{{route('admin.postupdatecategory', $category->id)}}" method="post">
                        @csrf
                        <div class="mb-5 form-group">
                                <label for="email" class="block mb-2.5 text-sm font-medium text-heading">Category Name</label>
                                <input type="text" id="email" class="bg-neutral-secondary-medium border border-default-medium 
                                text-heading text-sm rounded-base focus:ring-brand focus:border-brand block w-full px-3 py-2.5 shadow-xs text-black" 
                                name="category_name" value="{{$category->category_name}}" />
                            </div>
                            <button type="submit" class="text-white px-4 py-2 bg-green-600 hover:bg-green-700 text-white text-sm font-medium rounded-lg transition-colors duration-200 
                            text-sm px-4 py-2.5 focus:outline-none">Update category</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

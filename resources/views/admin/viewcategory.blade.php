<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Admin Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="overflow-hidden rounded-xl border border-slate-700">
                    <table class="w-full text-sm text-left text-slate-300">
                        <thead class="text-xs uppercase bg-slate-700 text-white tracking-wider">
                            <tr>
                                <th class="px-6 py-4 text-left">Category ID</th>
                                <th class="px-6 py-4 text-left">Category Name</th>
                                <th class="px-6 py-4 text-left">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($categories as $category)
                            <tr class="bg-slate-800 border-b border-slate-700">
                                <td class="px-6 py-4 font-medium text-white">{{ $category->id }}</td>
                                <td class="px-6 py-4 font-medium text-white">{{ $category->category_name }}</td>
                                <td class="px-6 py-4">
                                    <a href="{{route('admin.deletecategory',$category->id)}}"
                                    class="px-4 py-2 bg-red-600 hover:bg-red-700 text-white text-sm font-medium rounded-lg transition-colors duration-200" onclick="return confirm('Bạn có chắc ko?')">Delete</a>
                                    <a href="{{route('admin.deletecategory',$category->id)}}"
                                    class="px-4 py-2 bg-green-600 hover:bg-green-700 text-white text-sm font-medium rounded-lg transition-colors duration-200" >Update</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

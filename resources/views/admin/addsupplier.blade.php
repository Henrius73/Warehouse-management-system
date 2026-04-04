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
                    <form action="{{route('admin.postaddsupplier')}}" method="post" class="max-w-sm mx-auto">
                        @csrf
                        <div class="mb-5">
                            <label for="email" class="block mb-2.5 text-sm font-medium text-heading" >Supplier</label>
                            <input type="text" class="text-black bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base 
                            focus:ring-brand focus:border-brand block w-full px-3 py-2.5 shadow-xs placeholder:text-body" placeholder="Enter supplier name" name="supplier_name" required />
                        </div>
                        <div class="mb-5">
                            <label for="password" class="block mb-2.5 text-sm font-medium text-heading">Contact info</label>
                            <input type="text" id="password" class="text-black bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base focus:ring-brand focus:border-brand block w-full px-3 py-2.5 shadow-xs placeholder:text-body" 
                            placeholder="Enter Supplier Contact Info" name="supplier_contact" required />
                        </div>
                        <button type="submit" class="text-white px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white text-sm font-medium rounded-lg transition-colors duration-200 
                            text-sm px-4 py-2.5 focus:outline-none px-4 py-2.5 focus:outline-none">Add supplier</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

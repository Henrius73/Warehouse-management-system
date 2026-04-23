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
                    <form action="" method="post" class="max-w-sm mx-auto">
                        @csrf
                        <div class="mb-5">
                            <label for="email" class="block mb-2.5 text-sm font-medium text-heading" >Product Name</label>
                            <input type="text" class="text-black bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base 
                            focus:ring-brand focus:border-brand block w-full px-3 py-2.5 shadow-xs placeholder:text-body" placeholder="Enter product name" name="product_name" required />
                        </div>
                        <div class="mb-5">
                            <label for="password" class="block mb-2.5 text-sm font-medium text-heading">Product Quantity</label>
                            <input type="number" id="password" class="text-black bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base focus:ring-brand focus:border-brand block w-full px-3 py-2.5 shadow-xs placeholder:text-body" 
                            placeholder="Enter Supplier Contact Info" name="supplier_contact" required />
                        </div>
                        <div class="mb-5">
                            <label for="password" class="block mb-2.5 text-sm font-medium text-heading">Product Price</label>
                            <input type="number" id="password" class="text-black bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base focus:ring-brand focus:border-brand block w-full px-3 py-2.5 shadow-xs placeholder:text-body" 
                            placeholder="Enter Supplier Contact Info" name="supplier_contact" />
                        </div>
                        <div class="mb-5">
                            <label for="password" class="block mb-2.5 text-sm font-medium text-heading">Category</label>
                            <select name="category_name" id="">
                                <option>Ctg 1</option>
                                <option>Ctg 2</option>
                                <option>Ctg 3</option>
                            </select>
                        </div>
                        <div class="mb-5">
                            <label for="password" class="block mb-2.5 text-sm font-medium text-heading">Category</label>
                            <select name="supplier_name" id="">
                                <option>Spl 1</option>
                                <option>Spl 2</option>
                                <option>Spl 3</option>
                            </select>
                        </div>
                        <button type="submit" class="text-white px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white text-sm font-medium rounded-lg transition-colors duration-200 
                            text-sm px-4 py-2.5 focus:outline-none px-4 py-2.5 focus:outline-none">Add supplier</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

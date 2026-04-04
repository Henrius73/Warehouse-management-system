<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-semibold text-xl text-white leading-tight">
                {{ __('Category Management') }}
            </h2>
            <!-- <a href="{{ route('admin.addcategory') }}"
                class="inline-flex items-center gap-2 px-4 py-2 bg-indigo-600 hover:bg-indigo-700 text-white text-sm font-medium rounded-lg transition-colors duration-200">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
                </svg>
                Add Category
            </a> -->
        </div>
    </x-slot>

    <div class="py-10">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-4">

            {{-- Thống kê nhanh --}}
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                <div class="bg-gray-800 rounded-xl px-6 py-4 border border-gray-700 flex items-center gap-4">
                    <div class="w-10 h-10 bg-indigo-500/20 rounded-lg flex items-center justify-center">
                        <svg class="w-5 h-5 text-indigo-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 10h16M4 14h16M4 18h16"/>
                        </svg>
                    </div>
                    <div>
                        <p class="text-xs text-gray-400 uppercase tracking-wider">Total Supplier</p>
                        <p class="text-2xl font-bold text-white">{{ $suppliers->count() }}</p>
                    </div>
                </div>
            </div>

            {{-- Table --}}
            <div class="bg-gray-800 rounded-xl border border-gray-700 shadow-lg overflow-hidden">

                {{-- Table Header --}}
                <div class="px-6 py-4 border-b border-gray-700 flex items-center justify-between">
                    <h3 class="text-sm font-semibold text-gray-200 uppercase tracking-wider">All Suppliers</h3>
                    <span class="text-xs text-gray-400">{{ $suppliers->count() }} records</span>
                </div>

                {{-- Table --}}
                <div class="overflow-x-auto">
                    <table class="w-full text-sm text-left">
                        <thead class="bg-gray-700/50 text-xs uppercase text-gray-400 tracking-wider">
                            <tr>
                                <th class="px-6 py-3">Tên nhà cung cấp</th>
                                <th class="px-6 py-3">Liên lạc</th>
                                <th class="px-6 py-3 text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-700">
                            @forelse($suppliers as $supplier)
                            <tr class="hover:bg-gray-700/40 transition-colors duration-150">
                                <td class="px-6 py-4">
                                    <span class="font-medium text-white">
                                        {{ $supplier->supplier_name }}
                                    </span>
                                </td>
                                <td class="px-6 py-4 font-medium text-white">
                                    {{ $supplier->supplier_contact }}
                                </td>
                                <td class="px-6 py-4">
                                    <div class="flex items-center justify-center gap-2">
                                        <a href="{{route('admin.updatesupplier', $supplier->id)}}" class="inline-flex items-center gap-1 px-3 py-1.5 bg-amber-500/20 hover:bg-amber-500/40 text-amber-400 text-xs font-medium rounded-lg border border-amber-500/30 transition-colors duration-200">
                                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                                            </svg>
                                            Edit
                                        </a>
                                        <a href="{{route('admin.deletesupplier', $supplier->id)}}" onclick="return confirm('Bạn có chắc muốn xóa?')"
                                            class="inline-flex items-center gap-1 px-3 py-1.5 bg-red-500/20 hover:bg-red-500/40 text-red-400 text-xs font-medium rounded-lg border border-red-500/30 transition-colors duration-200">
                                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                                            </svg>
                                            Delete
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="3" class="px-6 py-12 text-center">
                                    <div class="flex flex-col items-center gap-3 text-gray-500">
                                        <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"/>
                                        </svg>
                                        <p class="text-sm">Chưa có nhà cung cấp nào</p>
                                        <a href="{{ route('admin.addsupplier') }}" class="text-indigo-400 hover:text-indigo-300 text-sm">+ Thêm ngay</a>
                                    </div>
                                </td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>
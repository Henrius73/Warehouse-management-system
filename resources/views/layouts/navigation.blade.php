<nav x-data="{ open: false }" class="bg-gray-900 border-b border-gray-700 shadow-lg">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex items-center">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}">
                        <x-application-logo class="block h-9 w-auto fill-current text-indigo-400" />
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-1 sm:flex sm:ms-10">
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')"
                        class="text-gray-300 hover:text-white hover:bg-gray-700 px-3 py-2 rounded-md text-sm font-medium transition-colors duration-200">
                        {{ __('Dashboard') }}
                    </x-nav-link>

                    <!-- Category Dropdown -->
                    <div class="relative flex items-center" x-data="{ open: false }" @click.away="open = false">
                        <button @click="open = ! open" class="inline-flex items-center justify-center text-white bg-brand box-border border border-transparent hover:bg-brand-strong focus:ring-4 focus:ring-brand-medium shadow-xs font-medium leading-5 rounded-base text-sm px-4 py-2.5 focus:outline-none" type="button">
                            Category 
                            <svg class="w-4 h-4 ms-1.5 -me-0.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 9-7 7-7-7"/></svg>
                        </button>
                        
                        <div x-show="open" x-transition style="display: none;" class="absolute top-full left-0 z-50 mt-1 bg-neutral-primary-medium border border-default-medium rounded-base shadow-lg w-44">
                            <ul class="p-2 space-y-1 text-sm text-body font-medium">
                                <li>
                                    <x-nav-link :href="route('admin.addcategory')" :active="request()->routeIs('admin.addcategory')"
                                        class="block w-full text-gray-300 hover:text-white hover:bg-gray-700 px-3 py-2 rounded-md text-sm font-medium transition-colors duration-200">
                                        {{ __('Add Category') }}
                                    </x-nav-link>
                                </li>
                                <li>
                                    <x-nav-link :href="route('admin.viewcategory')" :active="request()->routeIs('admin.viewcategory')"
                                        class="block w-full text-gray-300 hover:text-white hover:bg-gray-700 px-3 py-2 rounded-md text-sm font-medium transition-colors duration-200">
                                        {{ __('View Category') }}
                                    </x-nav-link>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Supplier Dropdown -->
                    <div class="relative flex items-center" x-data="{ open: false }" @click.away="open = false">
                        <button @click="open = ! open" class="inline-flex items-center justify-center text-white bg-brand box-border border border-transparent hover:bg-brand-strong focus:ring-4 focus:ring-brand-medium shadow-xs font-medium leading-5 rounded-base text-sm px-4 py-2.5 focus:outline-none" type="button">
                            Supplier 
                            <svg class="w-4 h-4 ms-1.5 -me-0.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 9-7 7-7-7"/></svg>
                        </button>
                        
                        <div x-show="open" x-transition style="display: none;" class="absolute top-full left-0 z-50 mt-1 bg-neutral-primary-medium border border-default-medium rounded-base shadow-lg w-44">
                            <ul class="p-2 space-y-1 text-sm text-body font-medium">
                                <li>
                                    <x-nav-link :href="route('admin.addsupplier')" :active="request()->routeIs('admin.addsupplier')"
                                        class="block w-full text-gray-300 hover:text-white hover:bg-gray-700 px-3 py-2 rounded-md text-sm font-medium transition-colors duration-200">
                                        {{ __('Add Supplier') }}
                                    </x-nav-link>
                                </li>
                                <li>
                                    <x-nav-link :href="route('admin.viewsupplier')" :active="request()->routeIs('admin.viewsupplier')"
                                        class="block w-full text-gray-300 hover:text-white hover:bg-gray-700 px-3 py-2 rounded-md text-sm font-medium transition-colors duration-200">
                                        {{ __('View Supplier') }}
                                    </x-nav-link>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- <div class="relative flex items-center" x-data="{ open: false }" @click.away="open = false">
                        <button @click="open = ! open" class="inline-flex items-center justify-center text-white bg-brand box-border border border-transparent hover:bg-brand-strong focus:ring-4 focus:ring-brand-medium shadow-xs font-medium leading-5 rounded-base text-sm px-4 py-2.5 focus:outline-none" type="button">
                            Product 
                            <svg class="w-4 h-4 ms-1.5 -me-0.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 9-7 7-7-7"/></svg>
                        </button>
                        
                        <div x-show="open" x-transition style="display: none;" class="absolute top-full left-0 z-50 mt-1 bg-neutral-primary-medium border border-default-medium rounded-base shadow-lg w-44">
                            <ul class="p-2 space-y-1 text-sm text-body font-medium">
                                <li>
                                    <x-nav-link :href="route('admin.addproduct')" :active="request()->routeIs('admin.addsupplier')"
                                        class="block w-full text-gray-300 hover:text-white hover:bg-gray-700 px-3 py-2 rounded-md text-sm font-medium transition-colors duration-200">
                                        {{ __('Add Product') }}
                                    </x-nav-link>
                                </li>
                                <li>
                                    <x-nav-link href="#"
                                        class="block w-full text-gray-300 hover:text-white hover:bg-gray-700 px-3 py-2 rounded-md text-sm font-medium transition-colors duration-200">
                                        {{ __('View Product') }}
                                    </x-nav-link>
                                </li>
                            </ul>
                        </div>
                    </div> -->
                </div>
            </div>

            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ms-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="inline-flex items-center gap-2 px-4 py-2 rounded-lg bg-gray-700 hover:bg-gray-600 text-gray-200 hover:text-white text-sm font-medium transition-colors duration-200 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                            <!-- Avatar chữ cái đầu -->
                            <span class="w-7 h-7 rounded-full bg-indigo-500 flex items-center justify-center text-white text-xs font-bold">
                                {{ strtoupper(substr(Auth::user()->name, 0, 1)) }}
                            </span>
                            <span>{{ Auth::user()->name }}</span>
                            <svg class="fill-current h-4 w-4 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <div class="px-4 py-2 border-b border-gray-700">
                            <p class="text-xs text-gray-400">Đăng nhập với</p>
                            <p class="text-sm font-medium text-gray-200 truncate">{{ Auth::user()->email }}</p>
                        </div>

                        <x-dropdown-link :href="route('profile.edit')" class="text-gray-300 hover:text-white hover:bg-gray-700">
                            <span class="flex items-center gap-2">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                                </svg>
                                {{ __('Profile') }}
                            </span>
                        </x-dropdown-link>

                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <x-dropdown-link :href="route('logout')"
                                class="text-red-400 hover:text-red-300 hover:bg-gray-700"
                                onclick="event.preventDefault(); this.closest('form').submit();">
                                <span class="flex items-center gap-2">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/>
                                    </svg>
                                    {{ __('Log Out') }}
                                </span>
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>

            <!-- Hamburger -->
            <div class="-me-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden bg-gray-800 border-t border-gray-700">
        <div class="pt-2 pb-3 space-y-1 px-3">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')"
                class="text-gray-300 hover:text-white hover:bg-gray-700 rounded-md">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('admin.addcategory')" :active="request()->routeIs('admin.addcategory')"
                class="text-gray-300 hover:text-white hover:bg-gray-700 rounded-md">
                {{ __('Add Category') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('admin.viewcategory')" :active="request()->routeIs('admin.viewcategory')"
                class="text-gray-300 hover:text-white hover:bg-gray-700 rounded-md">
                {{ __('View Category') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('admin.addsupplier')" :active="request()->routeIs('admin.addsupplier')"
                class="text-gray-300 hover:text-white hover:bg-gray-700 rounded-md">
                {{ __('View Supplier') }}
            </x-responsive-nav-link>
        </div> -->

        <!-- Responsive Settings -->
        <div class="pt-4 pb-3 border-t border-gray-700 px-3">
            <div class="flex items-center gap-3 px-2 mb-3">
                <span class="w-9 h-9 rounded-full bg-indigo-500 flex items-center justify-center text-white font-bold">
                    {{ strtoupper(substr(Auth::user()->name, 0, 1)) }}
                </span>
                <div>
                    <div class="font-medium text-base text-gray-200">{{ Auth::user()->name }}</div>
                    <div class="font-medium text-sm text-gray-400">{{ Auth::user()->email }}</div>
                </div>
            </div>

            <div class="space-y-1">
                <x-responsive-nav-link :href="route('profile.edit')" class="text-gray-300 hover:text-white hover:bg-gray-700 rounded-md">
                    {{ __('Profile') }}
                </x-responsive-nav-link>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <x-responsive-nav-link :href="route('logout')"
                        class="text-red-400 hover:text-red-300 hover:bg-gray-700 rounded-md"
                        onclick="event.preventDefault(); this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
</nav>
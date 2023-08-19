<template>
   <!-- Navigation -->
<section class="overflow-hidden bg-[#A4D9FA]">
    <nav class="  w-full">
        <div class="flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="{{ route('home') }}" class="flex items-center justify-center">
                <img src="../../../public/imgs/logo.png" class="h-20 mr-3" alt="Logo">
                <!-- <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Flowbite</span> -->
            </a>
            <div class="flex mt-8 xl:mt-0  xl:order-2 space-x-2">
                <!-- {{-- <button type="button"
                class="text-black space-x-1 hover:text-[#3CAEA3]  font-medium rounded-lg text-sm px-4 py-2 text-center mr-3 md:mr-0">
                <i class="fa-solid fa-lock fa-beat text-white"></i>
                <span>Login</span> </button>
                <button type="button"
                class="text-black hover:text-white bg-white border-black border hover:bg-[#3CAEA3] font-medium rounded-full text-sm px-4 py-2 text-center mr-3 md:mr-0 ">Order
                Now</button> --}} -->
                <button data-collapse-toggle="navbar-sticky" type="button"
                    class="inline-flex  items-center p-2 text-sm text-gray-500 rounded-lg xl:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 "
                    aria-controls="navbar-sticky" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>
            <div class="items-center justify-between hidden w-full xl:flex xl:w-auto xl:order-1" id="navbar-sticky">
                <ul
                    class="flex flex-col p-4 xl:p-0 mt-4 font-medium border rounded-lg  xl:flex-row xl:space-x-8 xl:mt-0 xl:border-0">
                    <li>
                        <a href="{{ route('home') }}"
                            class="block py-2 pl-3 pr-4 text-gray-900 hover:bg-[#3CAEA3] md:hover:bg-transparent  rounded md:bg-transparent md:hover:text-[#3CAEA3] md:p-0 "
                            aria-current="page">Home</a>
                    </li>
                    <li>
                        <router-link to="/about"

                            class="block cursor-pointer py-2 pl-3 pr-4 text-gray-900 hover:bg-[#3CAEA3] md:hover:bg-transparent  rounded md:bg-transparent md:hover:text-[#3CAEA3] md:p-0 ">
                            About
                            Us</router-link>
                    </li>
                    <li>
                        <a href="{{ route('price') }}"
                            class="block py-2 pl-3 pr-4 text-gray-900 hover:bg-[#3CAEA3] md:hover:bg-transparent  rounded md:bg-transparent md:hover:text-[#3CAEA3] md:p-0 ">
                            Pricing</a>
                    </li>
                    <li>
                        <a href="{{ route('reviews') }}"
                            class="block py-2 pl-3 pr-4 text-gray-900 hover:bg-[#3CAEA3] md:hover:bg-transparent  rounded md:bg-transparent md:hover:text-[#3CAEA3] md:p-0 ">
                            Reviews</a>
                    </li>
                    <li class="block py-2 pl-3 pr-4 text-gray-900 hover:bg-[#3CAEA3] md:hover:bg-transparent  rounded md:bg-transparent md:hover:text-[#3CAEA3] md:p-0 ">
                        <router-link :to="{ name : 'public-posts.index'}" class="nav-link">Blog</router-link>
                    </li>
                    <li class="hidden">
                        <div @click.away="open = false" class="relative whitespace-nowrap inline-flex"
                            x-data="{ open: false }">
                            <a @click="open = !open"
                                class="block w-full md:pt-0 md:pl-0 py-2 pl-3 pr-4 text-left  cursor-pointer hover:text-[#6ec1e4] {{ request()->routeIs('service.show') ? '  text-primary-one' : '' }}">
                                <span class="nav-text">
                                    <span class="text-">

                                        Services
                                    </span>
                                    <svg fill="currentColor" viewBox="0 0 20 20"
                                        :class="{ 'rotate-180': open, 'rotate-0': !open }"
                                        class="inline w-4 h-4 ml-1 transition-transform duration-200 transform md:-mt-1 rotate-0">
                                        <path fill-rule="evenodd"
                                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </span>
                            </a>
                            <div x-show="open" x-transition:enter="transition ease-out duration-100"
                                x-transition:enter-start="transform opacity-0 scale-95"
                                x-transition:enter-end="transform opacity-100 scale-100"
                                x-transition:leave="transition ease-in duration-75"
                                x-transition:leave-start="transform opacity-100 scale-100"
                                x-transition:leave-end="transform opacity-0 scale-95"
                                class="hidden absolute right-0  mt-9 origin-top-right rounded-md shadow-lg md:w-48 z-40"
                                :class="{ 'hidden': !open }" style="display: none;">
                                <div class="px-2 py-2 rounded-md shadow bg-white">
                                    <!-- {{-- dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 --}} -->
                                    @if (!empty($services))
                                        @foreach ($services as $service)
                                            <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg  md:mt-0 focus:text-gray-900 hover:bg-primary-one hover:text-white focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                                                href=""></a>
                                        @endforeach
                                    @endif



                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="xl:block hidden">
                        <a href="{{route('login')}}">
                            <button type="button"
                            class="text-black space-x-1 md:pt-0 md:pl-0 py-2 pl-3 pr-4 hover:text-[#3CAEA3]  font-medium rounded-lg text-sm  text-center mr-3 md:mr-0">
                        <i class="fa-solid fa-lock fa-beat text-white"></i>
                        <span class="font-semibold">
                            @if (Auth::user())

                            @else
                            Login/Register
                            @endif

                                </span> </button>
                        </a>

                    </li>
                    <li class="xl:block hidden">
                        <a href="{{route('order')}}" class="">
                        <button type="button"
                        class="animate-tada text-primary-one-dark  pl-3 pr-4 hover:text-white bg-white border-[#3CAEA3] border hover:bg-[#3CAEA3] font-medium rounded-full text-sm xl:px-4 py-1 text-center mr-3 md:mr-0 ">
                        Order Now</button>
                    </a>

                    </li>
                    <li class="flex flex-col xl:hidden">
                        <a href="{{route('login')}}">
                            <button type="button"
                            class="text-black space-x-1 md:pt-0 md:pl-0 py-2 pl-3 pr-4 hover:text-[#3CAEA3]  font-medium rounded-lg text-sm  text-center mr-3 md:mr-0">
                        <i class="fa-solid fa-lock fa-beat text-white"></i>
                        <span class="font-semibold"> @if (Auth::user())

                            @else
                            Login/Register
                            @endif</span> </button>
                    </a>

                    <a href="{{route('order')}}">
                        <button type="button"
                        class="text-primary-one-dark md:pt-0 order pl-3 pr-4 hover:text-white bg-white border-gray-300 border hover:bg-[#3CAEA3] font-medium rounded-full text-sm xl:px-4 text-center mr-3 md:mr-0 ">
                        Order Now</button>
                    </a>

                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- This Script is used for mobile responsive navbar -->
    <!--  -->
</section>

</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>

<nav class="flex-wrap sm:p-4 lg:p-3 bg-white rounded lg:flex items-center justify-between mb-10 lg:mb-20" x-data="{navbarOpen:false}">
        <div class="flex p-4 sm:p-3 lg:p-2 items-center justify-between md:p-3 mb-10 lg:mb-0">
            <a href="{{ route('home') }}"><img class="logo" src="{{ asset('/assets/image/navbar-logo.svg') }}" alt="Logo"></a>
            <button class="flex items-center justify-center border-0 w-10 h-10 text-black rounded-md outline-none lg:hidden ml-auto" @click="navbarOpen = !navbarOpen" >
                <i data-feather="menu"></i>
            </button>
        </div>

        <ul class="hidden p-3 lg:flex flex-col lg:flex-row lg:items-center lg:justify-around lg:space-x-10" :class="{'hidden':!navbarOpen,'flex':navbarOpen}">
            <li class="hover:underline font-medium text-black text-xs hover:text-gray-700 transition ease-in-out duration-300 mb-5 lg:mb-0">
                <a href="{{ route('pricing-view') }}">Pricing</a>
            </li>

            <li class="font-medium hover:underline text-black text-xs hover:text-gray-700 transition ease-in-out duration-300 mb-5 lg:mb-0">
                <a href="{{ route('documentation-view') }}">Documentation</a>
            </li>

            <li class="font-medium hover:underline text-black text-xs hover:text-gray-700 transition ease-in-out duration-300 mb-5 lg:mb-0">
                <a href="{{ route('about-view') }}">Developer</a>
            </li>

            <li class="font-medium hover:bg-gray-200 bg-gray-100 p-2 text-gray-700 text-xs hover:text-black rounded-md transition ease-in-out duration-300 mb-5 lg:mb-0">
                <a href="{{ route('signup') }}">Sign</a>
            </li>
            <li class="font-medium text-gray-700 hover:bg-gray-200 p-2 text-xs hover:text-black transition rounded-md bg-gray-100 ease-in-out duration-300 mb-5 lg:mb-0">
                <a href="{{ route('login') }}">Login</a>
            </li>

           <li class="px-2 py-1 lg:p-2 md:p-1 md:w-full font-medium text-white bg-black text-sm text-center border-2 border-black rounded-md hover:bg-white hover:text-black transition ease-linear duration-300">
                <a href="#">14 Days Free Trial</a>
           </li>
        </ul>
    </nav>
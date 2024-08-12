<nav class="flex-wrap sm:p-3 lg:p-4 bg-white rounded lg:flex items-center justify-between mb-10 lg:mb-20" x-data="{navbarOpen:false}">
        <div class="flex p-3 sm:p-3 lg:p-3 items-center justify-between md:p-2 mb-10 lg:mb-0">
            <a href="{{ route('home') }}"><img class="logo" src="{{ asset('/assets/image/navbar-logo.svg') }}" alt="Logo"></a>
            <button class="flex items-center justify-center border-0 w-10 h-10 text-black rounded-md outline-none lg:hidden ml-auto" @click="navbarOpen = !navbarOpen" >
                <i data-feather="menu"></i>
            </button>
        </div>


        <ul class="hidden lg:flex p-3 flex-col lg:flex-row lg:items-center md:justify-evenly lg:space-x-8" :class="{'hidden':!navbarOpen,'flex':navbarOpen}">
            
           <li class="cursor-pointer px-2 py-1 md:p-3 md:w-fit font-medium text-white bg-black text-md text-center border-2 border-black rounded-md hover:bg-white hover:text-black transition ease-linear duration-300">
                <a href="#">Try Free</a>
           </li>

            <li class="font-medium hover:underline text-black text-sm hover:text-gray-700 transition ease-in-out duration-300 mb-5 lg:mb-0">
                <a href="{{ route('documentation-view') }}">Documentation</a>
            </li>
            <li class="hover:underline font-medium text-black text-sm hover:text-gray-700 transition ease-in-out duration-300 mb-5 lg:mb-0">
                <a href="{{ route('pricing-view') }}">Pricing</a>
            </li>

            <li class="font-medium hover:underline text-black text-sm hover:text-gray-700 transition ease-in-out duration-300 mb-5 lg:mb-0">
                <a href="{{ route('about-view') }}">Developer</a>
            </li>

            <li class="font-medium  bg-gray-100 text-left  hover:underline p-2 md:w-fit text-gray-900 text-sm hover:text-black rounded-md transition ease-in-out duration-300 mb-5 lg:mb-0">
                <a href="{{ route('signup_view') }}">Sign Up</a>
            </li>
            <li class="font-medium  bg-gray-100  text-left text-sm  hover:underline p-2 md:w-fit text-gray-900 hover:text-black transition rounded-md ease-in-out duration-300 mb-5 lg:mb-0">
                <a href="{{ route('login_view') }}">Login</a>
            </li>

        </ul>
    </nav>
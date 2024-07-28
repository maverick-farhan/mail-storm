<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Mail-Storm - {{ $title }}</title>
        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('/apple-touch-icon.png') }}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('/favicon-32x32.png') }}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('/favicon-16x16.png') }}">
        <link rel="manifest" href="{{ asset('/site.webmanifest') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/tailwind.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.28.0/feather.min.js" integrity="sha512-7x3zila4t2qNycrtZ31HO0NnJr8kg2VI67YLoRSyi9hGhRN66FHYWr7Axa9Y1J9tGYHVBPqIjSE1ogHrJTz51g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    </head>

    <body class="bg-black">
        <section class="py-4 md:py-4">
            <div class="container max-w-screen-2xl mx-auto px-4">
        @yield('dynamic')

        <footer class="bg-white py-8 md:py-16">

            <div class="container max-w-screen-xl mx-auto px-4">

                <div class="lg:flex flex-col md:flex-row text-center lg:text-left lg:justify-between">
                    <div class="mb-10 lg:mb-0">
                        <img src="{{ asset('assets/image/navbar-logo.svg') }}" alt="Image" class="mb-5 mx-auto lg:mx-0">
                        <p class="font-normal text-gray-600 text-md">Mail-Storm help you to setup <br />your professional newsletter <br /> 
                        in minutes without a sweat.<br /> Let us handle the headaches of implementing <br />the backend and APIs for you.</p>
                    </div>

                    <div class="space-y-4 mb-10 lg:mb-0">
                        <h4 class="font-semibold text-gray-800 text-lg mb-6">Get Started</h4>
                        <a href="{{ route('documentation-view') }}" class="block font-normal text-gray-600 text-md hover:text-gray-700 transition ease-in-out duration-300 hover:underline">Documentation</a>
                        <a href="{{ route('pricing-view') }}" class="hover:underline block font-normal text-gray-600 text-md hover:text-gray-700 transition ease-in-out duration-300">Pricing</a>
                        <a href="#" class="block font-normal text-gray-600 text-md hover:text-gray-700 transition ease-in-out hover:underline duration-300">Watch Demo</a>


                    </div>

                    <div class="space-y-4 mb-10 lg:mb-0">
                        <h4 class="font-semibold text-gray-800 text-lg mb-6">Support</h4>

                        <a href="#" class="block font-normal text-gray-600 text-md hover:text-gray-700 transition ease-in-out duration-300 hover:underline">Reviews</a>
                        <a href="#" class="hover:underline block font-normal text-gray-600 text-md hover:text-gray-700 transition ease-in-out duration-300">Get in Touch</a>
                        <a href="#" class="block font-normal text-gray-600 text-md hover:text-gray-700 transition ease-in-out hover:underline duration-300">About the Developer</a>
                    </div>

                    <div class="space-y-4">
                        <h4 class="font-semibold text-gray-800 text-lg mb-6">Company</h4>

                        <a href="#" class="block font-normal text-gray-600 text-md hover:text-gray-700 transition ease-in-out duration-300">Bhilai, CG, India</a>
                        <a href="#" class="block font-normal text-gray-600 text-md hover:text-gray-700 transition ease-in-out duration-300">+91-7470435885</a>
                        <a href="#" class="hover:underline block font-normal text-gray-600 text-md hover:text-gray-700 transition ease-in-out duration-300">contact@vervelabs.in</a>
                    </div>
                </div>

                <hr class="text-gray-300 mt-10">

                <p class="font-normal text-gray-700 text-md text-center mt-5">&copy; 2024 A Vervelabs product. All rights reserved.</p>

            </div>

        </footer>


        <script>
            feather.replace()
        </script>

    </body>
</html>
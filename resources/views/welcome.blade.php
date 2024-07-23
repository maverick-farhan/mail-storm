<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Mail-Storm - Free Automation Email Marketing Platform</title>
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
        
        <!-- home section -->
        <section class="py-8 md:py-16">

            <div class="container max-w-screen-xl mx-auto px-4">

                <nav class="flex-wrap p-5 bg-white rounded lg:flex items-center justify-between mb-20 lg:mb-40" x-data="{navbarOpen:false}">
                    <div class="flex mb-10 lg:mb-0">
                        <a href="{{ route('home') }}"><img class="logo" src="{{ asset('/assets/image/navbar-logo.svg') }}" alt="Logo"></a>
                        <button class="flex items-center justify-center border border-black w-10 h-10 text-black rounded-md outline-none lg:hidden ml-auto" @click="navbarOpen = !navbarOpen">
                            <i data-feather="menu"></i>
                        </button>
                    </div>

                    <ul class="hidden lg:flex flex-col lg:flex-row lg:items-center lg:space-x-20" :class="{'hidden':!navbarOpen,'flex':navbarOpen}">
                        <li class="font-medium text-black text-lg hover:text-gray-700 transition ease-in-out duration-300 mb-5 lg:mb-0">
                            <a href="#">Pricing</a>
                        </li>

                        <li class="font-medium text-black text-lg hover:text-gray-700 transition ease-in-out duration-300 mb-5 lg:mb-0">
                            <a href="#">Documentation</a>
                        </li>

                        <li class="font-medium text-black text-lg hover:text-gray-700 transition ease-in-out duration-300 mb-5 lg:mb-0">
                            <a href="#">About</a>
                        </li>

                       <li class="px-8 py-3 font-medium text-white bg-black text-lg text-center border-2 border-black rounded-md hover:bg-white hover:text-black transition ease-linear duration-300">
                            <a href="#">14 Days Free Trial</a>
                       </li>
                    </ul>
                </nav>

                <header class="flex-col xl:flex-row flex justify-between">

                    <div class="mx-auto text-center xl:text-left xl:mx-0 mb-20 xl:mb-0">
                        <h1 class="font-bold text-gray-100 text-5xl md:text-6xl leading-tight mb-10">Build dynamic Newsletters <br>Let us handle headaches.</h1>

                        <p class="font-normal text-gray-500 text-sm md:text-lg mb-10">We automate your newsletter backend process</br>So that you focus on serving your customers.</p>

                        <div class="flex items-center justify-center lg:justify-start">
                            <a href="#" class="px-8 py-3 text-black bg-white text-lg text-center border-2 border-black hover:bg-gray-100 hover:text-gray-900 font-medium text-md md:text-lg rounded-md transition ease-in-out duration-300 mr-14">Free Trial</a>

                            <a href="#" class="hidden lg:block font-normal text-gray-500 text-lg mr-8">Watch Showreel</a>

                            <a href="#" class="px-4 py-4 text-gray-300 border-2 border-gray-200 rounded-full">
                                <i data-feather="play"></i>
                            </a>
                        </div>
                    </div>

                    <div class="mx-auto xl:mx-0">
                        <img class="rounded-md" src="{{ url('https://cdn.dribbble.com/userupload/13095153/file/original-397044a4b4fb1af02fb233c22c7dcfea.png?resize=752x') }}" alt="Image">
                    </div>

                </header>

            </div> <!-- container.// -->

        </section>
        <!-- home section //end -->

        <!-- feature section -->
        <section class="py-8 md:py-16">

            <div class="container max-w-screen-xl mx-auto px-4">

                <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3">
                    <div class="text-center mb-10 xl:mb-0 px-2">
                        <div class="flex items-center justify-center">
                            <div class="w-20 py-7 flex justify-center bg-purple-50 text-purple-500 rounded-md mb-5 md:mb-10">
                                <i data-feather="layout"></i>
                            </div>
                        </div>

                        <h2 class="font-semibold text-gray-200 text-xl md:text-3xl mb-5">Dynamic Newsletter</h2>

                        <p class="font-normal text-gray-400 text-sm md:text-lg">Build your newsletter form dynamic and setup backend on air.<br /> Store your subscribed users on our database safely.</p>
                    </div>

                    <div class="text-center mb-10 md:mb-0 px-2">
                        <div class="flex items-center justify-center">
                            <div class="w-20 py-7 flex justify-center bg-red-50 text-red-500 rounded-md mb-5 md:mb-10">
                                <i data-feather="mail"></i>
                            </div>
                        </div>

                        <h2 class="font-semibold text-gray-200 text-xl md:text-3xl mb-5">Create Emails</h2>

                        <p class="font-normal text-gray-400 text-sm md:text-lg">Create custom emails content to share to your customers directly from our platform.<br />So that you get feedback and grow fast.</p>
                    </div>

                    <div class="text-center px-2">
                        <div class="flex items-center justify-center">
                            <div class="w-20 py-7 flex justify-center bg-blue-50 text-blue-500 rounded-md mb-5 md:mb-10">
                                <i data-feather="send"></i>
                            </div>
                        </div>

                        <h2 class="font-semibold text-gray-200 text-xl md:text-3xl mb-5">Send Bulk Emails</h2>

                        <p class="font-normal text-gray-400 text-sm md:text-lg">Send bulk emails to your subscribed customers and expand your business instantly.</p>
                    </div>
                </div>

            </div> <!-- container.// -->

        </section>
        <!-- feature section //end -->

        <section class="py-8 md:py-16">

            <div class="container max-w-screen-xl mx-auto px-4">

                <h1 class="font-semibold text-gray-200 text-3xl md:text-4xl text-center mb-5">What we do?</h1>

                <p class="font-normal text-gray-400 text-md md:text-lg text-center mb-20 md:mb-40">We help Web Designers, non-tech professionals and leaders automate the process of making dynamic newsletter form by applying backend on the air. So that you focus more on closing deals and serving your customers smoothly.</p>
                
                <h1 class="font-semibold text-gray-200 text-3xl md:text-4xl text-center mb-5">✨Get Started in ٣ easy Steps✨</h1>
                <br />
                <div class="flex flex-col xl:flex-row items-center justify-between mb-20 md:mb-40">
                    <div class="mx-auto xl:mx-0 mb-20 xl:mb-0">
                        <img class="rounded-md" src="{{ url('https://cdn.dribbble.com/userupload/14554995/file/original-44571b9b304bb6c89b7791ca95b427e1.png?resize=752x') }}" alt="Image">
                    </div>

                    <div class="mx-auto xl:mx-0 text-center xl:text-left">
                        <h1 class="font-bold text-gray-200 text-3xl md:text-4xl mb-10">1. Configure the code snippets</h1>
                        <p class="font-normal text-gray-400 text-sm md:text-lg mb-5">First, you need to configure your form. Copy the <span class="text-yellow-300">JS</span> <br />code snippet and place in your js file(for-example:index.js) <br/>so that your form can make API call to the backend. <br/>And send requests to save the customer's email in the backend database.</p>
                    </div>
                </div>

                <div class="flex flex-col xl:flex-row items-center justify-between mb-20 md:mb-40">
                    <div class="mx-auto xl:mx-0 text-center xl:text-left mb-20 xl:mb-0">
                        <h1 class="font-bold text-gray-200 text-3xl md:text-4xl mb-10">2. Create Custom Emails for your marketing <br /> or upload your <br />own email's contents to send.</h1>
                        <p class="font-normal text-gray-400 text-sm md:text-lg mb-5">Create your custom emails content using  <br />our platform or place your own pre-made emails contents easely.</p>
                    </div>
                    <div class="mx-auto xl:mx-0 mb-20 xl:mb-0">
                        <img class="rounded-md" src="{{ url('https://cdn.dribbble.com/userupload/12869921/file/original-52d446713cd97aab1bb75c7bb6145b54.jpg?resize=752x') }}" alt="Image">
                    </div>
                </div>

                <div class="flex flex-col xl:flex-row items-center justify-between">
                    <div class="mx-auto xl:mx-0 mb-20 xl:mb-0">
                        <img class="rounded-md" src="{{ url('https://cdn.dribbble.com/userupload/13022810/file/original-6fb6206f8f0f100660f0a6ab03403efb.jpg?resize=752x') }}" alt="Image">
                    </div>

                    <div class="mx-auto xl:mx-0 text-center xl:text-left">
                        <h1 class="font-bold text-gray-200 text-3xl md:text-4xl mb-10">3. Send Bulk emails in just 1 click</h1>

                        <p class="font-normal text-gray-400 text-sm md:text-lg mb-5">Send Unlimited emails to your customers and <br />enjoy making new potential customers instantly. </p>
                    </div>
                </div>

                <h1 class="my-4 px-8 py-3 font-medium text-white bg-black text-lg text-center border-2 border-white rounded-md hover:bg-white hover:text-black transition ease-linear duration-300">
                    <a href="#">I'm Convinced! Let's Setup</a>
                </h1>

            </div> <!-- container.// -->

        </section>

        <footer class="bg-white py-8 md:py-16">

            <div class="container max-w-screen-xl mx-auto px-4">

                <div class="lg:flex flex-col md:flex-row text-center lg:text-left lg:justify-between">
                    <div class="mb-10 lg:mb-0">
                        <img src="{{ asset('assets/image/navbar-logo.svg') }}" alt="Image" class="mb-5 mx-auto lg:mx-0">
                        <p class="font-normal text-gray-400 text-md">Mail-Storm help you to setup <br />your professional newsletter <br /> 
                        in minutes without a sweat.<br /> Let us handle the headaches of implementing <br />the backend and APIs for you.</p>
                    </div>

                    <div class="space-y-4 mb-10 lg:mb-0">
                        <h4 class="font-semibold text-gray-500 text-lg mb-6">Get Started</h4>
                        <a href="#" class="block font-normal text-gray-400 text-md hover:text-gray-700 transition ease-in-out duration-300">Documentation</a>

                        <a href="#" class="block font-normal text-gray-400 text-md hover:text-gray-700 transition ease-in-out duration-300">Pricing</a>

                        <a href="#" class="block font-normal text-gray-400 text-md hover:text-gray-700 transition ease-in-out duration-300">Watch Demo</a>


                    </div>

                    <div class="space-y-4 mb-10 lg:mb-0">
                        <h4 class="font-semibold text-gray-500 text-lg mb-6">Support</h4>

                        <a href="#" class="block font-normal text-gray-400 text-md hover:text-gray-700 transition ease-in-out duration-300">Reviews</a>

                        <a href="#" class="block font-normal text-gray-400 text-md hover:text-gray-700 transition ease-in-out duration-300">Get in Touch</a>

                        <a href="#" class="block font-normal text-gray-400 text-md hover:text-gray-700 transition ease-in-out duration-300">About the Developer</a>
                    </div>

                    <div class="space-y-4">
                        <h4 class="font-semibold text-gray-500 text-lg mb-6">Company</h4>

                        <a href="#" class="block font-normal text-gray-400 text-md hover:text-gray-700 transition ease-in-out duration-300">Bhilai, CG, India</a>

                        <a href="#" class="block font-normal text-gray-400 text-md hover:text-gray-700 transition ease-in-out duration-300">+91-7470435885</a>

                        <a href="#" class="block font-normal text-gray-400 text-md hover:text-gray-700 transition ease-in-out duration-300">contact@vervelabs.in</a>
                    </div>
                </div>

                <hr class="text-gray-300 mt-10">

                <p class="font-normal text-gray-400 text-md text-center mt-5">&copy; 2024 A Vervelabs product. All rights reserved.</p>

            </div>

        </footer>


        <script>
            feather.replace()
        </script>

    </body>
</html>
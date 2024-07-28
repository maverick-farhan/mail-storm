@extends('master-layout')
@section('dynamic')
        <!-- home section -->
        @include('layout.navbar')

                <header class="flex-col xl:flex-row flex justify-between">

                    <div class="mx-auto text-center xl:text-left xl:mx-0 mb-20 xl:mb-0">
                        <h1 class="font-bold text-gray-200 text-5xl md:text-6xl leading-tight mb-10">Build dynamic Newsletters <br>Let us handle headaches.</h1>

                        <p class="font-normal text-gray-400 text-sm md:text-lg mb-10">We automate your newsletter backend process</br>So that you focus on serving your customers.</p>

                        <div class="flex items-center justify-center lg:justify-start">
                            <a href="#" class="hover:underline px-8 py-3 text-black bg-white text-lg text-center border-2 border-black hover:bg-gray-100 hover:text-gray-900 font-medium text-md md:text-lg rounded-md transition ease-in-out duration-300 mr-14">Free Trial</a>

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

                <div class="flex flex-col xl:flex-row items-center justify-between ">
                    <div class="mx-auto xl:mx-0 mb-20 xl:mb-0">
                        <img class="rounded-md" src="{{ url('https://cdn.dribbble.com/userupload/13022810/file/original-6fb6206f8f0f100660f0a6ab03403efb.jpg?resize=752x') }}" alt="Image">
                    </div>

                    <div class="mx-auto xl:mx-0 text-center xl:text-left">
                        <h1 class="font-bold text-gray-200 text-3xl md:text-4xl mb-10">3. Send Bulk emails in just 1 click</h1>
                        <p class="font-normal text-gray-400 text-sm md:text-lg mb-5">Send Unlimited emails to your customers and <br />enjoy making new potential customers instantly. </p>
                    </div>
                </div>

                <h1 class="my-4 px-8 py-3 font-medium text-black bg-white text-lg text-center border-2 border-white rounded-md hover:bg-white hover:text-gray-700 transition ease-linear duration-300">
                    <a class="hover:underline" href="{{ route('signup') }}">I'm Convinced! Let's Setup</a>
                </h1>

            </div> <!-- container.// -->

        </section>
@endsection
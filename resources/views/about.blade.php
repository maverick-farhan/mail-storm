@extends('master-layout')
@section('dynamic')
    @include('layout.navbar')
    </div>
    <div class="py-4 md:py-1 sm:py-32">
        <div class="mx-auto max-w-4xl sm:text-center text-start">
        <div class="mx-auto max-w-7xl px-4 lg:px-8">
            <h1 class="text-5xl font-bold tracking-tight text-gray-200 sm:text-4xl">About the Developer 🚀</h1>
            <p class="mt-5 text-lg leading-8 text-gray-400">Welcome everyone, <span class="text-white font-medium"><a class="hover:underline" target="_blank" href="{{ url('https://biomini.vervelabs.in/biominiView/1') }}">Mohammad Farhan Mushtaque</a></span> here and I'm Fullstack Web Developer with 2+ practical experience. I consider myself product developer more than a web developer, I build products not just to make it, but rather because I hope to solve problems we face on daily basis. I made a lot of projects till now but many of them are not live. This projects I made so far are live on server.</p>
            <ul class="mt-4">
                <p class="text-white">Check out 👉</p>
                <li class="mt-4 text-gray-400">1. <span class="text-white"><a class="hover:underline font-medium" href="{{ route('home') }}">Mail-Storm</a></span> is a MicroSaas platform to make your static newsletters into dynamic on air with unlimited database storage and emails support.</li>
                <li class="mt-4 text-gray-400">2. <span class="text-white"><a class="font-medium hover:underline" target="_blank" href="{{ url('https://biomini.vervelabs.in/') }}">Biomini</a></span> is a tool to make short bio profiles for anyone online.</li>
                <li class="mt-4 text-gray-400">3. <span class="text-white"><a class="font-medium hover:underline" href="#">Word-meaning</a></span> is a cli tool to search word's meaning on your terminal.</li>
            </ul>
        </div>
            </div>
    </div>
</section>
@endsection
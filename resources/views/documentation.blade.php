@extends('master-layout')
@section('dynamic')
    @include('layout.navbar')
    <div class="py-4 md:py-3 sm:py-32">
        <div class="mx-auto max-w-7xl px-4 lg:px-8">
            <div class="mx-auto max-w-4xl sm:text-center">
            <h1 class="text-5xl font-bold tracking-tight text-gray-200 sm:text-4xl text-center">Documentation 
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather inline-block text-lg feather-book-open"><path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"></path><path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"></path></svg>
            </h1>
            <p class="mt-5 text-lg sm:p-2 p-3 leading-8 text-gray-400">Read and Paste the code snippets in the respective file</p>
            <div class="rounded-md bg-gray-900 md:p-6 flex justify-center flex-wrap p-4">
                <h3 class="text-xl mx-auto font-bold text-gray-100">&lt;HTML /&gt;</h3>
                <p class="mt-2 leading-8 text-gray-200 pb-5 text-sm">Put correct values in name attributes of your "email" and "name" inputs attribute as mentioned in your HTML file(s)</p>
                <pre class="flex flex-wrap text-gray-100 text-sm justify-center  text-balance">Name input &#8594; <code class="text-balance text-black language-bash text-xs sm:text-xs md:text-sm p-2 rounded-md w-full m-2 bg-gray-300">type="text" <span class="font-bold">name="client_name"</span></code>
                </pre>
                <pre class="text-gray-100 flex justify-center flex-wrap text-sm text-balance">Email input &#8594; <code class="text-balance text-black language-bash sm:text-xs md:text-sm p-2 rounded-md w-full m-2 bg-gray-300">type="email" <span class="font-bold">name="client_email"</span></code></pre>
            </div>
            <br>

            <div class="rounded-md bg-gray-900 md:p-4 p-2">
                <h3 class="text-xl font-bold text-gray-100">&lt;JavaScript /&gt;</h3>
                <p class="mt-2 leading-8 text-gray-200 p-2 text-sm">Add Script to your HTML file or Seperate .js file</p>
                <pre  class="bg-gray-300 sm:text-balance xs:text-balance overflow-auto xs:text-sm md:text-lg relative rounded-md">
                    <span class="absolute rounded right-0 mx-3 hover:bg-gray-900 p-2 active:bg-gray-900 focus:bg-gray-900 hover:text-white cursor-pointer copy">copy</span>
                <code class="language-bash p-1 script text-left rounded-md w-full flex flex-wrap m-2">
    &lt;script type="text/javascript"&gt;
        let baseUrl = "http://127.0.0.1:8000";
        let targetUrl = new URL("/dashboard", baseUrl); 
        const submit = document.querySelector('#submit') 
        submit.addEventListener('click',(e)=>{
        e.preventDefault();
        fetch(`http://127.0.0.1:8000/api/request_newsletter`,{
            method:'POST',
            headers:{
                'Content-Type':'Application/json',
            },
        })
        .then(res=>res.json())
        .then(json=>{
            window.location.href = targetUrl.href;
        })
        });    
    &lt;/script&gt;
            </code>
            </pre>
            </div>
        </div>
    </div>
    </div>
</section>
@endsection
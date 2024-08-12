@extends('master-layout')
@section('dynamic')
    @include('layout.navbar')
    </div>
</section>

<section class="bg-transparent dark:bg-gray-900 relative lg:bottom-36 md:bottom-28 sm:bottom-18">
    <div class="flex flex-col items-center justify-center px-6 py-3 mx-auto md:h-screen lg:py-0">
        <div class="w-full bg-black rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
            <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-100 md:text-2xl dark:text-white">
                    Login into account
                </h1>
                <form method="POST" class="space-y-4 md:space-y-6" action="{{ route('logging') }}">
                    @csrf
                    <div>
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-200 dark:text-white">Your email</label>
                        <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="name@company.com" required="">
                    </div>
                    <div>
                        <label for="password" class="block mb-2 text-sm font-medium text-gray-200 dark:text-white">Password</label>
                        <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
                    </div>
                    <button type="submit" id="loginBtn" class="w-full text-black bg-white hover:bg-black hover:text-white transition border-2 border-white focus:ring-4 focus:outline-none focus:ring-primary-300 font-bold rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Login</button>
                </form>
            </div>
        </div>
    </div>
  </section>


<script type="text/javascript">
    $(document).ready(function(){
        $('#loginBtn').on('click',function(){
            const email = $('#email').val();
            const password = $('#password').val();
            $.ajax({
                url:'http://127.0.0.1:8000/api/login',
                type:'POST',
                contentType:'application/json',
                data:JSON.stringify({
                    email:email,
                    password:password
                }),
                success:function(response){
                    localStorage.setItem('api_token',response.token);
                    console.log('response: '+response);
                    window.location.href = 'http://127.0.0.1:8000/dashboard';
                },
                error:function(xhr,status,error){
                    alert('Error:'+xhr.respnseText);
                }
            })
        })
    })
</script>
@endsection

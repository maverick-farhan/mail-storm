@extends('master-layout')
@section('dynamic')
    @include('layout.navbar')
    </div>
</section>

<section class="bg-transparent dark:bg-gray-900 relative lg:bottom-36 md:bottom-28 sm:bottom-18">
    <div class="flex flex-col items-center justify-center px-6 sm:py-4 mx-auto md:h-screen lg:py-0">
        <div class="w-full bg-black rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
            <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-100 md:text-2xl dark:text-white">
                    Create an account
                </h1>
                <form method="POST" class="space-y-4 md:space-y-6" action="{{ route('signing') }}">
                    @csrf
                    <div>
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-200 dark:text-white">Your email</label>
                        <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="name@company.com" required="">
                    </div>
                    <div class="relative">
                        <label for="password" class="block mb-2 text-sm font-medium text-gray-200 dark:text-white">Password</label>
                        <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" id="eyeOpen" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye text-white cursor-pointer text-gray-900 right-2 top-10 my-auto absolute"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>

<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" id="eyeClose" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye-off cursor-pointer hidden text-gray-900 right-2 top-10 my-auto absolute"><path d="M17.94 17.94A10.07 10.07 0 0 1 12 20c-7 0-11-8-11-8a18.45 18.45 0 0 1 5.06-5.94M9.9 4.24A9.12 9.12 0 0 1 12 4c7 0 11 8 11 8a18.5 18.5 0 0 1-2.16 3.19m-6.72-1.07a3 3 0 1 1-4.24-4.24"></path><line x1="1" y1="1" x2="23" y2="23"></line></svg>
                    </div>
                    <div class="relative">
                        <label for="confirm-password" class="block mb-2 text-sm font-medium text-gray-200 dark:text-white">Confirm password</label>
                        <input type="confirm-password" name="password_confirmation" id="confirm-password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">

<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" id="eyeOpen" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye text-white cursor-pointer text-gray-900 right-2 top-10 my-auto absolute"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>

<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" id="eyeClose" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye-off cursor-pointer hidden text-gray-900 right-2 top-10 my-auto absolute"><path d="M17.94 17.94A10.07 10.07 0 0 1 12 20c-7 0-11-8-11-8a18.45 18.45 0 0 1 5.06-5.94M9.9 4.24A9.12 9.12 0 0 1 12 4c7 0 11 8 11 8a18.5 18.5 0 0 1-2.16 3.19m-6.72-1.07a3 3 0 1 1-4.24-4.24"></path><line x1="1" y1="1" x2="23" y2="23"></line></svg>
                    </div>
                    <button id="signupBtn" type="submit" class="w-full text-black bg-white hover:bg-black hover:text-white transition border-2 border-white focus:ring-4 focus:outline-none focus:ring-primary-300 font-bold rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Create an account</button>
                    <p class="text-sm font-light text-gray-300 dark:text-gray-400 feather-eye">
                        Already have an account? <a href="{{ route('login_view') }}" class="font-medium text-primary-600 hover:underline dark:text-primary-500">Login here</a>
                    </p>
                </form>
            </div>
        </div>
    </div>
  </section>

<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous" defer></script>
<script type="text/javascript">

openEye = document.querySelectorAll('#eyeOpen');
closeEye = document.querySelectorAll('#eyeClose');
passwordInputs = document.querySelector('#password');
confirmPasswordInputs = document.querySelector('#confirm-password');

openEye.forEach((elem,array,index)=>{
elem.addEventListener('click',(e)=>{
if(elem.style.display = "none"){
    elem.style.display = "block";
    if (elem.previousElementSibling.type === "password") {
    elem.previousElementSibling.type  = "text";
  } else {
    elem.previousElementSibling.type  = "password";
  }
}else{
   elem.style.display = "none";
   elem.nextElementSibling.style.display = "block";
}
})
});

closeEye.forEach((elem)=>{
elem.addEventListener('click',(e)=>{
    e.preventDefault();
    if(elem.style.display = "none"){
        elem.style.display = "block"

        if (elem.previousElementSibling.type === "password") {
        elem.previousElementSibling.type  = "text";
        }
        else {
        elem.previousElementSibling.type  = "password";
            }
        }
        else{
            elem.style.display = "block";
        }
})
})

    /* $(document).ready(function(){ */
    /*     $('#signupBtn').on('click',function(){ */
    /*         const email = $('#email').val(); */
    /*         const password = $('#password').val(); */
    /*         $.ajax({ */
    /*             url:'http://127.0.0.1:8000/api/signup', */
    /*             type:'POST', */
    /*             contentType:'application/json', */
    /*             data:JSON.stringify({ */
    /*                 email:email, */
    /*                 password:password */
    /*             }), */
    /*             success:function(response){ */
    /*                 localStorage.setItem('api_token',response.token); */
    /*                 window.location.href = 'http://127.0.0.1:8000/login_view'; */
    /*             } */
    /*         }) */
    /*     }) */
    /* }) */
</script>
@endsection

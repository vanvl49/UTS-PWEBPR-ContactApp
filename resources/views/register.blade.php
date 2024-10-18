@extends('layouts.app')

@section('title','Register')

@section('content')
<section class="bg-pink-50">
    <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
        <a href="#" class="text-4xl font-poppins font-extrabold text-pink-400 mb-2"> ContactApp </a>
        <div class="w-full bg-white rounded-lg shadow md:mt-0 sm:max-w-md xl:p-0">
            <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                <h1 class="text-xl font-bold leading-tight tracking-tight text-black md:text-2xl text-center">
                    Register Kuy!
                </h1>
                <form class="space-y-4 md:space-y-6" action="{{ route('login-post') }}" method="POST">
                    @csrf
                    <div>
                        <label for="email" class="block mb-2 text-sm font-medium">Your email</label>
                        <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="youremail@gmail.com" required="">
                    </div>
                    <div>
                        <label for="password" class="block mb-2 text-sm font-medium text-black">Password</label>
                        <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" required="">
                    </div>
                    <div>
                        <label for="confirm-password" class="block mb-2 text-sm font-medium text-black">Confirm password</label>
                        <input type="password" name="confirm-password" id="confirm-password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" required="">
                    </div>
                    <div class="flex items-start">
                        <div class="flex items-center h-5">
                            <input id="terms" aria-describedby="terms" type="checkbox" class="w-4 h-4 border border-black rounded bg-white" required="">
                        </div>
                        <div class="ml-3 text-sm">
                            <label for="terms" class="font-light text-black">I accept the <a class="font-medium text-pink-400 hover:underline" href="#">Terms and Conditions</a></label>
                        </div>
                    </div>
                    <button type="submit" class="w-full text-white bg-pink-400 hover:bg-pink-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Register</button>
                    <p class="text-sm font-light text-black">
                        Udah punya akun? <a href="{{ route('login') }}" class="font-medium text-pink-400 hover:underline">Login aja kuy!</a>
                    </p>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
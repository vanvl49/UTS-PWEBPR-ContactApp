@extends('layouts.app')

@section('title','Welcome!')

@section('content')
<section class="text-black body-font bg-pink-50">
    <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
        <div class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
            <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">Effortless connections,
                <br class="hidden lg:inline-block">seamless organization
            </h1>
            <p class="mb-8 leading-relaxed">
                Discover seamless organization and instant connections with our ContactApp. Whether you're networking or managing teams, our platform keeps your contacts in check with effortless navigation. Built for those who crave simplicity and efficiency, our system helps you stay ahead without the clutter!
            </p>
            <div class="flex justify-center">
                <a href="{{ route('login') }}" class="inline-flex text-white hover:text-pink-400 bg-pink-400 border-0 py-2 px-10 focus:outline-none hover:bg-white rounded text-lg">Get Started</a>
            </div>
        </div>
        <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6">
            <img class="object-cover object-center rounded" alt="hero" src="https://www.catho.com.br/carreira-sucesso/wp-content/uploads/sites/3/2016/02/Networking-1-scaled.jpg">
        </div>
    </div>
</section>
@endsection
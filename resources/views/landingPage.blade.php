@extends('layouts.app')

@section('content')

<body class="w-full h-screen bg-gradient-to-br from-green-500 via-green-700 to-green-900 flex flex-col">
    <header class="w-full flex flex-row justify-between items-center px-14 mt-8">
        <div id="logo">
            <h1 class="text-Inter text-white text-2xl font-semibold">Tinkee</h1>
        </div>
        <div id="navbar" class="hidden md:block">
            <ul class="flex flex-row">
                <a href="#"><li class="text-Inter text-white px-4">Product</li></a>
                <a href="#"><li class="text-Inter text-white px-4">Solution</li></a>
                <a href="#"><li class="text-Inter text-white px-4">Customer</li></a>
                <a href="#"><li class="text-Inter text-white px-4">Pricing</li></a>
                <a href="#"><li class="text-Inter text-white px-4">About us</li></a>
            </ul>
        </div>
        <div id="signup">
            <a href="#" class="bg-white text-black text-lg text-Inter py-3 px-6 font-semibold rounded-3xl">Sign Up</a>
        </div>
    </header>
    <div id="main" class="w-full flex flex-col items-center py-32">
        <div>
            <h2 class="text-white text-center text-[40px] sm:text-[60px] md:text-[72px] font-extrabold font-Inter">The Best Way To Link<br/>All Your Accounts</h2>
        </div>
        <div class="mt-8">
            <p class="text-white font-Inter text-center text-[16px] sm:text-[18px] md:text-[20px]">Links all your accounts on the same page to help people<br/>to find your everywhere on the internet.</p>
        </div>
        <div class="mt-8">
            <form class="sm:relative flex flex-col sm:flex-row">
                <input type="text" class="bg-white w-[300px] sm:w-[500px] md:w-[600px] indent-8 py-6 rounded-[50px] focus:outline-none" placeholder="Enter your email">
                <input type="submit" class=" bg-gradient-to-br from-green-300 via-green-500 to-emerald-700 mt-5 sm:mt-0 sm:absolute sm:right-6 sm:top-4 text-white font-Inter text-[18px] py-1 md:py-2 px-4 rounded-3xl" value="Start for free" >
            </form>
        </div>
    </div>
</body> 
@endsection
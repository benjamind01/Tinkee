@extends('layouts.app')

@section('content')

<body class="w-full h-screen flex flex-row">
    <div class="w-7/12 flex flex-col justify-center items-center bg-gradient-to-br from-[#0575E6] via-[#02298A] to-[#021B79] ">
        <div>
            <h3 class="font-Inter text-white text-[35px] font-semibold">You Don't Have Any Account?</h3>
            <p class="text-white mt-4 mb-8 text-lg">Sign Up Now!</p>
            <a href="/register" class="bg-[#0575E6] py-3 px-16 text-white rounded-3xl">Sign Up</a>
        </div>
    </div>
    <div class="w-5/12 px-6 flex flex-col justify-center items-center">
        <div class="w-7/12">
            <div class="w-full">
            <h3 class="text-Inter font-semibold text-2xl">Hello Again!</h3>
            <p class="text-Inter">Welcome Back</p>
            </div>
            <form method="POST" class="mt-6 flex flex-col justify-center" action="{{ route('login') }}">
                @csrf
                <!-- Email Address -->
                <div class="mt-4">
            
                    <input id="email" class="text-Inter block w-full border-gray-400 rounded-3xl py-3 focus:outline-none focus:ring-0 focus:border-gray-500" type="email" name="email" :value="old('email')" placeholder="E-mail" required />
                </div>
            
                <!-- Password -->
                <div class="mt-4">
            
                    <input id="password" class="text-Inter block w-full border-gray-400 rounded-3xl py-3 focus:outline-none focus:ring-0 focus:border-gray-500"
                                    type="password"
                                    name="password"
                                    placeholder="Password" />
                </div>
            
                <input type="submit" class="mt-8 bg-[#0575E6] mx-auto w-[200px] py-3 rounded-3xl text-white" value="Log In">
            </form>
        </div>
    </div> 
</body>


@endsection
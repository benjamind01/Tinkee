
@extends('layouts.app')

@section('content')

<body class="w-full h-screen flex flex-row" id="app">
    <div id="header" class="w-1/12">
        <div class="w-full h-full flex flex-col justify-end items-center py-12">
            <form method="POST" action="{{ route('logout') }}">
            @csrf
            <a href="/logout" onclick="event.preventDefault();
            this.closest('form').submit();"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10 text-white bg-gradient-to-br from-[#0575E6] via-[#02298A] to-[#021B79] rounded-xl px-1 py-1">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15M12 9l-3 3m0 0l3 3m-3-3h12.75" />
              </svg>
            </a>
            </form>
        </div>
    </div>
    <div id="main" class="w-11/12 bg-gray-100 flex flex-col items-center py-12">
        <img src="/pp.png" class="w-28 h-328" />
        <a href="/profil/{{Auth::user()->name }}"><h2 class="mt-4 mb-6 text-xl font-Inter font-semibold">@ {{Auth::user()->name }}</h2></a>
        @foreach($links as $link)
        <a href="{{ $link->url }}" target="_blank" class="bg-white text-center w-[450px] py-3 mt-6" __blank>
                {{ $link->nom }}
        </a>
        @endforeach
    </div>
</body> 
@endsection


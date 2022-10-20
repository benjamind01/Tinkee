
@extends('layouts.app')

@section('content')

<body class="w-full h-screen flex flex-row bg-gray-100">
    @php $page = "dashboard"; @endphp
    <x-dashboard-header :page="$page"/>
    <div id="main" class="w-11/12 flex flex-col items-center py-12">
        <img src="/pp.png" class="w-28 h-328" />
        <a href="/profile/{{Auth::user()->name }}" target="_blank"><h2 class="mt-4 mb-6 text-xl font-Inter flex items-center font-semibold">@ {{Auth::user()->name }} 
            @if(Auth::user()->verified)
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 ml-1 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 01-1.043 3.296 3.745 3.745 0 01-3.296 1.043A3.745 3.745 0 0112 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 01-3.296-1.043 3.745 3.745 0 01-1.043-3.296A3.745 3.745 0 013 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 011.043-3.296 3.746 3.746 0 013.296-1.043A3.746 3.746 0 0112 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 013.296 1.043 3.746 3.746 0 011.043 3.296A3.745 3.745 0 0121 12z" />
            </svg> 
            @endif
          </h2></a>
        @foreach($links as $link)
        <a href="/dashboard/modify/{{ $link->id }}" class="bg-white text-center rounded-3xl w-[450px] py-3 mt-6 hover:py-4 hover:w-[500px] transition-all font-semibold">
                {{ $link->nom }}
        </a>
        @endforeach
        <a href="/dashboard/add" class="bg-white rounded-3xl text-center w-[450px] hover:py-4 hover:w-[500px] transition-all py-3 mt-6" >
            <span class="font-bold text-xl">+</span> Ajouter un lien
        </a>
    </div>
    @vite('resources/js/app.js')
</body> 
@endsection


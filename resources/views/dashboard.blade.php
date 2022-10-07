
@extends('layouts.app')

@section('content')

<body class="w-full h-screen flex flex-row">
    <x-dashboard-header/>
    <div id="main" class="w-11/12 bg-gray-100 flex flex-col items-center py-12">
        <img src="/pp.png" class="w-28 h-328" />
        <a href="/profil/{{Auth::user()->name }}"><h2 class="mt-4 mb-6 text-xl font-Inter font-semibold">@ {{Auth::user()->name }}</h2></a>
        @foreach($links as $link)
        <a href="/dashboard/modify/{{ $link->id }}" class="bg-white text-center w-[450px] py-3 mt-6">
                {{ $link->nom }}
        </a>
        @endforeach
        <a href="/dashboard/add" class="bg-white text-center w-[450px] py-3 mt-6" >
            <span class="font-bold text-xl">+</span> Ajouter un lien
        </a>
    </div>
    @vite('resources/js/app.js')
</body> 
@endsection


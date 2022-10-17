
@extends('layouts.app')

@section('content')

<body class="w-full h-screen flex flex-row bg-gray-100">
    @php $page = "dashboard"; @endphp
    <x-dashboard-header :page="$page"/>
    <div id="main" class="w-11/12 flex flex-col items-center py-12">
        <img src="/pp.png" class="w-28 h-328" />
        <a href="/profile/{{Auth::user()->name }}" target="_blank"><h2 class="mt-4 mb-6 text-xl font-Inter font-semibold">@ {{Auth::user()->name }}</h2></a>
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


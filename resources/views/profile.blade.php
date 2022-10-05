
@extends('layouts.app')

@section('content')

<body class="w-full h-screen flex flex-row">
    <div id="main" class="w-full bg-gray-100 flex flex-col items-center py-12">
        <img src="/pp.png" class="w-28 h-328" />
        <h2 class="mt-4 mb-6 text-xl font-Inter font-semibold">@ {{$user->name }}</h2>
        @foreach($links as $link)
        <a href="{{ $link->url }}" target="_blank" class="bg-white text-center w-[450px] py-3 mt-6" __blank>
                {{ $link->nom }}
        </a>
        @endforeach
    </div>
</body> 
@endsection


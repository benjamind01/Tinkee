
@extends('layouts.app')

@section('content')

<body class="w-full h-screen flex flex-row bg-gray-100">
    <div id="main" class="w-full flex flex-col items-center py-12">
        <img src="/pp.png" class="w-28 h-328" />
        <h2 class="mt-4 mb-6 text-xl font-Inter font-semibold">@ {{$user->name }}</h2>
        @foreach($links as $link)
        <a href="{{ route('click'), $link->id }}" target="_blank" class="bg-white text-center rounded-3xl w-[450px] py-3 mt-6 hover:py-4 hover:w-[500px] transition-all font-semibold">
                {{ $link->nom }}
        </a>
        @endforeach
    </div>
</body> 
@endsection


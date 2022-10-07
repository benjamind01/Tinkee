
@extends('layouts.app')

@section('content')

<body class="w-full h-screen flex flex-row">
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
        <form method="POST" action="/links/store">
            @csrf
            <div class="mb-3">
                <label for="nom" class="block mb-2 text-sm font-medium text-gray-900">Nom du lien :</label>
                <input type="text" name="name" id="nom" class=" w-[400px] bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block  p-2.5" placeholder="Nom du lien">
            </div>
            <div class="mb-3">
                <label for="link" class="block mb-2 text-sm font-medium text-gray-900">Lien :</label>
                <input type="text" name="link" id="link" class=" w-[400px] bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5" placeholder="Lien">
            </div>
            <div class="w-[400px] flex justify-center items-center">
            <button type="submit" class="bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow">
                Ajouter
            </button>
            </div>
            @if($errors->any())
                @foreach($errors->all() as $error)
                    <div class="text-red-500">{{ $error }}</div>
                @endforeach
            @endif
        </form>
    </div>
    @vite('resources/js/app.js')
</body> 
@endsection


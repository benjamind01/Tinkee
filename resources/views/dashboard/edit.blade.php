
@extends('layouts.app')

@section('content')

<body class="w-full h-screen flex flex-row">
    @php $page = "dashboard"; @endphp
    <x-dashboard-header :page="$page"/>
    <div id="main" class="w-11/12 bg-gray-100 flex flex-col items-center py-12">
        <img src="/pp.png" class="w-28 h-328" />
        <a href="/profile/{{Auth::user()->name }}" target="_blank"><h2 class="mt-4 mb-6 text-xl font-Inter flex items-center font-semibold">@ {{Auth::user()->name }} 
            @if(Auth::user()->verified)
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 ml-1 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 01-1.043 3.296 3.745 3.745 0 01-3.296 1.043A3.745 3.745 0 0112 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 01-3.296-1.043 3.745 3.745 0 01-1.043-3.296A3.745 3.745 0 013 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 011.043-3.296 3.746 3.746 0 013.296-1.043A3.746 3.746 0 0112 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 013.296 1.043 3.746 3.746 0 011.043 3.296A3.745 3.745 0 0121 12z" />
            </svg> 
            @endif
          </h2></a>
        <form method="POST" action="/links/modify/{{ $link->id }}">
            @csrf
            <div class="mb-3">
                <label for="nom" class="block mb-2 text-sm font-medium text-gray-900">Nom du lien :</label>
                <input type="text" name="name" id="nom" class=" w-[400px] bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block  p-2.5" placeholder="Nom du lien" value="{{ $link->nom }}">
            </div>
            <div class="mb-3">
                <label for="link" class="block mb-2 text-sm font-medium text-gray-900">Lien :</label>
                <input type="text" name="link" id="link" class=" w-[400px] bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5" placeholder="Lien" value="{{ $link->url }}">
            </div>
            
            <div class="w-[400px] mt-4 flex justify-center items-center">
            <button type="submit" class="bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow">
                Modifer
            </button>
            </div>
            @if($errors->any())
                @foreach($errors->all() as $error)
                    <div class="text-red-500">{{ $error }}</div>
                @endforeach
            @endif
        </form>
        <form method="POST" action="/links/delete/{{ $link->id }}"> @csrf <input type=submit href="#" class="text-red-500 mt-4 cursor-pointer border-red-500" value="Supprimer ce lien"></form>
    </div>
    @vite('resources/js/app.js')
</body> 
@endsection


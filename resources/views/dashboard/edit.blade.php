
@extends('layouts.app')

@section('content')

<body class="w-full h-screen flex flex-row">
    @php $page = "dashboard"; @endphp
    <x-dashboard-header :page="$page"/>
    <div id="main" class="w-11/12 bg-gray-100 flex flex-col items-center py-12">
        <img src="/pp.png" class="w-28 h-328" />
        <a href="/profil/{{Auth::user()->name }}"><h2 class="mt-4 mb-6 text-xl font-Inter font-semibold">@ {{Auth::user()->name }}</h2></a>
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


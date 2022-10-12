
@extends('layouts.app')

@section('content')

<body class="w-full h-screen flex flex-row">
    @php $page = "settings"; @endphp
    <x-dashboard-header :page="$page"/>
    <div id="main" class="w-11/12 bg-gray-100 flex flex-col items-center py-12">
        <img src="/pp.png" class="w-28 h-328" />
        <a href="/profil/{{Auth::user()->name }}"><h2 class="mt-4 mb-6 text-xl font-Inter font-semibold">@ {{Auth::user()->name }}</h2></a>
        <div class="w-full">
            <form class="flex flex-col justify-center items-center" method="POST" action="/settings/modify">
                @csrf
                <div class="w-[300px]">
                    <label for="name" class="block w-full mb-2 text-sm font-medium">Pseudo</label>
                    <input name="name" type="text" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Pseudo" value="{{ Auth::user()->name }}" required>
                </div>
                @if ($errors->any())
                    @foreach ($errors->all() as $error)
                        <p class="mt-2 text-red-500">{{ $error }}</p>
                    @endforeach
                @endif
                <button type="submit" class="w-[100px] mt-4 bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow">
                    Modifer
                </button>
            </form>
        </div>
    </div>
    @vite('resources/js/app.js')
</body> 
@endsection


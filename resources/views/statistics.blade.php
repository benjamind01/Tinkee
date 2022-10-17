
@extends('layouts.app')

@section('content')

<body class="w-full h-screen flex flex-row">
    @php $page = "statistics"; @endphp
    <x-dashboard-header :page="$page"/>
    <div id="main" class="w-11/12 bg-gray-100 flex flex-col items-center py-12">
        <!-- Views -->
        <div class="grid grid-cols-3 w-full">
            <div class="w-full pt-3 px-3 md:pr-2">
                <div class="bg-white border rounded shadow p-6">
                    <div class="flex flex-row items-center">
                        <div class="flex-shrink pl-1 pr-4"><i class="fa fa-wallet fa-2x fa-fw fa-inverse"></i></div>
                        <div class="flex-1 text-right">
                            <h5 class="text-black">Total Views</h5>
                            <h3 class="text-black text-3xl">{{ $user->views }}<span class="text-green-400"><i class="fas fa-caret-down"></i></span></h3>
                        </div>
                    </div>
                </div>
            </div>
         <!-- End Views -->
         <!-- Clicks -->
            <div class="w-full pt-3 px-3 md:pr-2">
                <div class="bg-white border rounded shadow p-6">
                    <div class="flex flex-row items-center">
                        <div class="flex-shrink pl-1 pr-4"><i class="fa fa-wallet fa-2x fa-fw fa-inverse"></i></div>
                        <div class="flex-1 text-right">
                            <h5 class="text-black">Total Clicks</h5>
                            <h3 class="text-black text-3xl">{{ $totalClicks }}<span class="text-green-400"><i class="fas fa-caret-down"></i></span></h3>
                        </div>
                    </div>
                </div>
            </div>
         <!-- End Clicks -->
        </div>
    </div>
    @vite('resources/js/app.js')
</body> 
@endsection


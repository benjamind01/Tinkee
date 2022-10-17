<div class="flex flex-col items-center w-60 h-full overflow-hidden text-gray-400 bg-gray-900">
   <a class="flex items-center w-full px-3 mt-3" href="#">
      <svg class="w-8 h-8 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
         <path d="M11 17a1 1 0 001.447.894l4-2A1 1 0 0017 15V9.236a1 1 0 00-1.447-.894l-4 2a1 1 0 00-.553.894V17zM15.211 6.276a1 1 0 000-1.788l-4.764-2.382a1 1 0 00-.894 0L4.789 4.488a1 1 0 000 1.788l4.764 2.382a1 1 0 00.894 0l4.764-2.382zM4.447 8.342A1 1 0 003 9.236V15a1 1 0 00.553.894l4 2A1 1 0 009 17v-5.764a1 1 0 00-.553-.894l-4-2z" />
      </svg>
      <span class="ml-2 text-sm font-bold">Tinkee</span>
   </a>
   <div class="w-full px-2">
      <div class="flex flex-col items-center w-full mt-3 border-t border-gray-700">
         <a class="flex items-center w-full h-12 px-3 mt-2 rounded @php if($page == "dashboard") { echo 'bg-gray-700 text-white'; } else { echo 'hover:bg-gray-700 hover:text-gray-300'; } @endphp"  href="{{ route('dashboard') }}">
            <svg class="w-6 h-6 stroke-current" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
               <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
            </svg>
            <span class="ml-2 text-sm font-medium">Dashboard</span>
         </a>
         <a class="flex items-center w-full h-12 px-3 mt-2 rounded @php if($page == "statistics") { echo 'bg-gray-700 text-white'; } else { echo 'hover:bg-gray-700 hover:text-gray-300'; } @endphp" href="{{ route('statistics.index') }}">
            <svg class="w-6 h-6 stroke-current" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
               <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 8v8m-4-5v5m-4-2v2m-2 4h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
            </svg>
            <span class="ml-2 text-sm font-medium">Insights</span>
         </a>
         <a class="flex items-center w-full h-12 px-3 mt-2 rounded hover:bg-gray-700 hover:text-gray-300" href="#">
            <svg class="w-6 h-6 stroke-current" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
               <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7v8a2 2 0 002 2h6M8 7V5a2 2 0 012-2h4.586a1 1 0 01.707.293l4.414 4.414a1 1 0 01.293.707V15a2 2 0 01-2 2h-2M8 7H6a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2v-2" />
            </svg>
            <span class="ml-2 text-sm font-medium">Help</span>
         </a>
      </div>
      <div class="flex flex-col items-center w-full mt-2 border-t border-gray-700">
         <a class="flex items-center w-full h-12 px-3 mt-2 rounded @php if($page == "settings") { echo 'bg-gray-700 text-white'; } else { echo 'hover:bg-gray-700 hover:text-gray-300'; } @endphp" href="{{ route('settings.index') }}">
            <svg class="w-6 h-6 stroke-current"  xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
               <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" />
            </svg>
            <span class="ml-2 text-sm font-medium">Settings</span>
         </a>
      </div>
      <div class="flex flex-col items-center w-full ">
         <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="flex items-center w-full h-12 px-3 mt-2 rounded @php if($page == "") { echo 'bg-gray-700 text-white'; } else { echo 'hover:bg-gray-700 hover:text-gray-300'; } @endphp" href="{{ route('settings.index') }}">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
               <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15M12 9l-3 3m0 0l3 3m-3-3h12.75" />
             </svg>             
            <span class="ml-2 text-sm font-medium">Logout</span>
         </a>
         <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
         </form>
      </div>
   </div>
</div>
<!-- Component End  -->

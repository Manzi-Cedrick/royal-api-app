<x-card>

<aside id="logo-sidebar" class="fixe w-[20vw] -500 top-0 left-0 z-40  h-screen  transition-transform -translate-x-full border-r border-gray-200 sm:translate-x-0 d:bg-gray-800 d:border-gray-700" aria-label="Sidebar">
    <div class="bg-indigo-100 py-6 px-8">
    <a href="https://flowbite.com" class="flex ml-2 md:mr-24">
          <img src="https://flowbite.com/docs/images/logo.svg" class="h-8 mr-3" alt="FlowBite Logo" />
          <span class="self-center text-xl font-bold sm:text-2xl whitespace-nowrap dak:text-white">Royal Apps</span>
        </a>
    </div>
   <div class=" px-3 py-4 pb-4 overflow-y-auto bg-white d:bg-gray-800">
      <ul class="space-y-2">
         <li>
            <a href="{{route('author')}}" class="{{request('author') ? 'bg-green-500 ' :' '}} flex items-center p-2 text-base font-normal text-gray-900 rounded-lg d:text-white hover:bg-gray-100 d:hover:bg-gray-700">
               <svg aria-hidden="true" class="w-6 h-6 text-gray-500 transition duration-75 d:text-gray-400 group-hover:text-gray-900 d:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path><path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path></svg>
               <span class="ml-3">Authors </span>
            </a>
         </li>
         <li>
            <a href="{{route('books')}}" class=" {{request('books') ? 'text-red-500 bg-red-500 ' :' '}}  flex items-center p-2 text-base font-normal text-gray-900 rounded-lg d:text-white hover:bg-gray-100 d:hover:bg-gray-700">
               <svg aria-hidden="true" class="w-6 h-6 text-gray-500 transition duration-75 d:text-gray-400 group-hover:text-gray-900 d:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path><path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path></svg>
               <span class="ml-3">Books </span>
            </a>
         </li>
      </ul>
   </div>
</aside>
</x-card>
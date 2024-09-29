<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Customer Dashboard') }}
        </h2>
    </x-slot>

      <!-- Container for first row -->
      <div class="flex flex-col space-y-4 px-4 py-4">
           

        <a href="{{ url('/reservation') }}" class="flex items-center space-x-2 bg-white dark:bg-gray-800 px-4 py-8 rounded-lg shadow-md text-blue-500 hover:text-blue-700">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
            </svg>
                Booking Details
        </a>
    </div>
   
    <!-- Container for second row -->
    <div class="flex flex-col space-y-4 px-4 py-4" >
        <a href="{{ url('/post') }}" class="flex items-center space-x-2 bg-white dark:bg-gray-800 px-4 py-8 rounded-lg shadow-md text-blue-500 hover:text-blue-700">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2z"></path>
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 21v-2H7v2"></path>
              <path d="M7 3v2m10-2v2"></path>
              <path d="M9 12h1m4 0h1"></path>
            </svg>
            Vehicle Post
        </a>

        <a href="{{ url('/') }}" class="flex items-center space-x-2 bg-white dark:bg-gray-800 px-4 py-8 rounded-lg shadow-md text-blue-500 hover:text-blue-700">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 11a9 9 0 0118 0M3 17a9 9 0 0118 0M3 5a9 9 0 0118 0"></path>
            </svg>
                Home
        </a>
       
    </div>
</div>



    <!--Footer-->
    <footer class="flex flex-col space-y-10 justify-center mb-10 fixed bottom-0 left-0 right-0 z-50">

        <nav class="flex justify-center flex-wrap gap-6 text-gray-500 font-medium">
            <a class="hover:text-gray-900" href="#">Home</a>
            <a class="hover:text-gray-900" href="#">About</a>
            <a class="hover:text-gray-900" href="#">Services</a>
            <a class="hover:text-gray-900" href="#">Media</a>
            <a class="hover:text-gray-900" href="#">Gallery</a>
            <a class="hover:text-gray-900" href="#">Contact</a>
        </nav>

        <div class="flex justify-center space-x-5">
            <a href="https://facebook.com" target="_blank" rel="noopener noreferrer">
                <img src="https://img.icons8.com/fluent/30/000000/facebook-new.png" />
            </a>
            <a href="https://linkedin.com" target="_blank" rel="noopener noreferrer">
                <img src="https://img.icons8.com/fluent/30/000000/linkedin-2.png" />
            </a>
            <a href="https://instagram.com" target="_blank" rel="noopener noreferrer">
                <img src="https://img.icons8.com/fluent/30/000000/instagram-new.png" />
            </a>
            <a href="https://messenger.com" target="_blank" rel="noopener noreferrer">
                <img src="https://img.icons8.com/fluent/30/000000/facebook-messenger--v2.png" />
            </a>
            <a href="https://twitter.com" target="_blank" rel="noopener noreferrer">
                <img src="https://img.icons8.com/fluent/30/000000/twitter.png" />
            </a>
        </div>
        <p class="text-center text-gray-700 font-medium">&copy; 2024 GoCarNow. All rights reservered.</p>
    </footer>
    
</x-app-layout>

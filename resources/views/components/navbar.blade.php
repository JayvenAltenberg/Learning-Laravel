<nav class="w-full bg-gray-800 p-4 shadow-md mb-8">
    <div class="container mx-auto flex justify-between items-center">

        <!-- Links -->
        <div class="hidden md:flex space-x-6">
            <a href="/jobs" class="hover:text-gray-400">Home</a>
            <a href="#" class="hover:text-gray-400">About</a>
            <a href="#" class="hover:text-gray-400">Services</a>
            <a href="#" class="hover:text-gray-400">Contact</a>
            <a href="/job/create" class="hover:text-gray-400">Create Job</a>
        </div>

        <!-- Guest Links and logout -->
        <div class="hidden md:flex space-x-6 ml-auto">
            @guest
                <a href="/register" class="hover:text-gray-400">Register</a>
                <a href="/login" class="hover:text-gray-400">Login</a>
            @endguest

            @auth
                <form method="POST" action="/logout">
                    @csrf
                    <button type="submit" class="px-6 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 focus:outline-none">Logout</button>   
                </form>    
            @endauth
        </div>

        <!-- Mobile Menu Button -->
        <button id="menu-toggle" class="md:hidden text-gray-400 hover:text-white focus:outline-none">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
            </svg>
        </button>
    </div>

    <!-- Mobile Menu Links -->
    <div id="mobile-menu" class="hidden md:hidden flex flex-col space-y-4 mt-4">
        <a href="#" class="text-gray-400 hover:text-white">Home</a>
        <a href="#" class="text-gray-400 hover:text-white">About</a>
        <a href="#" class="text-gray-400 hover:text-white">Services</a>
        <a href="#" class="text-gray-400 hover:text-white">Contact</a>
    </div>
</nav>

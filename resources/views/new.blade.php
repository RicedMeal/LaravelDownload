<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>Project Cost Accounting</title>
    <!-- Styles -->
</head>
<body>
    <!--plm logo and title -->
    <section class="min-h-screen bg-gray-50" x-data="{ sideBar: false }">
        <nav class="fixed top-0 left-0 z-20 h-full pb-10 overflow-x-hidden overflow-y-auto transition origin-left transform bg-gray-900 w-60 md:translate-x-0" :class="{ '-translate-x-full' : !sideBar, 'translate-x-0' : sideBar }" @click.away="sideBar = false">
            <a href="/" class="flex items-center px-4 py-5">
                <img src="{{ asset('images/plmlogo.png') }}" alt="PLM Logo" width="200">
            </a>
            <!-- navigator -->
            <nav class="text-sm font-medium text-gray-500" aria-label="Main Navigation">
                <nav class="text-sm font-medium text-gray-500" aria-label="Main Navigation">
                    <!--home category side nav -->
                    <a class="flex items-center px-4 py-3 transition cursor-pointer group hover:bg-gray-800 hover:text-gray-200" href="#">
                        <svg class="shrink-0 w-5 h-5 mr-2 text-gray-400 transition group-hover:text-gray-300" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z" />
                        </svg>
                        <span>Home</span>
                    </a>
                    <!-- articles category side nav -->
                    <a class="flex items-center px-4 py-3 transition cursor-pointer group hover:bg-gray-800 hover:text-gray-200" href="#">
                        <svg class="shrink-0 w-5 h-5 mr-2 text-gray-400 transition group-hover:text-gray-300" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M5 3a1 1 0 000 2c5.523 0 10 4.477 10 10a1 1 0 102 0C17 8.373 11.627 3 5 3z" />
                            <path d="M4 9a1 1 0 011-1 7 7 0 017 7 1 1 0 11-2 0 5 5 0 00-5-5 1 1 0 01-1-1zM3 15a2 2 0 114 0 2 2 0 01-4 0z" />
                        </svg>
                        <span>Articles</span>
                    </a>
                    <!-- collection category side nav -->
                    <a class="flex items-center px-4 py-3 transition cursor-pointer group hover:bg-gray-800 hover:text-gray-200" href="#">
                        <svg class="shrink-0 w-5 h-5 mr-2 text-gray-400 transition group-hover:text-gray-300" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z" />
                            <path fill-rule="evenodd" d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm9.707 5.707a1 1 0 00-1.414-1.414L9 12.586l-1.293-1.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                        </svg>
                        <span>Collections</span>
                    </a>
                    <!-- checklists category side nav -->
                    <a class="flex items-center px-4 py-3 transition cursor-pointer group hover:bg-gray-800 hover:text-gray-200" href="#">
                        <svg class="shrink-0 w-5 h-5 mr-2 text-gray-400 transition group-hover:text-gray-300" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z" />
                            <path fill-rule="evenodd" d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm9.707 5.707a1 1 0 00-1.414-1.414L9 12.586l-1.293-1.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                        </svg>
                        <span>Checklists</span>
                    </a>
                    <!-- projects logo -->
                    <div x-data="collapse()">
                        <div class="flex items-center justify-between px-4 py-3 transition cursor-pointer group hover:bg-gray-800 hover:text-gray-200" role="button" x-spread="trigger">
                            <div class="flex items-center mr-10">
                                <svg class="shrink-0 w-5 h-5 mr-2 text-gray-400 transition group-hover:text-gray-300" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M12.316 3.051a1 1 0 01.633 1.265l-4 12a1 1 0 11-1.898-.632l4-12a1 1 0 011.265-.633zM5.707 6.293a1 1 0 010 1.414L3.414 10l2.293 2.293a1 1 0 11-1.414 1.414l-3-3a1 1 0 010-1.414l3-3a1 1 0 011.414 0zm8.586 0a1 1 0 011.414 0l3 3a1 1 0 010 1.414l-3 3a1 1 0 11-1.414-1.414L16.586 10l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                            <div x-data="{ open: false }" class="relative">
                                <!-- dropdown button projects -->
                                <div class="flex items-center cursor-pointer mr-10">
                                    <span @click="open = !open">Projects</span>
                                    <svg :class="{ 'rotate-90': open }" class="shrink-0 w-4 h-4 ml-10 transition transform" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                            
                                <!-- dropdown contents projects -->
                                <div class="absolute left-0 mt-2 bg-white text-gray-800 border rounded shadow-md" x-show="open" @click.away="open = false" x-cloak>
                                    <a class="flex items-center py-2 pl-4 pr-4 transition cursor-pointer hover:bg-gray-800 hover:text-gray-200" href="#">Create Project</a>
                                    <a class="flex items-center py-2 pl-4 pr-4 transition cursor-pointer hover:bg-gray-800 hover:text-gray-200" href="#">Draft</a>
                                    <a class="flex items-center py-2 pl-4 pr-4 transition cursor-pointer hover:bg-gray-800 hover:text-gray-200" href="#">Completed</a>
                                </div>
                            </div>
                                <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>                        
                            </div>
                    <div> 
                    <!--hala ano to category side nav -->                  
                    <a class="flex items-center px-4 py-3 transition cursor-pointer group hover:bg-gray-800 hover:text-gray-200" href="#">
                        <svg class="shrink-0 w-5 h-5 mr-2 text-gray-400 transition group-hover:text-gray-300" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M5 5a3 3 0 015-2.236A3 3 0 0114.83 6H16a2 2 0 110 4h-5V9a1 1 0 10-2 0v1H4a2 2 0 110-4h1.17C5.06 5.687 5 5.35 5 5zm4 1V5a1 1 0 10-1 1h1zm3 0a1 1 0 10-1-1v1h1z" clip-rule="evenodd" />
                            <path d="M9 11H3v5a2 2 0 002 2h4v-7zM11 18h4a2 2 0 002-2v-5h-6v7z" />
                        </svg>
                        <span>Hala Ano to</span>
                    </a>
                    </div>
                    <div>
                    <!-- settings to category side nav --> 
                    <a class="flex items-center px-4 py-3 transition cursor-pointer group hover:bg-gray-800 hover:text-gray-200" href="#">
                        <svg class="shrink-0 w-5 h-5 mr-2 text-gray-400 transition group-hover:text-gray-300" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd" />
                        </svg>
                        <span>Settings</span>
                    </a>
                    </div>
                </nav>
            </nav>
        </nav>
        <div class="ml-0 transition md:ml-60">
            <header class="flex items-center justify-between w-full px-4 h-14">
                <button class="block btn btn-light-secondary md:hidden" @click.stop="sideBar = true">
                    <span class="sr-only">Menu</span>
                    <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd" />
                    </svg>
                </button>
                <div class="hidden md:flex items-center ml-auto"> <!-- use ml-(no.) to adjust margin -->
                    <!-- search bar -->
                    <div class="hidden md:flex items-center border border-gray-400 square p-2 ml-10"> <!-- use ml-(no.) to adjust margin -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-2 text-gray-400" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                        <input class="bg-transparent border-0 form-input outline-none max-w-100 placeholder-gray-400" placeholder="Search for articles..." />
                    </div>
                
                    <!-- notification  -->
                    <a href="#" class="flex text-gray-500 ml-8"> <!-- use ml-(no.) to adjust margin -->
                        <svg class="shrink-0 w-6 h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zM10 18a3 3 0 01-3-3h6a3 3 0 01-3 3z"/>
                        </svg>
                    </a>
                  <!-- user profile logo -->
                <div x-data="{ isOpen: false }" class="relative inline-block">
                    <div class="flex items-center ml-5">
                        <div @click="isOpen = !isOpen" class="flex items-center bg-white border-0 py-2 px-2 focus:outline-none hover:bg-gray-200 rounded text-black text-base mt-4 md:mt-0 cursor-pointer">
                            <img src="{{ asset('images/user.jpg') }}" alt="Photo of User Here" class="w-8 h-8 rounded-full object-cover">
                            <span class="ml-3 text-l">Hello, <b>Enzo!</b></span>
                </div>
                    <!-- user profile content/functionality -->
                        <div x-show="isOpen" @click.away="isOpen = false" class="absolute top-12 right-0 mt-2 bg-white text-gray-800 border rounded shadow-md" style="display: none; z-index: 10;">
                            <a href="#" class="block px-4 py-2 hover:bg-blue-200">Profile</a>
                            <a href="#" class="block px-4 py-2 hover:bg-blue-200">Account Settings</a>
                            <a href="#" class="block px-4 py-2 hover:bg-blue-200">Logout</a>
                        </div>
                    </div>
                </div>
                <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>
            </div>
            </header>
            <div class="p-4">
                <!-- Add your main content here -->
                <div class="-mt-2 border-4 border-dashed rounded h-96">
                    <!-- Your content goes hereeee -->
                </div>
            </div>
        </div>
        <!-- Sidebar Backdrop -->
        <div class="fixed inset-0 z-10 w-screen h-screen bg-black bg-opacity-25 md:hidden" x-show.transition="sideBar" x-cloak></div>
    </section>
    <script src="/js/app.js"></script>
</body>
</html>


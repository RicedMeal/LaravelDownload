<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
        <head>
                <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
                <title>Project Cost Accounting</title>

                <!-- Styles -->
        </head>
        <body class="antialiased">
                <!-------------- START OF NAVIGATION TOP BAR -------------------->
                <header class="text-gray-600 body-font">
                    <div class="container mx-1 flex flex-wrap p-4 flex-col md:flex-row items-center">
                        <!--- LOGO --->
                        <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
                            <img src="https://upload.wikimedia.org/wikipedia/en/d/dc/PLM_Seal_2013.png" alt="PLM Logo" class="w-15 h-16 text-white p-2 bg-gray-100 rounded-full">
                            <span class="ml-3 text-xl">Pamantasan ng Lungsod ng Maynila</span>
                        </a>
                        <div class="md:ml-auto flex items-center text-base"  style="margin-left: 140px;">
                            <input type="text" placeholder="Search..." class="rounded-l-md p-2 border-t mr-0 border-b border-l text-gray-800 border-gray-400 bg-white" style="width: 500px; border-top-left-radius: 5px; border-bottom-left-radius: 5px;" />
                            <button class="px-4 py-2 rounded-r-md text-white bg-indigo-500 border-t border-b border-r border-indigo-600 hover:bg-indigo-600" style="border-top-right-radius: 5px; border-bottom-right-radius: 5px;">Search</button>
                            <button class="relative px-4 py-2 ml-6 mr-4 rounded-md text-white bg-white-700">
                                <img src="https://static.vecteezy.com/system/resources/thumbnails/001/505/138/small/notification-bell-icon-free-vector.jpg" alt="Notifications" class="w-9 h-9 mr-2 bg-white rounded-full">
                                <span class="absolute left-13 bottom-6 bg-red-500 w-3 h-3 rounded-full"></span>
                            </button>
                        </div>
                        <!--- USER PROFILE --->
                        <div class="relative inline-block">
                            <div class="flex items-center">
                                <div class="flex items-center bg-white border-0 py-2 px-2 focus:outline-none hover:bg-gray-200 rounded text-black text-base mt-4 md:mt-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M5.52 19c.64-2.2 1.84-3 3.22-3h6.52c1.38 0 2.58.8 3.22 3"/>
                                        <circle cx="12" cy="10" r="3"/>
                                        <circle cx="12" cy="12" r="10"/>
                                    </svg>
                                    <span class="ml-3 text-l">Hello, <b>Juan Dela Cruz</b></span>
                                </div>

                                <div class="ml-0">
                                    <button class="w-1/10 bg-white px-2 py-3 rounded-lg hover:bg-gray-200" onclick="toggleDropdown(this)">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M6 9l6 6 6-6"/>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                            <!--- USER PROFILE - DROPDOWN BUTTON --->
                            <div class="absolute hidden mt-2 bg-white text-gray-800 border rounded shadow-md">
                                <a href="#" class="block px-4 py-2 hover:bg-gray-200">Profile</a>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-200">Account Settings</a>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-200">Logout</a>
                            </div>
                                <script>
                                function toggleDropdown(button) {
                                    // Add your logic to toggle the dropdown here
                                    console.log("Dropdown button clicked");
                                }
                                </script>
                        </div>
                    </div>
                </header>
                <!-------------- END OF NAVIGATION TOP BAR ----------------------->

                <!-------------- START OF NAVIGATION SIDE BAR -------------------->
                <div class="flex flex-1 h-screen overflow-hidden bg-white">
                    <div class="hidden md:flex md:flex-shrink-0">
                        <div class="flex flex-col w-64">
                            <div class="flex flex-col flex-grow pt-5 overflow-y-auto bg-indigo-700 border-r">
                                <div class="flex flex-col items-center flex-shrink-0 px-4">
                                    <a class="px-8 text-left focus:outline-none" href="/groups/sidebar/">
                                        <h2 class="block p-2 text-xl font-medium tracking-tighter text-white transition duration-500 ease-in-out transform cursor-pointer hover:text-white">Project Cost Accounting</h2>
                                    </a>
                                    <button class="hidden rounded-lg focus:outline-none focus:shadow-outline">
                                        <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
                                            <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                                            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                        </svg>
                                    </button>
                                    </div>
                                    <!--- NAVIGATION LINKS --->
                                    <div class="flex flex-col flex-grow px-4 mt-5">
                                        <nav class="flex-1 space-y-15 bg-indigo-700">
                                            <ul>
                                                <li>
                                                    <a class="inline-flex items-center w-4/5 px-4 py-2 mt-1 text-base text-white transition duration-500 ease-in-out transform bg-indigo-600 rounded-lg focus:shadow-outline" white="" 70="" href="#">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                            <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline>
                                                        </svg>
                                                        <span class="ml-4"> Home</span>
                                                    </a>
                                                </li>
                                                <ul>
                                                    <div class="flex items-center justify-between w-full">
                                                    <a class="inline-flex items-center w-4/5 px-4 py-2 mt-1 text-base text-white transition duration-500 ease-in-out transform border-indigo-800 rounded-lg hover:border-indigo-800 focus:shadow-outline hover:bg-indigo-600" href="#">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                        <path d="M22 19a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h5l2 3h9a2 2 0 0 1 2 2z"></path>
                                                        </svg>
                                                        <span class="ml-4"> Project</span>
                                                    </a>
                                                    <button class="w-1/5 bg-indigo-700 px-4 py-2 rounded-lg hover:bg-indigo-600" onclick="toggleDropdown(this)">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                        <path d="M9 18l6-6-6-6"/>
                                                        </svg>
                                                    </button>
                                                    </div>
                                                        <script>
                                                        function toggleDropdown(button) {
                                                            // Add your logic to toggle the dropdown here
                                                            console.log("Dropdown button clicked");
                                                        }
                                                        </script>

                                                    <div class="flex items-center justify-between w-full">
                                                        <a class="inline-flex items-center w-4/5 px-4 py-2 mt-1 text-base text-white transition duration-500 ease-in-out transform border-indigo-800 rounded-lg hover:border-indigo-800 focus:shadow-outline hover:bg-indigo-600" href="#">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                                                            <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                                            </svg>
                                                            <span class="ml-4">Vendors</span>
                                                        </a>
                                                        <button class="w-1/5 bg-indigo-700 px-4 py-2 rounded-lg hover:bg-indigo-600" onclick="toggleDropdown(this)">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                            <path d="M9 18l6-6-6-6"/>
                                                            </svg>
                                                        </button>
                                                    </div>

                                                        <script>
                                                        function toggleDropdown(button) {
                                                            // Add your logic to toggle the dropdown here
                                                            console.log("Dropdown button clicked");
                                                        }
                                                        </script>
                                                    </li>
                                                </ul>

                                                    <a class="inline-flex items-center w-4/5 px-4 py-2 mt-1 text-base text-white transition duration-500 ease-in-out transform border-indigo-800 rounded-lg hover:border-indigo-800 focus:shadow-outline hover:bg-indigo-600" href="#">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                                        </svg>
                                                        <span class="ml-4">Settings</span></a>
                                                </li>
                                        </nav>
                                    </div>
                                    <div class="flex flex-shrink-0 p-4 px-4 bg-indigo-600">
                                        <a href="#" class="flex-shrink-0 block w-full group">
                                            <div class="flex items-center">
                                                <div>
                                                    <img class="inline-block rounded-full h-9 w-9" src="/assets/images/avatar.png" alt="">
                                                </div>
                                                <div class="ml-3">
                                                    <p class="text-sm font-medium text-white">Wicked LAbs</p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col flex-1 w-0 overflow-hidden">
                            <main class="relative flex-1 overflow-y-auto focus:outline-none">
                                <div class="py-6">
                                    <div class="px-4 mx-auto max-w-7xl sm:px-6 md:px-8">
                                        <h1 class="text-lg text-neutral-600">Here is where you put your stuff</h1>
                                    </div>
                                    <div class="px-4 mx-auto max-w-7xl sm:px-6 md:px-8">
                                        <!-- Put your content here -->
                                        <div class="py-4">
                                            <div class="rounded-lg bg-gray-50 h-96"></div>
                                        </div>
                                        <!-- Do not cross the closing tag underneath this coment-->
                                    </div>
                                </div>
                            </main>
                        </div>
                    </div>
        </body>
</html>

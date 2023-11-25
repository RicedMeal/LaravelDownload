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
            <header class="text-gray-600 body-font">
                    <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
                        <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-indigo-500 rounded-full" viewBox="0 0 24 24">
                                <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
                            </svg>
                            <span class="ml-3 text-xl">Pamantasan ng Lungsod ng Maynila</span>
                        </a>
                        <nav class="md:ml-auto flex flex-wrap items-center text-base justify-center">
                            <a class="mr-5 hover:text-gray-900">First Link</a>
                            <a class="mr-5 hover:text-gray-900">Second Link</a>
                            <a class="mr-5 hover:text-gray-900">Third Link</a>
                            <a class="mr-5 hover:text-gray-900">Fourth Link</a>
                        </nav>
                        <button class="inline-flex items-center bg-gray-100 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded text-base mt-4 md:mt-0">Button
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-1" viewBox="0 0 24 24">
                                <path d="M5 12h14M12 5l7 7-7 7"></path>
                            </svg>
                        </button>
                    </div>
                </header>

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
                                                                        <div class="flex flex-col flex-grow px-4 mt-5">
                                                                            <nav class="flex-1 space-y-10 bg-indigo-700">
                                                                                <ul>
                                                                                    <li>
                                                                                        <a class="inline-flex items-center w-full px-4 py-2 mt-1 text-base text-white transition duration-500 ease-in-out transform bg-indigo-600 rounded-lg focus:shadow-outline" white="" 70="" href="#">
                                                                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                                                                                            </svg>
                                                                                            <span class="ml-4"> Overview</span>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a class="inline-flex items-center w-full px-4 py-2 mt-1 text-base text-white transition duration-500 ease-in-out transform border-indigo-800 rounded-lg hover:border-indigo-800 focus:shadow-outline hover:bg-indigo-600" href="#">
                                                                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                                                                                            </svg>
                                                                                            <span class="ml-4">Chat</span>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a class="inline-flex items-center w-full px-4 py-2 mt-1 text-base text-white transition duration-500 ease-in-out transform border-indigo-800 rounded-lg hover:border-indigo-800 focus:shadow-outline hover:bg-indigo-600" href="#">
                                                                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                                                                            </svg>
                                                                                            <span class="ml-4">User</span>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a class="inline-flex items-center w-full px-4 py-2 mt-1 text-base text-white transition duration-500 ease-in-out transform border-indigo-800 rounded-lg hover:border-indigo-800 focus:shadow-outline hover:bg-indigo-600" href="#">
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

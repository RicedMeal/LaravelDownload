<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>Project Cost Accounting</title>
    <!-- Styles -->
    @livewireStyles
</head>
<body>
    <!-- SIDE BAR AND TOP BAR -->
    @include('layouts.nav')
            <!-- Page Content -->
            <div class="p-4 ml-0 transition md:ml-60">
                <!-- Add your main content here -->
                <div class="bg-gray-200 rounded-md p-4">
                </div>
            </div>
        </div>
        <!-- Sidebar Backdrop -->
        <div class="fixed inset-0 z-10 w-screen h-screen bg-black bg-opacity-25 md:hidden" x-show.transition="sideBar" x-cloak></div>
    </section>
    <script src="/js/app.js"></script>
    @livewireScripts
</body>
</html>

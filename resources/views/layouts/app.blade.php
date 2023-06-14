<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accounts</title>
    @vite("resources/css/app.css")
    </head>
<body>
    <nav class="bg-gray-800">
        <div class="container mx-auto px-4">
            <div class="flex items-center justify-between h-16">
                <div class="flex items-center">
                    <a href="/" class="text-white font-semibold text-lg">Account Management</a>
                </div>
                <div class="flex">
                    <a href="/" class="text-gray-300 hover:bg-gray-700 px-3 py-2 rounded-md">Accounts</a>
                    <a href="/create" class="text-gray-300 hover:bg-gray-700 px-3 py-2 rounded-md">Add</a>
                    <a href="" class="text-gray-300 hover:bg-gray-700 px-3 py-2 rounded-md">Contact</a>
                </div>
            </div>
        </div>   
    </nav>
    @yield('content')
</body>

</html>
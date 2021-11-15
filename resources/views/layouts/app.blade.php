<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Tailwind CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" integrity="sha512-wnea99uKIC3TJF7v4eKk4Y+lMz2Mklv18+r4na2Gn1abDRPPOeef95xTzdwGD9e6zXJBteMIhZ1+68QC5byJZw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>@yield('title') - Laravel App</title>
</head>
<body class="bg-gray-100 text-gray-800">

    <nav class="flex py-5 bg-indigo-500 text-white">
        <div class="w-1/2 px-12 mr-auto">
            <p class="text-2xl font-bold">My Application</p>
        </div>
        <ul class="w-1/2 px-16 ml-auto flex justify-end pt-1">
            <li class="mx-6">
                <a class="font-semibold hover:bg-indigo-700 py-3 px-4 rounded-md" 
                href="{{ route('login.index') }}" >Log In</a>
            </li>
            <li>
                <a class="font-semibold border-2 border-white py-2 px-4 rounded-md hover:bg-white hover:text-indigo-700" 
                href="{{ route('register.index') }}">Register</a>
            </li>
        </ul>
    </nav>

    @yield('content')
</body>
</html>
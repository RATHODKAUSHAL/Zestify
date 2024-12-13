<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css"
        integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link href="{{ asset('assets/front/Logo.png') }}" rel="shortcut icon"/>
</head>

<body>
    {{-- navbar --}}
    <nav class="bg-gradient-to-b from-violet-200 lg:sticky to-white">
        <div class="container mx-auto flex items-center justify-between w-full h-24">
            <!-- Logo -->
            <div class="font-bold text-4xl text-violet-700">
                Zestify
            </div>
            <!-- Location -->
            <div class="text-center">
                <p class="text-gray-500 text-sm">Select Your Nearest Location</p>
                <p class="font-medium text-base text-gray-700">Ahmedabad</p>
            </div>
            <!-- Search Bar -->
            <div class="w-1/2">
                <input placeholder="Search Here"
                    class="border p-3 w-full border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-violet-500"
                    type="text">
            </div>
            {{-- <!-- User Button -->
      <div class="flex flex-col items-center">
        <button class="flex items-center gap-2 px-2 py-2 text-gray-700 bg-white border border-gray-300 rounded-full hover:bg-violet-100">
          <i class="fa-solid fa-user"></i>
        </button>
        User
      </div> --}}

            {{-- Login --}}
            <div>
                <button
                    class="rounded-full bg-violet-500 hover:bg-violet-600 text-xl text-white py-2 px-6">Login</button>
            </div>

            {{-- cart --}}
            <div class="flex flex-row gap-2">
                <i class="fa-solid fa-cart-shopping text-xl"></i>
                <p class="text-base font-medium">Cart</p>
            </div>
        </div>
    </nav>
    @yield('Home')

    {{-- footer --}}
    <footer class="h-screen bg-gray-50 pt-20">
        <div class="container mx-auto flex items-center justify-between w-full h-24 pt-20">
            <div>
                <h1 class="text-2xl font-bold">
                    Categories
                </h1>
            </div>
        </div>
        <div class="container mx-auto flex items-center justify-between w-full pt-10">
            <div class="flex flex-row w-full text-gray-500 text-base justify-between">
                <div>
                    <ul>
                        <li class="py-1">Fruits & Vegetables</li>
                        <li class="py-1">Baby Food</li>
                        <li class="py-1">Breakfast & Sauces</li>
                        <li class="py-1">Cleaning Esentials</li>
                        <li class="py-1">Homegrown Brands</li>
                    </ul>
                </div>
                <div>
                    <ul>
                        <li class="py-1">Fruits & Vegetables</li>
                        <li class="py-1">Baby Food</li>
                        <li class="py-1">Breakfast & Sauces</li>
                        <li class="py-1">Cleaning Esentials</li>
                        <li class="py-1">Homegrown Brands</li>
                    </ul>
                </div>
                <div>
                    <ul>
                        <li class="py-1">Fruits & Vegetables</li>
                        <li class="py-1">Baby Food</li>
                        <li class="py-1">Breakfast & Sauces</li>
                        <li class="py-1">Cleaning Esentials</li>
                        <li class="py-1">Homegrown Brands</li>
                    </ul>
                </div>
                <div>
                    <ul>
                        <li class="py-1">Fruits & Vegetables</li>
                        <li class="py-1">Baby Food</li>
                        <li class="py-1">Breakfast & Sauces</li>
                        <li class="py-1">Cleaning Esentials</li>
                        <li class="py-1">Homegrown Brands</li>
                    </ul>
                </div>
                <div>
                    <ul>
                        <li class="py-1">Fruits & Vegetables</li>
                        <li class="py-1">Baby Food</li>
                        <li class="py-1">Breakfast & Sauces</li>
                        <li class="py-1">Cleaning Esentials</li>
                        <li class="py-1">Homegrown Brands</li>
                    </ul>
                </div>
                
            </div>
        </div>
        <div class="mt-20 mx-32 pt-20 flex justify-between border-gray-300 border-t">
            <div>
                <div class="font-bold text-4xl text-violet-700">
                    <a href="{{ route('index') }}">Zestify</a>
                </div>
                <div class="pt-5 flex gap-5">
                    <a href=""><i class="fa-brands fa-instagram text-2xl text-gray-400"></i></a>
                    <a href=""> <i class="fa-brands fa-facebook text-2xl text-gray-400"></i></a>
                    <a href=""><i class="fa-brands fa-x-twitter text-2xl text-gray-400"></i></a>
                    <a href=""><i class="fa-brands fa-linkedin text-2xl text-gray-400"></i></a>
                </div>
                <div class="flex pt-2">
                    <p class="text-base text-gray-400">© Zestify Technologies Private Limited</p>
                </div>
            </div>
            <div class="text-gray-700 font-medium text-base">
                    <ul>
                        <li class="py-1">Home</li>
                        <li class="py-1">Delivery Areas</li>
                        <li class="py-1">Careers</li>
                        <li class="py-1">Customer Support</li>
                        <li class="py-1">Press</li>
                    </ul>
            </div>
            <div class="text-gray-700 font-medium text-base">
                <ul>
                    <li class="py-1">Home</li>
                    <li class="py-1">Delivery Areas</li>
                    <li class="py-1">Careers</li>
                    <li class="py-1">Customer Support</li>
                    <li class="py-1">Press</li>
                </ul>
            </div>
            <div>
                <div class="text-gray-900 font-medium text-base">
                    <p>Download App</p>
                </div>
                <div class="py-3">
                    <button class="p-3 my-2 border flex flex-row gap-2 rounded-md">
                        <i class="fa-brands fa-google-play text-2xl text-gray-400"></i>
                        <p class="text-sm font-medium">Get it on playStore</p>  
                    </button>
                    <button class="p-3 my-2 border flex flex-row gap-2 rounded-md">
                        <i class="fa-brands fa-apple text-2xl text-gray-400"></i>
                        <p class="text-sm font-medium">Get it on Apple Store</p>  
                    </button>
                </div>

            </div>
        </div>
    </footer>
</body>

</html>

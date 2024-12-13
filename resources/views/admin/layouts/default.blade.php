<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css"
        integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    @vite('resources/css/app.css')
    <link class="h-full" href="{{ asset('assets/front/Logo.png') }}" rel="shortcut icon" />
</head>

<body>
    <div class="flex h-screen bg-gray-100">
        <!-- Sidebar -->
        <div class="w-64 bg-white shadow-lg">
            <!-- Logo -->
            <div class="font-bold h-20 text-3xl flex items-center px-10 text-violet-700 border-b">
                Zestify
            </div>
            <!-- Navigation Links -->
            <nav class="mt-5">
                <ul class="">
                    <li>
                        <a href="#dashboard"
                            class="flex items-center p-3 gap-5 text-gray-700 hover:bg-violet-100 hover:text-violet-700 transition rounded-md">
                            <i class="fa-regular fa-file text-xl"></i>
                            Dashboard
                        </a>
                    </li>
                    <li>
                        <a href="#users"
                            class="flex items-center gap-2 p-3 justify-between  text-gray-700 hover:bg-violet-100 hover:text-violet-700 transition rounded-md">
                            <div class="flex flex-row items-center gap-5">
                                <i class="fa-regular fa-user text-xl"></i>
                                <p>Users</p>
                            </div>
                            <i class="fa-solid fa-caret-down"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#settings"
                            class="flex items-center p-3 text-gray-700 gap-5 hover:bg-violet-100 hover:text-violet-700 transition rounded-md">
                            <i class="fa-solid fa-list text-xl"></i>
                            <p>Category</p>
                        </a>
                    </li>
                    <li>
                        <a href="#settings"
                            class="flex items-center p-3 text-gray-700 gap-5 hover:bg-violet-100 hover:text-violet-700 transition rounded-md">
                            <i class="fa-brands fa-dropbox text-xl"></i>
                            <p>Product</p>
                        </a>
                    </li>
                    <li>
                        <a href="#settings"
                            class="flex items-center p-3 text-gray-700 gap-5 hover:bg-violet-100 hover:text-violet-700 transition rounded-md">
                            <i class="fa-solid fa-cart-shopping text-xl"></i>
                            <p>Cart</p>
                        </a>
                    </li>
                    <li>
                        <a href="#settings"
                            class="flex items-center p-3 text-gray-700 gap-5 hover:bg-violet-100 hover:text-violet-700 transition rounded-md">
                            <i class="fa-solid fa-gear text-xl"></i>
                            <p>Setting</p>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
        <!-- Main Content -->
        <div class="flex-1 flex flex-col">
            <!-- Top Navbar -->
            <header class="h-20 bg-white flex items-center justify-end px-6 border-b">
                {{-- Profile and Logout Dropdown --}}
                <div class="relative">
                    <button
                        class="flex items-center space-x-2 bg-gray-100 p-2 rounded-full hover:bg-gray-200 focus:outline-none">
                        <span class="text-gray-800 font-semibold">Admin</span>
                        <i class="fa-solid fa-caret-down"></i>
                    </button>

                    {{-- Dropdown Menu --}}
                    <div class="absolute right-0 mt-2 w-56 bg-white border border-gray-200 rounded-lg shadow-xl z-10 opacity-0 scale-95 transform transition-all duration-200 ease-in-out group-hover:opacity-100 group-hover:scale-100">
                        <div class="py-4 px-6">
                            <!-- User Info -->
                            <div class="flex items-center space-x-3 mb-4">
                               <div class="p-2 px-3 rounded-full border">
                                <i class="fa-solid fa-user" style="color: #b400f5;"></i>
                               </div>
                                <div>
                                    <p class="font-semibold text-gray-800">John Doe</p>
                                    <p class="text-sm text-gray-500">admin@example.com</p>
                                </div>
                            </div>
            
                            <!-- User Details -->
                            <div class="text-sm text-gray-600 mb-4">
                                <p><strong>Role:</strong> Admin</p>
                                <p><strong>Last Login:</strong> 2024-12-12 14:30</p>
                            </div>
            
                            <!-- Logout Button -->
                           <button>
                            <a href="{{ route('admin.logout') }}" class="block bg-violet-500 text-white hover:bg-violet-700 py-2 px-4 rounded-full text-sm transition-colors duration-200">
                                <i class="fa-solid fa-right-from-bracket"></i>
                                Logout
                            </a>
                           </button>
                        </div>
                    </div>
                </div>
            </header>
            <!-- Content Section -->
            <main class="flex-1 p-6">
                @yield('home')
            </main>
        </div>
    </div>
</body>
<script>
    const dropdownButton = document.querySelector('button');
    const dropdownMenu = document.querySelector('div.absolute');

    dropdownButton.addEventListener('click', () => {
        dropdownMenu.classList.toggle('opacity-100');
        dropdownMenu.classList.toggle('scale-100');
    });
</script>

</html>

<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    </head>

    @vite('resources/css/app.css')
        
    <body class="bg-gradient-to-r from-purple-700 to-pink-600 min-h-screen flex items-center justify-center">

        <section class="p-6 md:p-8 lg:p-10 w-full max-w-xl">
            <div class="bg-white rounded-lg shadow-xl p-6 md:p-8 lg:p-10">
                <div class="text-center mb-6">
                    <h1 class="text-4xl font-bold text-purple-700">Zestify</h1>
                    <p class="text-lg text-gray-600 mt-2">Admin Login</p>
                </div>
    
                <!-- Session Alerts -->
                @if(Session::has('success'))
                <div class="alert alert-success mb-4 p-3 bg-green-100 text-green-800 rounded-md">
                    {{ Session::get('success') }}
                </div>
                @endif
    
                @if(Session::has('error'))
                <div class="alert alert-error mb-4 p-3 bg-red-100 text-red-800 rounded-md">
                    {{ Session::get('error') }}
                </div>
                @endif
    
                <!-- Login Form -->
                <form action="{{ route('admin.authenticate') }}" method="POST">
                    @csrf
    
                    <div class="space-y-4">
                        <!-- Email Field -->
                        <div>
                            <label for="email" class="text-gray-500 text-xl">Email</label>
                            <input type="email" name="email" id="email" class="block w-full px-4 py-3 rounded-md border shadow-sm focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent @error('email') border-red-500 @enderror" placeholder="name@example.com" value="{{ old('email') }}">
                            
                            @error('email') 
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>
    
                        <!-- Password Field -->
                        <div class="">
                            <label for="password" class="text-gray-500 text-xl">Password</label>
                            <input type="password" name="password" id="password" class="block w-full px-4 py-3 rounded-md border shadow-sm focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent @error('password') border-red-500 @enderror" placeholder="Password">
                            
                            @error('password')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>
    
                        <!-- Login Button -->
                        <div class="flex justify-center">
                            <button type="submit" class="w-full py-3 bg-purple-600 text-white font-bold rounded-md hover:bg-purple-700 transition duration-200 focus:outline-none focus:ring-4 focus:ring-purple-500">
                                Log In
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </section>
    
    </body>
    </section>
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>

</html>

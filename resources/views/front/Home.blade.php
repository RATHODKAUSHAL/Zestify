@extends('front.layouts.default')

@section('Home')
<div>
 {{-- navbar --}}
<nav class="bg-gradient-to-b from-gray-300 to-white">
  <div class="container mx-auto flex items-center justify-between w-full h-24 px-8">
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
      <input 
        placeholder="Search Here" 
        class="border p-3 w-full border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-violet-500" 
        type="text"
      >
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
      <button class="rounded-full bg-violet-500 hover:bg-violet-600 text-xl text-white py-2 px-6">Login</button>
    </div>

    {{-- cart --}}
    <div>
      <i class="fa-solid fa-cart-shopping text-xl"></i>
    </div>
  </div>
</nav>

</div>
@endsection
@extends('front.layouts.default')

@section('Home')
{{-- home page --}}
@php
    $products = [
        ['name' => 'Amul Masti', 'price' => 35, 'image' => 'assets/front/amul_masti.jpeg', 'time' => '12 Mins'],
        ['name' => 'Madhur Sugar', 'price' => 277, 'image' => 'assets/front/madhur_sugar.jpeg', 'time' => '15 Mins'],
        ['name' => 'Kurkure Solid Masti', 'price' => 20, 'image' => 'assets/front/Kurkure_Solid_Masti.jpeg', 'time' => '15 Mins'],
        ['name' => 'Amul Fresh Malai Paneer', 'price' => 88, 'image' => 'assets/front/Amul_Fresh_Malai_Paneer.jpeg', 'time' => '15 Mins'],
        ['name' => 'Maggi Noddles', 'price' => 60, 'image' => 'assets/front/Maggi.jpeg', 'time' => '15 Mins'],
        ['name' => 'Fortune Sunlite Refined Sunflower Oil', 'price' => 173, 'image' => 'assets/front/Fortune_Sunlite_Refined_Sunflower_Oil.jpeg', 'time' => '15 Mins'],
        ['name' => 'Potato', 'price' => 58, 'image' => 'assets/front/Potato.jpeg', 'time' => '15 Mins'],
    ];
    $Fruits = [
        ['name' => 'Mosambi', 'price' => 35, 'image' => 'assets/front/Mosambi.jpeg', 'time' => '12 Mins'],
        ['name' => 'Pomegranate', 'price' => 277, 'image' => 'assets/front/Pomegranate.jpeg', 'time' => '15 Mins'],
        ['name' => 'Garlic', 'price' => 20, 'image' => 'assets/front/Garlic.jpeg', 'time' => '15 Mins'],
        ['name' => 'Coconut', 'price' => 88, 'image' => 'assets/front/Coconut.jpeg', 'time' => '15 Mins'],
        ['name' => 'Banana', 'price' => 60, 'image' => 'assets/front/Banana.jpeg', 'time' => '15 Mins'],
        ['name' => 'Capsicum Green', 'price' => 173, 'image' => 'assets/front/Capsicum_Green.jpeg', 'time' => '15 Mins'],
        ['name' => 'Curry Leaves', 'price' => 58, 'image' => 'assets/front/Curry_Leaves.jpeg', 'time' => '15 Mins'],
    ];
@endphp
<div>
  <div class="flex justify-center items-center m-10">
      <img src="{{ asset('assets/img/home_image.png') }}" alt="home_image">
  </div>

  <div class="mx-32">
    <div class="flex justify-between">
      <h3 class="text-xl font-medium">Trending Near You</h3>
      <button class="text-red-500 font-semibold">See All >></button>
    </div>
    <div class="flex flex-row justify-between">
      @foreach($products as $product)
      <a href="{{ route('front.product') }}">
        <div>
          <div class="py-5">
            <img src="{{ asset($product['image']) }}" alt="{{ $product['name'] }}" class="w-32 rounded-xl">
          </div>
          <div class="bg-green-400 justify-center w-20 items-center gap-1 flex flex-row text-xs p-1 rounded-md">
            <i class="fa-regular fa-clock"></i>
            <p>{{ $product['time'] }}</p>
          </div>
          <div>
            <h3 class="text-base font-medium">{{ \Illuminate\Support\Str::limit($product['name'], 15) }}</h3>
          </div>
          <div class="pt-10">
            <p class="text-base font-medium">₹{{ $product['price'] }}</p>
          </div>
          <div class="pt-2">
            <button class="border border-red-500 rounded-md p-2 px-5 font-medium hover:text-white hover:bg-red-500">Add To Cart</button>
          </div>
        </div>
      </a>
      @endforeach
    </div>
  </div>  
  <div class="mx-32 mt-10">
    <div class="flex justify-between">
      <h3 class="text-xl font-medium">Fruits & Vegetables</h3>
      <button class="text-red-500 font-semibold">See All >></button>
    </div>
    <div class="flex flex-row justify-between">
      @foreach($Fruits as $Fruit)
      <div>
        <div class="py-5">
          <img src="{{ asset($Fruit['image']) }}" alt="{{ $Fruit['name'] }}" class="w-32 rounded-xl">
        </div>
        <div class="bg-green-400 justify-center w-20 items-center gap-1 flex flex-row text-xs p-1 rounded-md">
          <i class="fa-regular fa-clock"></i>
          <p>{{ $Fruit['time'] }}</p>
        </div>
        <div>
          <h3 class="text-base font-medium">{{ \Illuminate\Support\Str::limit($Fruit['name'], 15) }}</h3>
        </div>
        <div class="pt-10">
          <p class="text-base font-medium">₹{{ $Fruit['price'] }}</p>
        </div>
        <div class="pt-2">
          <button class="border border-red-500 rounded-md p-2 px-5 font-medium hover:text-white hover:bg-red-500">Add To Cart</button>
        </div>
      </div>
      @endforeach
    </div>
  </div>  
</div>
@endsection

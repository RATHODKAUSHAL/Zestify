@extends('front.layouts.default')

@section('Home')
    <div class="mx-auto w-4/5 mt-5 xl:w-[1040px]">
        <div class="text-gray-600">
            <a href="/">
                <span>Home > </span>
            </a>
            <a href="#Fresh_Fruits">
                <span>Fresh Fruits ></span>
            </a>
            <a href="#Pomegranate">
                <span class="text-black">Pomegranate</span>
            </a>
        </div>
        <div class="my-10 flex flex-row">
            <div class="gap-2">
                <div>
                    <img src="{{ asset('assets/front/Pomegranate.jpeg') }}" alt=""
                        class="w-12 rounded-md border border-black">
                </div>
                <div>
                    <img src="{{ asset('assets/front/Note.jpg') }}" alt=""
                        class="w-12 py-2 my-2 object-cover rounded-md border border-black">
                </div>
            </div>
            <div class="w-5/12 mx-5">
                <div>
                    <img src="{{ asset('assets/front/Pomegranate.jpeg') }}" alt=""
                        class="w-full rounded-lg border border-gray-300">
                </div>
                <div class="my-4 flex items-center justify-center">
                    <button class="rounded-md p-2 w-full px-5 font-medium text-white bg-red-500 hover:bg-red-600">Add To
                        Cart</button>
                </div>
            </div>
            <div class="w-1/2">
                <div class="border border-gray-300 rounded-lg p-4">
                    <div class="flex flex-row justify-between">
                        <div>
                            <h2 class="text-lg font-bold text-gray-600">Pomegranate</h2>
                        </div>
                        <div>
                            <i class="fa-solid fa-arrow-up-right-from-square"></i>
                        </div>
                    </div>
                    <div class="flex flex-row items-center gap-2 mt-5">
                        <div>
                            <i class="fa-solid fa-bolt text-lg" style="color: #08fc00;"></i>
                        </div>
                        <div>
                            <span class="text-base">Get in 10 Mins</span>
                        </div>
                    </div>
                    <div class="mt-5 flex flex-row gap-2 items-center">
                        <div class="text-3xl font-bold">
                            <span>₹ 89</span>
                        </div>
                        <div class="text-base text-gray-500">
                            <del>₹ 108</del>
                        </div>
                        <div class="text-green-600 font-semibold">
                            <span>17% off</span>
                        </div>
                    </div>
                    <div class="flex items-center mt-5 gap-3">
                        <div class="text-lg w-1/2 text-gray-400 font-bold">
                            <span>Coupons & Offers</span>
                        </div>
                        <div class="h-[1px] w-full bg-[#ccccce]">
                        </div>
                    </div>
                    <div class="mt-3">
                        <div class="gap-2 flex flex-row my-3">
                            <div>
                                <i class="fa-solid fa-gear  border p-1 rounded-md" style="color: #777879;"></i>
                            </div>
                            <div class="text-base text-gray-700">
                                <span>Flat 10% off on Thermal Product.</span>
                                <span class="text-red-600 font-semibold"> > </span>
                            </div>
                        </div>
                        <div class="gap-2 flex flex-row my-3">
                            <div>
                                <i class="fa-solid fa-gear  border p-1 rounded-md" style="color: #777879;"></i>
                            </div>
                            <div class="text-base text-gray-700">
                                <span>Flat 10% off on Thermal Product.</span>
                                <span class="text-red-600 font-semibold"> > </span>
                            </div>
                        </div>
                        <div class="gap-2 flex flex-row my-3">
                            <div>
                                <i class="fa-solid fa-gear  border p-1 rounded-md" style="color: #777879;"></i>
                            </div>
                            <div class="text-base text-gray-700">
                                <span>Flat 10% off on Thermal Product.</span>
                                <span class="text-red-600 font-semibold"> > </span>
                            </div>
                        </div>
                        <div class="gap-2 flex flex-row my-3">
                            <div>
                                <i class="fa-solid fa-gear  border p-1 rounded-md" style="color: #777879;"></i>
                            </div>
                            <div class="text-base text-gray-700">
                                <span>Flat 10% off on Thermal Product.</span>
                                <span class="text-red-600 font-semibold"> > </span>
                            </div>
                        </div>
                        <div class="gap-2 flex flex-row my-3">
                            <div>
                                <i class="fa-solid fa-gear  border p-1 rounded-md" style="color: #777879;"></i>
                            </div>
                            <div class="text-base text-gray-700">
                                <span>Flat 10% off on Thermal Product.</span>
                                <span class="text-red-600 font-semibold"> > </span>
                            </div>
                        </div>
                        <div class="text-red-500 mt-2 font-semibold">
                            <a href="#" class="hover:underline">
                                View All coupons
                            </a>
                        </div>
                    </div>
                </div>
                <div class="border border-gray-300 rounded-lg p-4 my-4">
                    <div>
                        <span class="text-lg font-semibold text-gray-600">Highlights</span>
                    </div>
                    <div class="flex flex-row text-gray-5600 mt-2 justify-between items-center w-1/2">
                        <div>
                            <span>
                                Brand</span>
                        </div>
                        <div>
                            <span>
                                Unbranded
                            </span>
                        </div>
                    </div>
                    <div class="flex flex-row text-gray-5600 mt-5 justify-between items-center w-1/2">
                        <div>
                            <span>
                                Weight</span>
                        </div>
                        <div>
                            <span>
                                1 KG
                            </span>
                        </div>
                    </div>
                </div>
                <div class="border border-gray-300 rounded-lg p-4 my-4">
                    <div>
                        <span class="text-lg font-semibold text-gray-600">Information</span>
                    </div>
                    <div class="flex flex-row text-gray-5600 mt-2 justify-between items-center w-1/2">
                        <div>
                            <span>
                                Country of Origin</span>
                        </div>
                        <div>
                            <span>
                                India
                            </span>
                        </div>
                    </div>
                    <div class="flex flex-row text-gray-5600 mt-5 justify-between items-center w-1/2">
                        <div>
                            <span>
                                Shelf Life</span>
                        </div>
                        <div>
                            <span>
                                4 Days
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

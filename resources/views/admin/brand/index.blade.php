@extends('layouts.main')

@section('content')

    <div class="container mx-auto px-4 sm:px-8 max-w-3xl">
        @if(session('success'))
            <div class="bg-green-100 border-t-4 border-green-500 rounded-b text-green-900 px-4 py-1 shadow-md mb-10" role="alert">
                <div class="flex">
                <div class="py-1"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" /></svg></div>
                <div>
                    <p class="font-bold">Good job</p>
                    <p class="text-sm">{{ session('success') }}</p>
                </div>
                </div>
            </div>
        @endif
        
        <a href="{{ url('brand/create') }}">
            <button class="bg-purple-800 hover:bg-purple-600 text-white font-bold py-2 px-4 border-b-4 border-purple-900 hover:border-purple-800 rounded">
                Create
            </button>
        </a>

        {{-- <div class="max-w-sm rounded overflow-hidden shadow-lg">
            <img class="w-full" src="https://gorilagames.com.br/wp-content/uploads/2020/10/Akuma-4.jpg" alt="Sunset in the mountains">
            <div class="px-3 py-2">
              <div class="font-bold text-xl mb-2">The Coldest Sunset</div>
              <p class="text-gray-700 text-base">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.
              </p>
            </div>
            <div class="px-6 pt-4 pb-2">
              <span class="inline-block bg-green-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">Edit</span>
              <span class="inline-block bg-red-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">Delete</span>
            </div>
        </div> --}}

        <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
            <div class="main-images mb-8 ">
                <div class="images grid grid-cols-1 md:grid-cols-3 gap-8">
                    @foreach ($brands as $brand)
                        <div class="max-w-sm rounded overflow-hidden shadow-lg">
                            
                            <img class="w-full" src="{{ asset($brand->brand_image) }}">
                            <div class="px-3 py-2">
                                <div class="font-bold text-xl mb-2">
                                    {{ $brand->brand_name }} 
                                    <div class="pt-3">
                                        <a href="{{ url('brand/edit/'.$brand->id) }}">
                                            <span class="inline-block bg-green-200 rounded-full px-2 py-1 text-sm font-semibold text-gray-700 ">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" /></svg>
                                            </span>
                                        </a>
                                        <a onclick="areSure({{ $brand->id}})">
                                            <span class="inline-block bg-red-200 rounded-full px-2 py-1 text-sm font-semibold text-gray-700">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2M3 12l6.414 6.414a2 2 0 001.414.586H19a2 2 0 002-2V7a2 2 0 00-2-2h-8.172a2 2 0 00-1.414.586L3 12z" /></svg>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                                <p class="text-gray-700 text-base">
                                    {{ $brand->brand_desc }}
                                </p>
                            </div>

                            <div class="px-6 pt-4 pb-2">
                                    
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="px-5 py-5 border-t flex flex-col xs:flex-row items-center xs:justify-between">
            {{ $brands->links() }}
        </div> 
    </div>

@endsection

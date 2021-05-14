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
            <button class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-1 px-2 mb-2 border gray-700 rounded">
                Create
            </button>
        </a>
        
        <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
            <div class="main-images mb-8 ">
                <div class="images grid grid-cols-1 md:grid-cols-3 gap-8">
                    @foreach ($brands as $brand)
                        <div class="image bg-white rounded-lg shadow-lg overflow-hidden">
                            <a href="#">
                                <img src="{{ asset($brand->brand_image) }}">
                                <span class="text-center p-2 text-gray-700 text-sm inline-block w-full"> {{ $brand->brand_name }} </span>
                            </a>
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
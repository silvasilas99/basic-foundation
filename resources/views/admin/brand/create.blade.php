@extends('layouts.main')

@section('content')
    <form action="{{ url('brand') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="max-w-md mx-auto bg-white rounded-lg overflow-hidden md:max-w-lg">
            <div class="md:flex">
                <div class="w-full px-4 py-6 ">
                    @error('brand_name')
                        <span class="text-red-700 font-bold"> {{ $message }}</span>
                    @enderror
                    <div class="mb-1"> <span class="text-sm">Brand name</span> <input type="text" name="brand_name" class="h-12 px-3 w-full border-purple-400 border-2 rounded focus:outline-none focus:border-purple-600" required> </div>
                    <div class="mb-1"> <span class="text-sm">Brand description</span> <textarea name="brand_desc" id="brand_desc" cols="30" rows="10" class="h-20 px-3 w-full border-purple-400 border-2 rounded focus:outline-none focus:border-purple-600" required></textarea> </div>
                    <div class="mb-1"> <span class="text-sm text-gray-400">You will be able to edit this information later</span> </div> 
                    <div class="mb-1"> <span>Brand image</span>
                        <div class="relative border-dotted h-32 rounded-lg border-dashed border-2 border-purple-700 bg-gray-100 flex justify-center items-center">
                            <div class="absolute">
                                <div class="flex flex-col items-center"> <i class="fa fa-folder-open fa-3x text-purple-700"></i> <span class="block text-gray-400 font-normal">Attach your file here</span> </div>
                            </div> <input type="file" name="brand_image" class="h-full w-full opacity-0" name="" required>
                        </div>
                    </div>
                    <div class="mt-3 text-right"> <a href="{{ url('brand/all') }}">Cancel</a> <button class="ml-2 h-10 w-32 bg-purple-600 rounded text-white hover:bg-purple-700">Create</button> </div>
                </div>
                
            </div>
        </div>
    </form>
@endsection
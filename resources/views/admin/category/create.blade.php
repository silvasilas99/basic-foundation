@extends('layouts.main')

@section('content')

<form action="{{ url('category') }}" method="POST" enctype="multipart/form-data"  
class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
    @csrf
    <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="category_name">
        Category name
      </label>
      <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="category_name" id="category_name" type="text" placeholder="MyFantasticCategory">
      @error('category_name')
        <span class="text-red-700 font-bold"> {{ $message }}</span>
      @enderror
    </div> 
    <div class="flex items-center justify-between">
      <button class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
        Submit
      </button>
    </div>
  </form>

@endsection
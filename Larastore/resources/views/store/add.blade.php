<x-layout>
<x-slot:heading>
        Add product
    </x-slot:heading>

<!--
  This example requires some changes to your config:
  
  ```
  // tailwind.config.js
  module.exports = {
    // ...
    plugins: [
      // ...
      require('@tailwindcss/forms'),
    ],
  }
  ```
-->
<form method='POST' action='/store'>
        @csrf
        <div class="space-y-12">
    <div class="border-b border-gray-900/10 pb-12">

      <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
        <div class="sm:col-span-4">
          <label for="product_name" class="block text-sm font-medium leading-6 text-gray-900">Product name</label>
          <div class="mt-2">
            <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
              <input type="text" name="product_name" id="product_name"  class="block flex-1 border-0 py-1.5 pl-1 text-gray-900 focus:ring-0 sm:text-sm sm:leading-6">
            </div>
          @error('product_name')
             <p class="text-xs text-red-500 font-semibold mt-1">{{ $message }}</p>
          @enderror
          </div>
        </div>

        <div class="col-span-full">
          <label for="product_description" class="block text-sm font-medium leading-6 text-gray-900">Description</label>
          <div class="mt-2">
            <textarea id="product_description" name="product_description" rows="3" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
          </div>
          @error('product_description')
             <p class="text-xs text-red-500 font-semibold mt-1">{{ $message }}</p>
          @enderror
          <p class="mt-3 text-sm leading-6 text-gray-600">Write a few sentences about the product.</p>
        </div>

        <div class="col-span-full">
          <label for="product_price" class="block text-sm font-medium leading-6 text-gray-900">Product price</label>
          <div class="mt-2">
              <input type="text" 
              name="product_price" 
              id="product_price" 
              class="block flex-1 border-0 py-1.5 pl-1 text-gray-900 focus:ring-0 sm:text-sm sm:leading-6">
          </div>
          @error('product_price')
             <p class="text-xs text-red-500 font-semibold mt-1">{{ $message }}</p>
          @enderror
        </div>

        <div class="col-span-full">
          <label for="product_categories" class="block text-sm font-medium leading-6 text-gray-900">Categories</label>
          <div class="mt-2">
            @foreach($categories as $category)
            <input type="checkbox" name="{{$category->category_name}}"> {{$category->category_name}}
            @if($category->id % 5 == 0)
              <br>
            @endif
            @endforeach
          </div>
        </div>

      </div>
    </div>

  <div class="mt-6 flex items-center justify-end gap-x-6">
    <a href="{{ URL::previous() }}">
    <button type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancel</button>
    </a>
    <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
      Add
    </button>
  </div>
</form>

</x-layout>
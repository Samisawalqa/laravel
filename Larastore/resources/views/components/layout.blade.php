<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="h-full">
<div class="min-h-full">
  <nav class="bg-red-800">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
      <div class="flex h-16 items-center justify-between">
        <div class="flex items-center">
          <div class="flex-shrink-0">
          <img class="h-8 w-8 rounded-3xl" src="data:image/png;base64,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" alt="Your Company">
          </div>
          <div class="hidden md:block">
            <div class="ml-10 flex items-baseline space-x-4">
              <x-nav-link href="/" :active="request()->is('/')">Home</x-nav-link>
              <x-nav-link href="/store" :active="request()->is('store')">Products</x-nav-link>
              <x-nav-link href="/contact" :active="request()->is('contact')">Contact</x-nav-link>
            </div>
          </div>
        </div>
        <div class="hidden md:block">
         
        </div>
        <div class="-mr-2 flex md:hidden">
          <!-- Mobile menu button -->
        
        </div>
      </div>
    </div>

    <!-- Mobile menu, show/hide based on menu state. -->
    <div class="md:hidden" id="mobile-menu">
      <div class="space-y-1 px-2 pb-3 pt-2 sm:px-3">
        <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
        <a href="/" class="block rounded-md bg-gray-900 px-3 py-2 text-base font-medium text-white" aria-current="page">Home</a>
        <a href="/about" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">About</a>
        <a href="/contact" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Contact</a>
      </div>
      
    </div>
  </nav>

              <header class="bg-white shadow">
              <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8 sm:flex sm:justify-between">
                <h1 class="text-3xl font-bold tracking-tight text-gray-900">{{$heading}}</h1>
                
                @if(request()->is('store'))
                <x-button class="" href="/store/add">Add Product</x-button>
                @endif
              </div>
            </header>
            <main>
              <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
              {{$slot}}
    </div>
  </main>
</div>

</body>
</html>
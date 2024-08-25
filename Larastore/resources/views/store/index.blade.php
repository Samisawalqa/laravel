    <x-layout>
    <x-slot:heading>
            Products
        </x-slot:heading>

        <div class="space-y-4">
        @foreach($products as $product)
        <div class="block px-4 py-6 border border-gray-200 rounded-lg">
        <div class="sm:flex sm:justify-between items-center">
            <p><strong> {{ $product['product_name'] }} </strong><br> {{ $product['product_description'] }} </p>
            <div>
            <a href="/store/{{ $product['id']}}">
                  <button class="text-white bg-blue-600 px-4 py-2 rounded-lg">show</button>
            </a>
            <a href="/store/{{ $product['id']}}/edit">
            <button class="text-white bg-yellow-500 px-4 py-2 rounded-lg">edit</button>
            </a>
            <a href="/store/{{ $product['id']}}">
            <button class="text-white bg-red-600 px-4 py-2 rounded-lg">delete</button>
            </a>
            </div>
        </div>

        </div>
        @endforeach

            <div>
                {{ $products->links() }}
            </div>


    </div>
    </x-layout>
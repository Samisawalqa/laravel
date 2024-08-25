<x-layout>
<x-slot:heading>
{{ $product['product_name'] }}
    </x-slot:heading>

    <div class="space-y-4 hover:border-gray-500 block px-4 py-6 border border-gray-200 rounded-lg">
            <a href="/store/{{ $product['id']}}" class="">
                     <div class="sm:flex sm:justify-between items-center">
                    <p><strong>{{ $product['product_name'] }}</strong><br>  {{ $product['product_description'] }}.</p>
             </a>
             <p><strong>Categories:</strong>
                        @if($product->category)
                        @foreach($product->category as $prod)
                        {{ $prod->category_name }} // 
                        @endforeach
                        @else
                            No categories related.
                        @endif
            </p>
         
        <div>
            <a href="/store/{{ $product['id']}}/edit">
                <button class="text-white bg-yellow-500 px-4 py-2 rounded-lg">edit</button>
            </a>
            <a href="/store/{{ $product['id']}}">
                <button class="text-white bg-red-600 px-4 py-2 rounded-lg">delete</button>
            </a>
        </div>
</div>
</x-layout>
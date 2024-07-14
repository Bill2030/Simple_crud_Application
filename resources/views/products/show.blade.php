<x-layout>
    <div class="container">
        
        <h1>{{ $product->name }}</h1>
        <p>{{ $product->description }}</p>
        <p>{{ $product->prize }}</p>

   
    <a class="btn btn-success mb-2" href="{{ route("products.edit", $product->id) }}">Edit Product</a>

    <form action="{{ route('products.destroy', $product) }}" method="POST">
        @csrf
        @method('DELETE')
        <button class="btn btn-danger">Delete</button>
    </form>
</div>
</x-layout>

<x-layout>
<h1>Edit Product</h1>
<div class="container mt-6">
    <div class="row">
        <div class="col-8">
            <x-errors/>
            <form action="{{ route('products.update', $product) }}" method="POST">

                @method('PATCH')
                <x-products.form :product="$product"/>

            </form>
        </div>
    </div>
</div>
</x-layout>

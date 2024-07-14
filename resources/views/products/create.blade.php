<x-layout>
    
    <div class="container mt-6">
        <div class="row">
            <div class="col-8">
                <x-errors/>
                <form action="{{ route('products.store') }}" method="POST">
                    <x-products.form/>
                </form>
            </div>
        </div>
    </div>
</x-layout>


<x-layout>
    <div class="container mt-6 mb-3">
 <h3 class="mt-4">Products</h3>
 <a class="btn btn-danger" href="{{ route('home') }}">BACK</a>
 <a class="btn btn-success" href="{{ route('products.create') }}">Create New Product</a>
 
        <div class="row mb-4">
            <div class="col-6">
                <table class="table">
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Prize</th>
                    </tr>
                    @foreach ( $products as $data )
                    <tr>
                        <td>{{ $data->id }}</td>
                        <td><a href="{{ route('products.show', $data->id) }}">{{ $data->name }}</a></td>
                        <td>{{ $data->description }}</td>
                        <td>{{ $data->prize }}</td>
                    </tr>
                        
                    @endforeach
                </table>
            </div>
        </div>

</div>
</div>
</x-layout>

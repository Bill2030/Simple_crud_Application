                    @csrf
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control" value="{{ old('name', $product->name ?? '') }}">
                    <label for="Description">Description</label>
                    <textarea name="description" class="form-control" cols="30" rows="10" value="{{ old('description', $product->description ?? '') }}"></textarea>
                    <label for="price">Prize</label>
                    <input type="text" name="prize" class="form-control" value="{{ old('prize', $product->prize ?? '') }}">
                    <button class="btn btn-primary mt-4">Save</button>
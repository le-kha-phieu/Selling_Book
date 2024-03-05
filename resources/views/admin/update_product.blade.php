@vite(['resources/scss/app.scss'])
@vite(['resources/js/product.js'])

<div class="background">
    <img src="{{ Vite::asset('resources/image/baner-auth.jpg') }}" alt="">
</div>
<div class="product-create">
    <div class="product-create-item">
        <form action="{{ route('update.product', ['product' => $product]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <h2 class="product-create-title">Sửa sản phẩm</h2>
            <select class="product-create-category" name="category_id">
                <option value="">Chọn loại sách</option>
                @foreach ($Categories as $category)
                    @if (isset($categorySelected))
                        @if ($category['id'] == $categorySelected)
                            <option selected value="{{ $category['id'] }}">{{ $category['name'] }}</option>
                        @else
                            <option value="{{ $category['id'] }}">{{ $category['name'] }}</option>
                        @endif
                    @else
                        <option value="{{ $category['id'] }}">{{ $category['name'] }}</option>
                    @endif
                @endforeach
            </select>
            @error('category_id')
                <span class="notify-error">{{ $message }}</span>
            @enderror
            <p>Nhập tên sách:</p>
            <input name="title" type="text" class="product-create-input" placeholder="{{ $product->title }}">
            @error('title')
                <span class="notify-error">{{ $message }}</span>
            @enderror
            <div class="product-create-image">
                <input name="image_product" type="file" id="inputImageBook" value={{ $product->image_product }}>
                <p id="imageButton">Chọn ảnh sản phẩm</p>
                <div class="image-preview update" id="imagePreview">
                    <img src='{{ Storage::url($product->image_product) }}' alt=''>
                </div>
            </div>
            @error('image_product')
                <span class="notify-error">{{ $message }}</span>
            @enderror
            <p>Nhập tên tác giả:</p>
            <input name="author" type="text" class="product-create-input" placeholder="{{ $product->author }}">
            @error('author')
                <span class="notify-error">{{ $message }}</span>
            @enderror
            <p>Nhập tên nhà xuất bản:</p>
            <input name="publisher" type="text" class="product-create-input" placeholder="{{ $product->publisher }}">
            @error('publisher')
                <span class="notify-error">{{ $message }}</span>
            @enderror
            <p>Nhập năm xuất bản:</p>
            <input name="publishing_year" type="number" class="product-create-input" placeholder="{{ $product->publishing_year }}">
            @error('publishing_year')
                <span class="notify-error">{{ $message }}</span>
            @enderror
            <textarea name="description" type="text" class="product-create-content" rows="5" cols="20"
                placeholder="{{ $product->description }}"></textarea>
            @error('description')
                <span class="notify-error">{{ $message }}</span>
            @enderror
            <p>Nhập giá bán:</p>
            <input name="price" type="number" class="product-create-input" placeholder="{{ $product->price }}">
            @error('price')
                <span class="notify-error">{{ $message }}</span>
            @enderror
            <div class="product-create-submit">
                <a href="{{ route('view.admin') }}">Back</a>
                <button>Lưu</button>
            </div>
        </form>
    </div>
</div>

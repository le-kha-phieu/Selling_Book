@vite(['resources/scss/app.scss'])
@vite(['resources/js/product.js'])

<div class="background">
    <img src="{{ Vite::asset('resources/image/baner-auth.jpg')}}" alt="">
</div>
<div class="product-create" id="boxAddProduct">
    <a href="{{ route('view.admin') }}">Back</a>
    <div class="product-create-item">
        <form action="{{ route('create.product') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('POST')
            <h2 class="product-create-title">Thêm sản phẩm</h2>
            <select class="product-create-category" name="category_id">
                <option value="">Chọn loại sách</option>
                @foreach ($Categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
            @error('category_id')
                <span class="notify-error">{{ $message }}</span>
            @enderror
            <p>Nhập tên sách:</p>
            <input name="title" type="text" class="product-create-input" placeholder="Nhập tên sách">
            @error('title')
                <span class="notify-error">{{ $message }}</span>
            @enderror
            <div class="product-create-image">
                <input name="image_product" type="file" id="inputImageBook">
                <p id="imageButton">Chọn ảnh sản phẩm</p>
                <div class="image-preview" id="imagePreview"></div>
            </div>
            @error('image_product')
                <span class="notify-error">{{ $message }}</span>
            @enderror
            <p>Nhập tên tác giả:</p>
            <input name="author" type="text" class="product-create-input" placeholder="Nhập tên tác giả">
            @error('author')
                <span class="notify-error">{{ $message }}</span>
            @enderror
            <p>Nhập tên nhà xuất bản:</p>
            <input name="publisher" type="text" class="product-create-input" placeholder="Nhập tên nhà xuất bản">
            @error('publisher')
                <span class="notify-error">{{ $message }}</span>
            @enderror
            <p>Nhập năm xuất bản:</p>
            <input name="publishing_year" type="number" class="product-create-input" placeholder="Nhập năm xuất bản">
            @error('publishing_year')
                <span class="notify-error">{{ $message }}</span>
            @enderror
            <textarea name="description" type="text" class="product-create-content" rows="5" cols="20"
                placeholder="Nhập tóm tắt nội dung"></textarea>
            @error('description')
                <span class="notify-error">{{ $message }}</span>
            @enderror
            <p>Nhập giá bán:</p>
            <input name="price" type="number" class="product-create-input" placeholder="Nhập giá bán">
            @error('price')
                <span class="notify-error">{{ $message }}</span>
            @enderror
            <div class="product-create-submit">
                <button>Tạo</button>
            </div>
        </form>
    </div>
</div>
<div class="product-box-delete">
    <p>Bạn có chắn chắn muốn xóa sản phẩm này?</p>
    <div class="btn-form">
        <p class="btn-close">Cancel</p>
        <p class="btn-delete">Delete</p>
    </div>
</div>

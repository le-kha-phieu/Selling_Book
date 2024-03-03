@vite(['resources/scss/app.scss'])

<div class="background-category">
    <img src="{{ Vite::asset('resources/image/baner-auth.jpg') }}" alt="">
</div>
<div class="category-add-form">
    <div class="category-add-item">
        <a href="{{ route('view.admin') }}">Back</a>
        <form action="{{ route('create.category') }}" method="POST">
            @csrf
            @method('POST')
            <h2 class="category-add-title">Thêm loại sách</h2>
            <p>Nhập loại sách:</p>
            <input class="category-add-input" name="name_category">
            @error('name_category')
                <span class="notify-error">{{ $message }}</span>
            @enderror
            <div class="category-add-submit">
                <button>Lưu</button>
            </div>
        </form>
    </div>
</div>

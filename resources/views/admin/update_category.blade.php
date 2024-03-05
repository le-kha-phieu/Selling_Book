@vite(['resources/scss/app.scss'])

<div class="background-category">
    <img src="{{ Vite::asset('resources/image/baner-auth.jpg') }}" alt="">
</div>
<div class="category-add-form update">
    <div class="category-add-item update">
        <form action="{{ route('update.category', ['id' => $category->id]) }}" method="POST">
            @csrf
            @method('PUT')
            <h2 class="category-add-title update">Sửa loại sách</h2>
            <p>Nhập loại sách mới:</p>
            <input class="category-add-input update" name="name_category" placeholder="{{ $category->name }}">
            @error('name_category')
                <span class="notify-error">{{ $message }}</span>
            @enderror
            <div class="category-add-submit update">
                <button>Lưu</button>
            </div>
            <a href="{{ route('view.admin') }}">Back</a>
        </form>
    </div>
</div>

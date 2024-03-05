<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h4 class="card-title">Danh sách phân loại sách</h4>
                </div>
                @foreach ($Categories as $category)
                    <div class="category-form">
                        <h3 class="category-name">{{ $category->name }}</h3>
                        <a href="{{ route('view.update.category', ['category' => $category])}}" class="btn-category btn-update-category">Sửa</a>
                        <form method="POST" action="{{ route('delete.category', $category->id) }}">
                            @csrf
                            @method('DELETE')
                            <button class="btn-category btn-delete-category">Xóa</button>
                        </form>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h4 class="card-title">Danh sách phân loại sách</h4>
                </div>
                @foreach ($Categories as $category)
                    <div class="category-form">
                        <h3>{{ $category->name }}</h3>
                        <a class="btn-category btn-update">Sửa</a>
                        <p class="btn-category btn-delete">Xóa</p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>


<div class="box-delete category">
    <p>Bạn có chắn chắn muốn xóa loại sách này?</p>
    <div class="btn-form">
        <p class="btn-close">Cancel</p>
        <p class="btn-delete">Delete</p>
    </div>
</div>

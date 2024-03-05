<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h4 class="card-title">Danh sách sản phẩm</h4>
                </div>
                @foreach ($products as $product)
                    <div class="product-management-form">
                        <img class="image" src="{{ Storage::url($product->image_product) }} " alt="">
                        <div class="content-product">
                            <h2>{{ $product->title }}</h2>
                            <p>{{ $product->description }}</p>
                        </div>
                        <a href="{{ route('view.update.product', ['product' => $product]) }}" class="btn-product-management btn-update-product">Sửa</a>
                        <form method="POST" action="{{ route('delete.product', $product->id) }}">
                            @csrf
                            @method('DELETE')
                            <button class="btn-product-management btn-delete-product">Xóa</button>
                        </form>
                    </div>
                @endforeach
                @include('layouts.components.pagination')
            </div>
        </div>
    </div>
</div>

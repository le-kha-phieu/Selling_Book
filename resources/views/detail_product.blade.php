@extends('layouts.home_header_footer')

@section('content')
    <div class="detail-form">
        <div class="detail-all">
            <div class="detail-title">
                <h1>Shop Chi Chi Shop Bán Sách Chất Lượng Hàng Đầu Việt Nam</h1>
            </div>
            <div class="detail-product-service">
                <div class="product-image">
                    <img src="{{ Storage::url($product->image_product) }}">
                </div>
                <div class="product-sell">
                    <h2 class="name">{{ $product->title }}</h2>
                    <p class="author">Tác giả: {{ $product->author }}</p>
                    <p class="publisher">Nhà xuất bản: {{ $product->publisher }}</p>
                    <p class="publishing-year">Xuất bản năm: {{ $product->publishing_year }}</p>
                    <p class="delivery-time">Thời gian giao hàng: trong vòng 7 ngày</p>
                    <h2 class="price">Giá: {{ $product->price }}.đ</h2>
                    <div class="btn-buy-product">
                        <button>Mua ngay</button>
                    </div>
                </div>
            </div>
            <div class="detail-product-content">
                <h2>Tóm tắt nội dung</h2>
                <p>{{ $product->description }}</p>
            </div>
            <div class="detail-product-evaluate">
                <h2>Đánh giá:</h2>
                <p>4.8/5</p>
            </div>
        </div>
    </div>
@endsection

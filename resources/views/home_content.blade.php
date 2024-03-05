@extends('layouts.home_header_footer')

@section('content')
    <div class="home-form">
        <ul class="home-navbar">
            <li><a href="{{ route('view.home') }}">Trang chủ</a></li>
            <li><a href="{{ route('view.store') }}">Cửa hàng</a></li>
            <li><a href="">Sách bán chạy</a></li>
            <li><select class="book-categories" name="category_id">
                    <option value="{{ route('view.store') }}">Loại sách</option>
                    @foreach ($Categories as $category)
                        <option value="{{ route('search.product', ['id' => $category->id]) }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </li>
        </ul>
        <img class="home-main-image" src="{{ Vite::asset('resources/image/background-main.jpg') }}" alt="">
        <p class="home-slogan">" Một cuốn sách hay cho ta một điều tốt,<br> một người bạn tốt cho ta một điều hay"</p>
        <a class="store" href="{{ route('view.store') }}">Cửa hàng</a>
        <p class="category-home">Sản Phẩm Bán chạy</p>
        <div class="home-best-seller">
            @foreach ($products as $product)
                <div class="best-seller-list">
                    <div class="best-seller-form">
                        <a href="{{ route('detail.product', ['product' => $product]) }}" alt=""><img class="best-seller-image"src="{{ Storage::url($product->image_product) }}"></a>
                        <p class="best-seller-name">{{ $product->title }}</p>
                        <p class="best-seller-info">{{ $product->description }}</p>
                        <a href="{{ route('detail.product', ['product' => $product]) }}" class="best-seller-buy">Mua ngay</a>
                    </div>
                </div>
            @endforeach
        </div>
        <p class="category-home">Nhà Xuất Bản</p>
        <div class="home-publisher">
            <div class="publisher-form">
                <img class="publisher-logo" src="{{ Vite::asset('resources/image/publisher_1.png') }}" alt="">
                <p class="publisher-name">Nhà xuất bản Tri Thức Việt Nam</p>
            </div>
            <div class="publisher-form">
                <img class="publisher-logo" src="{{ Vite::asset('resources/image/publisher_2.png') }}" alt="">
                <p class="publisher-name">Nhà xuất bản Kim Đồng Việt Nam</p>
            </div>
            <div class="publisher-form">
                <img class="publisher-logo" src="{{ Vite::asset('resources/image/publisher_3.jpg') }}" alt="">
                <p class="publisher-name">Nhà xuất bản Nhã Nam Việt Nam</p>
            </div>
            <div class="publisher-form">
                <img class="publisher-logo" src="{{ Vite::asset('resources/image/publisher_4.jpg') }}" alt="">
                <p class="publisher-name">Nhà xuất bản Văn Học Việt Nam</p>
            </div>
            <div class="publisher-form">
                <img class="publisher-logo" src="{{ Vite::asset('resources/image/publisher_5.png') }}" alt="">
                <p class="publisher-name">Nhà xuất bản Giáo Dục Việt Nam</p>
            </div>
        </div>
    </div>
@endsection

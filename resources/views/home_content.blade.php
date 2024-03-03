@extends('layouts.home_header_footer')

@section('content')
    <div class="home-form">
        <ul class="home-navbar">
            <li><a href="{{ route('view.home') }}">Trang chủ</a></li>
            <li><select class="book-categories" name="category_id">
                    <option value="">Loại sách</option>
                    @foreach ($Categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </li>
            <li><a href="">Sách bán chạy</a></li>
        </ul>
        <img class="home-main-image" src="{{ Vite::asset('resources/image/background-main.jpg') }}" alt="">
        <p class="home-slogan">" Một cuốn sách hay cho ta một điều tốt,<br> một người bạn tốt cho ta một điều hay"</p>
        <a class="store" href="{{ route('view.store') }}">Cửa hàng</a>
        <p class="category-home">Sản Phẩm Bán chạy</p>
        <div class="home-best-seller">
            <div class="best-seller-list">
                <div class="best-seller-form">
                    <img class="best-seller-image"
                        src="https://salabookz.com/wp-content/uploads/2022/03/dac-nhan-tam-768x768.jpg">
                    <p class="best-seller-name">Đắc Nhân Tâm</p>
                    <p class="best-seller-info">Làm thế nào để chinh phục được bạn bè và có ảnh hưởng tới mọi người, khi bạn
                        muốn một cuộc sống tốt đẹp hơn với tất cả mọi người xung quanh hãy luôn nhớ rằng</p>
                    <a href="" class="best-seller-buy">Mua ngay</a>
                </div>
            </div>
            <div class="best-seller-list">
                <div class="best-seller-form">
                    <img class="best-seller-image"
                        src="https://salabookz.com/wp-content/uploads/2022/03/dac-nhan-tam-768x768.jpg">
                    <p class="best-seller-name">Đắc Nhân Tâm</p>
                    <p class="best-seller-info">Làm thế nào để chinh phục được bạn bè và có ảnh hưởng tới mọi người, khi bạn
                        muốn một cuộc sống tốt đẹp hơn với tất cả mọi người xung quanh hãy luôn nhớ rằng</p>
                    <a href="" class="best-seller-buy" href="">Mua ngay</a>
                </div>
            </div>
            <div class="best-seller-list">
                <div class="best-seller-form">
                    <img class="best-seller-image"
                        src="https://salabookz.com/wp-content/uploads/2022/03/dac-nhan-tam-768x768.jpg">
                    <p class="best-seller-name">Đắc Nhân Tâm</p>
                    <p class="best-seller-info">Làm thế nào để chinh phục được bạn bè và có ảnh hưởng tới mọi người, khi bạn
                        muốn một cuộc sống tốt đẹp hơn với tất cả mọi người xung quanh hãy luôn nhớ rằng</p>
                    <a href="" class="best-seller-buy">Mua ngay</a>
                </div>
            </div>
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

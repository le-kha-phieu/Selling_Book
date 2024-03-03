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
        <div class="store-form">
            @foreach ($products as $product)
                <div class="store-item">
                    <img class="product-image" src="{{ Storage::url($product->image_product) }}">
                    <p class="product-name">{{ $product->title }}</p>
                    <p class="product-info">{{ $product->description }}</p>
                    <a href="{{ route('detail.product', ['product' => $product]) }}" class="product-buy">Mua ngay</a>
                </div>
            @endforeach
        </div>
    </div>
    @include('layouts.components.pagination')
@endsection

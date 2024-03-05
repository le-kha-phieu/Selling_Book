@extends('layouts.home_header_footer')
@vite(['resources/js/store.js'])

@section('content')
    <div class="home-form">
        <ul class="home-navbar">
            <li><a href="{{ route('view.home') }}">Trang chủ</a></li>
            <li><a href="{{ route('view.store') }}">Cửa hàng</a></li>
            <li><a href="{{ route('view.best.seller') }}">Sách bán chạy</a></li>
            <li>
                <select class="book-categories" name="category_id">
                    <option value="{{ route('view.store') }}">Loại sách</option>
                    @foreach ($Categories as $category)
                        <option value="{{ route('search.product', ['id' => $category->id]) }}"
                            @if (request()->id == $category->id) selected @endif
                        >
                            {{ $category->name }}
                        </option>
                    @endforeach
                </select>
            </li>
        </ul>
        <div class="store-form">
            @foreach ($products as $product)
                <div class="store-item">
                    <a href="{{ route('detail.product', ['product' => $product]) }}" alt="">
                        <img class="product-image" src="{{ Storage::url($product->image_product) }}">
                    </a>
                    <p class="product-name">{{ $product->title }}</p>
                    <p class="product-info">{{ $product->description }}</p>
                    <a href="{{ route('detail.product', ['product' => $product]) }}" class="product-buy">Mua ngay</a>
                </div>
            @endforeach
        </div>
    </div>
    @include('layouts.components.pagination')
@endsection

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi Chi Shop</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    @vite(['resources/scss/app.scss'])
    @vite(['resources/js/header.js'])
</head>

<body>
    <header>
        <div class="header-navbar">
            <div class="header-left">
                <a href="{{ route('view.home') }}">
                    <img class="logo" src="{{ Vite::asset('resources/image/logo.png') }}" alt="">
                </a>
                <p class="logo-name">Books</p>
                <form action="{{ route('search.product') }}" method="GET">
                    <input class="search" name="data" value="{{ request('data') }}" placeholder="Search books...">
                    <button>
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </button>
                </form>
            </div>
            <div class="header-right">
                @if (!Auth::user())
                    <a href="{{ route('view.register') }}"><button class="sign-up">Register</button></a>
                    <a href="{{ route('view.login') }}"><button class="login">Login</button></a>
                @else
                    <a href="" alt="">
                        <i class="fa-solid fa-cart-shopping" id="cartShopping">
                            <span>0</span>
                        </i>
                    </a>
                    <a class="user-name" href="#">{{ Auth::user()->user_name }}</a>
                    <div class="user-avatar">
                        <img src="{{ Vite::asset('resources/image/image-user.jpg') }}" alt="">
                        <div class="connect-menu"></div>
                        <ul>
                            <li>
                                <a href="">My order</a>
                            </li>
                            <li>
                                <a href="{{ route('logout') }}">Logout</a>
                            </li>
                        </ul>
                    </div>
                @endif
            </div>
        </div>
        <div class="header-cart-form" id="cartBox">
            <div class="header-cart-item">
                <div class="header-cart-product">
                    <a href="" alt="">
                        <img src="https://salabookz.com/wp-content/uploads/2022/03/dac-nhan-tam-768x768.jpg"
                            alt="">
                    </a>
                    <div class="info-product">
                        <a href="" alt="">
                            <h2>Đắc Nhân Tâm</h2>
                        </a>
                        <a href="" alt="">Làm thế nào để chinh phục được bạn bè và có ảnh hưởng tới mọi
                            người, khi bạn
                            muốn một cuộc sống tốt đẹp hơn với tất cả mọi người xung quanh hãy luôn nhớ rằng
                        </a>
                        <div class="btn-buy">
                            <button>Mua ngay</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-cart-item">
                <div class="header-cart-product">
                    <a href="" alt="">
                        <img src="https://salabookz.com/wp-content/uploads/2022/03/dac-nhan-tam-768x768.jpg"
                            alt="">
                    </a>
                    <div class="info-product">
                        <a href="" alt="">
                            <h2>Đắc Nhân Tâm</h2>
                        </a>
                        <a href="" alt="">Làm thế nào để chinh phục được bạn bè và có ảnh hưởng tới mọi
                            người, khi bạn
                            muốn một cuộc sống tốt đẹp hơn với tất cả mọi người xung quanh hãy luôn nhớ rằng
                        </a>
                        <div class="btn-buy">
                            <button>Mua ngay</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-cart-item">
                <div class="header-cart-product">
                    <a href="" alt="">
                        <img src="https://salabookz.com/wp-content/uploads/2022/03/dac-nhan-tam-768x768.jpg"
                            alt="">
                    </a>
                    <div class="info-product">
                        <a href="" alt="">
                            <h2>Đắc Nhân Tâm</h2>
                        </a>
                        <a href="" alt="">Làm thế nào để chinh phục được bạn bè và có ảnh hưởng tới mọi
                            người, khi bạn
                            muốn một cuộc sống tốt đẹp hơn với tất cả mọi người xung quanh hãy luôn nhớ rằng
                        </a>
                        <div class="btn-buy">
                            <button>Mua ngay</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    @yield('content')
    <footer>
        <div class="footer-form">
            <div class="footer-item">
                <div class="footer-item-info">
                    <div class="info-image">
                        <img class="logo" src="{{ Vite::asset('resources/image/logo.png') }}" alt="">
                        <p class="shop-name">Chi Chi</p>
                    </div>
                    <p class="shop-address">Số 1, nghách 75/1, phố Văn Hội, phường Đức Thắng
                        quận Bắc Từ Liêm, Hà Nội. <br> Cơ sở 2, số 1, nghách 32/29, phố Văn Hiến,
                        quận Bắc Từ Liên, Hà Nội.
                    </p>
                </div>
                <div class="footer-item-polycies">
                    <h3 class="title">Chính sách và Điều khoản</h3>
                    <ul>
                        <li>Chính sách bảo mật</li>
                        <li>Chính sách vận chuyển</li>
                        <li>Chính sách hoàn trả</li>
                        <li>Chính sách hoàn tiền</li>
                        <li>Điều khoản và Điều kiện</li>
                    </ul>
                </div>
                <div class="footer-item-contacts">
                    <h3 class="title">Liên hệ</h3>
                    <ul>
                        <li>Điện thoại: 098.765.4321</li>
                        <li>E-mail: chichi@shopchichi.com</li>
                        <li>E-mail: chichi02@gmail.com</li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>

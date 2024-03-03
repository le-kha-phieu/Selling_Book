<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Trang chủ admin</title>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="template/admin/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="template/admin/plugins/ekko-lightbox/ekko-lightbox.css">
    <link rel="stylesheet" href="template/admin/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    @vite(['resources/scss/app.scss'])
    @vite(['resources/js/product.js'])
</head>

<body class="hold-transition sidebar-mini">
    @include('layouts.components.notification')
    <div class="wrapper">
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i
                            class="fas fa-bars"></i></a>
                </li>
            </ul>
        </nav>
        @include('admin.sidebar')
        <div class="content-wrapper">
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Trang chủ admin</h1>
                        </div>
                    </div>
                </div>
            </section>
            @include('admin.category')
            @include('admin.product_management')
        </div>
        @include('admin.update_product')
        
        <aside class="control-sidebar control-sidebar-dark">
        </aside>
    </div>
    <script src="template/admin/plugins/jquery/jquery.min.js"></script>
    <script src="template/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="template/admin/plugins/ekko-lightbox/ekko-lightbox.min.js"></script>
    <script src="template/admin/dist/js/adminlte.min.js"></script>
    <script src="template/admin/plugins/filterizr/jquery.filterizr.min.js"></script>
    <script src="template/admin/dist/js/demo.js"></script>
    <script>
        $(function() {
            $(document).on('click', '[data-toggle="lightbox"]', function(event) {
                event.preventDefault();
                $(this).ekkoLightbox({
                    alwaysShowClose: true
                });
            });

            $('.filter-container').filterizr({
                gutterPixels: 3
            });
            $('.btn[data-filter]').on('click', function() {
                $('.btn[data-filter]').removeClass('active');
                $(this).addClass('active');
            });
        })
    </script>
</body>

</html>

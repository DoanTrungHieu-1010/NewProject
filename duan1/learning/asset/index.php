    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="./css/footer.css">
    </head>

    <body>
        <header id="header">
            <nav class="navbar navbar-expand-lg bg-body-tertiary">
                <div class="container">
                    <a class="navbar-brand" href="#"><img src="./images/logo.png" alt="" height="70"></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarPrimaryMenu" aria-controls="navbarPrimaryMenu" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarPrimaryMenu">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="./index.php">Trang chủ</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Danh mục
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Giới thiệu</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Liên hệ</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Tài khoản</a>
                            </li>
                        </ul>
                        <form class="d-flex" role="search">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Search</button>
                        </form>
                    </div>
                </div>
            </nav>
        </header>
        <main>

            <?php include "../partipants/slider.php"; ?>

            <?php include "../partipants/home-product.php"; ?>


        </main>
        <footer id="footer" class="bg-dark text-white py-5">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                        <ul class="menu-footer">
                            <li><a href="">Về chúng tôi</a></li>
                            <li><a href="">Hồ sơ năng lực</a></li>
                            <li><a href="">Liên hệ</a></li>
                            <li><a href="">Tìm hiểu về trả góp</a></li>
                            <li><a href="">Xem thêm</a></li>
                        </ul>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                        <ul class="menu-footer">
                            <li><a href="">Chính sách bảo hành</a></li>
                            <li><a href="">Chính sách đổi trả</a></li>
                            <li><a href="">Chính sách bảo mật</a></li>
                            <li><a href="">Chính sách giao hàng</a></li>
                            <li><a href="">Xem thêm</a></li>
                        </ul>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14895.453751058078!2d105.73698350049507!3d21.03814951858762!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313455e940879933%3A0xcf10b34e9f1a03df!2zVHLGsOG7nW5nIENhbyDEkeG6s25nIEZQVCBQb2x5dGVjaG5pYw!5e0!3m2!1svi!2s!4v1731755363867!5m2!1svi!2s" width="100%" height="150" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                    </div>
                </div>
            </div>
        </footer>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

    </html>
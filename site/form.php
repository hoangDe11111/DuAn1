<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/form.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!-- <link rel="stylesheet" href="style.css"> -->
    <title>Đăng Nhập & Đăng Ký</title>
</head>

<body>



    <div class="wrapper">
        <nav class="nav">
            <div class="nav-logo">
                <p>LOGO .</p>
            </div>
            <div class="nav-menu" id="navMenu">
                <ul>
                    <li><a href="index.php" class="link active">Trang Chủ</a></li>
                    <li><a href="shop.php" class="link">Sản Phẩm</a></li>
                    <li><a href="#" class="link">Giới Thiệu</a></li>
                    <li><a href="contact.php" class="link">Liên Hệ</a></li>
                </ul>
            </div>
            <div class="nav-button">
                <button class="btn white-btn" id="loginBtn" onclick="login()">Đăng nhập</button>
                <button class="btn" id="registerBtn" onclick="register()">Đăng ký</button>
            </div>
            <div class="nav-menu-btn">
                <i class="bx bx-menu" onclick="myMenuFunction()"></i>
            </div>
        </nav>

        <!----------------------------- Form box ----------------------------------->
        <div class="form-box">

            <!------------------- login form -------------------------->

            <div class="login-container" id="login">
                <div class="top">
                    <span>Bạn chưa có tài khoản? <a href="#" onclick="register()">Đăng ký</a></span>
                    <header>Đăng nhập</header>
                </div>
                <form action="../site/dang-nhap.php" method="POST" id="form_login">
                <div class="input-box">
                    <input type="text" class="input-field" name="username" placeholder="Tên đăng nhập">
                    <i class="bx bx-user"></i>
                </div>
                <div class="input-box">
                    <input type="password" class="input-field" name="password" placeholder="Mật khẩu">
                    <i class="bx bx-lock-alt"></i>
                </div>
                <div class="input-box">
                    <input type="submit" name="btn_login" class="submit" value="Đăng nhập">
                </div>
                <div class="two-col">
                    <div class="one">
                        <input type="checkbox" id="login-check">
                        <label for="login-check" name="ghi_nho" checked>Ghi nhớ mật khẩu</label>
                    </div>
                    <div class="two">
                        <label><a href="#">Quên mật khẩu?</a></label>
                    </div>
                </div>
                </form>
            </div>

            <!------------------- registration form -------------------------->

            <div class="register-container" id="register">
                <div class="top">
                    <span>Bạn có tài khoản? <a href="#" onclick="login()">Đăng nhập</a></span>
                    <header>Đăng ký</header>
                </div>
                <form action="../site/dang-ky.php" method="post" enctype="multipart/form-data" id="form_dang_ki">
                <div class="two-forms">
                    <div class="input-box">
                        <input type="text" class="input-field" name="username" placeholder="Tên đăng nhập">
                        <i class="bx bx-user"></i>
                    </div>
                    <div class="input-box">
                        <input type="text" class="input-field" name="fullName" placeholder="Họ và tên">
                        <i class="bx bx-user"></i>
                    </div>
                    </div>
                    <div class="input-box">
                        <input type="text" class="input-field" name="email" placeholder="Email">
                        <i class="bx bx-envelope"></i>
                    </div>
                    <div class="input-box">
                        <input type="password" class="input-field" name="password" placeholder="Mật khẩu">
                        <i class="bx bx-lock-alt"></i>
                    </div>
                    <div class="input-box">
                        <input type="submit" name="btn_register" class="submit" value="Đăng ký">
                    </div>
                    <div class="two-col">
                        <div class="one">
                            <input type="checkbox" id="register-check">
                            <label for="register-check"> Ghi nhớ mật khẩu</label>
                        </div>
                        <div class="two">
                            <label><a href="#">Điều khoản và điều kiện</a></label>
                        </div>
                    </div>
                    <input type="hidden" name="id">
                    <input type="hidden" name="status" value="1">
                    <i class=" text-danger"><?= (isset($MESSAGE) && (strlen($MESSAGE) > 0)) ? $MESSAGE : "" ?></i>
                </form>
            </div>

        </div>
    </div>


    <script>
        function myMenuFunction() {
            var i = document.getElementById("navMenu");

            if (i.className === "nav-menu") {
                i.className += " responsive";
            } else {
                i.className = "nav-menu";
            }
        }
    </script>

    <script>
        var a = document.getElementById("loginBtn");
        var b = document.getElementById("registerBtn");
        var x = document.getElementById("login");
        var y = document.getElementById("register");

        function login() {
            x.style.left = "4px";
            y.style.right = "-520px";
            a.className += " white-btn";
            b.className = "btn";
            x.style.opacity = 1;
            y.style.opacity = 0;
        }

        function register() {
            x.style.left = "-510px";
            y.style.right = "5px";
            a.className = "btn";
            b.className += " white-btn";
            x.style.opacity = 0;
            y.style.opacity = 1;
        }
    </script>

</body>

</html>
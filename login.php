<?php

$message = "";
if($_SERVER['REQUEST_METHOD'] == "POST"){
    $email = $_POST['email'];
    $password = $_POST['password_in'];
    if(!empty($_POST['email']) && !empty($_POST['password_in'])){
        $checkEmail = loadEmailUser($email);
        if(is_array($checkEmail)){
            if($email == $checkEmail['email'] && $password == $checkEmail['mat_khau']){
                $_SESSION['email'] = $email;
                $_SESSION['password_in'] = $password;
                header('location:index.php');
            }else{
                $message = "Mật khẩu và Email không đúng vui lòng thử lại!!!!";
            }
        }else{
            $message = "Email Và Mật Khẩu Không tồn tại!!!!";
        }
    }else{
        $message = "Vui Lòng Nhập Email Và Mật Khẩu";
    }
}

?>
<main class="bg_gray">

    <div class="container margin_30">
        <div class="page_header">
            <div class="breadcrumbs">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Category</a></li>
                    <li>Page active</li>
                </ul>
            </div>
            <h1>Sign In or Create an Account</h1>
        </div>
        <!-- /page_header -->
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-6 col-md-8">
                <div class="box_account">
                    <h3 class="client">Already Client</h3>
                    
                    <div class="form_container">
                        <form action="" method="post">
                            <div class="row no-gutters">
                                <div class="col-lg-6 pr-lg-1">
                                    <a href="#0" class="social_bt facebook">Login with Facebook</a>
                                </div>
                                <div class="col-lg-6 pl-lg-1">
                                    <a href="#0" class="social_bt google">Login with Google</a>
                                </div>
                            </div>
                            <div class="divider"><span>Or</span></div>
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Email*">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="password_in" id="password_in" value="" placeholder="Password*">
                            </div>
                            <div class="clearfix add_bottom_15">
                                <div class="checkboxes float-start">
                                    <label class="container_check">Remember me
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="float-end"><a id="forgot" href="index.php?act=addLogin">Lost Password?</a></div>
                            </div>
                            <div class="text-center"><input type="submit" value="Log In" class="btn_1 full-width"></div>
                            
                        </form>
                        
                    </div>
                    <!-- /form_container -->
                </div>
                <!-- /box_account -->
                <div class="row">
                    <div class="col-md-6 d-none d-lg-block">
                        <ul class="list_ok">
                            <li>Find Locations</li>
                            <li>Quality Location check</li>
                            <li>Data Protection</li>
                        </ul>
                    </div>
                    <div class="col-md-6 d-none d-lg-block">
                        <ul class="list_ok">
                            <li>Secure Payments</li>
                            <li>H24 Support</li>
                        </ul>
                    </div>
                </div>
                <!-- /row -->
            </div>

        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</main>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EduEasy</title>
    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="images/favicon.png" type="image/png">


    <!--====== Slick css ======-->
    <link rel="stylesheet" href="css/slick.css">

    <!--====== Animate css ======-->
    <link rel="stylesheet" href="css/animate.css">

    <!--====== Nice Select css ======-->
    <link rel="stylesheet" href="css/nice-select.css">

    <!--====== Nice Number css ======-->
    <link rel="stylesheet" href="css/jquery.nice-number.min.css">

    <!--====== Magnific Popup css ======-->
    <link rel="stylesheet" href="css/magnific-popup.css">

    <!--====== Bootstrap css ======-->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!--====== Fontawesome css ======-->
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!--====== Default css ======-->
    <link rel="stylesheet" href="css/default.css">

    <!--====== Style css ======-->
    <link rel="stylesheet" href="css/style.css">

    <!--====== Responsive css ======-->
    <link rel="stylesheet" href="css/responsive.css">

</head>

<body onload="onLoad()">

    <div class="pt-105 pb-110 bg_cover" class="row">
        <center>
            <h2>Reset Your Password</h2>
            <br>

            <!--============FORM PART STARTS=========== -->
            <div class="main-form pt-45">
                <form id="recoverPasswordForm" action="../Controller/resetPassword.php" method="post" data-toggle="validator"
                    style="border: solid black; border-radius: 9em; padding-bottom: 2rem; padding-top: 3rem; margin-right: 19vw; margin-left: 19vw;">
                    <h5>Enter Your UserId and the Email associated to your account<br>A new password would be sent to you</h5>
                    <span id="Error" style="color: red; font-size: 1em; font-weight: bold;">
                    </span>
                    <div class="col-md-6">
                        <div class="singel-form form-group" class="input-icone">
                            <i class="fa fa-user fa-lg fa-fw" aria-hidden="true"></i>
                            <input type="text" name="userId" id="userId" placeholder="User Id"
                                style="height: 3.25rem; width: 15rem; border-radius: 5px;">
                        </div>
                    </div>
                    <span id="error_userId" style="color: red; font-size: 0.75em;"></span>
                    <br>
                    <div class="col-md-6">
                        <div class="singel-form form-group">
                            <i class="fa fa-envelope fa-lg fa-fw" aria-hidden="true"></i>
                            <input type="email" name="email" id="email" placeholder="Email"
                                style="height: 3.25rem; width: 15rem; border-radius: 5px;">
                        </div>
                    </div>
                    <span id="error_email" style="color: red; font-size: 0.75em;"></span>
                    <br>
                    <div id="errorMessage" style="color: red;"></div>
                    <br>
                    <input type="submit" value="Reset My Password" id="submitButton" class="main-btn">
                </form>
            </div>
            <br>
            <h6 style="font-size: 1.25em; color: black;">Don't have an account yet? <a href="registration.php"
                    style="text-decoration: underline;">Register</a></h6>
        </center>
    </div>
    <!--====== FORM PART ENDS ======-->

    <!--====== FOOTER PART START ======-->

    <footer id="footer-part">
        <div class="footer-top pt-40 pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-md-1">
                        <div class="footer-about mt-40">
                            <div class="logo">
                                <a href="#"><img src="images/logo-2.png" alt="Logo"></a>
                            </div>
                            <ul class="mt-20">
                                <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div> <!-- footer about -->
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="footer-link mt-40">
                            <div class="footer-title pb-25">
                                <h6>Sitemap</h6>
                            </div>
                            <ul>
                                <li><a href="index.php"><i class="fa fa-angle-right"></i>Home</a></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i>News</a></li>
                                <li><a href="PaidCourses.php"><i class="fa fa-angle-right"></i>Premuim Courses</a></li>
                                <li><a href="FreeCourses.php"><i class="fa fa-angle-right"></i>Free Courses</a></li>
                            </ul>
                        </div> <!-- footer link -->
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-6">
                        <div class="footer-link support mt-40">
                            <div class="footer-title pb-25">
                                <h6>Support</h6>
                            </div>
                            <ul>
                                <li><a href="#"><i class="fa fa-angle-right"></i>Privacy</a></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i>Policy</a></li>
                            </ul>
                        </div> <!-- support -->
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-address mt-40">
                            <div class="footer-title pb-25">
                                <h6>Contact Us</h6>
                            </div>
                            <ul>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-home"></i>
                                    </div>
                                    <div class="cont">
                                        <p>1140 Rue Amir Abedelkader, Tunis</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-phone"></i>
                                    </div>
                                    <div class="cont">
                                        <p>+2165285125499</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-envelope-o"></i>
                                    </div>
                                    <div class="cont">
                                        <p>EduEasyinfo@gmail.com</p>
                                    </div>
                                </li>
                            </ul>
                        </div> <!-- footer address -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- footer top -->

        <div class="footer-copyright pt-10 pb-25">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="copyright text-md-left text-center pt-15">
                            <!-- <p><a target="_blank" href="https://www.templateshub.net">Templates Hub</a> </p> -->
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="copyright text-md-right text-center pt-15">

                        </div>
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- footer copyright -->
    </footer>

    <!--====== FOOTER PART ENDS ======-->

    <!--====================JAVASCRIPT PART BEGINS=============================-->
    <script>
        var userId = document.getElementById('userId');
        var email = document.getElementById('email');
        var loginButton = document.getElementById('submitButton');
        var errorMessage = document.getElementById('errorMessage');
        var errorMessageUserId = document.getElementById('error_userId');
        var errorMessageEmail = document.getElementById('error_email');
        var regexSTU = /STU/;
        var regexTEA = /TEA/;
        var regexADM = /ADM/;
        var page = document.getElementById('page');
        var emailRegex = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

        loginButton.addEventListener('click', (event) => {

            if (userId.value.length == 0 || password.value.length == 0)
                errorMessage.innerHTML = "You have to fill all the required information";
            else
                errorMessage.innerHTML = "";

            if (userId.value.length > 0 && (!(regexSTU.test(userId.value)) && !(regexTEA.test(userId.value)) && !(regexADM.test(userId.value))))
                errorMessageUserId.innerHTML = "Check your ID";
            else
                errorMessageUserId.innerHTML = "";

            if(email.value.length>0 && !emailRegex.test(email.value))
                errorMessageEmail.innerHTML = "Enter a valid Email adress";     

            if (errorMessage.innerHTML != "" || errorMessageUserId.innerHTML != "")
                event.preventDefault();
        });


        function onLoad() {

            var url = window.location.href;
            var regexError1 = /error=1/;
            var regexError2 = /error=2/;
            var Error = document.getElementById('Error');

            if (regexError1.test(url))
                Error.innerHTML = "Wrong Email or User Id";
            else
                Error.innerHTML = "";
        }

    </script>

    <!-- ====================JAVASCRIPT PART ENDS=================== -->
</body>

</html>
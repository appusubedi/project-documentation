<?php
session_start();
require "./includes/head.php";

if (isset($_SESSION['email'])) {
    echo "<script> location.href='/ecommerce'; </script>";
    exit();
}
?>

<style>
    /* Heading */
    .login_part_form_iner h3 {
        text-align: center;
        font-size: 28px;
        font-weight: 600;
        color: #2d3748;
        margin-top: 70px;
        line-height: 1.4;
    }

    /* Form Grid Layout */
    .contact_form {
        display: flex;
        flex-wrap: wrap;
        gap: 10px;
    }

    /* Form Groups */
    .form-group {
        margin-bottom: 15px;
        width: 100%;
    }

    /* Half-width fields for first/last name */
    .col-md-6 {
        flex: 0 0 calc(50% - 10px);
    }

    /* Full-width fields */
    .col-md-12 {
        flex: 0 0 100%;
    }

    /* Input Fields */
    .form-control {
        width: 100%;
        padding: 14px 18px;
        border: 1px solid #e2e8f0;
        border-radius: 8px;
        font-size: 15px;
        transition: all 0.3s ease;
        background-color: #f8fafc;
    }

    .form-control:focus {
        border-color: #667eea;
        box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.15);
        background-color: #fff;
        outline: none;
    }

    /* Number input specific styling */
    input[type="number"]::-webkit-inner-spin-button,
    input[type="number"]::-webkit-outer-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }

    /* Submit Button */
    .btn_3 {
        background: #667eea;
        color: white;
        border: none;
        padding: 14px 30px;
        border-radius: 8px;
        font-size: 16px;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s ease;
        width: 100%;
        margin-top: 10px;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    .btn_3:hover {
        background: #5a67d8;
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(102, 126, 234, 0.25);
    }

    /* Forgot Password Link */
    .lost_pass {
        display: block;
        text-align: center;
        margin-top: 20px;
        color: #718096;
        font-size: 14px;
        text-decoration: none;
        transition: all 0.3s ease;
    }

    .lost_pass:hover {
        color: #667eea;
        text-decoration: underline;
    }

    /* Responsive Adjustments */
    @media (max-width: 768px) {
        .col-md-6 {
            flex: 0 0 100%;
        }

        .login_part_form_iner {
            padding: 25px;
        }

        .login_part_form_iner h3 {
            font-size: 24px;
        }
    }

    @media (max-width: 480px) {
        .login_part_form_iner {
            padding: 20px 15px;
        }

        .form-control {
            padding: 12px 15px;
        }

        .btn_3 {
            padding: 12px 20px;
        }
    }
</style>

<section class="breadcrumb breadcrumb_bg">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="breadcrumb_iner">
                    <div class="breadcrumb_iner_item">
                        <h2>Register</h2>
                        <p>Home <span>-</span> User Registration</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="login_part padding_top">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6">
                <div class="login_part_text text-center">
                    <div class="login_part_text_iner">
                        <h2>Already a User</h2>
                        <p>
                            Simply log in with your existing credentials to continue exploring the world of Fashion.
                        </p>
                        <a href="login.php" class="btn_3">Login now</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="login_part_form">
                    <div class="login_part_form_iner">
                        <h3>
                            Welcome to Our Store ! <br /> Please Sign Up now
                        </h3>
                        <form class="row contact_form" action="scripts/signup_script.php" method="post">
                            <div class="col-md-6 form-group p_star">
                                <input type="text" class="form-control" required id="fname" name="fname" value="" placeholder="First Name" />
                            </div>
                            <div class="col-md-6 form-group p_star">
                                <input type="text" class="form-control" required id="lname" name="lname" value="" placeholder="Last Name" />
                            </div>
                            <div class="col-md-12 form-group p_star">
                                <input type="number" class="form-control" required id="mobile" name="mobile" value="" placeholder="Mobile Number" />
                            </div>
                            <div class="col-md-12 form-group p_star">
                                <input type="email" class="form-control" required id="email" name="email" value="" placeholder="Email Address" />
                            </div>
                            <div class="col-md-12 form-group p_star">
                                <input type="password" class="form-control" required id="password" name="password" value="" placeholder="Password" />
                            </div>
                            <div class="col-md-12 form-group">
                                <button type="submit" value="submit" class="btn_3">
                                    log in
                                </button>
                                <a class="lost_pass" href="#">forget password?</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require "./includes/footer.php" ?>

<script src="js/jquery-1.12.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.magnific-popup.js"></script>
<script src="js/swiper.min.js"></script>
<script src="js/masonry.pkgd.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.nice-select.min.js"></script>
<script src="js/slick.min.js"></script>
<script src="js/jquery.counterup.min.js"></script>
<script src="js/waypoints.min.js"></script>
<script src="js/contact.js"></script>
<script src="js/jquery.ajaxchimp.min.js"></script>
<script src="js/jquery.form.js"></script>
<script src="js/jquery.validate.min.js"></script>
<script src="js/mail-script.js"></script>
<script src="js/stellar.js"></script>
<script src="js/price_rangs.js"></script>
<script src="js/custom.js"></script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-23581568-13');
</script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/vaafb692b2aea4879b33c060e79fe94621666317369993" integrity="sha512-0ahDYl866UMhKuYcW078ScMalXqtFJggm7TmlUtp0UlD4eQk0Ixfnm5ykXKvGJNFjLMoortdseTfsRT8oCfgGA==" data-cf-beacon='{"rayId":"7721ac11f91d3390","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2022.11.3","si":100}'
    crossorigin="anonymous"></script>
</body>

</html>
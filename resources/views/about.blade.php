<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Baby Care</title>
    <!-- Bootstrap -->
    <link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/font-awesome.min.css') }}" rel="stylesheet">


    <link rel="stylesheet" type="text/css" href="{{ asset('/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/custom.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/responsive.css') }}">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
@include('shared.header')


<section class="wpm_title_ber" style="background:url({{asset('images/bg-image.jpg')}}) center center fixed;">

    <div class="wpm_opacity_bg">

        <div class="container">

            <div class="row">

                <div class="col-sm-12">

                    <h2 class="text-black">Services</h2>

                    <div class="ber_link text-center">

                        <h5 class="sub_title">WE HAVE 25 YEARS EXERIENCE IN BABY CARE</h5>

                        <p><i class="fa fa-angle-double-right"></i> <a href="index.html">Home</a> / <a
                                    href="about.html">Services</a> <i class="fa fa-angle-double-left"></i></p>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

<section class="about-us" style="
    background: none;
">

    <div class="container">
        <div class="row">
            <div class="top-abouts">
                <div class="col-xl-12">
                    <h2>Our <span class="wpm_color_word">Abouts</span></h2>
                    <div class="wpm_border"><i class="fa fa-smile-o"></i></div>

                    <div class="col-xl-4 col-md-4">
                        <div class="about-image">
                            <img src="{{asset('/icon/08.jpg')}}" alt="">
                        </div>
                    </div>
                    <div class="col-xl-8 col-md-8">
                        <div class="about-content">
                            <h3>
                                Our Baby day care about in given below:
                            </h3>

                            <p>
                                Welcome to My Baby day Care! This new website has been created to help you find the
                                right childcare service for you and your family.

                                Being two busy parents with years of experience in the childcare and child protection
                                field, we understand the challenge of being able to access quick but safe childcare
                                services.

                                Our mission is simple, to support the facilitation of fast, simple, tailored and SAFE
                                childcare.

                                Whether you are a child care provider wanting to advertise your services or a parent
                                looking for child care services we are sure that this site in general will be of great
                                benefit to you.

                                In line with our mission that finding and advertising services should be simple, we have
                                one membership level and one price which guarantees access to all of the great
                                membership benefits.

                                Thanks for being a part of our success story.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>


<section class="wpm_frooter_ending">

    <div class="container">

        <div class="col-sm-12 wpm_mobile_center">
            <div class="footer-icon">
                <div class="social">
                    <a href=""><img src="{{asset('/icon/facebook.png')}}" alt=""></a>

                    <a href=""><img src="{{asset('/icon/instagram.png')}}" alt=""></a>

                    <a href=""><img src="{{asset('/icon/twitter.png')}}" alt=""></a>

                    <a href=""><img src="{{asset('/icon/linkedin.png')}}" alt=""></a>

                </div>
                <div class="logo-footer">
                    <img src="{{asset('/icon/logo.png')}}" alt="">
                </div>

                <div class="contacts">
                    <a href=""><img src="{{asset('/icon/call.svg')}}" alt=""> <span>0179853585</span></a>
                    <a href=""><img src="{{asset('/icon/gmail.svg')}}" alt=""> <span>infobabycare@gmail.com</span></a>
                </div>
            </div>


            <p>Copyright &copy; <a href="#" target="_blank">{{date('Y')}}</a></p>
        </div>

    </div>

</section>


<script src="{{asset('/js/jquery.min.js') }}"></script>
<script src="{{asset('/js/custom.js') }}"></script>
</body>
</html>
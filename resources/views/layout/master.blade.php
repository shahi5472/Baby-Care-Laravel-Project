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
                    
                        <p> <i class="fa fa-angle-double-right"></i> <a href="index.html">Home</a> / <a href="about.html">Services</a>  <i class="fa fa-angle-double-left"></i> </p>
                    
                   </div>
                
                </div>
            
            </div>
        
        </div> 
        
      </div>    
   
   </section>
  <!------------------Empolyee are start-----------------> 
   
   <section class="wpm_team_area" id="about" >
   
   <div class="container">

    <div class="row">
    
        <h2>Our <span class="wpm_color_word">Employees</span></h2>
        
        <div class="wpm_border"> <i class="fa fa-smile-o"></i> </div>
    
        @foreach ($table as $item)
        <div class="col-sm-3">
        
            <div class="wpm_col_text">
                <div class="imageOuter" style="margin:0">
                   
                    <a class="image"  href="#">
                        <span class="rollover" ></span>
                        <img style="
                        height: 200px;
                    " class="imgborder" alt="" src="{{asset('uploads/employee/'.$item->image)}}">			
                    </a> 
                       
                </div>
                
                    <h4>{{$item->name}}</h4>
                    
                    <p>{{$item->designation}}</p>
                
            </div>
        
        </div>
        @endforeach
    <div class="col-md-12">
        <a href="{{url('/employee-list')}}" style="
        margin-top: 10px;
    " class="btn btn-primary mt-1">See more</a>
    </div>
    </div>

</div>

</section>
<!-------Empolyee are End------>

    <!-----------Service are start------------->
     <section id="service"  class="our_service_area">
    
    	<div class="container">
        
			<div class="row">
            
            	<h2>Our sevice <span class="wpm_color_word"> Packages</span></h2>
                
                <div class="wpm_border"> <i class="fa fa-smile-o"></i> </div>
                @php
                    $i = 1;
                @endphp

                @foreach ($data as $item)
            	<div class="col-sm-4">
                        <div class="services">
                            <h4><span style="color:#999;text-transform: capitalize;">{{$item->name}}</h4> 
                                <p class="m-0">{{$item->description}}</p>
                             <p class="main-price"><span>Price</span>: &nbsp; {{$item->amount}} Tk</p>
                        </div>
                </div>
                @endforeach
                <div class="col-md-12">
                    <a href="{{url('/packages-list')}}" style="
                    margin-top: 10px;
                    margin-bottom: 15px;
                " class="btn btn-primary mt-1">See more</a>
                </div>
            </div>       
        
        </div>
    
    </section>
   <!-------service--------->
   <!-----------Review start--------------->
   <section class="wpm_testimonial_area">

<div class="container">

    <div class="row">
    
    
        <h2>review From <span class="wpm_color_word">Users</span></h2>
        
        <div class="wpm_border"> <i class="fa fa-smile-o"></i> </div>
        
        <h6 class="sub_title">Lorem ipsum dolor sit amet, consectetur adipiscing elit</h6>
        
        @php
            $review = App\UserReview::where('isApproved','YES')->get();
        @endphp
    
        <div class="col-sm-12">
            <div class="slideshow-container">
                @foreach ($review as $item)
                    <div class="mySlides">
                        <q>{{$item->review}}</q>
                        <p class="author">- {{$item->name}}</p>
                    </div>
                @endforeach
                
                
                <a class="prev" onclick="plusSlides(-1)">❮</a>
                <a class="next" onclick="plusSlides(1)">❯</a>
                
                </div>
                
                <div class="dot-container">
                    @foreach ($review as $key => $row)
                        <span class="dot" onclick="currentSlide({{$key}})"></span> 
                    @endforeach
                </div>
        </div>

        <div class="col-md-12">
            <a href="{{url('give-review')}}" style="
            margin-top: 10px;
        " class="btn btn-primary mt-1">Give a review with your experience</a>
        </div>
    
    </div>

</div>

</section>
<!------------------Review end----------------------->
   <!----------contact start--------->
   <section class="call_us_area">
    
    	<div class="container">
        
        	<div class="row">
            
            	<div class="col-sm-9">
                
                       <h3>Call us today at <b>+8801354702974</b> or Email us at <a href="#">info@baby-care.com</a></h3>
                
                		<p>We design and develop the best website's for Baby day care! Order now to get a world class baby care package in here.</p>
                
                </div>
                
                <div class="col-sm-3">
                
                	<input type="submit" class="wpm_btn wpm_contact_btn" value="CONTACT US">	
                
                </div>
            
            </div>
        
        </div>
    
    </section>
    <!----contact end------------->
   
   <!-------more services start---------->
   
   <section class="wpm_features_area moreservice_area">
   
   		<div class="container">
        
        	<div class="row">
            
            		<h2>More <span class="wpm_color_word">Services</span></h2>
                    
                    <div class="wpm_border"> <i class="fa fa-smile-o"></i> </div>
            
            	<div class="col-sm-4">
                
                	<div class="wpm_box2">
                    
                    	<img src="images/card.gif" alt="" class="img-responsive">
                    
                    	<h3>Online Payment</h3>
                    
                    	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi libero eget luctus.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi libero eget luctus.</p>
                        
                    
                    </div>
                
                </div>
                
                
                <div class="col-sm-4">
                
                	<div class="wpm_box2">
                    
                    	<img src="images/car.gif" alt="" class="img-responsive">
                    
                    	<h3>Broughting Facility</h3>
                    
                    	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi libero eget luctus.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi libero eget luctus.</p>
                        
                    
                    </div>
                
                </div>
                
                <div class="col-sm-4">
                
                	<div class="wpm_box2">
                    
                    	<img src="images/baby_game.jpeg" alt="" class="img-responsive">
                    
                    	<h3>Gaming Facility of Baby</h3>
                    
                    	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi libero eget luctus.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi libero eget luctus.</p>
                        
                    
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
                    <a href=""><img src="{{asset('/icon/call.svg')}}" alt=""> <span>0172222222</span></a>
                    <a href=""><img src="{{asset('/icon/gmail.svg')}}" alt=""> <span>infobaby-care@gmail.com</span></a>
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
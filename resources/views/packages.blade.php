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

    
     <section id="service"  class="our_service_area">
    
    	<div class="container">
        
			<div class="row">
            
            	<h2>Our <span class="wpm_color_word">Packages</span></h2>
                
                <div class="wpm_border"> <i class="fa fa-smile-o"></i> </div>
                @php
                    $i = 1;
                @endphp

                @foreach ($data as $item)
            	<div class="col-sm-4">
                        <div class="services">
                            <h4><span style="color:#999;text-transform: capitalize;">{{$item->name}}</h4> 
                                <p class="m-0">{{$item->description}}</p>
                             <p><span style="color:#999">Price:</span> {{$item->amount}} Tk</p>
                        </div>
                </div>
                @endforeach
            </div>       
        
        </div>
    
    </section>
   
   
   
    
   <!-- footer -->
   <section class="wpm_frooter_ending " style="margin-top: 50px;">
     	
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
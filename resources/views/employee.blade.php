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
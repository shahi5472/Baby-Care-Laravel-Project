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
     
         <h2>Your <span class="wpm_color_word">Review</span></h2>
         
         <div class="wpm_border"> <i class="fa fa-smile-o"></i> </div>
        <form action="{{action('UserReviewController@store')}}" method="post">
            @csrf
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <input style="
                margin-bottom: 10px;
            " type="text" class="form-control" name="name" placeholder="enter your name" required>
                <textarea style="
                margin-bottom: 10px;
            " name="review" class="form-control" id="" cols="30" rows="10" placeholder="write here"></textarea>
                <button type="submit" class="btn btn-primary">Submit your review</button>
            </div>
        </form>
        
     </div>
 
 </div>
 
 </section>
   
   
   
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
            
                    <p>Copyright &copy; <a href="#" target="_blank">{{date('Y')}}</a></p>
                    
             </div>  
             
         </div>   
            
     </section>  
   
   
   
    <script src="{{asset('/js/jquery.min.js') }}"></script>
    <script src="{{asset('/js/custom.js') }}"></script>
   </body>
   </html>
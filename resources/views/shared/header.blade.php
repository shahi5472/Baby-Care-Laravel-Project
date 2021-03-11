
   <header class="wpm_header">
   
    <div class="container">
          
       <div class="row">
       
           <div class="col-sm-4">
         
              <a class="navbar-brand" href="{{url('/')}}"> <img class="wpm_logo" src="{{asset('/images/logo/logo.png') }}" alt=""></a>
            <div class="clearfix"></div>
         
         </div>
    
            <div class="col-sm-8">
         
                     <nav class="navbar navbar-default wpm_navber">
                         <!-- Brand and toggle get grouped for better mobile display -->
                         <div class="navbar-header">
                           <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                             <span class="sr-only">Toggle navigation</span>
                             <span class="icon-bar"></span>
                             <span class="icon-bar"></span>
                             <span class="icon-bar"></span>
                           </button>
                          
                         </div>
                     
                         <!-- Collect the nav links, forms, and other content for toggling -->
                         <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                           

                           <ul class="nav navbar-nav navbar-right wpm_menu"> 

                             <li><a href="{{url('/')}}">Home</a></li>
                             <li><a href="{{url('/about')}}">About</a></li>
                             <li><a href="{{url('/packages-list')}}">Packages</a> </li>
                             <li><a href="{{url('/employee-list')}}">Employees</a> </li>
                             <li><a style="
                                 background: #099084;
                                 color: #fff;
                             " href="{{url('user-booking')}}">Book</a> </li>
                             <li><a href="{{url('admin/dashboard')}}">Admin Panel</a> </li>
                           </ul>
                           
                         </div><!-- /.navbar-collapse -->
                      </nav>	
                      
                     
            </div>
         
         </div>
         
   </div>  	
      
</header>
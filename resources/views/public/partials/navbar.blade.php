



<nav class="navbar navbar-top navbar-horizontal fixed-top shadow-sm navbar-expand-md navbar-light bg-white">
        <a class="navbar-brand" href="{{ url('/') }}">
            <img src="{{ url('/image/logo.png') }}" class="d-inline-block nav-logo align-center" height="50px" alt="">
            &nbsp;Hydroquo+
        </a>

        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbar-collapse-main" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="navbar-collapse collapse" id="navbar-collapse-main" style="">
            <!-- Collapse header -->
            <div class="navbar-collapse-header d-md-none">
                <div class="row">
                    <div class="col-6 collapse-brand">
                        <a href="{{ route('home') }}">
                            <img src="{{ url('/image/logo.png') }}">
                             &nbsp;Hydroquo+
                        </a>
                    </div>
                    <div class="col-6 collapse-close">
                        <button type="button" class="navbar-toggler collapsed" data-toggle="collapse" data-target="#navbar-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                            <span></span>
                            <span></span>
                        </button>
                    </div>
                </div>
            </div>
            <ul class="navbar-nav mr-5">
				<li class="nav-item">
				     <a class="nav-link btn btn-outline-info" data-value="about" href="#about">About</a>
				</li>
				<li class="nav-item">
			    	<a class="nav-link btn btn-outline-info" data-value="portfolio"href="#partners">Our Partners</a>    
			 	</li>
				<li class="nav-item"> 
					<a class="nav-link btn btn-outline-info" data-value="contact" href="#contact">Contact</a>
				</li> 
				<li class="nav-item"> 
				    <a class="nav-link btn btn-outline-info" data-value="blog" href="{{url('/blog')}}">Blog</a>
				</li>
			</ul> 


            
        </div>
   
</nav>





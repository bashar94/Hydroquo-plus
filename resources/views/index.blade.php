@extends('public.master')

@section('title', 'Index')


@section('css')

@endsection


@section('body')

	<header>
		<div class="header bg-gradient-info py-9 py-lg-9">
		    <div class="container">
		        <div class="header-body text-center mb-7">
		            <div class="row justify-content-center">
		                <div class="col-lg-5 col-md-6">
		                    <h1 class="text-white">We are Hydroquo+</h1>
		                </div>
		            </div>
		        </div>
		    </div>
		    <div class="separator separator-bottom separator-skew zindex-100">
		        <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
		            <polygon style="fill: #f8f9fe;" points="2560 0 2560 100 0 100"></polygon>
		        </svg>
		    </div>
		</div>




		<div class="container mt--9 pb-5">
		        <div class="row justify-content-center">
	                
		                <div id="carouselIndex" class="carousel slide" data-ride="carousel">
						  <div class="carousel-inner">
						    
						    <div class="carousel-item active">
						    	<div class="overlay">
						    	</div>
						    	
						      	<img class="d-block w-100 "  src="https://www.gla.ac.uk/media/media_618814_en.jpg" alt="Second slide">

								<div class="carousel-caption">
									<h1>Post Title</h1>
									<p>Description of the post</p>
									<p style="float: right">Posted On: 23/05/2019</p>
								</div>



						    </div>

						    <div class="carousel-item">
						    	<div class="overlay">
						    	</div>
						    	
						      	<img class="d-block w-100 " src="https://www.oneyoungworld.com/sites/oneyoungworld.com/files/images/family-ottawa-Copy.jpg" alt="Second slide">

								<div class="carousel-caption">
									<h1>Post Title</h1>
									<p>Description of the post</p>
									<p style="float: right">Posted On: 23/05/2019</p>
								</div>



						    </div>
						    
						   
						  </div>

						  <a class="carousel-control-prev" href="#carouselIndex" role="button" data-slide="prev">
						    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
						    <span class="sr-only">Previous</span>
						  </a>
						  <a class="carousel-control-next" href="#carouselIndex" role="button" data-slide="next">
						    <span class="carousel-control-next-icon" aria-hidden="true"></span>
						    <span class="sr-only">Next</span>
						  </a>
						</div>
	        </div>
	    </div>

				



	  
	</header>

	<!-- about us -->

	<section id="about" class="about">
		<div class="row">
		   <div class="col-lg-4 col-md-4 col-sm-12">
		    <img src="{{ url('/image/logo.png') }}" height="600px" class="mx-auto d-block">
		    
		   </div>
		   <div class="col-lg-8 col-md-8 col-sm-12 desc">
		     
		    <h3>About Us</h3>
		    <p>
		    	Clean water scarcity will be one of the 3 biggest challenges that our planet will face. Four billion people are currently affected by severe water scarcity for at least one month a year as stated by <strong>Global Risk Report</strong>.
		    </p>
		    <p>
				Hydroquo+ formed in alignment with United Nations 6th and 12th Sustainable Development Goal is leveraging Internet of Things, Big Data and AI to eradicate water scarcity, ensure water quality and improve accessibility throughout Asia.
		    </p>
		   </div>
	  	</div>
		
	</section>

<!-- our partners -->
<section id="partners" class="partners">
	<h1 class="text-center">Our Partners</h1>
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-md-3 col-sm-6 ">
				<!-- <div class="circle">
				<div class="wave"></div> -->
				<img src="{{ url('/image/partners1.png') }}" class="mx-auto d-block" width="250px">

				
			</div>
			<div class="col-lg-3 col-md-3 col-sm-6 ">
				<img src="{{ url('/image/partners2.png') }}" class="mx-auto d-block">
			</div>
			<div class="col-lg-3 col-md-3 col-sm-6 ">
				<img src="{{ url('/image/partners3.png') }}" class="mx-auto d-block">
			</div>
			<div class="col-lg-3 col-md-3 col-sm-6 ">
				<img src="{{ url('/image/partners4.png') }}" class="mx-auto d-block">
			</div>
		</div>	
	</div>

	<hr>

	<h1 class="text-center">Achievements</h1>
</section>
	
@endsection


@section('javascript')
<script type="text/javascript">
	// $(document).ready(function(){
	//  $('.header').height($(window).height());
	// })

	$('#carouselIndex').carousel({
	  interval: 3000,
	  cycle: true
	}); 
</script>



@endsection
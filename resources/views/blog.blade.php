@extends('public.master')

@section('title', 'Hydroquo+ Blog')


@section('css')

@endsection


@section('body')

	<header>
		<div class="header bg-gradient-info py-9 py-lg-9">
		    <div class="container">
		        <div class="header-body text-center mb-7">
		            <div class="row justify-content-center">
		                <div class="col-lg-5 col-md-6">
		                    <h1 class="text-white">Blog Hydroquo+</h1>
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
	            <div class="col-lg-12 col-md-12">


	            	@foreach ($posts as $post)

	            		<div class="media border p-3 mb-2 bg-gradient-neutral">
						  <img src="{{ url('/image/feature_photos/'.$post->featured_photo) }}" alt="{{ $post->title }}" class="mr-5 mt-3 d-none d-sm-none d-md-block d-lg-block d-xl-block" style="height: 150px;  width:150px;">
						  <div class="media-body">
						    <h4><a href="{{ url('blog/'.$post->id.'/'.$post->slug) }}">{{ $post->title }}</a><br><small><i>{{ date("F j, Y, g:i a", strtotime($post->created_at)) }} by Razeen</i></small></h4>
						    <p>{{ substr($post->description, 0, 255).'...' }} <a href="{{ url('blog/'.$post->id.'/'.$post->slug) }}">Read More</a></p>
						  </div>
						</div>
					    
					@endforeach

					{{ $posts->links() }}
				</div>
			</div>
		</div>

		


	</header>

@endsection


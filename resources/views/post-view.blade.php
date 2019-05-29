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
		                    <h1 class="text-white">{{ $post->title }}</h1>
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

	            	<div class="text-justify">
	            		{!!html_entity_decode($post->body)!!}

	            	</div>

	            	

					
				</div>
			</div>
		</div>

		


	</header>

@endsection


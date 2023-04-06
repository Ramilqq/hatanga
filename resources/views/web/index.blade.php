@extends('layout.web')

@section('title', 'Главная')

@section('form_tab')
<section id="slider" class="slider-element slider-parallax swiper_wrapper min-vh-60 min-vh-md-100 include-header include-topbar">
	<div class="slider-inner">
		<div class="fslider h-100 position-absolute" data-speed="3000" data-pause="7500" data-animation="fade" data-arrows="false" data-pagi="false" style="background-color: #333;">
			<div class="flexslider">
				<div class="slider-wrap">
					@php($slide = str_replace('\\', '/', setting('site.slide_1')) ?: '')
					@if($slide)
					<div class="slide" style="background: url('/storage/{{ $slide }}') center center; background-size: cover;"></div>
					@endif

					@php($slide = str_replace('\\', '/', setting('site.slide_2')) ?: '')
					@if($slide)
					<div class="slide" style="background: url('/storage/{{ $slide }}') center center; background-size: cover;"></div>
					@endif

					@php($slide = str_replace('\\', '/', setting('site.slide_3')) ?: '')
					@if($slide)
					<div class="slide" style="background: url('/storage/{{ $slide }}') center center; background-size: cover;"></div>
					@endif
				</div>
			</div>
		</div>
	</div>
</section>
@endsection

@section('content')
<section id="content">
	<div class="content-wrap">

		<div class="section bottommargin-lg header-stick">
			<div class="container">
				<div class="row mt-4 col-mb-30 mb-0">
					@if(isset($advantages))
					@foreach($advantages as $advantage)
					<div class="col-sm-6 col-lg-3 text-center text-sm-left">
						<i class="i-plain color i-large {{$advantage['image']}} inline-block" style="margin-bottom: 15px;"></i>
						<div class="heading-block border-bottom-0 mb-0">
							<span class="before-heading">{{$advantage['body']}}</span>
							<h4>{{$advantage['title']}}</h4>
						</div>
					</div>
					@endforeach
					@endif
				</div>
			</div>
		</div>

		<div class="container clearfix">
			<div class="heading-block center border-bottom-0">
				<h2>Популярные мероприятия</h2>
			</div>
		</div>
		<div id="portfolio" class="portfolio row grid-container portfolio-overlay-open no-gutters">
			@if(isset($tours))
				@foreach ($tours as $tour)
					@php($images = json_decode($tour['image']) ?: '')
					@if($images)
						<article class="portfolio-item col-12 col-sm-6 col-md-4 col-lg-3 pf-media pf-icons">
							<div class="grid-inner">
								<div class="portfolio-image">
									<a href="{{ route('get_tour', $tour['slug']) }}">
										<img src="{{ Voyager::image($images[0])}}" alt="{{ $tour['title'] }}">
										<div class="bg-overlay">
											<div class="bg-overlay-content dark flex-column">
												<div class="portfolio-desc py-0 text-center">
													<h3>{{ $tour['title'] }}</h3>
												</div>
											</div>
											<div class="bg-overlay-bg dark op-ts op-05" data-hover-animate="op-1" data-hover-animate-out="op-05"></div>
										</div>
									</a>
								</div>
							</div>
						</article>
					@endif
				@endforeach
			@endif
		</div>

		<a href="{{ route('tour') }}" class="button button-full button-dark center bottommargin-lg">
			<div class="container clearfix">
				 <strong>Выбрать мероприятие</strong> <i class="icon-caret-right" style="top:4px;"></i>
			</div>
		</a>

		<div class="container">
			<div class="heading-block center">
				<h2>Последние новости</h2>
			</div>
			<div class="row posts-md col-mb-50">
				@if(isset($posts))
					@foreach ($posts as $post)
						@include('web.tpl.post', ['post'=>$post])
					@endforeach
				@endif
			</div>
		</div>
	</div>
</section>
@endsection
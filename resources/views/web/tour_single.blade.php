@extends('layout.web')

@section('title', $tour['title'])

@section('page_title')
	@include('web.tpl.bread', ['home' => $tour['title']])
@endsection

@section('content')
<section id="content">
	<div class="content-wrap">
		<div class="container clearfix">
			<div class="row gutter-40 col-mb-80">
				<div class="postcontent col-lg-12">
					<div class="single-post mb-0">
						@if(isset($tour))
							<div class="entry clearfix">
								<div class="entry-title">
									<h2>{{ $tour['title'] }}</h2>
								</div>
								<div class="entry-meta">
									<ul>
										<li><i class="icon-calendar-check1"></i>{{ $tour['date_start'] }}</li>
										<li><i class="icon-calendar-times1"></i>{{ $tour['date_end'] }}</li>
										@if ($tour['date_end'] and $tour['date_start'])
											@php($datetimeFrom = DateTime::createFromFormat( 'Y-m-d', $tour['date_end'] ))
											@php($datetimeTo = DateTime::createFromFormat( 'Y-m-d', $tour['date_start'] ))
											@php($days = $datetimeFrom->diff( $datetimeTo )->format( '%a дней' ))
											<li><i class="icon-time"></i>{{ $days }}</li>
										@endif
										<li>Сложность
										@foreach(range(1, 5) as $i)
											@if ($tour['leavel'] >= $i)
											<i class="icon-star3 color"></i> 
											@else
											<i class="icon-star3"></i>
											@endif
										@endforeach                        
										</li>
										<li><i class="icon-users"></i>{{ $tour['peoples'] }}</li>
                    					<li><i class="icon-user-clock"></i>{{ $tour['age'] }}</li>
										<li><i class="icon-comments"></i> 43 Комментарий</li>
									</ul>
								</div>
								@php($images = json_decode($tour['image']))
								@if (count($images) == 1)
									<div class="entry-image">
										<a href="#"><img src="{{ Voyager::image($images[0])}}" alt="{{ $tour['title'] }}"></a>
									</div>
								@else
									<div class="entry-image">				
										<div class="masonry-thumbs grid-container grid-3" data-big="2" data-lightbox="gallery">
										@foreach ($images as $image)
										<a class="grid-item" href="{{ Voyager::image($image)}}" data-lightbox="gallery-item"><img src="{{ Voyager::image($image)}}" alt="{{ $tour['title'] }}"></a>
										@endforeach
										</div>
									</div>
								@endif
								<div style="margin: 50px auto;">
									<div class="hotel-price">
										<i class="icon-ruble-sign"></i>{{ $tour['price'] }}
									</div>
									<small><em>Цена за человека*</em></small><br>
								</div>
								<div class="entry-content mt-0">
									{!! $tour['body'] !!}
								</div>
							</div>
							<!-- Post Author Info
							============================================= -->
							<!--div class="card">
								<div class="card-header"><strong>Posted by <a href="#">John Doe</a></strong></div>
								<div class="card-body">
									<div class="author-image">
										<img src="/storage/demo/author/1.jpg" alt="Image" class="rounded-circle">
									</div>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores, eveniet, eligendi et nobis neque minus mollitia sit repudiandae ad repellendus recusandae blanditiis praesentium vitae ab sint earum voluptate velit beatae alias fugit accusantium laboriosam nisi reiciendis deleniti tenetur molestiae maxime id quaerat consequatur fugiat aliquam laborum nam aliquid. Consectetur, perferendis?
								</div>
							</div>
							<div class="line"></div-->
							<!-- Post Single - Author End -->
						@endif

						@if(isset($more_tours))
						<h4>Так же имеется:</h4>

						<div class="related-posts row posts-md col-mb-30">
						@foreach ($more_tours as $more_tour)
							<div class="entry col-12 col-md-6">
								<div class="grid-inner row align-items-center gutter-20">
									<div class="col-4">
										<div class="entry-image">
											<a href="{{ route('get_tour', $more_tour['slug']) }}">
												@php($images = json_decode($tour['image']))
												<img src="{{ Voyager::image($images[0])}}" alt="$more_tour['title']">
											</a>
										</div>
									</div>
									<div class="col-8">
										<div class="entry-title title-xs">
											<h3><a href="{{ route('get_tour', $more_tour['slug']) }}">{{ $more_tour['title'] }}</a></h3>
										</div>
										<div class="entry-meta">
											<ul>
												<li><i class="icon-calendar3"></i> {{ $more_tour['date_start'] }}</li>
												<li><i class="icon-calendar3"></i> {{ $more_tour['date_end'] }}</li>
												<li><i class="icon-comments"></i> 12</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						@endforeach
						</div>
						@endif	
						
						@include('web.tpl.form_order_tour', ['id' => $tour['id']])
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection
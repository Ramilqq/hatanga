@extends('layout.web')

@section('title', 'Фотогалерея')

@section('page_title')
	@include('web.tpl.bread', ['home' => 'Фотогалерея'])
@endsection

@section('content')
<section id="content">
	<div class="content-wrap">
		<div class="container clearfix">
			<div class="row gutter-40 col-mb-80">
				<div class="postcontent col-lg-12">
					<div class="single-post mb-0">
						@if(isset($gallerys))
							<div class="entry clearfix">
								<div class="entry-title">
									<h2>Фотогалерея</h2>
								</div>
								<div class="entry-image">				
									<div class="masonry-thumbs grid-container grid-3" data-big="2" data-lightbox="gallery">
									@foreach ($gallerys as $gallery)
									<a class="grid-item" href="{{ Voyager::image($gallery['image'])}}" data-lightbox="gallery-item"><img src="{{ Voyager::image($gallery['image'])}}" alt="{{ $gallery['title'] }}"></a>
									@endforeach
									</div>
								</div>
							</div>
						@endif
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection
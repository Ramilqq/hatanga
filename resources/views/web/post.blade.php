@extends('layout.web')

@section('title', 'Хатанга для туриста')

@section('page_title')
	@include('web.tpl.bread', ['home'=>'Хатанга для туриста'])
@endsection

@section('content')
<section id="content">
	<div class="content-wrap">
		<div class="container">
			@if(isset($categories))
				<div id="page-menu" data-mobile-sticky="true">
					<div id="page-menu-wrap">
						<div class="container">
							<div class="page-menu-row">
								<nav class="page-menu-nav">
									<ul class="page-menu-container">
										@foreach ($categories as $category)
											<li class="page-menu-item"><a href="{{ route('get_category', $category['slug']) }}"><div>{{ $category['name'] }}</div></a></li>
										@endforeach
									</ul>
								</nav>
								<div id="page-menu-trigger"><i class="icon-reorder"></i></div>
							</div>
						</div>
					</div><div class="page-menu-wrap-clone" style="height: 49px;"></div>
				</div>
			@endif

			<h4>Последние статьи</h4>
			<div class="row posts-md col-mb-50 mb-0">
				@if(isset($posts))
					@foreach ($posts as $post)
						@include('web.tpl.post', ['post'=>$post])
					@endforeach
				@endif
			</div>
			<ul class="pagination my-0">
				@if(isset($links))
					@foreach ($links as $link)
						@if ($link['label'] == 'pagination.previous')
							@php($link['label'] = '<<')
						@endif
						@if ($link['label'] == 'pagination.next')
							@php($link['label'] = '>>')
						@endif

						@php($active = $link['active'] ? 'active' : '')
						@php($disabled = $link['url'] ? '' : 'disabled')

						<li class="page-item {{ $active }} {{ $disabled }}"><a class="page-link" href="{{ $link['url'] }}">{{ $link['label'] }}</a></li>
					@endforeach
				@endif
			</ul>
		</div>
	</div>
</section>
@endsection
<section id="page-title" class="page-title-center page-title-parallax page-title-dark include-header include-topbar" style="background-image: url('/storage/demo/images/hotels/page-title.jpg'); background-position: center center; padding: 100px 0;" data-bottom-top="background-position:0px 0px;" data-top-bottom="background-position:0px -200px;">

	<div class="container clearfix">
		@if(isset($home))
			<h1>{{ $home }}</h1>
		@endif
		<ol class="breadcrumb">
			@if(isset($breadcrumb))
				@foreach($breadcrumb as $name => $route)
					@if($route)
					<li class="breadcrumb-item"><a href="{{ route($route) }}">{{$name}}</a></li>
					@else
					<li class="breadcrumb-item active" aria-current="page">{{$name}}</li>
					@endif
				@endforeach
			@endif
		</ol>
	</div>
</section>
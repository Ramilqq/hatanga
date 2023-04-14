@extends('layout.web')

@section('title', $post['title'])

@section('page_title')
	@include('web.tpl.bread', ['home' => $post['title']])
@endsection

@section('content')
<section id="content">
	<div class="content-wrap">
		<div class="container clearfix">
			<div class="row gutter-40 col-mb-80">
				<div class="postcontent col-lg-12">
					<div class="single-post mb-0">
						@if(isset($post))
							<div class="entry clearfix">
								<div class="entry-title">
									<h2>{{ $post['title'] }}</h2>
								</div>
								<div class="entry-meta">
									<ul>
										<li><i class="icon-calendar-check1"></i>{{ date('d-m-Y', strtotime( $post['created_at'])) }}</li>
										<li><i class="icon-comments"></i> {{ $count }} Комментарий</li>
									</ul>
								</div>
								@if ($post['image'])
									<div class="entry-image">
										<a href="#"><img src="{{ Voyager::image($post['image'])}}" alt="{{ $post['title'] }}"></a>
									</div>
								@endif
								<div class="entry-content mt-0">
									{!! $post['body'] !!}
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

						@include('web.tpl.comment', ['id' => $post['id'], 'count' => $count])
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection
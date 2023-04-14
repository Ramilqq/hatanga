@extends('layout.web')

@section('title', '404')

@section('page_title')
	@include('web.tpl.bread', ['home' => '404'])
@endsection

@section('content')
<section id="content">
	<div class="content-wrap">
		<div class="container clearfix">
			<div class="row gutter-40 col-mb-80">
				<div class="postcontent col-lg-12">
					<div class="single-post mb-0">
						<h1>Страница не найдена</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection
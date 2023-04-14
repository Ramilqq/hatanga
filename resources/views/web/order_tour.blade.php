@extends('layout.web')

@section('title', 'Заявка отправлена')

@section('page_title')
	@include('web.tpl.bread', ['home' => 'Заявка отправлена'])
@endsection

@section('content')
<section id="content">
	<div class="content-wrap">
		<div class="container clearfix">
			<div class="row gutter-40 col-mb-80">
				<div class="postcontent col-lg-12">
					<div class="single-post mb-0">
						@if(isset($order))
							@if($order)
							<div class="entry clearfix">
								<div class="alert alert-success">
									<p>Заявка принята</p>
									<p>Статус заявки: {{ $order['status'] }}</p>
								</div>
							</div>
							@endif
						@else
							<div class="entry clearfix">
								<div class="alert alert-warning">Ошибка в заявке</div>
							</div>
						@endif
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection
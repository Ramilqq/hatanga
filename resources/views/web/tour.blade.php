@extends('layout.web')

@section('title', 'Туры')

@section('page_title')
	@include('web.tpl.bread', ['home'=>'Календарь мероприятий'])
@endsection

@section('content')
<section id="content">
	<div class="content-wrap">
		<div class="container clearfix">
			<div class="row gutter-40 col-mb-80">
				<div class="postcontent col-lg-9 order-lg-last">
					<div id="posts" class="row gutter-40 mb-0">
						@if(isset($tours))
							@foreach ($tours as $tour)
								@include('web.tpl.tour', ['tour'=>$tour])
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

				<div class="sidebar col-lg-3">
					<div class="sidebar-widgets-wrap">
						<div class="toggle-content pl-0 mt-15" style="display: block;">
							<form class="row mb-0" action="{{ route('tour') }}" method="GET">
								<div class="col-12">
									<div class="input-daterange travel-date-group row mb-0">
										<div class="col-12 form-group">
											<label for="">Дата начала</label>
											<input type="text" value="{{ request()->get('date_start') }}" class="sm-form-control text-left" name="date_start" placeholder="yyyy-mm-dd">
										</div>
									</div>
								</div>
								<div class="col-12 form-group mb-0">
									<button type="submit" class="button button-3d m-0">Поиск</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection
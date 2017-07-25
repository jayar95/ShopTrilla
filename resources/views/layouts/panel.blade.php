@extends ('layouts.app')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				@foreach (['danger', 'warning', 'success', 'info'] as $msg)
					@if(Session::has($msg))
						<p class="alert alert-{{ $msg }}">
							{{ Session::get($msg) }}
						</p>
					@endif
				@endforeach

				<div class="panel panel-default">
					<div class="panel-heading">
						@yield('panel-title')
					</div>

					<div class="panel-body">
						@yield('panel-content')
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
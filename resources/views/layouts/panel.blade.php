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

				@if ($errors->any())
					<div class="alert alert-danger">
						<ul>
							@foreach ($errors->all() as $error)
								<li>{{ $error }}</li>
							@endforeach
						</ul>
					</div>
				@endif

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
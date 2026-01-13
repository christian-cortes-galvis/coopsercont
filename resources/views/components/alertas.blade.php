<div class="row w-100">
	<div class="col-12">
		@php $mensaje = session()->get('primary') ?? session()->get('success') ?? session()->get('info') ?? session()->get('warning') ?? session()->get('error') ?? session()->get('danger') @endphp
		@if ( !empty( $mensaje ) )
			@if( session('primary') )
				@php $colorAlerta = 'primary' @endphp
			@elseif( session('success') )
				@php $colorAlerta = 'success' @endphp
			@elseif( session('info') )
				@php $colorAlerta = 'info' @endphp
			@elseif( session('warning') )
				@php $colorAlerta = 'warning' @endphp
			@elseif( session('danger') || session('error') )
				@php $colorAlerta = 'danger' @endphp
			@endif
			@php $colorText = session('warning') || session('info')  ? 'text-dark' : 'text-white' @endphp
			<div class="alert alert-{{$colorAlerta}} border-0 bg-{{$colorAlerta}} alert-dismissible fade show py-2">
				<div class="d-flex align-items-center">
					<div class="font-35 {{ $colorText }}">
						@if( session('success') || session('primary') )
							<i class="fas fa-check-circle"></i>
						@elseif( session('info') )
							<i class="fas fa-info-circle"></i>
						@elseif( session('warning') )
							<i class="fas fa-exclamation-circle"></i>
						@elseif( session('danger') || session('error') )
							<i class="fas fa-times-circle"></i>
						@endif
					</div>
					<div class="ms-3">
						<h6 class="mb-0 {{ $colorText }}">
							@if( session('success') || session('primary') )
								Correcto!
							@elseif( session('info') )
								Información!
							@elseif( session('warning') )
								Alerta!
							@elseif( session('danger') || session('error') )
								Error!
							@endif
						</h6>
						<div class="{!! $colorText !!}">{!! $mensaje !!}</div>
					</div>
				</div>
				<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
			</div>
		@endif
		@if ( $errors->any() )
			<div class="alert alert-danger border-0 bg-danger alert-dismissible fade show py-2" role="alert">
				<div class="d-flex align-items-center">
					<div class="font-35 text-white">
						<i class="fas fa-times-circle"></i>
					</div>
					<div class="ms-3">
						<ul class="text-white">
							@foreach ($errors->all() as $error)
								<li>{!! $error !!}</li>
							@endforeach
						</ul>
					</div>
				</div>
				<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
			</div>
		@endif
	</div>
</div>

@extends('layouts.master')

@section('content')
<div class="row">
	<div class="col s12">
		<ul class="collapsible popout" data-collapsible="accordion">
			@foreach ($sharings as $sharing)
			<li>
				<div class="collapsible-header">
					<i class="material-icons">{{ $sharing->category->icon }}</i>{{ $sharing->title }}
					<div class="right">
						{{ date('d M Y', strtotime($sharing->created_at)) }}
					</div>
				</div>
				<div class="collapsible-body"><p>{{ $sharing->description }}</p></div>
			</li>
			@endforeach
		</ul>
	</div>
</div>
@endsection
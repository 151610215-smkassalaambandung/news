@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<ul class="breadcrumb">
				<li><a href="{{url('/home')}}">Dasboard</a></li>
				<li><a href="{{url('/admin/berita')}}">Berita</a></li>
				<li class="active">Ubah Berita</li>
				</ul>
				<div class="panel panel-default">
					<div class="panel-heading">
						<h2 class="panel-title">Ubah Berita</h2>
					</div>
					<div class="panel-body">
					{!! Form::model($berita,['url'=> route('berita.update',$berita->id),'method'=>'put','files'=>'true','class'=>'form-horizontal']) !!}
					@include('berita._form')
					{!! Form::close() !!}
					</div>
				</div>
		</div>
	</div>
</div>
@endsection
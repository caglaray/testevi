@extends('adminmaster')
@section('title','Doktor Liste')

@section('content')
<div class="col-md-12">
	<div class="widget">
		<div class="widget-header transparent">

		</div>
		<div class="widget-content">					
			<div class="table-responsive">
			@if(session('status'))
			<div class="alert alert-success">
				{{ session('status') }}
			</div>
			@endif

				@if($doctors->isEmpty())
				<p> Kayıt Yok</p>
				@else
				<table data-sortable="" class="table" data-sortable-initialized="true">
					<thead>
						<tr>
							<th>No</th>
							<th>Kullanıcı Adı</th>
							<th>Adı</th>
							<th>Soyadı</th>
							<th>Email</th>
							<th>Durum</th>
							<th data-sortable="false">İşlemler</th>
						</tr>
					</thead>

					<tbody>

						@foreach($doctors as $doctor)

					<tr>
						<td>{!! $doctor->id !!}</td>
						<td><a href="{!! action('DoctorController@show' , $doctor->id) !!}"> {!! $doctor->username !!}</a></td>
						<td>{!! $doctor->name !!}</td>
						<td>{!! $doctor->surname !!}</td>
						<td><a href="mailto:#">{!! $doctor->email !!}</a></td>
						<td><span class="label label-success">Active</span></td>
						<td>
							<div class="btn-group btn-group-xs">
								<a data-toggle="tooltip" title="Görüntüle" href="{!! action('DoctorController@show' , $doctor->id) !!}" class="btn btn-default"><i class="fa fa-user fa-1"></i></a>

								<a data-toggle="tooltip" title="Güncelle" href="{!! action('DoctorController@edit' , $doctor->id) !!}" class="btn btn-default"><i class="fa fa-edit"></i></a>
						
								<a data-toggle="tooltip" title="Sil" href="{!! action('DoctorController@silinecek' , $doctor->id) !!}" class="btn btn-default"><i class="fa fa-times fa-1"></i></a>
							</div>
						</td>
					</tr>
						@endforeach
					</tbody>
				</table>
				@endif
			</div>
		</div>
	</div>
</div>
@endsection
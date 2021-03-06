@extends('adminmaster')
@section('title','Doktor Güncelle')

@section('content')




<div class="widget" style="position: relative; opacity: 1; left: 0px; top: 0px;">
	<div>
		<h2><strong></strong></h2>
	</div>
	<div class="widget-content padding" style="display: block;">
		<form role="form" method="post" id="registerForm" class="bv-form">




			<input type="hidden" name="_token" value="{!! csrf_token() !!}"  />   



			@foreach($errors->all() as $error)
			<p class="alert alert-danger">{{ $error }}</p>
			@endforeach



			@if(session('status'))
			<div class="alert alert-success">
				{{ session('status') }}
			</div>
			@endif



			<div class="form-group">
				<label>Kullanıcı Adı</label>
				<input type="text" class="form-control"  name="username" value="{!! $Doctor->username !!}"   id="username">
			</div>
			<div class="form-group">
				<label>Adı</label>
				<input type="text" class="form-control" name="name" value="{!! $Doctor->name !!}" id="name">
			</div>
			<div class="form-group">
				<label>Soyadı</label>
				<input type="text" class="form-control" name="surname" value="{!! $Doctor->surname !!}" id="surname">
			</div>
			<div class="form-group">
				<label>Mail Adresi</label>
				<input type="text" class="form-control" name="email" value="{!! $Doctor->email !!}" id="email">
			</div>
			<div class="form-group">
				<div class="row">
					<div class="col-sm-6">
						<label>Şifre</label>
						<input id="password" type="password" class="form-control" name="password" value="{!! $Doctor->password !!}" id="password">
					</div>
					<div class="col-sm-6">
						<label>Şifre Tekrar</label>
						<input type="password" class="form-control" name="confirmPassword" value="{!! $Doctor->password !!}" id="confirmPassword">
					</div>
				</div>
			</div>
			<div class="form-group">
				<label>Telefon</label>
				<input type="text" class="form-control" name="telephone" value="{!! $Doctor->telephone !!}" id="telephone">
			</div>
			<div class="form-group">
				<label>Adres</label>
				<input type="text" class="form-control" name="adress" value="{!! $Doctor->adress !!}" id="adress">
			</div>
			<div class="form-group">
				<label>Fotoğraf URL</label>
				<input type="text" class="form-control" name="photourl" value="{!! $Doctor->photourl !!}" id="photourl">
			</div>
			<div class="form-group">
				<label>Doğum Tarihi</label>
				<input type="text" class="form-control" name="birthday" value="{!! $Doctor->birthday !!}" id="birthday">
			</div>
			<div class="form-group">
				<label>Yaşadığınız Şehir</label>
				<input type="text" class="form-control" name="livecity" value="{!! $Doctor->livecity !!}" id="livecity">
			</div>



			<div class="form-group">
				<label class="control-label" id="captchaOperation">Doğrulama : 30 + 1 = </label>
				<div class="row">
					<div class="col-sm-4">
						<input type="text" class="form-control" name="captcha" data-bv-field="captcha">
					</div>
				</div>
			</div>

			<button type="submit" class="btn btn-primary">Kaydet</button>
			<input type="hidden" value="">
		</form>
	</div>
</div>

@endsection
@extends('adminmaster')
@section('title','Doktor Silme')

@section('content')
<form method="post" action="{!! action('Admin\DoctorController@destroy',$Doctor->id) !!}" >
<input type="hidden" name="_token" value="{!! csrf_token() !!}">

<table class="table">
<tr>
<td width="150px">Doktor ID :</td>
<td>{!! $Doctor->id !!}</td>
</tr>
<tr>
<td>Kullanıcı Adı :</td>
<td>{!! $Doctor->username !!}</td>
</tr>
<tr>
<td>Adı :</td>
<td>{!! $Doctor->name !!}</td>
</tr>
<tr>
<td>Soyadı :</td>
<td>{!! $Doctor->surname !!}</td>
</tr>
<tr>
<td>Mail Adresi :</td>
<td>{!! $Doctor->email !!}</td>
</tr>
<tr>
<td>Telefon :</td>
<td>{!! $Doctor->telephone !!}</td>
</tr>
<tr>
<td>Yaşadığı Şehir :</td>
<td>{!! $Doctor->livecity !!}</td>
</tr>
<tr>
<td>Adres :</td>
<td>{!! $Doctor->adress !!}</td>
</tr>
<tr>
<td>Doğum Tarihi :</td>
<td>{!! $Doctor->birthday !!}</td>
</tr>
<tr>
<td>Resim URL :</td>
<td>{!! $Doctor->photourl !!}</td>
</tr>
<tr colspan="2"><td>
<a class="btn btn-primary"  href="{!! action('Admin\DoctorController@DoktorListe', null)  !!}"  >Vazgeç</a>

<button type="submit" class="btn btn-danger">Sil</button>

</td></tr>
</table>
</form>
@endsection
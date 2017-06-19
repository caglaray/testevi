@extends('doktormaster')
@section('content')



<div class="profile-banner" style="background-image: url({{ URL::asset('images/stock/1epgUO0.jpg') }});">
	<div class="col-sm-3 avatar-container">
		<img src="{{ URL::asset('images/users/user-256.jpg') }}" class="img-square profile-avatar" alt="User avatar">
	</div>
	<div class="col-sm-12 profile-actions text-right">
		

	</div>
</div>



<br/>
<br/>
<div class="row">
	<div class="col-sm-3">
		<!-- Begin user profile -->
		<div class="text-center user-profile-2">
			<br><h4> <b><?php echo Auth::user()->name." ".Auth::user()->surname; ?></b></h4>

			<h5>Doktor Ünvanı</h5>
			<ul class="list-group">
				
				<li class="list-group-item">
					<span class="badge" title="Cevapladığı Soru Sayısı">10</span>
					Cevapladığı Soru
				</li>

			</ul>

			<!-- User button -->
			<div class="user-button">
				<div class="row">
					<p class="help-block"></p>
					


				</div>
			</div><!-- End div .user-button -->
		</div><!-- End div .box-info -->
		<!-- Begin user profile -->
	</div><!-- End div .col-sm-4 -->
	<br>
	<div class="col-sm-9">
		<div class="widget widget-tabbed">
			<!-- Nav tab -->
			<ul class="nav nav-tabs nav-justified">
				<li class="active"><a href="#aboutus" data-toggle="tab"><i class="fa fa-pencil"></i> Hakkında</a></li>
				<li><a href="#services" data-toggle="tab"><i class="fa fa-user"></i> Hizmet & Kategori</a></li>
				<li><a href="#settings" data-toggle="tab"><i class="fa fa-laptop"></i> Hesap Ayarları</a></li>
				<li><a href="#information" data-toggle="tab"><i class="fa fa-envelope"></i> Kullanıcı Bilgileri</a></li>
			</ul>
			<!-- End nav tab -->

			<!-- Tab panes -->
			<div class="tab-content">


				<!-- Tab aboutus -->
				<div class="tab-pane animated active fadeInRight" id="aboutus">
					<div class="user-profile-content">
						<h5><strong>Hakkında</strong></h5>
						<p>
							<?php echo Auth::user()->about; ?>
						</p>
						<br>
						<div class="text-right"><button data-modal="md-fall" class="btn btn-default btn-sm md-trigger">Düzenle</button></div>
						<hr />
						<h5><strong>Mezun Oluduğu Okullar</strong></h5>
						<div class="text-right"><button data-modal="md-education" class="btn btn-success btn-sm md-trigger">Ekle</button></div>
						<div class="table-responsive">
							
						@if($okullar->isEmpty())
							<p> Kayıt Yok</p>
							@else
							<table data-sortable="" class="table table-hover table-striped" data-sortable-initialized="true">
								<thead>
									<tr>

										<th data-sortable="false">Okul Adı</th>
										<th data-sortable="false">Eğitim Bilgisi</th>
										<th data-sortable="false">Başlangıç Tarihi</th>
										<th data-sortable="false">Mezuniyet Tarihi</th>


										<th data-sortable="false">Seçenekler</th>
									</tr>
								</thead>

								<tbody>
									@foreach($okullar as $okul)
									<tr>
										<td><strong>{!! $okul->name !!}</strong></td>
										<td>{!! $okul->education !!}</td>
										<td>{!! $okul->start !!}</td>
										<td>{!! $okul->finish !!}</td>
										<td>
											<div class="btn-group btn-group-xs">
												<a data-toggle="tooltip" title="Düzenle" class="btn btn-warning"><i class="fa fa-edit"></i></a>
												<a data-toggle="tooltip" title="Sil" class="btn btn-danger"><i class="fa fa-close"></i></a>
											</div>
										</td>
									</tr>
									@endforeach


								</tbody>
							</table>
							@endif
						</div>
						<br>

						




						<!-- End div .row -->
					</div><!-- End div .user-profile-content -->
				</div><!-- End div .tab-pane -->
				<!-- End Tab aboutus -->

				<!-- Tab services -->
				<div class="tab-pane animated fadeInRight" id="services">
					<div class="user-profile-content">

						<div class="col-sm-6">
							<h5><strong>Hizmetler</strong></h5>
							<p>UI Design</p>
							<p>Clean and Modern Web Design</p>
							<p>PHP and MySQL Programming</p>
							<p>Vector Design</p>
						</div>

						<div class="col-sm-6">
							<h5><strong>Hizmet Ekle</strong> </h5>
							<p class="help-block">Eklemek İstediğiniz Hizmet Alanı Bulunmuyorsa <br>Lütfen Yöneticinize Başvurun</p>
							<div class="col-sm-12">
								<select multiple="" class="form-control">
									<option>1</option>
									<option>2</option>
									<option>3</option>
									<option>4</option>
									<option>5</option>
								</select>
								<br>
								<button class="btn btn-success btn-sm" type="button">Kaydet</button>
							</div>


						</div>

						
						<div class="col-sm-6">
							<h5><strong>Hizmet Verdiği Kategoriler</strong></h5>
							<p>UI Design</p>
							<p>Clean and Modern Web Design</p>
							<p>PHP and MySQL Programming</p>
							<p>Vector Design</p>
						</div>
						<div class="col-sm-6">
							<h5><strong>Kategori Ekle</strong> </h5>
							<p class="help-block"><b>Eklemek İstediğiniz Kategori  Yoksa <br>Lütfen Yöneticinize Başvurun</b></p>
							<div class="col-sm-12">
								<select multiple="" class="form-control">
									<option>1</option>
									<option>2</option>
									<option>3</option>
									<option>4</option>
									<option>5</option>
								</select>
								<br>
								<button class="btn btn-success btn-sm" type="button">Kaydet</button>
							</div>


						</div>
					</div>

				</div><!-- End div .tab-pane -->
				<!-- End Tab services -->


				<!-- Tab user settings -->
				<div class="tab-pane animated fadeInRight" id="settings">
					<div class="scroll-user-widget">



					</div>
					<div class="col-sm-6">
						<div class="widget-content padding">
							<h5><strong>Hesap Ayarları</strong></h5>                            
							<div class="col-sm-6">
								<address>
									<strong>Doktor Adı</strong><br>
									<abbr title="Kurum Adı">Doktro Adı</abbr>
								</address>
								<address>
									<strong>Adres</strong><br>
									<abbr title="Adres">Kurum Adresi</abbr>
								</address>
								<address>
									<strong>Telefon</strong><br>
									<abbr title="Telefon">+62 857 123 4567</abbr>
								</address>
								

							</div>

						</div>
						<!-- End div .scroll-user-widget -->
					</div>
					<div class="col-sm-6">
						<div class="widget-content padding">

							<div class="col-sm-6">
								<address>
									<strong>Kategorisi Adı</strong><br>
									<abbr title="Kurum Adı">Kurum Adı</abbr>
								</address>
								<address>
									<strong>E-mail</strong><br>
									<a href="#">first.last@example.com</a>
								</address>
								<address>
									<strong>Logo</strong><br>
									<div class="column">
										<div class="inner">

											<div class="img-wrap">
												<img src="{{ URL::asset('images/users/user-256.jpg') }}" class="mfp-fade">
											</div>

										</div>
									</div>
								</address>
								
								


							</div>

						</div>
						<!-- End div .scroll-user-widget -->
					</div>
					<div class="text-right" style="margin-right: 80px;"><button data-modal="md-account" class="btn btn-default btn-sm md-trigger">Düzenle</button></div>
				</div><!-- End div .tab-pane -->
				<!-- End Tab user settings -->

				<!-- Tab user information -->
				<div class="tab-pane animated fadeInRight" id="information">
					<div class="scroll-user-widget">
						<div class="col-sm-6">
							<div id="basic-form">

								<div class="form-group">
									<label>Kullanıcı Adı</label>
									<input type="text" class="form-control" id="" placeholder="Kullanıcı adınız" disabled="">
								</div>
								<div class="form-group">
									<label>Şifre</label>
									<input type="password" class="form-control"  placeholder="******" disabled="">
								</div>



							</div>
						</div>	
						<div class="col-sm-6">
							<div id="basic-form">
								<form role="form">
									<div class="form-group">
										<label>Kullanıcı Adı</label>
										<input type="text" class="form-control"  placeholder="Kullanıcı adınız" required="" value="Kullanıcı Adınız">
									</div>
									<div class="form-group">
										<label>Şifre</label>
										<input type="password" class="form-control" required="" placeholder="Yeni Şifre">
									</div>
									<div class="form-group">
										<label for="exampleInputPassword1">Şifreyi Tekrar Yazını</label>
										<input type="password" class="form-control" required=""  placeholder="Tekrar Yazın">
									</div>
									
									<button type="submit" class="btn btn-success">Kaydet</button>
								</form>
							</div>
						</div>

					</div><!-- End div .scroll-user-widget -->
				</div><!-- End div .tab-pane -->
				<!-- End Tab user messages -->
			</div><!-- End div .tab-content -->
		</div><!-- End div .box-info -->
	</div>


	<div class="md-modal md-fall md-hide" id="md-fall">
		<div class="md-content">
			<h3>Hakkımızda</h3>
			<div>

				<div class="form-group">
					<label>Hakkımızda</label>
					<textarea class="form-control" name="" style="height: 140px; resize: none;" maxlength="250"></textarea>
				</div>
				<p>
					<button class="btn btn-danger md-close">Kapat</button>
					<button class="btn btn-success md-close">Kaydet</button>
				</p>

			</div>
		</div>
	</div>
	<div class="md-modal md-fall md-hide" id="md-education">
		<div class="md-content"><div class="form-group">
			<h3>Eğitim Bilgisi Ekle</h3>
			<div class="form-group">
				<label>Okul Adı</label>
				<input type="text" class="form-control" name="school" data-bv-field="school">
			</div>
			<div class="form-group">
				<label>Bitirdiği Derece</label>
				<input type="text" class="form-control" name="degree" data-bv-field="degree">
			</div>


		</div>
		<div class="md-modal md-fall md-hide" id="md-account">
			<div class="md-content">
				<div id="basic-form">
					<form role="form">
						<div class="form-group">
							<label for="corporationname">Kurum Adı</label>
							<input type="text" class="form-control" id="" value="Kurum Adınız">
						</div>
						<div class="form-group">
							<label class="control-label">Adres</label>
							<textarea style="max-width: 470px; max-height:80px;" class="form-control" name="" placeholder="Adresinizi Giriniz">Adresiniz</textarea>
						</div>
						<div class="form-group">
							<label for="corporationphone">Telefon Numarası</label>
							<input type="phone" class="form-control" id="" placeholder="Telefon Numarası Girin" value="0541 280 10 30">
						</div>

						<div class="form-group">
							<input type="file" class="btn btn-default" title="Logo Değiştir">

						</div>

						<p style="margin-bottom: 5px;">
							<button class="btn btn-danger md-close">Kapat</button>
							<button class="btn btn-success md-close">Kaydet</button>
						</p>

					</form>
				</div>
			</div>

		</div>

		/*Burayı kontrol edicez*/
	</div></div></div>
	@endsection
<?php
// untuk mode edit
isset($detail_penerbit['kode_penerbit']) ? $kode_penerbit=$detail_penerbit['kode_penerbit'] :  $kode_penerbit=null;
isset($detail_penerbit['nama_penerbit']) ? $nama_penerbit=$detail_penerbit['nama_penerbit'] :  $nama_penerbit=null;
isset($detail_penerbit['kota_penerbit']) ? $kota_penerbit=$detail_penerbit['kota_penerbit'] :  $kota_penerbit=null;
isset($detail_penerbit['website_penerbit']) ? $website_penerbit=$detail_penerbit['website_penerbit'] :  $website_penerbit=null;
isset($detail_penerbit['email_penerbit']) ? $email_penerbit=$detail_penerbit['email_penerbit'] :  $email_penerbit=null;
isset($detail_penerbit['telepon_penerbit']) ? $telepon_penerbit=$detail_penerbit['telepon_penerbit'] :  $telepon_penerbit=null;

$kode_penerbit==null ? $autofocus_kode='autofocus' : $autofocus_kode=null;
$nama_penerbit==null ? $autofocus_nama=null : $autofocus_nama='autofocus';
$autofocus_nama=='autofocus' ? $readonly_kode='readonly' : $readonly_kode=null;
?>




<div class="container">

<form method="POST" role="form" action="<?php echo base_url();?>index.php/penerbit/form/<?php echo $this->uri->segment(3);?>" class="form-horizontal">
<div class="form-group">
	<label for="kode_penerbit" class="control-label col-md-2">Kode Penerbit *)</label>
	<div class=" col-md-6">
		<input class="form-control" name="kode_penerbit" placeholder="Masukan Kode Penerbit" autocomplete="off" value="<?php echo $kode_penerbit;?>" <?php echo $autofocus_kode;?> <?php echo $readonly_kode;?>/>
	</div>
	<div class="col-md-4">
	<?php
	echo form_error('kode_penerbit'); 
	?>
	</div>

</div>

<div class="form-group">
	<label for="nama_penerbit" class="control-label col-md-2">Nama Penerbit *)</label>
	<div class="col-md-6">
		<input class="form-control" name="nama_penerbit" placeholder="Masukan Nama Penerbit" autocomplete="off" value="<?php echo $nama_penerbit;?>" <?php echo $autofocus_nama;?>/>
	</div>
	<div class="col-md-4">
	<?php
	echo form_error('nama_penerbit'); 
	?>
	</div>
</div>

<div class="form-group">
	<label for="kota_penerbit" class="control-label col-md-2">Kota Alamat Penerbit</label>
	<div class=" col-md-6">
		<input class="form-control" name="kota_penerbit" placeholder="Masukan Alamat Lengkap Penerbit" autocomplete="off" value="<?php echo $kota_penerbit;?>"/>
	</div>
</div>

<div class="form-group">
	<label for="web_penerbit" class="control-label col-md-2">Web Site</label>
	<div class=" col-md-6">
		<input class="form-control" name="web_penerbit" placeholder="Masukan URL Website Penerbit" autocomplete="off" value="<?php echo $website_penerbit;?>"/>
	</div>
</div>

<div class="form-group">
	<label for="email_penerbit" class="control-label col-md-2">Email Penerbit</label>
	<div class=" col-md-6">
		<input class="form-control" name="email_penerbit" placeholder="Masukan Email Penerbit" autocomplete="off" value="<?php echo $email_penerbit;?>"/>
	</div>
</div>

<div class="form-group">
	<label for="phone_fax__penerbit" class="control-label col-md-2">Telepon/Fax Penerbit *)</label>
	<div class=" col-md-6">
		<input class="form-control" name="phone_fax_penerbit" placeholder="Masukan Nomor Telpon/Fax Penerbit" autocomplete="off" value="<?php echo $telepon_penerbit;?>"/>
	</div>
	<div class="col-md-4">
	<?php
	echo form_error('phone_fax_penerbit'); 
	?>
	</div>

</div>


<div class="form-group">
	<div class="col-md-offset-2 col-md-10">
	<button type="submit" name="submit" class="btn btn-primary"><span class="glyphicon glyphicon-save"></span> Simpan</button>
	</div>
</div>



</form>
</div>

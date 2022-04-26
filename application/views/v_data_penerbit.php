<p>
<a href="<?php echo base_url();?>index.php/penerbit/form" class="btn btn-primary"><span class="glyphicon glyphicon-plus-sign"></span> Tambah</a>

</p>

<table class="table">
<thead>
	<tr>
		<th>#</th>
		<th>Kode Penerbit</th>
		<th>Nama Penerbit</th>
		<th>Alamat</th>
		<th>Web Site</th>
		<th>Email</th>
		<th>No. Telepon</th>
		<th>Aksi</th>
		
	</tr>
</thead>
<tbody>
<?php
if(isset($list_penerbit)){
	$no=null;
	foreach($list_penerbit as $row){
	$no++;	
	
	echo'<tr>
	<td>'.$no.'</td>
	<td>'.$row['kode_penerbit'].'</td>
	<td>'.$row['nama_penerbit'].'</td>
	<td>'.$row['kota_penerbit'].'</td>
	<td>'.$row['website_penerbit'].'</td>
	<td>'.$row['email_penerbit'].'</td>
	<td>'.$row['telepon_penerbit'].'</td>
	<td>
		<a href="'.base_url().'index.php/penerbit/form/'.$row['kode_penerbit'].'">
		<span class="glyphicon glyphicon-pencil" title="Edit"></span></a>
		&nbsp;
		<a OnClick="javascript:return(window.confirm(\'Anda yakin akan menghapus data ??\')) " href="'.base_url().'index.php/penerbit/hapus/'.$row['kode_penerbit'].'">
		<span class="glyphicon glyphicon-trash" title="Hapus"></span></a>
	</td>
	</tr>';

	}
}

?>
</tbody>
</table>

<!DOCTYPE html>
<html lang="en">
<head>
<title><?php echo $title;?></title>
<link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">
<style>
.page-header {
  padding-top: 20px;
  padding-bottom: 20px;
}
</style>
</head>
<body>
<nav class="navbar navbar-fixed-top navbar-inverse">
	<div class="container">
			<div class="navbar-header">
				<a href="#" class="navbar-brand">MySQL Stored Procedure</a>
			</div>
			
			<div id="navbar" class="collapse navbar-collapse">
				<ul class="nav navbar-nav">
				<li><a href="<?php echo base_url();?>index.php/penerbit">Home</a></li>
				<li><a href="<?php echo base_url();?>index.php/penerbit/tampil">Data Penerbit</a></li>
				<li><a href="<?php echo base_url();?>index.php/about">About</a></li>
				</ul>
			</div>
		</div>
</nav>	

<div class="container">
	<div class="page-header">
	<?php echo $header;?>
	</div>
	<?php 
	
	if(isset($page)){
	echo $konten;
	$this->load->view($page);	
	}	else {
	echo $konten;
	}
	?>
</div>
</body>

</html>

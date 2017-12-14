<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.css'?>">
</head>
<body>
	<div class="container">
		<div class="row">
			<h2>Data <small>Users</small></h2>
			<table class="table table-striped">
				<thead>
					<tr>
						<th>Nama</th>
						<th style="text-align:center">Followers</th>
						<th style="text-align:center">Following</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach($data->result() as $row):?>
					<tr>
						<td><?php echo $row->user_nama;?></td>
						<td style="text-align:center"><b><?php echo number_format_short($row->user_followers);?></b></td>
						<td style="text-align:center"><b><?php echo number_format_short($row->user_following);?></b></td>
					</tr>
					<?php endforeach;?>
				</tbody>
			</table>
		</div>
	</div>
	<script type="text/javascript" src="<?php echo base_url().'assets/js/bootstrap.js'?>"></script>
</body>
</html>
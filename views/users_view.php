<!DOCTYPE html>
<html>
<head>
	<title><?= $this->title ?></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- Bootstrap core CSS -->
    <link href="<?=BASEURL?>assets/template/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="http://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
	<!-- Material Design Bootstrap -->
    <link href="<?=BASEURL?>assets/template/css/mdb.min.css" rel="stylesheet">
</head>
<body>

<table id="myUsers">
	<thead>
		<th>#</th>
		<th>Firstname</th>
		<th>Lastname</th>
		<th>Email</th>
		<th>DOB</th>
		<th>Phone</th>
		<th>Registered Date</th>
		<th> Action</th>
	</thead>
	<tbody>

    <?php
//    $g = new users_model();
//    echo $g->delete_query();
    $i = 0;
    foreach($allUsers as $user){
    ?>
		<tr>
			<td><?= ++$i ?></td>
			<td><?= $user['firstname'] ?></td>
			<td><?= $user['lastname'] ?></td>
			<td><?= $user['email'] ?></td>
			<td><?= $user['dob'] ?></td>
			<td><?= $user['phone'] ?></td>
			<td><?= $user['date'] ?></td>
			<td><a href="?url=users&delete=<?=$user['id']?>" ><i class="fa fa-trash mr-2" style="color:red; font-size:25px;" ></i></a><a href="?url=users&edit=<?=$user['id']?>"><i class="fa fa-edit" style="color:blue; font-size:25px;"></i></a></td>
		</tr>
    <?php
    }

    ?>

	</tbody>
</table>

</body>
<script type="text/javascript" src="<?= BASEURL ?>assets/template/js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="http://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="<?=BASEURL?>assets/template/js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="<?=BASEURL?>assets/template/js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="<?=BASEURL?>assets/template/js/mdb.min.js"></script>
<script>
$(document).ready( function () {
$('#myUsers').DataTable();
});
</script>
</html>
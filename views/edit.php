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

<?php
//    $g = new users_model();
//    echo $g->delete_query();
$i = 0;
foreach($edituser as $user){

}

?>

<form id="submit-me" action="">
    <!-- Heading -->
    <h3 class="dark-grey-text text-center">
        <strong>Submit your record</strong>
    </h3>
    <hr>

    <div class="md-form">
        <i class="fa fa-user prefix grey-text"></i>
        <input type="text" id="form3" name="firstname" class="form-control" value="<?= $user['firstname'] ?>">
        <label for="form3">Your First name</label>
    </div>

    <input type="hidden" name="formID" value="1">

    <div class="md-form">
        <i class="fa fa-user prefix grey-text"></i>
        <input type="text" id="form3" name="lastname" class="form-control" value="<?= $user['lastname'] ?>">
        <label for="form3">Your Last name</label>
    </div>

    <div class="md-form">
        <i class="fa fa-envelope prefix grey-text"></i>
        <input type="text" id="form2" name="email" class="form-control" value="<?= $user['email'] ?>">
        <label for="form2">Your E-mail</label>
    </div>

    <div class="md-form">
        <i class="fa fa-phone prefix grey-text"></i>
        <input type="number" id="form2" name="phone" class="form-control" value="<?= $user['phone'] ?>">
        <label for="form2">Your Phone</label>
    </div>

    <div class="md-form">
        <i class="fa fa-calendar prefix grey-text"></i>
        <input type="date" class="datepicker form-control" name="dob" value="<?= $user['dob'] ?>">

    </div>



    <div class="md-form" id="responseDiv">
    </div>

    <div class="text-center">
        <button class="btn btn-indigo" id="SubmitYou">Submit</button>
        <hr>
    </div>

</form>




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
</body>
</html>
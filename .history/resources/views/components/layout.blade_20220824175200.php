<?php
$loginVerification = $this->session->userdata('logged_in');


if($loginVerification)
{
    redirect('Views_Controller/books_dashboard');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Book Inventory</title>
    <link rel="stylesheet" href={{asset("assets/css/all.min.css")}} type="text/css">
    <link rel="stylesheet" href={{asset("assets/css/bulma-rtl.min.css")}} type="text/css">
    <link rel="stylesheet" href={{asset("assets/css/bulma.min.css")}} type="text/css">
    <link rel="stylesheet" href={{asset("assets/css/dataTables.bulma.min.css")}} type="text/css">
    <link rel="stylesheet" href={{asset("assets/css/dataTables.dataTables.min.css")}} type="text/css">
    <link rel="stylesheet" href={{asset("assets/css/datatables.min.css")}} type="text/css">
    <link rel="stylesheet" href={{asset("assets/css/jquery.dataTables.min.css")}} type="text/css">
    <link rel="stylesheet" href={{asset("assets/css/modal-fx.min.css")}} type="text/css">
    <link rel="stylesheet" href={{asset("assets/css/animate.min.css")}} type="text/css">
    <script src={{asset("assets/js/all.min.js")}} type="text/javascript"></script>
    <script src={{asset("assets/js/dataTables.bulma.min.js")}} type="text/javascript"></script>
    <script src="assets/js/datatables.min.js" type="text/javascript"></script>
    <script src="assets/js/dataTables.dataTables.min.js" type="text/javascript"></script>
    <script src="assets/js/jquery-3.6.0.min.js" type="text/javascript"></script>
    <script src="assets/js/jquery.dataTables.min.js" type="text/javascript"></script>
    <script src="assets/js/modal-fx.min.js" type="text/javascript"></script>
    <script src="assets/js/mine.js" type="text/javascript"></script>
</head>
<body>
<script>
	$(document).ready(function() {
	$(".navbar-burger").click(function() {

		$(".navbar-burger").toggleClass("is-active");
		$(".navbar-menu").toggleClass("is-active");

	});
	});
</script>
<nav class="navbar is-link is-fixed-top" role="navigation" aria-label="main navigation">
  <div class="navbar-brand">
    <a class="navbar-item" href="<?=site_url('Views_Controller/index'">
		<i class="icon is-large fas fa-book fa-lg"></i>
      <h2 class="title ml-3 has-text-light">Book Information</h2>
    </a>
    <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
    </a>
  </div>
</nav>
<main>
  {{$slot}}
</main>
</body>
</html>

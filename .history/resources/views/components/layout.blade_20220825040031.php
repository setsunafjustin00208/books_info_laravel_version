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
    <script src={{asset("assets/js/datatables.min.js")}} type="text/javascript"></script>
    <script src={{asset("assets/js/dataTables.dataTables.min.js")}} type="text/javascript"></script>
    <script src={{asset("assets/js/jquery-3.6.0.min.js")}} type="text/javascript"></script>
    <script src={{asset("assets/js/jquery.dataTables.min.js")}} type="text/javascript"></script>
    <script src={{asset("assets/js/modal-fx.min.js")}} type="text/javascript"></script>
    <script src={{asset("assets/js/mine.js")}} type="text/javascript"></script>
</head>
<body>
<x-navbar 
<main>
  {{$slot}}
</main>
</body>
</html>

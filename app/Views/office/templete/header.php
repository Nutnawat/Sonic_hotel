<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hello, world!</title>

    <!-- Font awesome -->
    <link rel="stylesheet" href="<?= base_url('assets/fontawesome/css/all.css')?>">

    <!-- CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/css/office.css')?>">



    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css')?>">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- Jquery -->
    <script src="<?= base_url(' assets/js/jquery.min.js')?>"></script>

    <!-- Bootstrap JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    <div id="office">
        <?php require('sidebar.php');?>
        <div id="main">
            <?php require('navbar.php'); ?>
            <div id="content">
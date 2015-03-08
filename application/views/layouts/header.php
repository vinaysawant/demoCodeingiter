<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!--    <link rel="icon" href="../../favicon.ico">-->

    <title>Little Paws</title>

    <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.min.css"); ?>"/>
    <link rel="stylesheet" href="<?php echo base_url("assets/css/jquery-ui.min.css"); ?>"/>
    <link rel="stylesheet" href="<?php echo base_url("assets/css/dashboard.css"); ?>"/>

</head>
<body>

<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Little Paws</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><?php echo anchor('/owners/logout','Log Out')?></li>
            </ul>
            <form class="navbar-form navbar-right">
                <!--                <input type="text" class="form-control" placeholder="Search...">-->
            </form>
        </div>
    </div>
</nav>
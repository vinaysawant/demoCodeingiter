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
<!--                <li><a href="#">Dashboard</a></li>-->
<!--                <li><a href="#">Profile</a></li>-->
            </ul>
            <form class="navbar-form navbar-right">
<!--                <input type="text" class="form-control" placeholder="Search...">-->
            </form>
        </div>
    </div>
</nav>

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
            <ul class="nav nav-sidebar">
                <li class="active"><a href="#">Overview <span class="sr-only">(current)</span></a></li>
                <li><?php echo anchor('/owners','Owners')?></li>
                <li><?php echo anchor('/medicines','Medicines')?></li>
            </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
            <h1 class="page-header">Pet Owners</h1>

            <div class="text-right">
                <?php echo form_open('owners/add','class="form-inline"'); ?>
                    <input type="text" class="form-control input-sm" name="name" placeholder="Name">
                    <input type="text" class="form-control input-sm" name="address" placeholder="Address">
                    <input type="text" class="form-control input-sm" name="phone" placeholder="Phone">
                    <input type="text" class="form-control input-sm" name="email" placeholder="Email">
                    <input type="submit" value="ADD" class="btn btn-success btn-sm">
                </form>
            </div>

            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>SR NO</th>
                        <th>Name</th>
                        <th>Address</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($result as $owner) : ?>
                        <tr>
                            <td><?php echo $owner->id; ?></td>
                            <td><?php echo $owner->name; ?></td>
                            <td><?php echo $owner->address; ?></td>
                            <td><?php echo $owner->phone; ?></td>
                            <td><?php echo $owner->email; ?></td>
<!--                            <td><input type="button" class="btn btn-info btn-sm" value="Open"></td>-->
                            <td><?php echo anchor('/owners/show/'.$owner->id,'Show')?></td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script type="text/javascript" src="<?php echo base_url("assets/js/jquery-1.11.2.js"); ?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.min.js"); ?>"></script>

</body>
</html>
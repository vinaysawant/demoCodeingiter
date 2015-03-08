<?php include_once 'layouts/header.php' ?>

<div class="container-fluid">
    <div class="row">

        <?php include_once 'layouts/menu.php' ?>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
            <h1 class="page-header">Pet Owners</h1>

            <div class="text-right">
                <?php echo form_open('owners/add','class="form-inline"'); ?>
                    <input type="text" class="form-control input-sm" id="name" name="name" placeholder="Name">
                    <input type="text" class="form-control input-sm" id="address" name="address" placeholder="Address">
                    <input type="number" class="form-control input-sm" id="phone" name="phone" placeholder="Phone">
                    <input type="email" class="form-control input-sm" id="email" name="email" placeholder="Email">
                    <input type="submit" id="addOwnerBtn" value="ADD" class="btn btn-success btn-sm">
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
<?php include_once "layouts/footer.php"; ?>
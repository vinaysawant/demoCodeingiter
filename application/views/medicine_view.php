<?php include_once 'layouts/header.php' ?>

<div class="container-fluid">
    <div class="row">
        <?php include_once 'layouts/menu.php' ?>

        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
            <h1 class="page-header">Available Stock</h1>

            <div class="text-right">
                <?php echo form_open('medicines/add','class="form-inline"'); ?>
                    <input type="text" id="name" class="form-control input-sm" name="name" placeholder="Name">
                    <input type="number" id="quantity" class="form-control input-sm" name="quantity" placeholder="Quantity">
                    <input type="submit" id="addMedicineBtn" value="ADD" class="btn btn-success btn-sm">
                </form>
            </div>

            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>SR NO</th>
                        <th>Medicine</th>
                        <th>Quantity</th>
<!--                        <th>Action</th>-->
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($result as $medicine) : ?>
                        <tr>
                            <td><?php echo $medicine->id; ?></td>
                            <td><?php echo $medicine->name; ?></td>
                            <td><?php echo $medicine->quantity; ?></td>
<!--                            <td><input type="button" class="btn btn-info btn-sm" value="Edit"></td>-->
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php include_once "layouts/footer.php"; ?>
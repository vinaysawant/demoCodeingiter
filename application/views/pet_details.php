<?php include_once "layouts/header.php"; ?>
<div class="container-fluid">
    <div class="row">
        <?php include_once "layouts/menu.php"; ?>

        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
            <h1 class="page-header"><?php echo $pet->name; ?></h1>

            <div class="text-right">
                <?php echo form_open('owners/show/2/pet/2/add','class="form-inline"'); ?>
                <input type="text" class="form-control input-sm" name="clinical_sign" placeholder="Clinical Sign">
                <input type="text" class="form-control input-sm" name="treatment" placeholder="Treatment">
                <input type="text" class="form-control input-sm" name="charge" placeholder="Charge">
                <input type="submit" value="ADD" class="btn btn-success btn-sm">
                </form>
            </div>

            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>SR NO</th>
                        <th>Clinical Sign</th>
                        <th>Treatment</th>
                        <th>Charge</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($records as $record) : ?>
                        <tr>
                            <td><?php echo $record->id; ?></td>
                            <td><?php echo $record->clinical_sign; ?></td>
                            <td><?php echo $record->treatment; ?></td>
                            <td><?php echo $record->charge; ?></td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>
<?php include_once "layouts/footer.php"; ?>


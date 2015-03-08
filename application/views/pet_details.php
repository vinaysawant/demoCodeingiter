<?php include_once "layouts/header.php"; ?>
<?php $count = 1; ?>
<div class="container-fluid">
    <div class="row">
        <?php include_once "layouts/menu.php"; ?>

        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
            <h1 class="page-header"><?php echo $pet->name; ?></h1>

            <div class="text-right">
                <?php echo form_open('owners/show/'.$owner_id.'/pet/'.$pet->id.'/add','class=""'); ?>
                <div class="form-inline form-group">
                    <div class="form-group">
                        <input type="text" id="sign" class="form-control input-sm" name="clinical_sign" placeholder="Clinical Sign">
                    </div>
                    <div class="form-group">
                        <input type="text" id="charge" class="form-control input-sm" name="charge" placeholder="Charge">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control input-sm" readonly="true" name="remind" placeholder="Remind" id="datepicker">
                    </div>
                </div>

                <div class="form-group">
                    <textarea class="form-control" id="treatment" name="treatment" placeholder="Treatment"></textarea>
                </div>
                <input type="submit" value="ADD" id="addTreatmentBtn" class="btn btn-success btn-sm">
                </form>
            </div>

            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>SR NO</th>
                        <th>Date</th>
                        <th>Clinical Sign</th>
                        <th>Treatment</th>
                        <th>Charge</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($records as $record) : ?>
                        <tr>
                            <td><?php echo $count; ?></td>
                            <td><?php echo (new DateTime($record->date))->format('d/m/Y'); ?></td>
                            <td><?php echo $record->clinical_sign; ?></td>
                            <td><?php echo $record->treatment; ?></td>
                            <td><?php echo $record->charge; ?></td>
                        </tr>
                    <?php $count++; ?>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>

<?php include_once "layouts/footer.php"; ?>


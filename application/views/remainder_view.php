<?php include_once 'layouts/header.php' ?>
<?php $count = 1; ?>

<div class="container-fluid">
    <div class="row">
        <?php include_once 'layouts/menu.php' ?>

        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
            <h1 class="page-header">Reminders</h1>

            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>SR NO</th>
                        <th>Date</th>
                        <th>Mobile</th>
                        <th>Owner Name</th>
                        <th>Pet Name</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($result as $remainder) : ?>
                        <tr>
                            <td><?php echo $count; ?></td>
                            <td><?php echo (new DateTime($remainder->next_date))->format('d/m/Y'); ?></td>
                            <td><?php echo $remainder->phone; ?></td>
                            <td><?php echo $remainder->name; ?></td>
                            <td><?php echo $remainder->pet_name; ?></td>
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
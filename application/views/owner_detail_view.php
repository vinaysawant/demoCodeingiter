<?php include_once "layouts/header.php"; ?>
<?php $count = 1; ?>
<div class="container-fluid">
    <div class="row">
        <?php include_once "layouts/menu.php"; ?>

        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
            <h1 class="page-header"><?php echo $result->name; ?></h1>

            <div>
                <span class="glyphicon glyphicon-home"><span class="owner-details"><?php echo $result->address; ?></span></span>
            </div>
            <div>
                <span class="glyphicon glyphicon-earphone"><span class="owner-details"><?php echo $result->phone; ?></span></span>
            </div>
            <div>
                <span class="glyphicon glyphicon-envelope"><span class="owner-details"><?php echo $result->email; ?></span></span>
            </div>

            <div class="text-right">
                <?php echo form_open('owners/show/'.$result->id.'/addPet','class="form-inline"'); ?>
                <input type="text" class="form-control input-sm" id="name" name="name" placeholder="Name">
                <select class="form-control input-sm" name="sex" id="sex">
                    <option value="M">Male</option>
                    <option value="F">Female</option>
                </select>
                <input type="text" class="form-control input-sm" id="age" name="age" placeholder="Age">
                <input type="text" class="form-control input-sm" id="species" name="species" placeholder="Species">
                <input type="submit" id="addPetBtn" value="ADD" class="btn btn-success btn-sm">
                </form>
            </div>

            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>SR NO</th>
                        <th>Name</th>
                        <th>Sex</th>
                        <th>Age</th>
                        <th>Species</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($pets as $pet) : ?>
                        <tr>
                            <td><?php echo $count; ?></td>
                            <td><?php echo $pet->name; ?></td>
                            <td><?php echo $pet->sex; ?></td>
                            <td><?php echo $pet->age; ?></td>
                            <td><?php echo $pet->species; ?></td>
                            <!--                            <td><input type="button" class="btn btn-info btn-sm" value="Open"></td>-->
                            <td><?php echo anchor('/owners/show/'.$result->id.'/pet/'.$pet->id,'Show')?></td>
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


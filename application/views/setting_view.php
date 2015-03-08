<?php include_once 'layouts/header.php' ?>

<div class="container-fluid">
    <div class="row">
        <?php include_once 'layouts/menu.php' ?>

        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
            <h1 class="page-header">Settings</h1>

            <div class="text-center">
                <?php echo form_open('settings/change','class=""'); ?>
                <div class="form-group">
                    <input type="password" id="password" class="form-control input-sm" name="password" placeholder="Current Password">

                </div>
                <div class="form-group">
                    <input type="password" id="newpasswd1" class="form-control input-sm" name="newpasswd1" placeholder="New Password (Min 6 chars)">

                </div>
                <div class="form-group">
                    <input type="password" id="newpasswd2" class="form-control input-sm" name="newpasswd2" placeholder="Re-Enter New Password">

                </div>
                <input type="submit" id="changePasswdBtn" value="Change Password" class="btn btn-success btn-sm">
                </form>
            </div>
        </div>
    </div>
<?php include_once "layouts/footer.php"; ?>
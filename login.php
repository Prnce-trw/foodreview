<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('inc_header.php'); ?>
</head>

<body>
    <?php include('inc_nav.php'); ?>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-sm-4 bg-1"></div>
            <div class="col-lg-8 col-sm-8">
                <div class="d-flex align-items-center">
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Email <span class="text-danger">*</span></label>
                    <div class="col-sm-4">
                        <input type="email" name="email" class="form-control" placeholder="Email">
                    </div>
                    <label class="col-sm-2 col-form-label">Password <span class="text-danger">*</span></label>
                    <div class="col-sm-4">
                        <input type="password" name="password" class="form-control" placeholder="Password">
                    </div>
                </div>
                </div>
                
                <br>
                <button type="button" class="btn btn-primary">Sign in</button>
            </div>
        </div>
    </div>
</body>

</html>
<!-- ########## START: HEAD PANEL ########## -->
<?php
include_once '../additional/header.php';

if (isset($_GET['id']) && (int) $_GET['id']):
    $userid = $_GET['id'];
    include_once '../function/database.php';

    $sql = "SELECT * FROM information WHERE id = '$userid'";

    $result = $conn->query($sql);
    $acc = mysqli_fetch_assoc($result);
    $_SESSION['info_id'] = $acc['id'];
    $_SESSION['info_name'] = $acc['name'];
    $_SESSION['info_full_name'] = $acc['full_name'];
    $_SESSION['info_email'] = $acc['email'];
    $_SESSION['info_gender'] = $acc['gender'];
    $_SESSION['info_birth_day'] = $acc['birth_day'];
    $_SESSION['info_mobile_number'] = $acc['mobile_number'];
    $_SESSION['info_fathers_name'] = $acc['fathers_name'];
    $_SESSION['info_mothers_name'] = $acc['mothers_name'];
    $_SESSION['info_district'] = $acc['district'];
    $_SESSION['info_datatype'] = 'edit';

endif;
?>
<!-- ########## END: HEAD PANEL ########## -->


<!-- ########## START: MAIN PANEL ########## -->

<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.html">Starlight</a>
        <a class="breadcrumb-item" href="index.html">Forms</a>
        <span class="breadcrumb-item active">Form Layouts</span>
    </nav>

    <div class="sl-pagebody">
        <div class="sl-page-title">
            <h5>Form Layouts</h5>
            <p>Forms are used to collect user information with different element types of input, select, checkboxes, radios and more.</p>
        </div><!-- sl-page-title -->
        <div class="card pd-20 pd-sm-40">
            <h6 class="card-body-title">Top Label Layout</h6>
            <p class="mg-b-20 mg-sm-b-30">A form with a label on top of each form control.</p>
            <form method="post" action="../function/input-data.php">
                <div class="form-layout">
                    <div class="row mg-b-25">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label">Name: <span class="tx-danger">*</span></label>
                                <input class="form-control <?php if(isset($_SESSION['info_datatype']) && $_SESSION['info_datatype'] == 'error'){    echo 'is-warning';}?>" type="text" name="username" value="<?php
                                if (isset($_SESSION['info_name'])) {
                                    echo $_SESSION['info_name'];
                                }
                                ?>" placeholder="Enter firstname">
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label">Full Name: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="text" name="fullname" value="<?php
                                if (isset($_SESSION['info_full_name'])) {
                                    echo $_SESSION['info_full_name'];
                                }
                                ?>" placeholder="Enter lastname">
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label">Email address: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="text" name="useremail" value="<?php
                                if (isset($_SESSION['info_email'])) {
                                    echo $_SESSION['info_email'];
                                }
                                ?>" placeholder="Enter email address">
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-4">
                            <div class="form-group mg-b-10-force">
                                <label class="form-control-label">Gender: <span class="tx-danger">*</span></label>
                                <select name='usergendar' class="form-control select2 select2-hidden-accessible" data-placeholder="Choose country" tabindex="-1" aria-hidden="true">
                                    <option label="Choose Gender"></option>
                                    <option value="male" <?php
                                    if (isset($_SESSION['info_gender']) && $_SESSION['info_gender'] == 'male') {
                                        echo 'selected';
                                    }
                                    ?>>Male</option>
                                    <option value="female" <?php
                                    if (isset($_SESSION['info_gender']) && $_SESSION['info_gender'] == 'female') {
                                        echo 'selected';
                                    }
                                    ?>>Female</option>
                                    <option value="others" <?php
                                    if (isset($_SESSION['info_gender']) && $_SESSION['info_gender'] == 'others') {
                                        echo 'selected';
                                    }
                                    ?>>Others</option>
                                </select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 494px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-57gz-container"><span class="select2-selection__rendered" id="select2-57gz-container"><span class="select2-selection__placeholder">Choose country</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-4">
                            <p class="mg-b-10">Birthday</p>
                            <div class="input-group mg-b-10-force">
                                <span class="input-group-addon"><i class="icon ion-calendar tx-16 lh-0 op-6"></i></span>
                                <input name='userbday' type="date" class="form-control hasDatepicker" placeholder="MM/DD/YYYY" value="<?php
                                if (isset($_SESSION['info_birth_day'])) {
                                    echo $_SESSION['info_birth_day'];
                                }
                                ?>">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group mg-b-10-force">
                                <label class="form-control-label">Mobile Number: <span class="tx-danger">*</span></label>
                                <input name="mobile_number" class="form-control" type="text" name="address" value="<?php
                                if (isset($_SESSION['info_mobile_number'])) {
                                    echo $_SESSION['info_mobile_number'];
                                }
                                ?>" placeholder="Enter address">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group mg-b-10-force">
                                <label class="form-control-label">Fathers Name: <span class="tx-danger">*</span></label>
                                <input name="fathers_name" class="form-control" type="text" name="address" value="<?php
                                if (isset($_SESSION['info_fathers_name'])) {
                                    echo $_SESSION['info_fathers_name'];
                                }
                                ?>" placeholder="Enter address">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group mg-b-10-force">
                                <label class="form-control-label">Mothers Name: <span class="tx-danger">*</span></label>
                                <input name="mothers_name" class="form-control" type="text" name="address" value="<?php
                                if (isset($_SESSION['info_mothers_name'])) {
                                    echo $_SESSION['info_mothers_name'];
                                }
                                ?>" placeholder="Enter address">
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="form-group mg-b-10-force">
                                <label class="form-control-label">District: <span class="tx-danger">*</span></label>
                                <select name="district" class="form-control select2 select2-hidden-accessible" data-placeholder="Choose country" tabindex="-1" aria-hidden="true">
                                    <option label="Choose District"></option>
                                    <option value="dhaka" <?php
                                    if (isset($_SESSION['info_district']) && $_SESSION['info_district'] == 'dhaka') {
                                        echo 'selected';
                                    }
                                    ?>>Dhaka</option>
                                    <option value="comilla" <?php
                                    if (isset($_SESSION['info_district']) && $_SESSION['info_district'] == 'comilla') {
                                        echo 'selected';
                                    }
                                    ?>>Comilla</option>
                                    <option value="others" <?php
                                    if (isset($_SESSION['info_district']) && $_SESSION['info_district'] == 'others') {
                                        echo 'selected';
                                    }
                                    ?>>Others</option>
                                </select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 494px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-57gz-container"><span class="select2-selection__rendered" id="select2-57gz-container"><span class="select2-selection__placeholder">Choose country</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                            </div>
                        </div>


                    </div><!-- row -->

                    <div class="form-layout-footer">
                        <input name='info_id' type="hidden" class="form-control hasDatepicker" value="<?php
                                if (isset($_SESSION['info_id'])) {
                                    echo $_SESSION['info_id'];
                                }
                                ?>">
                        
                        <button class="btn btn-info mg-r-5">Submit Form</button>
                        <button class="btn btn-secondary">Cancel</button>
                    </div><!-- form-layout-footer -->
                </div><!-- form-layout -->

            </form>
        </div><!-- card -->

    </div>

</div>

<?php
unset($_SESSION['info_id']);
unset($_SESSION['info_name']);
unset($_SESSION['info_full_name']);
unset($_SESSION['info_email']);
unset($_SESSION['info_gender']);
unset($_SESSION['info_birth_day']);
unset($_SESSION['info_mobile_number']);
unset($_SESSION['info_fathers_name']);
unset($_SESSION['info_mothers_name']);
unset($_SESSION['info_district']);
unset($_SESSION['info_datatype']);
include_once '../additional/footer.php';
?>
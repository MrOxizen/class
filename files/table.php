<!-- ########## START: HEAD PANEL ########## -->
<?php include_once '../additional/header.php'; ?>
<!-- ########## END: HEAD PANEL ########## -->
<?php
include_once '../function/database.php';

$sql = "SELECT * FROM information ORDER by id ASC";

$result = $conn->query($sql);
?>




<!-- ########## START: MAIN PANEL ########## -->

<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.html">Starlight</a>
        <a class="breadcrumb-item" href="index.html">Forms</a>
        <span class="breadcrumb-item active">Form Layouts</span>
    </nav>

    <div class="sl-pagebody">
        <div class="sl-page-title">
            <h5>Basic Tables</h5>
            <p>A collection basic to advanced table design that you can use to your data.</p>
        </div><!-- sl-page-title -->

        <div class="card pd-20 pd-sm-40">
            <h6 class="card-body-title">Basic Table</h6>
            <p class="mg-b-20 mg-sm-b-30">Using the most basic table markup.</p>

            <div class="table-responsive">
                <table class="table mg-b-0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Full Name</th>
                            <th>Fathers Name</th>
                            <th>Mothers Name</th>
                            <th>Email</th>
                            <th>Gender</th>
                            <th>Birth Day</th>
                            <th>Mobile Number</th>
                            <th>District</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                        $i = 1;
                        if ($result->num_rows > 0) {
                            // output data of each row
                            while ($row = $result->fetch_assoc()) {
                                ?>
                                <tr>
                                    <td><?php echo $i++ ?></td>
                                    <td><?php echo $row["name"]; ?></td>
                                    <td><?php echo $row["full_name"]; ?></td>
                                    <td><?php echo $row["fathers_name"]; ?></td>
                                    <td><?php echo $row["mothers_name"]; ?></td>
                                    <td><?php echo $row["email"]; ?></td>
                                    <td><?php echo $row["gender"]; ?></td>
                                    <td><?php echo $row["birth_day"]; ?></td>
                                    <td><?php echo $row["mobile_number"]; ?></td>
                                    <td><?php echo $row["district"]; ?></td>
                                    <td><a href="./input.php?id=<?php echo $row["id"]; ?>" class="btn btn-dark btn-icon rounded-circle mg-r-5 mg-b-10"><div><i class="fa fa-cog"></i></div></a></td>
                                    <td><a href="../function/delete-information.php?id=<?php echo $row["id"]; ?>" class="btn btn-outline-dark btn-icon rounded-circle mg-r-5"><div><i class="fa fa-codepen"></i></div></a></td>
                                </tr>
                                <?php
                            }
                        }
                        ?>

                    </tbody>
                </table>
            </div>
        </div><!-- card -->
    </div>

</div>

<?php include_once '../additional/footer.php'; ?>
<?php
// MySQLi or PDO - can use either MySQLi is an easier procedural method.  Should learn PDO when I can
$conn = mysqli_connect('localhost', 'un4h9q4cq4qq9', 'bQ5~R3d#5|^2', 'dbvxpegdk288uk');

// Check connection working
if (!$conn) {
    echo 'Connection error: ' . mysqli_connect_error();
}

// Query to view all properties
$sql = 'SELECT * FROM tenant ORDER BY tenantname';

$result = mysqli_query($conn, $sql);

?>

<?php include('header.php'); ?>

<style>
    .table-row-highlight>tbody>tr:hover {
        background-color: #b2dfdb !important;
    }

    .tenants-table td {
        font-size: 0.8em;
    }

    @media only screen and (min-width: 990px) {
        .tenants-table td {
            font-size: 1em;
        }
    }
</style>

<h4 class="center grey-text">Tenants</h4>

<div class="container">
    <div class="row">


        <table class="highlight table-row-highlight tenants-table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Contact</th>
                    <th></th>
                </tr>
            </thead>

            <?php


            while ($row = mysqli_fetch_assoc($result)) {
            ?>
                <tbody>
                    <tr>
                        <td><?php echo htmlspecialchars($row['tenantname']); ?></td>
                        <td><?php echo htmlspecialchars($row['tenantemail']); ?></td>
                        <td><?php echo htmlspecialchars($row['tenantphone']); ?></td>
                        <td><a href="#" class="waves-effect waves-light btn-small right"><i class="material-icons left">edit</i>Edit</a></td>
                    </tr>

                </tbody>
            <?php
            }
            ?>

        </table>




    </div>
    <div class="row">
        <a href="#" class="btn-floating pulse right"><i class="material-icons">add</i></a>
    </div>
</div>

<?php include('footer.php'); ?>
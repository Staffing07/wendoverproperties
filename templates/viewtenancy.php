<?php
// MySQLi or PDO - can use either MySQLi is an easier procedural method.  Should learn PDO when I can
$conn = mysqli_connect('localhost', 'un4h9q4cq4qq9', 'bQ5~R3d#5|^2', 'dbvxpegdk288uk');

// Check connection working
if (!$conn) {
    echo 'Connection error: ' . mysqli_connect_error();
}

// Query to view all properties
$sql = 'SELECT tenant.tenantname, properties.address, tenancy.tenancyamount, tenancy.tenancystartdate, tenancy.tenancyenddate, tenancy.tenancypaymentfreq, tenancy.arrears
FROM ((tenancy
         INNER JOIN tenant ON tenancy.tenantid = tenant.tenantid)
         INNER JOIN properties ON tenancy.propertyid = properties.propertyid);';




$result = mysqli_query($conn, $sql);

?>

<?php include('header.php'); ?>

<style>
    .table-row-highlight>tbody>tr:hover {
        background-color: #b2dfdb !important;
    }


    .tenancy-table thead {
        font-size: 0.6em;
    }

    .tenancy-table td {
        font-size: 0.5em;
    }

    @media only screen and (min-width: 600px) {
        .tenancy-table td {
            font-size: 0.7em;
        }
    }

    @media only screen and (min-width: 900px) {

        .tenancy-table thead {
            font-size: initial;
        }

        .tenancy-table td {
            font-size: initial;
        }
    }
</style>

<h4 class="center grey-text">Tenancies</h4>

<div class="container">
    <div class="row">


        <table class="highlight table-row-highlight tenancy-table">
            <thead>
                <tr>
                    <th>Property</th>
                    <th>Name</th>
                    <th>Start</th>
                    <th>End</th>
                    <th>Amount</th>
                    <th>Frequency</th>
                    <th>Arrears</th>
                </tr>
            </thead>

            <?php


            while ($row = mysqli_fetch_assoc($result)) {
            ?>
                <tbody>
                    <tr>
                        <td><?php echo htmlspecialchars($row['address']); ?></td>
                        <td><?php echo htmlspecialchars($row['tenantname']); ?></td>
                        <td><?php echo htmlspecialchars($row['tenancystartdate']); ?></td>
                        <td><?php echo htmlspecialchars($row['tenancyenddate']); ?></td>
                        <td><?php echo htmlspecialchars($row['tenancyamount']); ?></td>
                        <td><?php echo htmlspecialchars($row['tenancypaymentfreq']); ?></td>
                        <td><?php echo htmlspecialchars($row['arrears']); ?></td>
                        <td><a href="#" class="waves-effect waves-light btn-small right"><i class="material-icons left">edit</i>Edit</a></td>
                    </tr>

                </tbody>
            <?php
            }
            ?>

        </table>

    </div>
    
    <div class="row">
        <a href="addtenancy.php" class="btn-floating right"><i class="material-icons">add</i></a>
    </div>
</div>

<?php include('footer.php'); ?>
<?php

include('config/db_connect.php');


?>

<!DOCTYPE html>
<html lang="en">

<?php include('templates/header.php'); ?>

<h4 class="center grey-text">Tasks</h4>

<div class="container">
    <div class="row">

        <div class="col s6">
            <a href = "/templates/viewtenants.php">
            <div class="card z-depth-0">
                <div class="card-content center">
                    <h6>Tenant information</h6>
                </div>
                <!--<div class="card-action right-align">
                        <a href="" class="brand-text" href="#">more info</a>
                    </div>-->
            </div>
            </a>
            <a href = "/templates/viewtenancy.php">
            <div class="card z-depth-0">
                <div class="card-content center">
                    <h6>Tenancy information</h6>
                </div>
                <!--<div class="card-action right-align">
                        <a href="" class="brand-text" href="#">more info</a>
                    </div>-->
            </div>
            </a>
        </div>
    
    
        <div class="col s6">
        <a href = "/templates/viewproperty.php">
            <div class="card z-depth-0">
                <div class="card-content center">
                    <h6>Property information</h6>
                </div>
                <!--<div class="card-action right-align">
                        <a href="" class="brand-text" href="#">more info</a>
                    </div>-->
            </div>
        </a>
        <a href = "/templates/viewaccounts.php">
            <div class="card z-depth-0">
                <div class="card-content center">
                    <h6>Accounts information</h6>
                </div>
                <!--<div class="card-action right-align">
                        <a href="" class="brand-text" href="#">more info</a>
                    </div>-->
            </div>
        </a>
        </div>
    </div>
</div>

<?php include('templates/footer.php'); ?>



</html>
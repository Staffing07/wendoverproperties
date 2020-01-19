<?php $name = 'Darth';
$age = 30;

define('FIRSTNAME', 'Darth');
define('LASTNAME', 'Vader');
define('AFFILIATION', 'Empire');
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Variables & Constants</title>
</head>

<body>
    <h2>Variables</h2>
    <p>$ declares a variable</p>
    <p>e.g. $first_name</p>
    <p>$name = 'Darth';</p>

    <h2>Defining a variable</h2>

    <p>Setup a simple variable, this can be overidden later on by reusing the variable with a different value</p>

    <pre><code><? $str = <<<'EOD'
 <?php $name = 'Darth' ?>    
 <p><?php echo $name; ?></p>
 <p><?php echo $age; ?></p>
 

EOD;
                $str = htmlspecialchars($str, ENT_HTML5, ENT_NOQUOTES);
                $str = str_replace("&amp;hellip;", "&hellip;", $str);
                echo ($str); ?>
</code></pre>



    <h2>Output</h2>
    <p><?php echo $name; ?></p>
    <p><?php echo $age; ?></p>


    <h2>Defining a constant</h2>
    <p>These are constants and cannot be overridden.  If you try you will get an error.</p>
    <pre><code><? $str = <<<'EOD'
 <?php
 define('FIRSTNAME', 'Darth');
 define('LASTNAME', 'Vader');
define('AFFILIATION', 'Empire');
?>

EOD;
                $str = htmlspecialchars($str, ENT_HTML5, ENT_NOQUOTES);
                $str = str_replace("&amp;hellip;", "&hellip;", $str);
                echo ($str); ?>
</code></pre>

    <h2>Output</h2>
    <p><?php echo FIRSTNAME; ?></p>
    <p><?php echo LASTNAME; ?></p>
    <p><?php echo AFFILIATION; ?></p>


GET & POST 

Both methods can be used to send data to the server.

GET sends the data in the URL so is seen in the address bar
POST sends the data in the request header (and is therefore hidden and considered more secure)


</body>

</html>
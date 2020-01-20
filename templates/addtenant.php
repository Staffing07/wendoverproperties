<!-- May be useful when adding tenant - this is to validate email address -->
<!-- Youtube video here https://www.youtube.com/watch?v=wFiCZHrCFOw&list=PL4cUxeGkcC9gksOX3Kd9KPo-O68ncT05o&index=20 -->

<!--

// form validation errors array

$errors = array('address'=>'', 'startdate'=>'', 'enddate'=>'', 'renatamount'=>'', 'duedate'=>'', 'frequency'=>'');



-->

<!-- Check the code on the add tenancy page to compare and look at errors for regex -->


<!-- 
 check frequency selected
    if(empty($_POST['email'])){
        echo 'An email is required <br>';
    } else {
        $email = $_POST['email'];   //convert email value to variable
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){   // passes value entered by user through the FILTER_VALIDATE_EMAIL function which is built into php - if passes=true code enters curly braces
            $errors['email'] = 'email must be a valid email address';
        }
    }

-->

<!-- Regular expression test -->

<!-- Check title -->
<!--
    if(empty($_POST['title'])){
        echo 'A title is required <br>';
    } else {
        $title = $_POST['title']);    // grab title from $_POST array and store in variable $title
        if(!preg_match('/^[a-zA-Z\s]+$/', $title)){      // The slash symbol denotes the start and end of the regular expression.  
            echo 'Title must be letters and spaces only';
        } 
    }
    
-->


<!-- Comma seperated validation with Regex -->

<!--
if(empty($_POST['ingredients'])){
        echo 'At least 1 ingredient is required <br>';
    } else {
        $ingredients = $_POST['ingredients']);    // grab ingredients from $_POST array and store in variable $ingredients
        if(!preg_match('/^([a-zA-Z\s]+)(,\s*[a-zA-Z\s]*)*$/', $ingredients)){      // see here for RegEx tutorial https://www.youtube.com/playlist?list=PL4cUxeGkcC9g6m_6Sld9Q4jzqdqHd2HiD
            echo 'Ingredients must be a comma separated list';
        } 
    }

-->
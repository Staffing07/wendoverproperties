<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=php test, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Wendover Properties</title>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <style type="text/css">
    .brand{
        color: #212529 !important;
    }
    .brand-text {
        color: #212529 !important;
    }
    </style>
    <script
  src="https://code.jquery.com/jquery-3.4.1.js"
  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous"></script>
     <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script>
         $( document ).ready(function() {
            $(".dropdown-trigger").dropdown(
                {
                    'closeOnClick': true,
                    'hover': true,
                    'coverTrigger': false
                }
            );
         });
      </script>
</head>

<body class="grey lighten-4">
<!-- Dropdown Structure -->
<ul id="property" class="dropdown-content">
  <li><a href="/templates/viewproperty.php">View</a></li>
  <li class="divider"></li>
  <li><a href="#!">Add</a></li>
  <li class="divider"></li>
  <li><a href="#!">Edit</a></li>
</ul>

<ul id="tenancy" class="dropdown-content">
  <li><a href="#!">View</a></li>
  <li class="divider"></li>
  <li><a href="#!">Add</a></li>
  <li class="divider"></li>
  <li><a href="#!">Edit</a></li>
</ul>

<ul id="tenant" class="dropdown-content">
  <li><a href="#!">View</a></li>
  <li class="divider"></li>
  <li><a href="#!">Add</a></li>
  <li class="divider"></li>
  <li><a href="#!">Edit</a></li>
</ul>

<ul id="accounts" class="dropdown-content">
  <li><a href="#!">View</a></li>
  <li class="divider"></li>
  <li><a href="#!">Add</a></li>
  <li class="divider"></li>
  <li><a href="#!">Edit</a></li>
</ul>


    <nav class="teal lighten-4 z-depth-0">
        <div class="container">
            <a href="#" class="brand-logo brand-text">Wendover Properties</a>
            <ul id="nav-mobile" class="right hide-on-small-and-down">
                <li><a class="dropdown-trigger brand z-depth-0" href="#!" data-target="property">Property<i class="material-icons right">arrow_drop_down</i></a></li>
                <li><a class="dropdown-trigger brand z-depth-0" href="#!" data-target="tenancy">Tenancy<i class="material-icons right">arrow_drop_down</i></a></li>
                <li><a class="dropdown-trigger brand z-depth-0" href="#!" data-target="tenant">Tenants<i class="material-icons right">arrow_drop_down</i></a></li>
                <li><a class="dropdown-trigger brand z-depth-0" href="#!" data-target="accounts">Accounts<i class="material-icons right">arrow_drop_down</i></a></li>


            </ul>
        </div>

    </nav>


   
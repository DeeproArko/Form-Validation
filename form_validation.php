<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Form Validation</title>
    <style>
        h2{
           
            padding: 30px;
        }
    </style>
  </head>
  <body>
    <div class="container shadow mt-3">
        <form action="" method= "post">
        <label class="form=label mt-3">First Name</label>
        <input class="form-control mt-2"type="text" placeholder="Enter your First Name" name="my_name">
        <label class="form-label mt-3" >Last Name</label>
        <input  class="form-control mt-2" type="text" placeholder="Enter your Last Name" name="last_name">
        <label class="form-label mt-3" >E-mail</label>
        <input  class="form-control mt-2" type="email" placeholder="Enter your Email" name="email">
        <label class="form-label mt-3" >Password</label>
        <input  class="form-control mt-2 mb-3" type="password" placeholder="Enter your Password" name="password">
        <span>Enter your gender: </span>
        <div class="form-check mt-3">
        <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault1">
        <label class="form-check-label" for="flexRadioDefault1">
            Male
        </label>
        </div>
        <div class="form-check">
        <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault2" checked>
        <label class="form-check-label" for="flexRadioDefault2">
            Female
        </label>
        </div>
        <select class="form-select mt-3" aria-label="Default select example" name="country">
        <option selected>Chosse your Country</option>
        <option value="1">Bangladesh</option>
        <option value="2">India</option>
        <option value="3">Pakistan</option>
        </select>
        <div class="d-grid gap-2 col-6 mx-auto mt-3">
        <input class="btn btn-outline-dark mb-3" type="Submit" name="Submit" value="Submit">
        </div>
        </form>
    </div>
    <?php
    $f_name = $l_name = $Email = $Password =$gender = $country = "";
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $f_name= ($_POST["my_name"]);
        $l_name = ($_POST["last_name"]);
        $Email = ($_POST["email"]);
        $Password = ($_POST["password"]);
        $gender = ($_POST["gender"]);
        $country = ($_POST["country"]);
    }
    echo "<h2>Your Details: </h2>";
    echo $f_name. "<br>";
    echo $l_name. "<br>";
    echo $Email. "<br>";
    echo $Password. "<br>";
    echo $gender. "<br>";
    echo $country. "<br>";
    
?>
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


  </body>
</html>
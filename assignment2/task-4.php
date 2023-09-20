<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Assignment 2 - Task 4: Fibonacci Series printing using a Function</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
      body {
        background-color: #F0F8FF;
        }
    </style>
  </head>
  <body>
    <section class="container">
        <br><h6 class="text-center">Assignment 2</h6>
        <h2 class="py-2 text-center">Task 4: Fibonacci Series printing using a Function</h2><hr>
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6 text-center">
<?php
function fibonacci() {
    $f1 = 0;
    $f2 = 1;
    $n = 10;

    for($i = 0; $i < $n; $i++) {
        
        $f3 = $f1 + $f2;
        $f1 = $f2;
        $f2 = $f3;

        if($f3 >= 100){
            break;
        }
        echo "<span class='mx-1'> $f3 </span>";
    }
}
?>
              <div class="p-2">
                <div><h5><b><?php fibonacci();?></b></h5></div>
              </div>
            </div>
            <div class="col-md-3"></div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
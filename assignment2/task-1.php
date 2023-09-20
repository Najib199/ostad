<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Assignment 2 - Task 1: Looping with Increment using a Function</title>
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
        <h2 class="py-2 text-center">Task 1: Looping with Increment using a Function</h2><hr>
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
<?php
// using for loop
function evenNumbersFor( $start = 1, $end = 20, $step = 2 ) {
    for ( $a = $start; $a < $end; $a++ ) {
        if ( $a % $step == 0 ) {
            echo "<span class='mx-1'>" . $a . "</span>";
        }
    }
}
// using while loop
function evenNumbersWhile( $start = 1, $end = 20, $step = 2 ) {
    while ( $start <= $end ) {
        if ( $start % $step == 0 ) {
            echo "<span class='mx-1'>" . $start . "</span>";
        }
        $start++;
    }
}
// using do-while loop
function evenNumbersDoWhile( $start = 1, $end = 20, $step = 2 ) {
    do {
        if ( $start % $step == 0 ) {
            echo "<span class='mx-1'>" . $start . "</span>";
        }
        $start++;
    } while ( $start <= $end );
}
?>
              <div class="p-2">
                <div><h5><span class="fw-bold">for loop:</span> <?php evenNumbersFor();?></h5></div><br>
                <div><h5><span class="fw-bold">while loop:</span> <?php evenNumbersWhile();?></h5></div><br>
                <div><h5><span class="fw-bold">do-while loop:</span> <?php evenNumbersDoWhile();?></h5></div>
              </div>
            </div>
            <div class="col-md-3"></div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
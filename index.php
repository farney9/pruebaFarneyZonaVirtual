<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Material Design Bootstrap</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="css/style.css" rel="stylesheet">
  <!-- JQuery -->
  <!-- SCRIPTS -->
  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>

  <script type="text/javascript">
    $(document).ready(function () {
      $("#redirect").click(function () {
        $(location).attr('href',"https://zonavirtual.com/");

      });
    });
  </script>

</head>

<body>
<?php
$num1 ="";
$num2 ="";
if ($_POST) {
  $num1 = $_POST ['numero1'];
  $num2 = $_POST ['numero2'];
}
?>
  <!-- Start your project here-->
  <div class="container min-vh-100">
    <div class="row h-100 justify-content-center align-items-center">
      <div class="mt-5">
        <div>
          <form action="index.php" method="POST" class="col-12">
            <div class="form-group">
              <a href="" class="btn rounded-pill text-white bg-zona-virtual font-weight-bold" id="redirect" target="_blank">Prueba
                Redirección</a>
            </div>
            <div class="form-group">
              <input type="number" class="form-control" name="numero1" id="number1" placeholder="ingrese un número" value="<?php echo $num1 ?>">
            </div>
            <div class="form-group">
              <input type="number" class="form-control" name="numero2"  id="number2" placeholder="Ingrese otro número" value="<?php echo $num2 ?>">
            </div>
            <div class="form-group text-center">
              <button type="submit" class="btn btn-default">Sumar</button>
            </div>
            <div class="form-group">
              <input type="number" class="form-control" id="result" placeholder="Resultado" value="<?php echo $suma ?>">
            </div>
          </form>
          <?php
              if ($_POST) {
                $suma = $num1 + $num2;
              }
          ?>
        </div>
      </div>
    </div>



  </div>



  <!-- Start your project here-->


</body>

</html>
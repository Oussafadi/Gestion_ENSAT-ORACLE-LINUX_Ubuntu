<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <title>APP-ENSAT</title>
  <link rel="stylesheet" type="text/css" href="views/css/main.css">
</head>

<body>
  <nav class="navbar navbar-expand-lg  bg-light">
    <div class="container">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="navbar-brand" href="#">
            <img src="./public/image/ensat.jpg" alt="" width="200" height="70" class="d-inline-block align-text-top">
          </a>
        <li class="nav-item">
          <h1> App Gestion ENSAT</h1>
        </li>
        </li>

    </div>
  </nav>
  <div class="login">
    <form class="forme" action='' method="POST">

      <table align="center">
        <tr>
          <td><input type="text" name="cne" class="b" placeholder="user"></td>
          <td><input class="a1" type="submit" value="LOGIN" name="log"></td>
        </tr>
        <tr>
          <td><input type="password" name="mp" class="b" placeholder="password"></td>
          <td> <select name='log_type' class="a1">
              <option value="admin" align="center"> ADMIN</option>
              <option value="responsable_fill" align="center"> RESPONSABLE DE FILIERE</option>
              <option value="eleve" align="center"> ELEVE</option>
          </td>
        </tr>
        <tr>

        </tr>


      </table>
    </form>
  </div>
  <div class="container">
    <?php


    $flag1 = 0;
    $flag2 = 0;
    $flaga = 0;
    $flage = 0;
    $flagr = 0;
    $flag2 = 0;
    if (isset($_POST['log'])) {
      $_SESSION['test'] = $_POST['cne'];
      include_once 'model\model.php';
      include_once 'model\utilisateurs.php';
      $res = utilisateur::all();


      foreach ($res as $key => $value) {
        foreach ($res[$key] as $key => $value) {
          if ($key == 'login') {
            if ($_POST['cne'] == $value) {
              $flag1 = 1;
            }
          }
          if ($key == 'pasword') {
            if ($_POST['mp'] == $value) {
              $flag2 = 1;
            }
          }
        }
      }
      if (($flag1 == 1) && ($flag2 == 1)) {
        if ($_POST['log_type'] == 'admin') {
          foreach ($res as $key => $value) {
            if (($res[$key]->login == $_POST['cne']) && ($res[$key]->pasword == $_POST['mp']) && ($res[$key]->typ == 'admin')) {
              $flaga = 1;
            }
          }
          if ($flaga == 1) {
            header('location: index.php?ul=admin');
          }
        } elseif ($_POST['log_type'] == 'responsable_fill') {
          foreach ($res as $key => $value) {
            if (($res[$key]->login == $_POST['cne']) && ($res[$key]->pasword == $_POST['mp']) && ($res[$key]->typ == 'responsable_fill')) {
              $flagr = 1;
            }
          }
          if ($flagr == 1) {
            header('location: index.php?ul=responsable_fil');
          }
        } else {
          foreach ($res as $key => $value) {
            if (($res[$key]->login == $_POST['cne']) && ($res[$key]->pasword == $_POST['mp']) && ($res[$key]->typ == 'eleve')) {
              $flage = 1;
            }
          }
          if ($flage == 1) {

            header('location: index.php?ul=eleves');
          }
        }
      }
    }






    ?> </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>
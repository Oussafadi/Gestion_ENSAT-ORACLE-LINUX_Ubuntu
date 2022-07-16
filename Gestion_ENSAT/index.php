<?php
session_start();

$chemin = substr($_SERVER['SCRIPT_FILENAME'], 0, -9);
$id = 0;

include_once $chemin . 'model/model.php';
include_once $chemin . 'controller/controler.php';

if (isset($_GET['ul'])) {
  $url = $_GET['ul'];
  //  echo $url."<br>";
  $class_url = explode("/", $url);

  if ($class_url[0] != " ") {
    if (file_exists($chemin . 'controller/' . $class_url[0] . '.php')) {

      include_once $chemin . 'controller/' . $class_url[0] . '.php';
      $cont = new $class_url[0]();
      $action = 'index';


      if (isset($class_url[1])) {
        $action = $class_url[1];
        if (method_exists($cont, $action)) {
          if (isset($class_url[2])) {
            $id = $class_url[2];
          }
          $request = NULL;

          if (!empty($_POST)) {
            $request = new stdClass();
            foreach ($_POST as $key => $value) {

              $request->$key = $_POST[$key];
            }
          }
          if ($request != NULL) {
            if ($id != 0) {
              $cont->$action($id, $request);
            } else {
              $cont->$action($request);
            }
          } else {
            if ($id == 0) {

              $cont->$action();
            } else {
              $cont->$action($id);
            }
          }
        } else {
          echo "class introuvable";
        }
      } else {
        $cont->$action();
      }
    } else {
      include 'public\acceil.php';
    }
  }
} else {

  include_once 'public\acceil.php';
}

?>


</body>

</html>
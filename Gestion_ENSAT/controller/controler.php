<?php




abstract class controler
{

  public function __construct(string $model)
  {
    $chemin = substr($_SERVER['SCRIPT_FILENAME'], 0, -9);

    include_once $chemin . 'model/' . $model . ".php";
  }
  public function view(string $fichier, $donnes = [])
  {
    $chemin = substr($_SERVER['SCRIPT_FILENAME'], 0, -9);
    $cor = get_class($this);

    //$cor = substr($cor, 0, -1);
    $data = $donnes;
    ob_start();
    include_once $chemin . 'views/' . $cor . '/' . $fichier . '.php';
    $contenu = ob_get_clean();
    require_once($chemin . "views/Template.php");
  }
  public function redirect($chemin)
  {
    header('location:' . $chemin);
  }
}

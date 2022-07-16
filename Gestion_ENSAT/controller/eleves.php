<?php
include_once 'model\model.php';
include_once 'model\notess.php';
class eleves extends controler
{
  public function __construct()
  {
    parent::__construct('eleves');
  }
  public function index()
  {
    $this->view("index", notes::all());
  }
  public function show($id)
  {
    echo "show";
  }
  public function destroy($id)
  {
    $res = eleve::find($id);
    $obj = new eleve();
    $obj->delete($id);
    $this->redirect('../../eleves');
  }
  public function store($request)
  {



    $obj = new eleve();

    $obj->code = $request->code;
    $obj->code_fill = $request->code_fill;
    $obj->niveau = $request->niveau;
    $obj->nom = $request->nom;
    $obj->prenom = $request->prenom;
    $obj->login = $request->login;

    $obj->save();
    $this->redirect('../eleves');
  }
  public function edit($id)
  {
    parent::view("forme", eleve::find($id));
  }
  public function update($id, $request)
  {
    $obj = eleve::find($id);
    $obj->code = $request->code;
    $obj->code_fill = $request->code_fill;
    $obj->niveau = $request->niveau;
    $obj->save();
    $this->redirect('../../eleves');
  }
  public function create()
  {
    $this->view("forme");
  }


  public function mail()
  {
    if (isset($_POST['send'])) {
      $to_email = $_POST['to'];
      $subject = $_POST['subject'];
      $message = $_POST['message'];

      $to = $to_email;
      $subject = $subject;
      $txt = $message;
      mail($to, $subject, $txt);
    }
    $this->view("mail", notes::all());
  }
}

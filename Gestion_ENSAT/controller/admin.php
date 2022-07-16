<?php
include_once 'model\model.php';
include_once 'model\eleves.php';
include_once 'model\e_ms.php';
include_once 'model\filieres.php';
include_once 'model\module.php';
include_once 'model\moyennes.php';
include_once 'model\notes.php';
include_once 'model\responsables.php';
include_once 'model\utilisateur.php';
class admin extends controler
{
  public function __construct()
  {
  }

  //  METHODE AFFICHAGE DES VIEWS
  public function index()
  {
    $this->view('index');
  }

  public function utilisateurs()
  {
    $this->view('utilisateur/index', utilisateur::all());
  }
  public function responsables()
  {
    $this->view('responsable/index', responsable::all());
  }
  public function notes()
  {
    $this->view('notes/index', notes::all());
  }
  public function moyennes()
  {
    $this->view('moyennes/index', moyennes::all());
  }
  public function modules()
  {
    $this->view('module/index', module::all());
  }

  public function eleve()
  {
    $this->view('eleve/index', eleve::all());
  }
  public function e_m()
  {
    $this->view('e_m/index', e_m::all());
  }
  public function filieres()
  {
    $this->view('filiere/index', filiere::all());
  }

  // CRUD  ADMIN
  // LES ETUDIANTS


  public function elvdestroy($id)
  {
    $res = eleve::find($id);
    $obj = new eleve();
    $obj->delete($id);
    $this->redirect('index.php?ul=admin/eleve');
  }
  public function elvstore($request)
  {
    $obj = new eleve();

    $obj->code = $request->code;
    $obj->code_fill = $request->code_fill;
    $obj->niveau = $request->niveau;
    $obj->nom = $request->nom;
    $obj->prenom = $request->prenom;
    $obj->login = $request->login;

    $obj->save();
    $this->redirect(' index.php?ul=admin/eleve');
  }
  public function elvedit($id)
  {
    parent::view("eleve/forme", eleve::find($id));
  }
  public function elvupdate($id, $request)
  {

    $obj = eleve::find($id);
    $obj->code = $request->code;
    $obj->code_fill = $request->code_fill;
    $obj->niveau = $request->niveau;
    $obj->save();
    $this->redirect('index.php?ul=admin/eleve');
  }

  public function ecreate()
  {
    $this->view("eleve/forme");
  }

  // les fillieres 

  public function fdestroy($id)
  {
    $res = filiere::find($id);
    $obj = new filiere();
    $obj->delete($id);
    $this->redirect('index.php?ul=admin/filieres');
  }
  public function fstore($request)
  {



    $obj = new filiere();

    $obj->code = $request->code;
    $obj->designiation = $request->designiation;
    $obj->responsable = $request->responsable;
    $obj->save();
    $this->redirect('index.php?ul=admin/filieres');
  }
  public function fedit($id)
  {
    parent::view("filiere/forme", filiere::find($id));
  }
  public function fupdate($id, $request)
  {
    $obj = filiere::find($id);
    $obj->code = $request->code;
    $obj->designiation = $request->designiation;
    $obj->responsable = $request->responsable;
    $obj->save();
    $this->redirect('index.php?ul=admin/filieres');
  }
  public function fcreate()
  {
    $this->view("filiere/forme");
  }

  //// modules 

  public function mdestroy($id)
  {
    $res = module::find($id);
    $obj = new module();
    $obj->delete($id);
    $this->redirect('index.php?ul=admin/module');
  }
  public function mstore($request)
  {



    $obj = new module();

    $obj->code = $request->code;
    $obj->designiation = $request->designiation;
    $obj->niveau = $request->niveau;
    $obj->semestre = $request->semestre;
    $obj->code_fill = $request->code_fill;
    $obj->save();
    $this->redirect('index.php?ul=admin/module');
  }
  public function medit($id)
  {
    parent::view("module/forme", module::find($id));
  }
  public function mupdate($id, $request)
  {
    $obj = module::find($id);

    $obj->code = $request->code;
    $obj->designiation = $request->designiation;
    $obj->niveau = $request->niveau;
    $obj->semestre = $request->semestre;
    $obj->code_fill = $request->code_fill;
    $obj->save();
    $this->redirect('index.php?ul=admin/module');
  }
  public function mcreate()
  {
    $this->view("module/forme");
  }

  ///////// element modules 


  public function emdestroy($id)
  {
    $res = e_m::find($id);
    $obj = new e_m();
    $obj->delete($id);
    $this->redirect('index.php?ul=admin/e_m');
  }
  public function emstore($request)
  {



    $obj = new e_m();
    $obj->code_module = $request->code_module;
    $obj->code = $request->code;
    $obj->designiation = $request->designiation;
    $obj->vh = $request->vh;
    $obj->poids = $request->poids;
    $obj->save();
    $this->redirect('index.php?ul=admin/e_m');
  }
  public function emedit($id)
  {
    parent::view("e_m/forme", e_m::find($id));
  }
  public function emupdate($id, $request)
  {
    $obj = e_m::find($id);
    $obj->code_module = $request->code_module;
    $obj->code = $request->code;
    $obj->designiation = $request->designiation;
    $obj->vh = $request->vh;
    $obj->poids = $request->poids;
    $obj->save();
    $this->redirect('index.php?ul=admin/e_m');
  }
  public function emcreate()
  {
    $this->view("e_m/forme");
  }

  ///// MOYENNNES 

  public function mydestroy($id)
  {
    $res = moyennes::find($id);
    $obj = new moyennes();
    $obj->delete($id);
    $this->redirect('index.php?ul=admin/moyennes');
  }
  public function mystore($request)
  {



    $obj = new moyennes();

    $obj->code_eleve = $request->code_eleve;
    $obj->code_fill = $request->code_fill;
    $obj->niveau = $request->niveau;
    $obj->moyenne = $request->moyenne;
    $obj->save();
    $this->redirect('index.php?ul=admin/moyennes');
  }
  public function myedit($id)
  {
    parent::view("moyennes/forme", moyennes::find($id));
  }
  public function myupdate($id, $request)
  {
    $obj = moyennes::find($id);
    $obj->code_eleve = $request->code_eleve;
    $obj->code_fill = $request->code_fill;
    $obj->niveau = $request->niveau;
    $obj->moyenne = $request->moyenne;
    $obj->save();
    $this->redirect('index.php?ul=admin/moyennes');
  }
  public function mycreate()
  {
    $this->view("moyennes/forme");
  }


  ////  NOTES

  public function ndestroy($id)
  {
    $res = notes::find($id);
    $obj = new notes();
    $obj->delete($id);
    $this->redirect('index.php?ul=admin/notes');
  }
  public function nstore($request)
  {



    $obj = new notes();

    $obj->code_eleve = $request->code_eleve;
    $obj->code_elm_module = $request->code_elm_module;
    $obj->note = $request->note;


    $obj->save();
    $this->redirect('index.php?ul=admin/notes');
  }
  public function nedit($id)
  {
    parent::view("notes/forme", notes::find($id));
  }
  public function nupdate($id, $request)
  {
    $obj = notes::find($id);
    $obj->code_eleve = $request->code_eleve;
    $obj->code_elm_module = $request->code_elm_module;
    $obj->note = $request->note;

    $obj->save();
    $this->redirect('index.php?ul=admin/notes');
  }
  public function ncreate()
  {
    $this->view("notes/forme");
  }


  ///////// RESPONSABLE 
  public function rdestroy($id)
  {
    $res = responsable::find($id);
    $obj = new responsable();
    $obj->delete($id);
    $this->redirect('index.php?ul=admin/responsables');
  }
  public function rstore($request)
  {



    $obj = new responsable();

    $obj->login = $request->login;
    $obj->nom = $request->nom;
    $obj->prenom = $request->prenom;
    $obj->departement = $request->departement;
    $obj->save();
    $this->redirect('index.php?ul=admin/responsables');
  }
  public function redit($id)
  {
    parent::view("responsable/forme", responsable::find($id));
  }
  public function rupdate($id, $request)
  {
    $obj = responsable::find($id);
    $obj->login = $request->login;
    $obj->nom = $request->nom;
    $obj->prenom = $request->prenom;
    $obj->departement = $request->departement;
    $obj->save();
    $this->redirect('index.php?ul=admin/responsables');
  }
  public function rcreate()
  {
    $this->view("responsable/forme");
  }


  ////// utilisateur



  public function udestroy($id)
  {
    $res = utilisateur::find($id);
    $obj = new utilisateur();
    $obj->delete($id);
    $this->redirect('index.php?ul=admin/utilisateurs');
  }
  public function ustore($request)
  {



    $obj = new utilisateur();

    $obj->login = $request->login;
    $obj->email = $request->email;
    $obj->pasword = $request->pasword;
    $obj->typ = $request->typ;
    $obj->save();
    $this->redirect('index.php?ul=admin/utilisateurs');
  }
  public function uedit($id)
  {
    parent::view("utilisateur/forme", utilisateur::find($id));
  }
  public function uupdate($id, $request)
  {
    $obj = utilisateur::find($id);
    $obj->login = $request->login;
    $obj->email = $request->email;
    $obj->pasword = $request->pasword;
    $obj->typ = $request->typ;
    $obj->save();
    $this->redirect('index.php?ul=admin/utilisateurs');
  }
  public function ucreate()
  {
    $this->view("utilisateur/forme");
  }
}

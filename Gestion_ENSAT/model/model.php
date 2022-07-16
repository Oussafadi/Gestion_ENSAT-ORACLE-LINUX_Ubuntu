<?php
abstract
class model {
  public $id=0;
  private static $pdo = null;
  public function __construct(){
$db_name='project_php';
$server='localhost';
$user='root';
$password='';
  self::$pdo=new PDO('mysql:host='.$server.';dbname='.$db_name,$user,$password);
  }
    public function save(){

      $data=(array) $this;
      if($this->id==0){
        $rq="INSERT INTO ".get_class($this)." (";
        $f=$v="";
        foreach ($data as $key => $value) {

          if ($value !=$this->id){
            $f.=$key.",";
            if(gettype($value)=='string'){$v.="'".$value."',";}else{$v.=$value.",";}

          }

        }
        $f=substr($f,0,-1);
        $v=substr($v,0,-1);
        $rq.=$f.") values (".$v.")";

      }else {
          $rq="UPDATE ".get_class($this)." set ";
         foreach ($data as $key => $value) {
                      if ($key !="id"){
                          $rq.=$key."='".$value."',";}}
                          $rq=substr($rq,0,-1);
                          $rq.=" where id =".$this->id;


  echo $rq;

      }

        self::$pdo->exec($rq);
    }


public function delete($id){

  $rq="DELETE FROM ".get_class($this)." where id=".$id;
  echo $rq;
  self::$pdo->exec($rq);
}
public static function find($id){

$q = get_called_class();
$r=new $q();
$rq="select * from ".$q." where id = ".$id;
$res=self::$pdo->query($rq);

$t=$res->fetch(PDO::FETCH_ASSOC);
//var_dump($t);

foreach ($t as $key => $value) {
  if(gettype($value)=='string'){$r->$key = $value;}else{$r->$key = "'".$value."'";}

}
return $r;

}
public static function all(){
  $q = get_called_class();
$r=new $q();
$rq="select * from ".$q;
$res=self::$pdo->query($rq);

return ($res->fetchAll(PDO::FETCH_OBJ));
}

}

<?php
class responsable_fil extends controler
{
public function __construct(){


}
public function index(){
  $this->view('index');
}
public function show($id){
  echo "show";
}
public function destroy($id){
  echo "destroy";
}
public function store($request){
  echo "create";
}
public function edit($id){
  echo "edit";
}
public function update($id,$request){}
public function create(){
  $this->view("form");
}

}

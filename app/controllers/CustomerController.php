<?php
class CustomerController extends BaseController{
  public function getIndex(){
    $cliente = Customer::paginate(12);
    return View::make('cliente.index',
                      ["clientes"=>$cliente]);
  }
  public function getInsert(){
    return View::make('cliente.ingresar');
  }
  public function postInsert(){
    $cliente = new Customer();
    $cliente->first_name= Input::get('nombre');
    $cliente->last_name= Input::get('apellido');
    $cliente->email= Input::get('Email');
    if (@$_POST['activo']==null) {
      $cliente->active =0;
    }else{
      $cliente->active =1;
    }
    $cliente->save();
    return Redirect::to('cliente/index');
  }

}

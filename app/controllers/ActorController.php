<?php
  class ActorController extends BaseController{
      public function getInsert(){
        return View::make('actor.insert');
      }

      public function postInsert(){
        $a = new Actor();
        $a->first_name = $_POST["nombre"];
        $a->last_name = $_POST["apellido"];
        $a->save();
        return  Redirect::to('actore/index');
      }
      public function getIndex(){
        $tablaActores = Actor::paginate(12);
        return View::make('actor.index',
                          ["actores"=>$tablaActores]);
      }
      public function getUpdate($id){
        $a = Actor::find($id);
        return View::make('actor.update',["actor"=>$a]);
      }
      public function postUpdate($id){
        $a = Actor::find($id);
        $a->first_name = $_POST["nombre"];
        $a->last_name = $_POST["apellido"];
        $a->save();
        return  Redirect::to('actore/index');
      }
  }

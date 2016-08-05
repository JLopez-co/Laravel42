<?php
class Actor extends Eloquent{
  //para una clase active record en laravel no es necesario: coloar los atributos de la tabla;
  protected $table="actor";
  protected $primaryKey ="actor_id";
  public $timestamps = false;
}

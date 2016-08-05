<?php
class Customer extends Eloquent{
  protected $table ="customer";
  protected $primaryKey ="customer_id";
  public $timestamps = false;
}

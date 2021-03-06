<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Sharemarket extends Model
{
    use Sortable;

    public $sortable = ['id','companyname','price','created_at','updated_at'];

  public function setCompanyName($companyname){
      $this->companyname = $companyname;
  }
  public function getCompanyName(){
      return $this->companyname;
  }

  public function setPrice($price){
      $this->price = $price;

  }

  public function getPrice(){
      return $this->price;
  }
}

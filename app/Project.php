<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
  
  public function timesheets()
  	{
  return $this->hasMany(Timesheets::class);
  	}
  	 public function overtimes()
  	{
  return $this->hasMany(Overtime::class);
  	}
  	
  	
}

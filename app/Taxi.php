<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Taxi extends Model
{
    
	protected $authorised = false;


	
	public function authorise()
		{
		$this->authorised = true;
		}
		
	public function isAuthorised()
		{
			return $this->authorised;
		}
}

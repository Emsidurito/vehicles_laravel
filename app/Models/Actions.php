<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actions extends Model
{
   public function vehicles()
    {
  		 
   		return $this->belongsToMany(
       		 Vehicle::class,
        	'vehicles_actions');
        	
    }
}
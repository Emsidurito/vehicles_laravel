<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory;
    protected $fillable = ['realname','tipus','marca_id','potencia','combustio_id'];

    protected $with = ['marca'];

    public function marca() {

    	return $this->belongsTo(Marca::class);

      // return $this->belongsTo(Model::class, 'foreign_key', 'owner_key');
    }

    public function modificacions()
    {
  	
	// La taula per seguir convencions Laravel s'hauria d'haver anomenat vehicle_modificacions!!! 
      
   	return $this->belongsToMany(
           Modificacio::class,
          'vehicles_modificacions');
  }
    public function combustio() {

      return $this->belongsTo(Combustio::class);

    }

}
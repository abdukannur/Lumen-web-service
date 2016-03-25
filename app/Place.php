<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Place extends Model{
	
	protected $fillable = ['place', 'pincode', 'bed', 'square_feet', 'price'];
}
?>
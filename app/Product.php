<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
	protected $fillable=['name','description','price','image','category_id'];

    public function category()
    {
<<<<<<< HEAD
    	 return $this->belongsTo(Category::class);
=======
    	$this->belongsTo(Category::class);
>>>>>>> 2ca2e5726ef7e538fc1f644432fff88a97e72f98
    }
}

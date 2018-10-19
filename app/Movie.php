<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model {
    
    protected $fillable = ['title', 'rating', 'awards', 'length'];

	public function getTitleAndRating()
	{
		return $this->title . ' ' . $this->rating;
	}
	
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actor extends Model {
    
    protected $fillable = [];

    public function getFullName() {

        return $this->first_name . ' ' . $this->last_name;
    }

	static function querySearch($request) {

        return $query->where('first_name', 'LIKE', '%' . $request->first_name . '%')
                     ->orWhere('last_name', 'LIKE', '%' . $request->last_name . '%')
                     ->orderBy('last_name');
    }

}
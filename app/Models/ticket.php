<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ticket extends Model
{
    protected $table = "task";
  	protected $guarded = [];
  	const CREATED_AT = 'record_date';
  	const UPDATED_AT = 'up_date';
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\User;

class role extends Model
{
    protected $table = "role";
    protected $guarded = [];
    protected $primaryKey='role.user_id';
    protected $fillable = ['role.user_id','role_name','row_status','row_order'];

    //public function user(){

//        $this->belongsto('App\Models\role','idapp_user','role.user_id');
  //  }

}



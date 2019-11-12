<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Models\role;

class user extends Authenticatable
{

    protected $table = "app_user";
    protected $fillable = ['idapp_user','first_name', 'last_name', 'email','pass_word','roleid','is_active','row_status'];
    protected $hidden = ['pass_word'];
    const CREATED_AT = 'record_date';
    const UPDATED_AT = 'up_date';
    public function getAuthPassword()
    {
        return $this->pass_word;

    }

   //  public function role(){

     //   $this->hasOne('App\Models\role','role.user_id','idapp_user');
    //}

}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
class UserNameTest extends Authenticatable
{
    use Notifiable;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'user';
    protected $primaryKey = "name";
    public $incrementing = false;
    public $timestamps = false;
    protected $fillable = ['name','password', 'token'];
    

    /**
    * The attributes excluded from the model's JSON form.
    *
    * @var array
    */
    protected $hidden = array('password', 'remember_token');
}
?>
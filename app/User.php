<?php

namespace App;


use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class User extends Model implements Authenticatable
{

    //if the name of the table is deferante 
    //protected $table = 'users2';

use \Illuminate\Auth\Authenticatable;






}

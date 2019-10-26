<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;

class admin extends Authenticatable
{
    use Notifiable,HasRoles; 
    protected $guard_name='admin';
    
}

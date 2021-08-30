<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends BaseAuthenticatable
{
    protected $guard = 'admin';
}

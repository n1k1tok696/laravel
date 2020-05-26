<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;
use Illuminate\Contracts\Auth\Authenticatable;

class AuthLar extends Model implements Authenticatable
{
    use AuthenticableTrait;
}

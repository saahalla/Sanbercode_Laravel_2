<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Traits\UsesUuid;

class User extends Model
{
    use UsesUuid;

    protected $guarded = [];
}

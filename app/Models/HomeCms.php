<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HomeCms extends Model
{
     /**
     * Added just to demonstrate that models work
     * @return String
     */
    protected $table = 'homefrontendcms';
    protected $primaryKey = 'id';   
    protected $guarded   = ['id'];
}

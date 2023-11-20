<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MenuListCms extends Model
{
     /**
     * Added just to demonstrate that models work
     * @return String
     */
    protected $table = 'menufrontendcms';
    protected $primaryKey = 'id';   
    protected $guarded   = ['id'];
}

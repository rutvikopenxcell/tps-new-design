<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HomePageCms extends Model
{
     /**
     * Added just to demonstrate that models work
     * @return String
     */
    protected $table = 'frontendcms';
    protected $primaryKey = 'id';   
    protected $guarded   = ['id'];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MobileAppCms extends Model
{
     /**
     * Added just to demonstrate that models work
     * @return String
     */
    protected $table = 'mobileappfrontendcms';
    protected $primaryKey = 'id';   
    protected $guarded   = ['id'];

   
}

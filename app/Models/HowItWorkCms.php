<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HowItWorkCms extends Model
{
     /**
     * Added just to demonstrate that models work
     * @return String
     */
    protected $table = 'howitworkfrontendcms';
    protected $primaryKey = 'id';   
    protected $guarded   = ['id'];

    
}

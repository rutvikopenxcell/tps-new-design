<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PageTitleCms extends Model
{
     /**
     * Added just to demonstrate that models work
     * @return String
     */
    protected $table = 'pagetitlefrontendcms';
    protected $primaryKey = 'id';   
    protected $guarded   = ['id'];
}

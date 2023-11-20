<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MetaContentCms extends Model
{
     /**
     * Added just to demonstrate that models work
     * @return String
     */
    protected $table = 'metafrontendcms';
    protected $primaryKey = 'id';   
    protected $guarded   = ['id'];
}

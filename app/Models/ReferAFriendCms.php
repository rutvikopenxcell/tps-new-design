<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ReferAFriendCms extends Model
{
     /**
     * Added just to demonstrate that models work
     * @return String
     */
    protected $table = 'referafriendfrontendcms';
    protected $primaryKey = 'id';   
    protected $guarded   = ['id'];
}

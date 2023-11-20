<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ReferralCodeCms extends Model
{
     /**
     * Added just to demonstrate that models work
     * @return String
     */
    protected $table = 'referralcodefrontendcms';
    protected $primaryKey = 'id';   
    protected $guarded   = ['id'];

   
}

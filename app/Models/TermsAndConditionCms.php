<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TermsAndConditionCms extends Model
{
     /**
     * Added just to demonstrate that models work
     * @return String
     */
    protected $table = 'termsandconditionfrontendcms';
    protected $primaryKey = 'id';   
    protected $guarded   = ['id'];
}

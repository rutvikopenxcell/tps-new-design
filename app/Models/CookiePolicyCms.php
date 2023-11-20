<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CookiePolicyCms extends Model
{
    /**
     * Added just to demonstrate that models work
     * @return String
     */
    protected $table = 'cookiepolicyfrontendcms';
    protected $primaryKey = 'id';
    protected $guarded   = ['id'];
}

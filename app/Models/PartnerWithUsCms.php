<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PartnerWithUsCms extends Model
{
      /**
     * Added just to demonstrate that models work
     * @return String
     */
    protected $table = 'partnerwithusfrontendcms';
    protected $primaryKey = 'id';   
    protected $guarded   = ['id'];

}

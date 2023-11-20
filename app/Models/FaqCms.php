<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FaqCms extends Model
{
     /**
     * Added just to demonstrate that models work
     * @return String
     */
    protected $table = 'faqfrontendcms';
    protected $primaryKey = 'id';   
    protected $guarded   = ['id'];

    protected $columns = array('id', 'languagecode', 'countrycode', 'languageculture', 'faqheadertext', 'faqheadertextsec', 'faqpara', 'faqparasec', 'status', 'created_at', 'updated_at'); 

	public function scopeExclude($query,$value = array()) 
	{
	    return $query->select( array_diff( $this->columns,(array) $value) );
	}
}

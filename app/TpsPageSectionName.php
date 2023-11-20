<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TpsPageSectionName extends Model
{
    public function sections()
    {
        return $this->hasMany(TpsPageSection::class,'tps_page_section_names_id');
    }
}

<?php

namespace Wgc\NovaSite\Models;

use Illuminate\Database\Eloquent\Model;

class SitePages extends Model
{
    public function __construct(array $attributes = [])
    {
        $this->setTable(config('nova_site.table_names.site_pages'));
    }

    public function rows()
    {
        return $this->hasMany(\Wgc\NovaSite\Models\PageRows::class, 'page_id', 'id');
    }
}

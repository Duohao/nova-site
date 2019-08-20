<?php

namespace Wgc\NovaSite\Models;

use Illuminate\Database\Eloquent\Model;

class PageRows extends Model
{
    public function __construct(array $attributes = [])
    {
        $this->setTable(config('nova_site.table_names.page_rows'));
    }

    public function columns()
    {
        return $this->hasMany(\Wgc\NovaSite\Models\RowColumns::class, 'row_id', 'id');
    }
}

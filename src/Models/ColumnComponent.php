<?php

namespace Wgc\NovaSite\Models;

use Illuminate\Database\Eloquent\Model;

class ColumnComponent extends Model
{
    public function __construct(array $attributes = [])
    {
        $this->setTable(config('nova_site.table_names.column_component'));
    }

    public function components()
    {
        return $this->hasOne(\Wgc\NovaSite\Models\Components::class, 'id', 'component_id');
    }
}

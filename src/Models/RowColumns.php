<?php

namespace Wgc\NovaSite\Models;

use Illuminate\Database\Eloquent\Model;

class RowColumns extends Model
{
    public function __construct(array $attributes = [])
    {
        $this->setTable(config('nova_site.table_names.row_columns'));
    }

    public function columnComponent()
    {
        return $this->hasOne(\Wgc\NovaSite\Models\ColumnComponent::class, 'id', 'column_component_id');
    }
}

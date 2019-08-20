<?php

namespace Wgc\NovaSite\Models;

use Illuminate\Database\Eloquent\Model;

class ColumnComponent extends Model
{
    public function __construct(array $attributes = [])
    {
        $this->setTable(config('nova_site.table_names.column_component'));
    }
}

<?php

namespace Wgc\NovaSite\Models;

use Illuminate\Database\Eloquent\Model;

class Components extends Model
{
    public function __construct(array $attributes = [])
    {
        $this->setTable(config('nova_site.table_names.components'));
    }
}

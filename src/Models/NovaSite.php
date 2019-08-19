<?php

namespace Wgc\NovaSite\Models;

use Illuminate\Database\Eloquent\Model;

class NovaSite extends Model
{
    public function __construct(array $attributes = [])
    {
        $this->setTable(config('nova_site.table_names.sites'));
    }

    public function siteable()
    {
        return $this->morphTo();
    }
}

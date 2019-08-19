<?php

namespace Wgc\NovaSite\Traits;

trait Siteable
{
    public function sites()
    {
        return $this->morphMany(
            \Wgc\NovaSite\Models\NovaSite::class,
            'siteable'
        );
    }
}

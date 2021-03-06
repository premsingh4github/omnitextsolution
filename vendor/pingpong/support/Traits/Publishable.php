<?php

namespace Pingpong\Support\Traits;

trait Publishable
{
    /**
     * Query scope for only published data.
     *
     * @param \Illuminate\Database\Query\Builder $query
     *
     * @return \Illuminate\Database\Query\Builder
     */
    public function scopeOnlyPublished($query)
    {
        return $query->whereNotNull(self::PUBLISHED_AT);
    }

    /**
     * Query scope for only drafted data.
     *
     * @param \Illuminate\Database\Query\Builder $query
     *
     * @return \Illuminate\Database\Query\Builder
     */
    public function scopeOnlyDrafted($query)
    {
        return $query->whereNull(self::PUBLISHED_AT);
    }

    /**
     * Determine whether the current model/data is published.
     *
     * @return bool
     */
    public function published()
    {
        return !$this->drafted();
    }

    /**
     * Determine whether the current model/data is drafted.
     *
     * @return bool
     */
    public function drafted()
    {
        return is_null($this->{self::PUBLISHED_AT});
    }
}

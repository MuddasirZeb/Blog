<?php

namespace App\Repositories;

use App\Models\Blog;
use Prettus\Repository\Eloquent\BaseRepository;

class BlogRepository extends BaseRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model(): string
    {
        return Blog::class;
    }
}
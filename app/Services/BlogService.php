<?php

namespace App\Services;

use App\Repositories\BlogRepository;

class BlogService
{
    public function __construct(private readonly BlogRepository $blogRepository)
    {
        // ..
    }

    public function index()
    {
        return $this->blogRepository->paginate();   
    }
}
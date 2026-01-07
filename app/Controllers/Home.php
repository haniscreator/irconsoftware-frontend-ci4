<?php

namespace App\Controllers;

use App\Repositories\JsonContentRepository;

class Home extends BaseController
{
    protected $contentRepository;

    public function __construct()
    {
        // Simple manual dependency injection for now
        $this->contentRepository = new JsonContentRepository();
    }

    public function index(): string
    {
        $data['content'] = $this->contentRepository->getHomeContent();
        return view('index', $data);
    }
}

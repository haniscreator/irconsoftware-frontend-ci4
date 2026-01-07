<?php

namespace App\Repositories;

use CodeIgniter\Files\File;

class JsonContentRepository implements ContentRepositoryInterface
{
    protected $jsonPath;

    public function __construct()
    {
        $this->jsonPath = APPPATH . 'Data/content.json';
    }

    public function getHomeContent(): array
    {
        if (!file_exists($this->jsonPath)) {
            // Fallback or error handling
            return [];
        }

        $json = file_get_contents($this->jsonPath);
        return json_decode($json, true) ?? [];
    }
}

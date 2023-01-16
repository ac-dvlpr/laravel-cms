<?php

declare(strict_types=1);

namespace Modules\Users\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Modules\Users\Http\Requests\SavePostRequest;
use Illuminate\Routing\Controller;
use Modules\Users\Services\PostService;

class PostController extends Controller
{
    private $postService;

    public function __construct(PostService $postService)
    {
        $this->postService = $postService;
    }

    public function save(SavePostRequest $request): void
    {
        $this->postService->savePost($request->dto());
    }
}
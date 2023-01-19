<?php

declare(strict_types=1);

namespace Modules\Users\Http\Controllers;

use Modules\Users\Http\Requests\SavePostRequest;
use Illuminate\Routing\Controller;
use Modules\Users\Services\PostService;
use Illuminate\Http\RedirectResponse;

class PostController extends Controller
{
    private $postService;

    public function __construct(PostService $postService)
    {
        $this->postService = $postService;
    }

    public function save(SavePostRequest $request): RedirectResponse
    {
        $this->postService->savePost($request->dto());

        return back()->with('success', __('common.alert.dashboard.info'));
    }
}
<?php

declare(strict_types=1);

namespace Modules\Users\Http\Controllers;

use Modules\Users\Http\Requests\SavePostRequest;
use Illuminate\Routing\Controller;
use Modules\Users\Services\PostService;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Modules\Users\Http\Requests\ShowPostRequest;

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

    public function showLastThreePosts(ShowPostRequest $request): View
    {
        $lastThreePosts = $this->postService->showLastThreePosts($request->dto());

        return view('dashboard', ['posts' => $lastThreePosts]);
    }

    public function showAllPosts()
    {
        $posts = $this->postService->showAllPosts();

        return response()->view('admin-dashboard', ['posts' => $posts]);
    }
}
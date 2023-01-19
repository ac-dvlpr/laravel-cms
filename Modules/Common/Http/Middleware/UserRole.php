<?php

declare(strict_types=1);

namespace Modules\Common\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Modules\Users\Http\Controllers\PostController;

class UserRole
{
    private $postController;

    public function __construct(PostController $postController)
    {
        $this->postController = $postController;
    }

    public function handle(Request $request, Closure $next)
    {
        if ($request->user()->hasRoleAdmin()) {
            return $this->postController->showAllPosts();
        }

        return $next($request);
    }
}

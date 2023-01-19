<?php

declare(strict_types=1);

namespace Modules\Users\Repositories;

use Modules\Users\Entities\Post;
use Modules\Users\Http\Dto\PostDto;
use Modules\Users\Http\Dto\ShowPostDto;
use Illuminate\Support\Facades\DB;
use Common\Exception\PostNotCreatedException;
use Illuminate\Database\Eloquent\Collection;

class PostsRepository
{
    public function createPost(PostDto $postDto): void
    {
        DB::beginTransaction();

        try {
            Post::create([
                'user_id' => $postDto->getUser()->getId(),
                'title' => $postDto->getPost()['title'],
                'content' => $postDto->getPost()['content']
            ]);

            DB::commit();

        } catch (\Exception $e) {
            DB::rollBack();
            throw new PostNotCreatedException();
        }
    }

    public function getLastThreePosts(ShowPostDto $showPostDto): Collection
    {
        return Post::select('title', 'content')
            ->where('user_id', $showPostDto->getUser()->getId())
            ->orderBy('created_at', 'desc')
            ->limit(3)
            ->get();
    }
}
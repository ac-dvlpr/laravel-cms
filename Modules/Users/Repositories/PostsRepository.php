<?php

declare(strict_types=1);

namespace Modules\Users\Repositories;

use Modules\Users\Entities\Post;
use Modules\Users\Http\Dto\PostDto;
use Illuminate\Support\Facades\DB;
use Common\Exception\PostNotCreatedException;

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
}
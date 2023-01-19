<?php

declare(strict_types=1);

namespace Modules\Users\Services;

use Modules\Users\Repositories\PostsRepository;
use Modules\Users\Http\Dto\PostDto;
use Modules\Users\Http\Dto\ShowPostDto;
use Illuminate\Database\Eloquent\Collection;

class PostService
{
    private $postsRepository;

    public function __construct(PostsRepository $postsRepository)
    {
        $this->postsRepository = $postsRepository;
    }

    public function savePost(PostDto $postDto): void
    {
        $this->postsRepository->createPost($postDto);
    }

    public function showLastThreePosts(ShowPostDto $showPostDto): Collection
    {
        return $this->postsRepository->getLastThreePosts($showPostDto);
    }
}
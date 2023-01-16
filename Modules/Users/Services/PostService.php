<?php

declare(strict_types=1);

namespace Modules\Users\Services;

use Modules\Users\Repositories\PostsRepository;
use Modules\Users\Http\Dto\PostDto;

class PostService
{
    private $postsRepository;

    public function __construct(PostsRepository $postsRepository)
    {
        $this->postsRepository = $postsRepository;
    }

    public function savePost(PostDto $postDto)
    {
        $this->postsRepository->createPost($postDto);
    }
}
<?php

declare(strict_types=1);

namespace Modules\Common\Entities;

use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    protected $table = 'languages';

    public $fillable = [
        'id',
        'language_name',
        'language_code'
    ];

    public function getId(): int
    {
        return $this->id;
    }

    public function getLanguageName(): string
    {
        return $this->language_name;
    }

    public function getLanguageCode(): string
    {
        return $this->language_code;
    }
}
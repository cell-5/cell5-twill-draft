<?php

namespace App\Models;

use A17\Twill\Models\Behaviors\HasSlug;
use A17\Twill\Models\Behaviors\HasMedias;
use A17\Twill\Models\Model;

class Person extends Model
{
    use HasSlug, HasMedias;

    protected $fillable = [
        'published',
        'title',
        'job_title',
        'bio'
    ];

    public $slugAttributes = [
        'title',
    ];

    public $mediasParams = [
        'profile_img' => [
            'desktop' => [
                [
                    'name' => 'desktop',
                    'ratio' => 16 / 9,
                ],
            ],
            'mobile' => [
                [
                    'name' => 'mobile',
                    'ratio' => 1,
                ],
            ],
            'flexible' => [
                [
                    'name' => 'free',
                    'ratio' => 0,
                ],
                [
                    'name' => 'landscape',
                    'ratio' => 16 / 9,
                ],
                [
                    'name' => 'portrait',
                    'ratio' => 3 / 5,
                ],
            ],
        ],
    ];
}

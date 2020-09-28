<?php

namespace App\Repositories;

use A17\Twill\Repositories\Behaviors\HandleMedias;
use A17\Twill\Repositories\ModuleRepository;
use App\Models\Value;

class ValueRepository extends ModuleRepository
{
    use HandleMedias;

    public function __construct(Value $model)
    {
        $this->model = $model;
    }
}

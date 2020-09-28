<?php

namespace App\Repositories;

use A17\Twill\Repositories\Behaviors\HandleMedias;
use A17\Twill\Repositories\ModuleRepository;
use App\Models\ClientPortfolio;

class ClientPortfolioRepository extends ModuleRepository
{
    use HandleMedias;

    public function __construct(ClientPortfolio $model)
    {
        $this->model = $model;
    }
}

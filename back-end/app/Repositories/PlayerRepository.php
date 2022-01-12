<?php
namespace App\Repositories;

use App\Models\Player;

class PlayerRepository extends BaseRepository
{
    protected $model;

    public function __construct(Player $model)
    {
        parent::__construct($model);
        $this->model = $model;
    }

}
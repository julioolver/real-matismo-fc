<?php

namespace App\Services;

use App\Interfaces\IPlayer;
use App\Repositories\PlayerRepository;

class PlayerService implements IPlayer
{
    protected $playerRepository;

    public function __construct(PlayerRepository $playerRepository)
    {
        $this->playerRepository = $playerRepository;
    }

    public function all($request): Object
    {
        $data = $request->all();
        $pageConf = [];
        $pageConf['per_page'] = isset($data['per_page']) ? $data['per_page'] : 10;

        if ($request->has('conditions')) {
            $expressions = explode(';', $request->get('conditions'));
            $filterWHere = $this->playerRepository->filterWhere($expressions);
            //return $filterWHere->get();
        }

        if ($request->has('fields')) {
            $fields = $request->get('fields');
            return $this->playerRepository->filter($fields);
        }

        return $this->playerRepository->all($pageConf);
    }

    public function getPlayer(Int $id): Object
    {
        return $this->playerRepository->find($id);
    }

    public function savePlayer($request)
    {
        $data = $request->all();

        return $this->playerRepository->save($data);
    }

    public function update($request)
    {
        $data = $request->all();
        $player = $this->getPlayer($data['id']);

        return $this->playerRepository->update($player, $data);
    }

    public function delete(Int $id)
    {
        $player = $this->getPlayer($id);

        return $this->playerRepository->delete($player);
    }
}

<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\PlayerCollection;
use App\Http\Resources\PlayerResource;
use App\Interfaces\IPlayer;
use Illuminate\Http\Request;

class PlayerController extends Controller
{
    protected $player;

    public function __construct(IPlayer $player)
    {
        $this->player = $player;
    }

    public function index(Request $request)
    {
        $players = $this->player->all($request);

        // return response()->json($players);
        return new PlayerCollection($players);
    }

    public function show($id)
    {
        $player = $this->player->getPlayer($id);

        //return response()->json($player);
        return new PlayerResource($player);
    }

    public function save(Request $request)
    {
        $player = $this->player->savePlayer($request);

        return response()->json($player);
    }

    public function update(Request $request)
    {
        $player = $this->player->update($request);

        return response()->json($player);
    }

    public function delete($id)
    {
        $player = $this->player->delete($id);

        return response()->json(['data' => ['msg' => 'Produto removido com sucesso!']]);
    }
}

<?php

namespace App\Interfaces;

interface IPlayer
{
    public function all($request): Object;
    public function getPlayer(Int $id): Object;
    public function savePlayer($request);
    public function update($request);
    public function delete(Int $id);
}

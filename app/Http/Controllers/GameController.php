<?php

namespace App\Http\Controllers;

use App\Game;
use Illuminate\Http\Request;

class GameController extends Controller
{
    public function index(Game $game)
    {
        return view('games.index')->with(['posts'=>$game->getByGame()]);
    }
}

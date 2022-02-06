<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    protected $fillable = [
        'game_title',
        'game_category',
        'game_platform',
        'game_url',
    ];
    
    public function getByGame(int $limit_count = 5)
    {
        //更新順
         return $this->posts()->with('game')->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
    
    public function posts()   
    {
        return $this->hasMany('App\Post');  
    }
}

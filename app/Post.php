<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes;
    public function getPaginateByLimit(int $limit_count = 5)
    {
       return $this::with('game')->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
    
    protected $fillable = [
        'post_title',
        'post_body',
        'room_code',
        'player_sum',
        'start_time',
        'finish_time',
        'limit_time',
        'user_permission',
        'release_format',
        'game_id',
    ];
    
    public function game()
    {
        return $this->belongsTo('App\Game');
    }
}

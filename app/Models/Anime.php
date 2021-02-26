<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anime extends Model
{
    use HasFactory;
    protected $table = 'animes';

    public $primaryKey = "id";
    protected $guarded = [];

    public function animeEpisode(){
        return $this->hasMany(AnimeEpisode::class);
    }

    public function getRouteKeyName()
{
    return 'slug';
}
}

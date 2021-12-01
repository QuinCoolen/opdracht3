<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [];

    /**
     * The attributes that aren't mass assignable.
     *
     * @var string[]|bool
     */
    protected $guarded = ['*', 'id'];

    public $timestamps = false;

    public function bands(){
        return $this->belongsTo(Band::class);
    }

    public function songs(){
        return $this->belongsToMany(Song::class);
    }
}

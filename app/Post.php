<?php

namespace App;


use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Post extends Model
{
    protected $fillable =['title','category','body','image'];

    public function comments(){

        return $this->hasMany(Comment::class)->orderBy('id', 'desc');
    }
    public function user(){

        return $this->belongsTo(User::class);
    }

    public static function Query(){
        return static::where('id',2)->get();
    }

    public function scopeFilter($query , $filter)
    {
     //

    }
    public static function archives(){
       return static:: selectRaw('year(created_at) year,monthname(created_at) month,count(*) published')
            ->groupBy('year','month')
            ->orderByRaw('min(created_at) desc')
            ->get()
            ->toArray();
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Post extends Model
{
    protected $table = 'posts';
    
    protected $fillable = ['title', 'email', 'description', 'live', 'user_id'];
    
    
    public function setLivetAttribute($date)   //setNameAttribute
    {
     $this->attributes['created_at'] = Carbon::createFromFormat('Y-m-d',$date);
    }
    
    #scope
     public function scopeLive($query)
    {
     $query->where('live', '<=', Carbon::now());
    }
    
    public function scopeUnLive($query)
    {
      $query->where('live', '<=', Carbon::now());
    }
    
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    
    public function tags()
    {
        return $this->belongsToMany('App\Tag', 'post_tag', 'post_id','tag_id')->withTimestamps();
    }
    
    public function tagList()
    {
        return $this->tags()->lists('id')->all();
    }
    
}

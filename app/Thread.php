<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Thread extends Model
{
    protected $guarded = [];

    public function path($routeSufix = '') {
        return '/threads/'.$this->id.$routeSufix;
    }
    public function replies() {
        return $this->hasMany(Reply::class);
    }

    public function creator() {
        return $this->belongsTo(User::class,'user_id');
    }

    public function addReply($reply) {
        $this->replies()->create($reply);
    }
}

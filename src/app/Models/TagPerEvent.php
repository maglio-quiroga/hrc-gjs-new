<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TagPerEvent extends Model
{
    protected $table = 'tag_per_events';

    protected $fillable = ['tag_id', 'event_id'];

    public function event()
    {
        return $this->belongsTo(Event::class);
    }

    public function tag()
    {
        return $this->belongsTo(Tag::class);
    }
}

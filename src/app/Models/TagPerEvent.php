<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TagPerEvent extends Model
{
    protected $table = 'tag_per_events';

    protected $fillable = ['tag_id', 'event_id'];
}

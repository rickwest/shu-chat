<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Message extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['message'];


    /**
     * @return BelongsTo
     */
    public function user() {
        return $this->belongsTo(User::class);
    }
}

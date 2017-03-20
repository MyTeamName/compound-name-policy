<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CompoundName extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'sentence',
    ];

    /**
     * Created by User.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

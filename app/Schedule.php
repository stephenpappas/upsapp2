<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Schedule extends Model
{

    protected $fillable = [
        'reservation', 'processdate', 'scheduled', 'account_alpha', 'created_at', 'updated_at',
    ];

    public function accounts()
    {
        return $this->belongsTo('App/Account', 'accountalpha', 'account_alpha');
    }
}

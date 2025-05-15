<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SwitchboardItem extends Model
{
    protected $table = 'switchboard_items';

    protected $fillable = [
        'SwitchboardID',
        'ItemNumber',
        'ItemText',
        'Command',
        'Argument',
    ];
}

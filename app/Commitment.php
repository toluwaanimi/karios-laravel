<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commitment extends Model
{
    protected $table = 'commitment';
    protected $fillable = ['commitment', 'useremail', 'cheerleader', 'start', 'end', 'referee', 'stake', 'donated', 'filereport'];
    //
}

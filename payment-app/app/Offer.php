<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{

    protected $table = 'offers';

    protected $fillable = [
        'vendor_id', 'title', 'description', 'amount'
    ];
}
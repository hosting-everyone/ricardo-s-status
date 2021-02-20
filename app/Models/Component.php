<?php
/*
 * Copyright (c) 2021 by HerrTxbias.
 *
 * Using / Editing this without my consent is not allowed.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Component extends Model
{
    use HasFactory;

    protected $fillable = [
        'status_id'
    ];

    public function status(){
        return $this->belongsTo(Status::class, 'status_id')->first();
    }

    public function user(){
        return $this->belongsTo(User::class, 'user')->first();
    }

    public function group(){
        return $this->belongsTo(ComponentGroup::class, 'group')->first();
    }
}

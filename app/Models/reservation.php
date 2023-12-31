<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reservation extends Model
{
    protected $fillable = [
        'first_name',
        'last_name',
        'phone',
        'email',
        'table_id',
        'res_date',
        'guest_number'
    ];

    protected $dates = [
        'res_date'
    ];



    public function table()
    {
        return $this->belongsTo(Table::class);
    }
}

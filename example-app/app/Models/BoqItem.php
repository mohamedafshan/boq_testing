<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BoqItem extends Model
{
    use HasFactory;
    protected $table = 'boq_items';
    protected $fillable = [
        'item_no',
        'description',
        'qty',
        'rate',
        'amount',
    ];
}
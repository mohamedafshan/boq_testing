<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BOQ_Summery extends Model
{
    use HasFactory;
    protected $table = 'b_o_q__summeries';
    protected $fillable = [
        'project_id',
        'parent_item',
        'serial_no',
        'description',
        'unit',
        'qty',
        'rate',
        'amount',
        'calculated',
    ];

    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}

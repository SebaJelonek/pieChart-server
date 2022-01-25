<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pieChartModel extends Model
{
    use HasFactory;
    protected $table = 'company_data';
    protected $fillable = [
      'title',
      'value',
      'color'
    ];
}

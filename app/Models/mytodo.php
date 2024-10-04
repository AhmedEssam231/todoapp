<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mytodo extends Model
{
    use HasFactory;
    protected $table= 'mytodo';
    protected $primary_key='id';
}

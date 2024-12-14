<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class App extends Model
{
    use HasFactory;
    protected $guarded = array('id');

    public static $rules = array(
        'title' => 'required',
        'color' => 'required',
        'pattern' => 'required',
        'is_adult' => 'required',
        'is_outor' => 'required',
        'body' => 'required',
    );
}

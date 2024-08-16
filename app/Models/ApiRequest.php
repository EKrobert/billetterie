<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApiRequest extends Model
{
    use HasFactory;
    protected $table = 'api_requests';
    protected $fillable = [	'id', 'first_name', 'last_name', 'company', 'email', 'city', 'address','created_at','updated_at'];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $primaryKey = 'order_id';

    public function event()
    {
        return $this->belongsTo(Event::class, 'order_event_id');
    }

    public function tickets()
    {
        return $this->hasMany(Ticket::class, 'ticket_order_id');
    }
}

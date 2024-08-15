<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TicketTypes extends Model
{
    use HasFactory;
    
    public function event()
    {
        return $this->belongsTo(Event::class, 'ticket_type_event_id');
    }

    public function tickets()
    {
        return $this->hasMany(Ticket::class, 'ticket_ticket_type_id');
    }
}

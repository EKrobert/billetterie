<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = ['event_category','event_title','event_description','event_date','event_image','event_city','event_address','event_status','event_created_on'];

    public function tickets()
    {
        return $this->hasMany(Ticket::class, 'ticket_event_id');
    }

    public function ticketTypes()
    {
        return $this->hasMany(TicketTypes::class, 'ticket_type_event_id');
    }

    public function orders()
    {
        return $this->hasMany(Order::class, 'order_event_id');
    }

}

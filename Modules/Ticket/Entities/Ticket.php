<?php

namespace Modules\Ticket\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;

class Ticket extends Model
{
    use HasFactory;

    protected $fillable = [];
    
    protected static function newFactory()
    {
        return \Modules\Ticket\Database\factories\TicketFactory::new();
    }

    public static function save_support(Request $req){
        $brief= $req->input('brief');
        $explaining= $req->input('explaining');
        $userId = $req->user()->id;
        
        $file_name = $req->file('file')->getClientOriginalName();
        DB::select('insert into tickets (brief, explaining , file_name, user_id) values (?, ?, ?, ?)',
        [$brief,$explaining,$file_name, $userId]);
        
    }

    public static function getAllTickets(){
        return DB::select('SELECT * FROM tickets');
    }

    public static function getTicketsById(Request $req){

        $id= $req->user()->id;
        return DB::select('SELECT * FROM tickets WHERE user_id = ?', [$id]);

    }
}

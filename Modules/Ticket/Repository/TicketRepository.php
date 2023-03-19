<?php

namespace Modules\Ticket\Repository;
use Modules\Ticket\Repository\ITicketRepository;
//use Illuminate\Http\Request;
use Modules\Ticket\Entities\Ticket;

class TicketRepository implements ITicketRepository {

   

    public function save_support($req){
        Ticket::save_support($req);
    }

    public function getAllTickets(){
        return Ticket::getAllTickets();
    }

    public function getTicketsById($req){
        return Ticket::getTicketsById($req);
    }


    

}
?>
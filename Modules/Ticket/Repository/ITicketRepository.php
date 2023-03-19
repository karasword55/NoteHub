<?php

namespace Modules\Ticket\Repository;

interface ITicketRepository{
    public function save_support(Request $req);

    public function getAllTickets();

    public function getTicketsById(Request $req);
}

?>
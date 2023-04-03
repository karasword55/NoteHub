<?php

namespace Modules\Ticket\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;


//use Modules\Ticket\Repository\ITicketRepository;

class AjaxController extends Controller
{

    /*public $ticket;

    public function __construct(ITicketRepository $ticket){

        $this->ticket= $ticket;
    }*/
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {

        //return view('ticket::index');
    }

   
}

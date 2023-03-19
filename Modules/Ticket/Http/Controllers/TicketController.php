<?php

namespace Modules\Ticket\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

use Modules\Ticket\Repository\ITicketRepository;

class TicketController extends Controller
{

    public $ticket;

    public function __construct(ITicketRepository $ticket){

        $this->ticket= $ticket;
    }
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        return view('ticket::index');
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('ticket::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('ticket::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('ticket::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        //
    }

    public function show_anasayfa()
    {
        return view('ticket::anasayfa');
    }

    public function create_support()
    {
        return view('ticket::createSupport');
    }

    public static function getTalepSayfasi(){
        return view('ticket::talepSayfa');
    }

    public function save_support(Request $req){
        $this->ticket->save_support($req);
        return view('ticket::anasayfa');
    }



    public function getAllTickets(){
       $tickets= $this->ticket->getAllTickets();
       //error_log($tickets->brief);
       return view('ticket::anasayfa')->with('tickets',$tickets);
    }

    public function getTicketsById(Request $req){
        $tickets= $this->ticket->getTicketsById($req);
        return view('ticket::anasayfa')->with('tickets',$tickets);
    }

   
}

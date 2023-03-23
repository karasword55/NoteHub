<?php

namespace Modules\Ticket\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Ticket\Repository\IMesajRepository;

class MesajController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */

    public $mesaj;

    public function __construct(IMesajRepository $mesaj){

        $this->mesaj= $mesaj;
    }
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

    public function getMessagePage(){
        return view('ticket::messagePage');
    }


    public function getAllMesaj(){
        $mesajlar= $this->mesaj->getAllMesaj();
        foreach($mesajlar as $value){
            error_log($value->text);
            
        }
        return view('ticket::messagesforadmin')->with('mesajlar',$mesajlar);
    }


    public function getAllMesajForUser(Request $req){
        $mesajlar= $this->mesaj->getAllMesajForUser($req);
        foreach($mesajlar as $value){
            error_log($value->text);
        }
        return view('ticket::messagesforusers')->with('mesajlar',$mesajlar);
    }

    public function getMesajBySenderId(Request $req,$id,$senderId){
        $mesajlar= $this->mesaj->getMesajBySenderId($req,$id,$senderId);
        //$textler= $mesajlar['text']->list('text');
        //error_log($mesajlar);

        return view('ticket::messagesforadmin')->with('mesajlar',$mesajlar);
    }

    public function sendMessage(Request $req){
        $this->mesaj->sendMessage($req);
        return redirect()->back();
        //return view('ticket::anasayfa');
    }

    public function getMesajByReceiverId(Request $req){
        
    }

    public function sendMessageFromAdmin(Request $req,$id){
        $this->mesaj->sendMessageFromAdmin($req,$id);
        //Redirect::to('http://127.0.0.1:8000/mesajlarforadmin');
        //redirect()->to('messagesforadmin');
        //redirect()->to('messagesforadmin');
        return redirect()->back();
    }

    public function getTaleplerim(Request $req){
        $mesajlar= $this->mesaj->getTaleplerim($req);
        return view('ticket::taleplerim')->with('mesajlar',$mesajlar);
    }


}

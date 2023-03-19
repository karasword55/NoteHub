<?php

namespace Modules\Ticket\Repository;
use Modules\Ticket\Repository\IMesajRepository;
//use Illuminate\Http\Request;
use Modules\Ticket\Entities\Mesaj;

class MesajRepository implements IMesajRepository {

    public function getAllMesaj(){
        return Mesaj::getAllMesaj();
    }
    public function getAllMesajForUser($req){
        return Mesaj::getAllMesajForUser($req);
    }
    public function getMesajBySenderId($req,$id,$senderId){
        return Mesaj::getMesajBySenderId($req,$id,$senderId);
    }
    public function sendMessage($req){
        Mesaj::sendMessage($req);
    }
    public function getMesajByReceiverId($req){
        return Mesaj::getMesajByReceiverId($req);
    }

    public function sendMessageFromAdmin($req,$id){
        return Mesaj::sendMessageFromAdmin($req,$id);
    }

    public function getTaleplerim($req){
        return Mesaj::getTaleplerim($req);
    }


    

}
?>
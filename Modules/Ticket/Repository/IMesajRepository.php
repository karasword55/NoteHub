<?php

namespace Modules\Ticket\Repository;

interface IMesajRepository{
    public function getAllMesaj();
    public function getAllMesajForUser($req);
    public function getMesajBySenderId($req,$id,$senderId);
    public function sendMessage($req);
    public function getMesajByReceiverId($req);
    public function sendMessageFromAdmin($req,$id);
    public function getTaleplerim($req);

    
}

?>
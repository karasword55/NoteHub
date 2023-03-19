<?php

namespace Modules\Ticket\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class Mesaj extends Model
{
    use HasFactory;

    
    public $timestamps = true;
    protected $fillable = ['created_at'];
    
    protected static function newFactory()
    {
        return \Modules\Ticket\Database\factories\MesajFactory::new();
    }


    public static function getAllMesaj(){
        return $mesajlar=DB::select('SELECT * FROM messajlar WHERE (sender_id=?) ORDER BY created_at',[2]);
        
    }

    public static function getAllMesajForUser(Request $req){
        
        return $mesajlar=DB::select('SELECT * FROM messajlar WHERE (sender_id=?) ORDER BY created_at',[$req->user()->id]);
        
    }



    public static function getMesajBySenderId(Request $req,$id,$senderId){
        $new_id= $id;
        error_log($new_id);
        $admin_id=2;
        $receiver_id=$senderId;
        Session::put('id', $new_id);
        
        /*return DB::select('SELECT * FROM messajlar WHERE id= ? OR 
        ((sender_id=? and receiver_id=?)or (sender_id=? and receiver_id=?))',[$new_id,$senderId,2,2,$senderId]);*/

        return DB::select('SELECT * FROM messajlar WHERE id=? OR cevapfor=?',[$new_id,Session::get('id')]);
    }

    public static function getMesajByReceiverId(Request $req){
        /*$id= $req->user()->id;
        DB::select('SELECT * FROM mesajlar WHERE receiver_id ?',[$id]);*/
    }

    public static function sendMessage(Request $req){
        $sender_id= $req->user()->id;
        $text=$req->input('text');
        $time=now();

        DB::select('insert into messajlar (sender_id,text,created_at,receiver_id=?) values(?,?,?,?)',[$sender_id,$text,$time,2]);
    }

    public static function sendMessageFromAdmin(Request $req,$id){
        
        
        
        //$receiver_id= DB::select('SELECT sender_id FROM messajlar WHERE id=?',[$id]);
        //error_log($receiver_id);

        /*$string1='';
        foreach ($receiver_id as $value){
           $string1 .=  $value.',';
        }*/
        //$string1= $receiver_id[0]->receiver_id;
        //error_log($string1);
        //$string1 = (string)$receiver_id;
        //$string1= $receiver_id['receiver_id']->receiver_id;
        /*foreach($receiver_id as $value){
            error_log($value);
            $string1= $value->receiver_id;
        }*/
        //print_r($req);
        $messageId= Session::get('id');
        $string1= DB::table('messajlar')->where('id', $id)->value('sender_id');
        $sender_id= $req->user()->id;
        $text=$req->input('content');
        $time=now();

        DB::select('insert into messajlar (sender_id,receiver_id,text,created_at,cevapfor) values(?,?,?,?,?)',[$sender_id,$string1,$text,$time,$messageId]);

    }

    public static function getTaleplerim(Request $req){
        $id= $req->user()->id;
        return DB::select('SELECT * FROM messajlar WHERE (sender_id=? AND receiver_id=?) OR (sender_id=? AND receiver_id=?)',[$id,2,2,$id]);
    }


}

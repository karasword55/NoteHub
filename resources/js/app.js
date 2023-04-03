import './bootstrap';

import $ from "jquery";

$(function() {
    url: '/ajax',

    $('fetch-data').on('',function(e){
        $.post(ajaxurl,{_token: token}, function(response){
            console.log(response);
        },'json');
    })



    
})

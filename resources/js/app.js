import './bootstrap';

import $ from "jquery";
import PerfectScrollbar from 'perfect-scrollbar';


$(function() {
    url: '/ajax',

    $('fetch-data').on('',function(e){
        $.post(ajaxurl,{_token: token}, function(response){
            console.log(response);
        },'json');
    })



    
})

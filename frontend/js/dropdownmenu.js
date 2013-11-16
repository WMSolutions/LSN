/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */


$(document).ready(function() {
    $(".menu").mouseover(function () {
        $(this).children(".dropdown").slideDown("fast");
    });
    
    $(".menu").mouseleave(function () {
       $(this).children(".dropdown").slideUp("fast");
    });
});
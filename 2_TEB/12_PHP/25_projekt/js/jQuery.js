$(document).ready(function(){
    $('#tabela1 th').css({'background':'#505550','color':'white'});
    $('#tabela1 tr:even').css('background','#15dec7');
    $('#tabela1 tr:odd').css('background','#0f7e71');
    
    $('#tabela1 tr').mouseover(function(){
        $(this).css('background','#1aa20f');
    });
    
    $(this).mouseout(function(){
        $('#tabela1 tr:even').css('background','#3aeaf8');
        $('#tabela1 tr:odd').css('background','#0ea0c3');
    });
});
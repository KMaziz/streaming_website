     function signalserie(id,b){
    ShowLoading('');
    $.get("signalerlienmort2.php",{news_id:id,ip:b,type_signale:$("#type_signale").val(),titre_episode:$("#titre_episode").val(),url_episode:$("#url_episode").val()},function(data){HideLoading('');$("#broken-id-"+id).html(data)});return false};
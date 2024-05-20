function atualizaHorario(){

    var xhr = new XMLHttpRequest();
    var url = "http://localhost/dama/horario.php"

    xhr.open("GET", url, true);

    xhr.onreadystatechange = function(){
        if(xhr.readyState == 3){
            console.log('Carregando Conteudo');
        }

        if(xhr.readyState == 4){
            var div_horario = document.getElementById("horario");
            div_horario.innerHTML = xhr.responseText;
        }
    }

    xhr.send(null);

}

setInterval(atualizaHorario, 1000);
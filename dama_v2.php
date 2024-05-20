<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Tabuleiro de Damas</title>
    <link rel="stylesheet" href="dama_css.css">
</head>

<body>
    <table style = "width:100%">
        <tr>
            <td>
                <div id="jogador1">jogador1</div>
                <div id = "placar1">Peças restantes: 12</div>
            </td>
            <td>
                <div>
                    <button onclick="atualizaHorario()">Atualiza horário</button>
                <div id="horario">
                    <?php
                        date_default_timezone_set('America/Sao_Paulo');
                        echo date ("d/m/Y H:i:s");
                    ?>
                </div>
                </div>
                <div style ="text-align: center;">
                    <button onclick="jogo.mudaJogador()" style="width:150px;height:50px;">Muda Jogador</button>
                    <div id = "tabuleiro"></div>
                </div>
            </td>
            <td>
                <div id="jogador2">jogador2</div>
                <div id = "placar2">Peças restantes: 12</div>
            </td>
        </tr>
    </table>


<script type="text/javascript" src = "dama_js.js"></script>
<script type="text/javascript" src = "horario.js"></script>
</body>

</html>

<?php
$item=$_POST['item'];
$contato=$_POST['contato'];
$obs=$_POST['obs'];

$arquivo = fopen("dados.txt","a");
$txt="Item:".$item."; Contato:".$contato."; Obs:".$obs."\n";
fwrite($arquivo,$txt);
fclose($arquivo);
?>
<html>
    <head>
        <title> Site de Doações</title>
        <link href="estilo.css" rel="stylesheet">
        <meta charset="utf-8">
    </head>
    <body>
        <div id="logo">

        </div>
        <div id="menu">
            <center>
                <ul>
                    <li><a href="sobre.html">Sobre nós </a> </li>
                    <li> <a href="quem.html">Quem recebe</a></li>
                    <li><a href="contato.html">Contato</a> </li>
                </ul>
            </center>
         
        </div>
        <div id="principal">
            <table>
                <tr>
                    <td> <img src="doar.png"> </td>
                    <td> 
                        <form>
                            <p> 

                          Dados enviados com Sucesso!
                            </p>
                            <p> Obrigado pela sua contribuição! </p>
                            <h3>Deseja continuar com as doações? </h3>
                            <button id="btsim" onclick=""><a href="sim.php">SIM </a> </button>
                            <button id="btnao"onclick=""><a href="nao.html">NÃO </a> </button>
                        
                        </form>
                    </td>
                </tr>
            </table>
        </div>
        <div id="rodape">
            <center>
                     <marquee> Site desenvolvido pela turma CY3 Segunda 14h</marquee>
            </center>
       
        </div>
    </body>
</html>


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
                    <td> <img src="doar.png" width="50%" height="50%"> </td>
                    <td> 
                        <h2> Doações Recebidas! Muito Obrigado! </h1>
                    <?php
$arquivo = fopen("dados.txt","r");
while (!feof($arquivo)){
    echo fgets($arquivo);
    echo "<br>";
}
fclose($arquivo);
?>
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

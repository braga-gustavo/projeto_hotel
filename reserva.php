<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <link rel="stylesheet" href="estilo/estilo.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="js/javascrpit.js"></script>
    <title>Hotel Valinor </title>
    <div id="divTitulo">
        <h1 id="titulo"> Hotel Valinor</h1>
    </div>

    
</head>

<body>
    <div id="form">
        <form action="formulario" id="formulario">
            <fieldset>
                <div class="campo">
                    <label for="txtNome"><strong>Nome:</strong></label>
                    <input type="text" name="txtNome" id="txtNome" required>
                </div>
                <div class="campo">
                    <label for="txtSexo"><strong>Sexo:</strong></label>
                    <input type="text" name="txtSexo" id="txtSexo">
                </div>
                <div class="campo">
                    <label for="txtEmail"><strong>E-mail:</strong></label>
                    <input type="text" name="txtEmail" id="txtEmail" required>
                </div>
                <div class="campo">
                    <label for="dtChegada"><strong>Data de chegada:</strong></label>
                    <input type="date" name="dtChegada" id="dtChegada" required>
                    <div class="campo">
                        <label for="nmbNoites"><strong>Número de noites:</strong></label>
                        <input type="number" name="nNoites" id="nNoites" required>
                    </div>
                    <div class="campo">
                        <label for="txtHospedes"><strong>Número de hóspedes:</strong></label>
                        <input type="number" name="nHospesdes" id="nHospedes" onblur="tot()" required>
                    </div>
                    <div class="campo">
                        <label for=""><strong>Total Estimado:</strong></label>
                        <input  name = "contaTot" id="contaTot" value="0">
                    </div>
                    <div class="campo">
                        <label for="txtMsg"><strong>Mensagem:</strong></label> <br>
                        <textarea name="txtMsg" id="txtMsg" cols="30" rows="15"></textarea>
                    </div>
        
                        <div class="campo" id="nwlt">
                            <label for="chckNwlt"><strong>Deseja receber Newsletter?</strong></label>
                            <input type="checkbox" name="chckNwlt" id="chckNwlt">
                        </div>
                        
                        <div class="campo" id="conlcuir">
                            <input type="submit" value="Concluir">
                        </div>
        
                    <div id="divFim">
                    </div>
            </fieldset>
        
        </form>
    </div>


</body>

</html>
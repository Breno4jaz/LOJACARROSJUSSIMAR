<style>
        body,
        ul,
        li,
        p {
            margin: 0px;
            padding: 0px;
            list-style: none;
            font-size: 1.2rem;
            font-family: 'Hubballi', cursive;
        }

        a {
            text-decoration: none;
            color: white;
        }

        .header {
            /*espaço entre os itens */
            /*tela pequena, flex-box vai para baixo*/
            background-color: #7159c1;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
        }

        .footer {
            background-color: #7159c1;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
            margin-top: 30%;
        }

        .menu {
            display: flex;

        }

        .menu li {
            margin-left: 10px;

        }

        .menu li a {
            /* para a não se mover */
            display: block;
            padding: 10px;
        }
        input{
            margin-bottom: 5px;
        }
        #header{
            margin-right: 5%;
        }
        h1{
            margin-bottom: 10px;
        }
        body{
            background-color: #f0f8ff;
            font-size: 1.2em;
            color: #59429d;
            justify-content: center;
            align-content: center;
            font-family: 'Hubballi', cursive;
            
        }
        #body {
            margin-top: 5%;
            margin-left: 36%;
            font-family: 'Hubballi', cursive;
        } 
        #experiencias, #referencias, #objetivos, #formacoes{
            display: flex;
            align-items: center;
            align-content: center;
            padding: 1px;
           
        }
        #formacoes{
            padding-top: 10px;
        }
        fieldset{
            border: 0;
            margin: 0;
            padding: 10px;
            margin-left: -0.9%;
        }
        #estadocivil{
            margin-top: 10%;
        }

        input, select, textarea, button{
            border-radius: 5%;
            font-family: sans-serif;
            font-size: 1em;
            color: #59429d;
        }
        .campo input[type="text"], .campo input[type="email"], .campo select, .campo textarea, .campo input[type="radio"]{
            padding: 0.2em;
            border: 1px solid #59429d;
            box-shadow: 2px 2px 2px rgba(0,0,0,0.2);
            display: block;

        }
        #button:hover{
            background: #ccbbff;
            box-shadow: inset 2px 2px 2px rgba(0,0,0,0.2);
            text-shadow: none;
        }

        #button, select{
            cursor: pointer;
        }
        #button{
            margin-left: 8.5%;
            margin-top: 2%;
        }
        #nome{
            padding: 1px;
            text-align: center;
        }
    </style>


<section id="body">
    <div>
        <form action="home.php" method="POST" enctype="multipart/form-data">
            <label for="nome">Digite seu nome completo: </label>
            <input type="text" name="nome" size="21"  required>
            <br>
            <label for="endereco">Digite o assunto:</label>
            <input type="text" name="endereco" size="30" required>
            <br>
            <label for="email">Digite seu e-mail:</label>
            <input type="email" name="email" required>
            <br>
            <fieldset>
                <label for="experiencias" id="experiencias">Digite sua mensagem:</label>
                <textarea name="experiencias" rows="5" cols="40" id="textareaE"></textarea>
            </fieldset>
            
            <br>
            <button type="submit" id="button">Enviar</button>
        </form>
    </div>
</section>
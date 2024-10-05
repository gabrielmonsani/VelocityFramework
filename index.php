<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Portifólio</title>
    <link rel="stylesheet" href="./data/cascading-port.css">
<script>

</script>
</head>

<body>
    <div id="box">
        <div id="box-content">
            <div class="content">
                <div id="left">
                    <div class="hello">
                    </div>
                    <div id="photo-div">
                        <img id="photo" class="circle" src="./img/me/IMG_0629.JPG" alt="Minha-foto">
                    </div>
                    <div id="info">
                        <div class="more-info">
                            <p>Nome: Gabriel Eduardo Monsani</p>
                            <p>E-mail: gabrieleduardomonsani0@hotmail.com</p>
                            <p>Telefone: +55 45 9998055937</p>
                            <div id="social-medias">
                            </div>
                        </div>
                    </div>
                </div>
                <div id="right">
                    <div id="even">
                        <div class="hello">
                            <h1>Sobre Mim</h1>
                        </div>
                        <div id="text">
                            <p>Olá, me chamo Gabriel.</p>
                            <p>Sou estudante do quarto periodo de Engenhararia de Software na faculdade Uniguaçu-FAESI.</p>
                            <p>Atualmente trabalho como estagiário em desenvolvimento web na empresa Friella.</p>
                        </div>
                        <p>
                        <div id="list">
                            <div id="left">
                                <p>Linguagens:</p>
                                <ul>
                                    <li class="html">HTML</li>
                                    <li class="css">CSS</li>
                                    <li class="js">JS</li>
                                    <li class="php">PHP</li>
                                </ul>
                            </div>
                            <div id="right">
                                <p>Conhecimentos:</p>
                                <ul>
                                    <li class="html">Git</li>
                                    <li class="css">mySQL</li>
                                    <li class="php">Sonar</li>
                                    <li class="c">Composer</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div id="odd" class="hidden">
                        <div class="hello">
                            <h1>Contatar-me</h1>
                        </div>
                        <div id="text">
                            <form name="contactForm" id='contactForm' action="./data/process-form.php" method="post" autocomplete="off">
                                <fieldset class='box-form'>
                                    <div class="name">
                                        <label for="name">Nome</label>
                                        <input type="text" name="name" id="name">
                                    </div>
                                    <div>
                                        <label for="email">E-mail</label>
                                        <input type="email" name="email" id="email" placeholder="example@gmail">
                                    </div>
                                    <div class="message">
                                        <label for="message">Mensagem</label>
                                        <textarea name="message" id="message" maxlength="256" placeholder="max 256"></textarea>
                                    </div>
                                    <div id="phone-box">
                                        <div>Seu número para contato: (Opcional)</div>
                                        <div id="phone-field">
                                            <div class="left">
                                                <label for="ddd">DDD</label>
                                                <select name="ddd" id="ddd">
                                                    <option value="null" selected>+00</option>
                                                    <option value="55">+55</option>
                                                    <option value="1">+1</option>
                                                </select>
                                            </div>
                                            <div class="right">
                                                <label for="phone">telefone</label>
                                                <input type="tel" id="phone" name="phone" placeholder="(00) 00000-0000"
                                                            size="20" maxlength="15" onkeydown="autoPhone(event)"/>
                                                <small>Formato: (00) 00000-0000</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="submit">
                                        <button type="submit" class="text-button" name="submit" value="submit">Enviar</button>
                                    </div>
                                    <div></div>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
    if (isset($_GET['status'])) {
        $status = htmlspecialchars($_GET['status'], ENT_QUOTES, 'UTF-8');
        $message = isset($_GET['message']) ? htmlspecialchars(urldecode($_GET['message']), ENT_QUOTES, 'UTF-8') : '';

        echo "<script>";
        if ($status === 'success') {
            echo "alert('Formulário enviado com sucesso e GET Funcionando! " . addslashes($message) . "');";
        } elseif ($status === 'error') {
            echo "alert('Ocorreu um erro ao enviar o formulário: " . addslashes($message) . "');";
        }
        // Remover o parâmetro 'status' e 'message' da URL
        echo "window.history.replaceState({}, document.title, window.location.pathname);";
        echo "</script>";
    }
    ?>


</body>

</html>
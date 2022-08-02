    <main>
        <h1>Login de Usuários</h1>
        <div class="form">
            <!-- <form action="controller/usuario_controller.php
            " method="post">
            <input name="email" type="text" placeholder="E-mail" required>
            <input name="senha" type="password" placeholder="Senha" required>
            <input name="tela" type="hidden" value="loginDoUsuario">
            <input name="cadastrar" type="submit" value="Entrar">
        </form> -->
            <form action="controller/usuario_controller.php" method="post">
                <div class="imgcontainer">
                    <img src="https://www.w3schools.com/howto/img_avatar2.png" alt="Avatar" class="avatar">
                </div>

                <div class="container">
                    <input type="text" placeholder="Digite seu e-mail" name="email" required>
                    <input type="password" placeholder="Digite sua senha" name="senha" required>
                    <input name="tela" type="hidden" value="loginDoUsuario">

                    <button type="submit">Entrar</button>
                    <label>
                        <input type="checkbox" checked="checked" name="remember"> Lembrar me
                    </label>
                </div>

                <div class="container">
                    <button type="button" class="cancelbtn">Cancelar</button>
                    <span class="psw">Esqueceu <a href="#">sua senha?</a></span>
                </div>
            </form>
        </div>
    </main>
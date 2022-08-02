
    <main>
        <h1>Edição de Usuários</h1>
        <div class="form">
            <form action="controller/usuario_controller.php
            " method="post">
                <input name="email" type="text" placeholder="E-mail" value="<?=$usuario['email']?>" required>
                <input name="senha" type="password" placeholder="Nova Senha" value="" required>
                <input name="tela" type="hidden" value="editarUsuario">
                <input name="id" type="hidden" value="<?=$usuario['id']?>">
                <input name="editar" type="submit" value="Editar">
            </form>
        </div>
    </main>

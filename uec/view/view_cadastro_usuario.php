<!-- The Modal -->
<div class="modal fade" id="myModal">
            <div class="modal-dialog">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h5 class="modal-title">Cadastro de usuários</h>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                    <h1>Cadastro de Usuários</h1>
                        <form action="controller/usuario_controller.php
                        " method="post">
                            <input name="email" type="text" placeholder="E-mail" required>
                            <input name="senha" type="password" placeholder="Senha" required>
                            <input name="tela" type="hidden" value="cadastroDeUsuario">
                            <input name="cadastrar" type="submit" value="Cadastrar">
                        </form> 
                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Fechar</button>
                    </div>
                </div>
            </div>
        </div>

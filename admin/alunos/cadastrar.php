<h2>SUCESSO! D</h2>

<div class="estruturaCadAluno">

    <form action="index.php?p=alunos&a=cadastrar" method="POST" enctype="multipart/form-data">

        <div>
            <div class="mb-3">
                <label for="nome" class="form-label">Nome do aluno:</label>
                <input type="text" name="nomeAluno" id="nomeAluno" placeholder="Informe o nome:" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
            </div>
        </div>

        <div>
            <input id="dataNascAluno" type="date" />
        </div>

        <div>
            <div class="mb-3">
                <label for="email" class="form-label">E-mail:</label>
                <input type="email" name="emailAluno" id="emailAluno" placeholder="Informe o email:" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
            </div>
        </div>

        <div>
            <div class="mb-3">
                <label for="password" class="form-label">Senha:</label>
                <input type="password" name="emailAluno" id="emailAluno" placeholder="Informe a senha:" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
            </div>
        </div>

        <div>
            <div class="statusLink">
                <div class="status">
                    <div class="form-check">
                        <h2>Status</h2>
                        <input class="form-check-input" type="radio" name="statusAluno" id="statusAluno" value="ATIVO" checked>
                        <label class="form-check-label" for="exampleRadios1">
                            Ativo
                        </label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="statusAluno" id="statusAluno" value="INATIVO">
                        <label class="form-check-label" for="exampleRadios2">
                            Inativo
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="statusAluno" id="statusAluno" value="DESATIVADO">
                        <label class="form-check-label" for="exampleRadios2">
                            Desativado
                        </label>
                    </div>
                </div>
                <div class="link">
                    <div class="mb-3">
                        <label for="nome" class="form-label">Link:</label>
                        <input type="link" name="linkExercicio" id="linkExercicio" placeholder="Informe o link" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                    </div>
                </div>
            </div>

    </form>

</div>
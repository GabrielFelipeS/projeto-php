<?php include './inc/cabecalho.php'; ?>
<?php include './lib/mylib.php'; ?>
<?php include './inc/connection.php'; ?>
<?php include './lib/database.php'; ?>

<?php include './inc/header.php'; ?>
</header>
<?= @abertura_light(['titulo' => 'Livros já cadastrados', 'id' => 'LivrosCadastrados']) ?>
    <div class="section-livros">
        <div class="section-livros--photos">
            <?= @carregarLivrosParaEditar()?>
        </div>
    </div>
</div>
</section>

<?= @abertura_dark(['titulo' => 'Gostaria de inserir um livro?', 'id' => 'inserirLivros']) ?>
    <div class="section-contact">
        <form method="POST" enctype="multipart/form-data" action="./inc/cadastrar_livro.php">
            <div class="section-contact--split">
                <input type="text" name="ISBN" placeholder="ISBN" required style="color: white;"/>
                <input type="text" name="VALOR" placeholder="VALOR" required style="color: white;"/>
            </div>
            <input type="text" name="NOME" placeholder="NOME" required style="color: white;"/>
            <textarea name="DESCRICAO" placeholder="DESCRIÇÃO" required style="color: white;"></textarea>
            <div class="custom-file">
                        <input type="file" accept="media/*" class="custom-file-input" id="imagem" name="imagem" required>                        
                        <label class="custom-file-label" for="comprovonte">Escolher arquivo</label>
            </div>
            <input type="submit" value="Envie a mensagem" class="button"/>
        </form>
    </div>
</div>
</section>
<?php include './inc/footer.php'; ?>
<?php include './inc/rodape.php'; ?>

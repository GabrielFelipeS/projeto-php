<?php 
    include './inc/cabecalho.php'; 
    include './lib/mylib.php'; 
    include './inc/connection.php'; 
    include './lib/database.php';
    include './inc/header.php';
    $vendas = getall('compras');
 ?>


<?= @abertura_light(['titulo' => '<strong>Lista de Vendas</strong>', 'id' => 'LivrosCadastrados']) ?>
<div style="color: black;">
<h4 style="display: flex; justify-content: center; margin: 10px;"></h4>
    <table class="table table-striped">
      <thead>
        <tr>
          <th>ID do vendedor</th>
          <th>ISBN</th>
          <th>Nome do livro</th>
          <th>CPF do comprador</th>
          <th>Quantidade</th>
          <th>Valor da compra</th>
          <th>Excluir</th>
          <th>Editar</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($vendas as $venda) { 
            $condicao = $venda['ISBNlivro'];    
            $livro = get('livros', "ISBN =  $condicao");
            $quantidade = $venda['valor']/$livro['valorLivro']; ?>
          <tr>
            <td><?php echo $venda['codVendedor']; ?></td>
            <td><?php echo $venda['ISBNlivro']; ?></td>
            <td><?php echo $livro['nomeLivro']; ?></td>
            <td><?php echo $venda['cpfComprador']; ?></td>
            <td><?php echo $quantidade; ?></td>
            <td><?php echo $venda['valor']; ?></td>
            <td>
                <a href="./inc/excluirCompra.php?id=<?= $venda['id']; ?>"><button type="button" class="btn btn-primary" style="background-color: black; border-color: black; margin-right: 25px;"><img style="width: 30px;  filter: invert(1);"" src="./assets/images/excluir.png" alt="excluir" ></button></a> 
            </td>
            <td>      
                <a href="comprarLivro.php?ISBN=<?= $venda['ISBNlivro'].'-'.$venda['id'].'-'.'Editando o livro'.'-'.'salvarComprar.php?id='?>"><button type="button" class="btn btn-primary" style="background-color: black; border-color: black;"><img style="width: 30px; filter: invert(1);" src="./assets/images/editar.png" alt="editar"></button></a>           
            </td>
          </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>
</div>
</div>
</section>


<?php include './inc/footer.php'; ?>
<?php include './inc/rodape.php'; ?>
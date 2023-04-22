  <?php include './inc/cabecalho.php'; ?>
  <?php include './lib/mylib.php'; ?>
  </head>

  <body>
      <?php include './inc/header.php'; ?>
      </header>

      <main>
        <section class="banner">
            <div class="sliders">
                <?= slide_area(['titulo' => 'Melhores preços só na', 'titulo_colorido' => 'Bibliotex', 'subtitulo' => 'Ligue para: +00 0 1234 5678', 'botao' => 'Compre já!', 'button1' => 'actives buttonarea1', 'button2' => 'buttonarea1']) ?>
                <?= slide_area(['titulo' => 'Garanta a oferta', 'titulo_colorido' => 'Compre seu o já', 'subtitulo' => 'Ligue para: +00 0 1234 5678', 'botao' => 'Compre já!', 'button1' => 'buttonarea2', 'button2' => 'actives buttonarea2']) ?>
            </div>
        </section>

        <?= abertura_light(['titulo' => 'Sobre nós', 'descricao' => 'Quem somos?', 'id' => 'Empresa']) ?>
        <div class="section-aboutus">
            <div class="section-aboutus--left">

                <p>A <span>Bibliotex</span> é a maior fornecedor de livros do Brasil, defendemos a eduacação e o incentivo a leitura. Livros foram feitos para serem lidos e deveriam ser lido por todos independentemente da idade, seja criança ou idoso. E a <span>Bibliotex</span> oferece os melhores livros com variedade para todos os gostos e idades, desde livros em quadrinhos e mangás a livros de romances clássicos.
                </p>

                <br />
                <a href="" class="button">Leia mais</a>
            </div>
            <div class="section-aboutus--right">
                <img src="./assets/images/lendo.jpg" />
            </div>
        </div>
        </div>
        </section>

        <?= abertura_dark(['titulo' => 'Serviços', 'descricao' => 'SERVIÇOS QUE PRESTAMOS', 'id' => 'Servicos']) ?>
        <div class="section-services">
            <?= section_service(['imagem' => 'assets/images/medalha.png', 'titulo' => 'Alta qualidade', 'paragrafo' => 'Livros com qualidade altissimos']) ?>

            <?= section_service(['imagem' => 'assets/images/estrela.png', 'titulo' => 'Livros inesquecíveis', 'paragrafo' => 'Nem mesmo a maldição de Addie LaRue vai te fazer esquece-lós']) ?>

            <?= section_service(['imagem' => 'assets/images/relogio.png', 'titulo' => 'Entrega mais rápida do Olimpo', 'paragrafo' => 'Entrega feita o mais rápido que Hermes consegue']) ?>

            <?= section_service(['imagem' => 'assets/images/balao.png', 'titulo' => 'Suporte rápido e gratuito', 'paragrafo' => 'Até os Deuses ficam com inveja']) ?>
        </div>
        </div>
        </section>


        <?= abertura_light(['titulo' => 'Melhores livros', 'descricao' => 'Para todos os gostos', 'id' => 'Livros']) ?>
        <div class="section-livros">
            <div class="section-livros--photos">

                <?= section_livros(['titulo' => 'O labirinto do fauno', 'paragrafo' => 'Um dos filmes mais aclamados dos últimos tempos, O Labirinto do Fauno transborda das telas do cinema em obra que expande o universo de fantasia e horror da obra-prima de Del Toro', 'imagem' => 'media/livro1.jpg']) ?>

                <?= section_livros(['titulo' => 'Dragões de Éter: Caçadores de Bruxas', 'paragrafo' => 'Caçadores de Bruxas é o início da tetralogia e como um Bardo, Raphael Draccon praticamente nos “canta” a história da criação de Nova Ether, do nascimento da Era Antiga até a tão esperada Era Nova.', 'imagem' => 'media/livros2.jpg']) ?>

                <?= section_livros(['titulo' => 'A Guerra dos Tronos : As Crônicas de Gelo e Fogo', 'paragrafo' => 'A guerra dos tronos é o primeiro livro da série best-seller internacional As Crônicas de Gelo e Fogo, que deu origem à adaptação de sucesso da HBO, Game of Thrones.', 'imagem' => 'media/livros3.jpg']) ?>

                <?= section_livros(['titulo' => 'Decifra-me<', 'paragrafo' => 'Prepare-se para mais um livro imperdível de Tahereh Mafi, narrado sob o ponto de vista de Kenji Kishimoto, um dos personagens mais queridos pelos fãs da série Estilhaça-me. Decifra-me reúne os contos Proteja-me e Revela-me, que vão te trazer de volta ao mundo distópico de Estilhaça-me antes do desfechotriunfal da série!', 'imagem' => 'media/livros4.jpg']) ?>

                <?= section_livros(['titulo' => 'Um tom mais escuro de magia', 'paragrafo' => 'Um tom mais escuro de magia é o início de um universo de aventuras audaciosas, poder e múltiplas cidades de Londres.', 'imagem' => 'media/livros5.jpg']) ?>


                <?= section_livros(['titulo' => 'Espada de vidro', 'paragrafo'=> 'O sangue de Mare Barrow é vermelho, da mesma cor da população comum, mas sua habilidade de controlar a eletricidade a torna tão poderosa quanto os membrosda elite de sangue prateado. Depois que essa revelação foi feita em redenacional, Mare se transformou numa arma perigosa que a corte real quer esconder e controlar.', 'imagem' => 'media/livros6.jpg'])?>

                <?= section_livros(['titulo' => 'A prisão do rei', 'paragrafo'=> 'Mare Barrow foi capturada e passa os dias presa no palácio, impotente sem seu poder, atormentada por seus erros. Ela está à mercê do garoto por quem um dia se apaixonou, um jovem dissimulado que a enganou e traiu. Agora rei, Mavencontinua com os planos de sua mãe, fazendo de tudo para manter o controle de Norta - e de sua prisioneira.', 'imagem' => 'media/livros7.webp'])?>

                
                <?= section_livros(['titulo' => 'Trono destruído: Coletânea definitiva da série A Rainha Vermelha', 'paragrafo'=> 'Trono destruído é uma coletânea essencial para todos os leitores da série best-seller de Victoria Aveyard que ficaram com vontade de passar mais tempo com os personagens depois do fim de Tempestade de guerra.', 'imagem' => 'media/livros8.jpg'])?>

                <?= section_livros(['titulo' => 'A rainha vermelha', 'paragrafo'=> 'O mundo de Mare Barrow é dividido pelo sangue: vermelho ou prateado. Mare e sua família são vermelhos: plebeus, humildes, destinados a servir uma elite prateada cujos poderes sobrenaturais os tornam quase deuses. Mare rouba o quepode para ajudar sua família a sobreviver e não tem esperanças de escapar do vilarejo miserável onde mora.', 'imagem' => 'media/livros9.jpg'])?>

                <?= section_livros(['titulo' => 'A Biblioteca da Meia-Noite', 'paragrafo'=> 'A Biblioteca da Meia-Noite é um romance incrível que fala dos infinitos rumos que a vida pode tomar e da busca incessante pelo rumo certo.', 'imagem' => 'media/livros10.jpg'])?>

                <?= section_livros(['titulo' => 'A vida invisível de Addie LaRue', 'paragrafo'=> 'Uma vida que ninguém lembra. Um livro que ninguém esquece.Em A vida invisível de Addie LaRue, o aguardado best-seller de V.E. Schwab,conheça Addie e se perca em sua vida invisível ― porém memorável.', 'imagem' => 'media/livros11.jpg'])?>

                <?= section_livros(['titulo' => 'Corte de Nevoa e Fúria', 'paragrafo'=> 'Por amor ela enganou a morte. Por liberdade, ela se tornará uma arma. Corte de névoa e fúria é o esperado segundo volume da saga iniciada em Corte de espinhos e rosas. Sarah J. Maas é uma verdadeira estrela: após apenas umasemana de vendas, a série Corte de Espinhos e Rosas estreou em segundo lugar na lista do New York Times.', 'imagem' => 'media/livros12.jpg'])?>

            </div>
            <a href="" class="button">More livros</a>
        </div>
        </div>
        </section>

        <?= abertura_dark(['titulo' => 'Melhores escritores', 'descricao' => 'Best-sellers', 'id' => 'autor']) ?>
        <div class="section-team">
            <div class="sliders">
                
                <?= slider_team(['nome' => 'V.E Schwab' , 'role' => 'Autora de A vida invisivel de Addie LaRue' , 'imagem' => 'media/v-e-schwab.png']); ?>


                <?= slider_team(['nome' => 'Matt Haig' , 'role' => 'Autor de A biblioteca da meia-noite' , 'imagem' => 'media/haig.png']); ?>

                <?= slider_team(['nome' => 'Victoria Aveyard' , 'role' => 'Escritora de A Rainha Vermelha' , 'imagem' => 'media/aveyard.png']); ?>
                                    

            </div>
        </div>
        </div>
        </section>


        <?= abertura_light(['titulo' => 'Clientes', 'descricao' => 'Sugestões de clientes', 'id' => 'Clientes']) ?>
        <div class="section-testimonials">
            <div class="sliders">

                <div class="slide">
                    <div class="slidearea">
                        <img class="section-testimonials--avatar" src="media/homem2.png" />
                        <div class="section-testimonials--name">John Doe</div>
                        <div class="section-testimonials--role">Head of PR Department</div>
                        <img class="section-testimonials--quoteimg" src="assets/images/quote.png" />
                        <div class="section-testimonials--quote">Lorem ipsum dolor sit amet, consectetur
                            adipiscing elit. Sed vel eros vitae erat condimentum viverra a nec lacus. Maecenas
                            eros lectus, rhoncus vel dictum vel, dignissim eget ligula. Vestibulum id tempus
                            quam, sed pellentesque quam.</div>
                    </div>
                </div>

            </div>
        </div>
        </div>
        </section>

        <?= include './inc/companies.php'; ?>

        <?= abertura_light(['titulo' => 'Preços', 'descricao' => 'Assinaturas', 'id' => 'Preco']) ?>
        <div class="section-price">
            <?= price_item(['nome' => 'Leitor Bebê', 'preco' => 'R$ 10.00', 'periodo' => 'Mês', 'item' => '<span>Esse plano é: </span>', 'desc' => 'Para pequenos leiores que acabaram de chegar ao mundo ou ainda estão aprendendo a falar e descobrindo o mundo ao seu redor'])?>
            
            <?= price_item(['nome' => 'Leitor iniciante', 'preco' => 'R$ 18.90', 'periodo' => 'Mês', 'item' => '<span>Esse plano é: </span>', 'desc' => 'Para leitores que necessitam de alguma ajuda para ler ou que estão se aventurando pelo vasto mundo da leitura'])?>

            <?= price_item(['nome' => 'Leitor autônomo', 'preco' => 'R$ 29.90', 'periodo' => 'Mês', 'item' => '<span>Esse plano é: </span>', 'desc' => 'Para crianças e jovens que já se tornaram grandes leitores e se atreven a ler obras mais completas e longas'])?>

            <?= price_item(['nome' => 'Leitor Experiente', 'preco' => 'R$ 49.99', 'periodo' => 'Mês', 'item' => '<span>Esse plano é: </span>', 'desc' => 'Para leitores veteranos que não tem medo de se arriscar em um mundo completamente novo e cheio de novos livros'])?>

        </div>
        </div>
        </section>

        <?= abertura_light(['titulo' => 'Os livros', 'descricao' => 'Podem te levar a qualquer lugar do mundo', 'id' => 'premium']) ?>
        <?= include './inc/carrosel.php'; ?>      
        </div>
        </section>

        <?= abertura_dark(['titulo' => 'Detalhes', 'descricao' => 'About our work', 'id' => 'Detalhes']) ?>
                <div class="section-facts">
                    <div class="section-fact">
                        <h3>1000</h3>
                        <div class="section-fact-line"></div>
                        <h4>Design livros Released</h4>
                        <p>Donec tincidunt cursus</p>
                    </div>
                    <div class="section-fact">
                        <h3>900</h3>
                        <div class="section-fact-line"></div>
                        <h4>Photos</h4>
                        <p>Morbi ex felis, tincidunt sed hendrerit</p>
                    </div>
                    <div class="section-fact">
                        <h3>500</h3>
                        <div class="section-fact-line"></div>
                        <h4>Marketing Ideas</h4>
                        <p>Donec tincidunt cursus</p>
                    </div>
                    <div class="section-fact">
                        <h3>100</h3>
                        <div class="section-fact-line"></div>
                        <h4>Exhibitions</h4>
                        <p>Morbi ex felis, tincidunt sed</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-share">
            <div class="section-share--legend">
                <img src="assets/images/share.png" />
                Tell About Us:
            </div>
            <div class="section-share--item">
                <div class="section-share--icon twitter">
                    <img src="assets/images/twitter.png" />
                </div>
                152
            </div>
            <div class="section-share--item">
                <div class="section-share--icon linkedin">
                    <img src="assets/images/linkedin.png" />
                </div>
                152
            </div>
            <div class="section-share--item">
                <div class="section-share--icon facebook">
                    <img src="assets/images/facebook.png" />
                </div>
                152
            </div>
            <div class="section-share--item">
                <div class="section-share--icon googleplus">
                    <img src="assets/images/googleplus.png" />
                </div>
                152
            </div>
            <div class="section-share--item">
                <div class="section-share--icon pinterest">
                    <img src="assets/images/pinterest.png" />
                </div>
                152
            </div>
        </section>

        <section class="default light" id="Sugestoes">
            <div class="section-title">Sugestões</div>
            <div class="section-desc">Our Agency Located in Melbourne, Australia</div>
            <div class="section-body">
                <div class="section-contact">
                    <form method="POST">
                        <div class="section-contact--split">
                            <input type="text" name="name" placeholder="NAME" />
                            <input type="text" name="name" placeholder="EMAIL" />
                        </div>
                        <input type="text" name="name" placeholder="SUBJECT" />
                        <textarea name="message" placeholder="MESSAGE"></textarea>
                        <input type="submit" value="Send Message" class="button" onClick="window.location.reload(true)"/>
                    </form>
                </div>
            </div>
        </section>
        
        <section class="section-map">
            <div class="section-map--area">
                <div class="section-map--info">
                    <div class="section-map--info-item">
                        <div class="section-map--info-item-img">
                            <img src="assets/images/carta.png" />
                        </div>
                        Endereço completão que irá ter algum tamanho
                    </div>
                    <div class="section-map--info-item">
                        <div class="section-map--info-item-img">
                            <img src="assets/images/localizacao.png" />
                        </div>
                        Endereço completão que irá ter algum tamanho
                    </div>
                    <div class="section-map--info-item">
                        <div class="section-map--info-item-img">
                            <img src="assets/images/telefone.png" />
                        </div>
                        Endereço completão que irá ter algum tamanho
                    </div>
                    <div class="section-map--info-item">
                        <div class="section-map--info-item-img">
                            <img src="assets/images/arroba.png" />
                        </div>
                        Endereço completão que irá ter algum tamanho
                    </div>
                    <div class="section-map--info-item">
                        <div class="section-map--info-item-img">
                            <img src="assets/images/web.png" />
                        </div>
                        Endereço completão que irá ter algum tamanho
                    </div>
                </div>
            </div>
        </section>

      </main>


      <?php include './inc/footer.php'; ?>
      <?php include './inc/rodape.php'; ?>
  </body>

  </html>
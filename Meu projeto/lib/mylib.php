<?php

/**
* cria um slide
*
* @param array associativo | dados do slide_area(['titulo' => '', 'titulo_colorido' => '', 'subtitulo' => '', 'botao' => ''])
* @return string | cogido HTML
*
*/

function slide_area($data){
    $html = '<div class="slide"><div class="slidearea"><h1>'.$data['titulo'].'<br/><span>'.$data['titulo_colorido'].'</span></h1><h2>'.$data['subtitulo'].'</h2><a href="" class="button">'.$data['botao'].'!</a></div>
                <div class="sliders-pointers">
                  <div class="pointer '. $data['button1'].'"></div>
                  <div class="pointer '. $data['button2'].'"></div>
                </div>
    </div>';
    return $html;
}


/**
 * Cria a abertura de um bloco ligth
 * 
 * @param array associativo | dados do abertura_light(['titulo' => 'Serviços', 'descricao' => 'SERVIÇOS QUE PRESTAMOS'])
 * @return string | cogido HTML
 * 
 */

function abertura_light($data) {
    $html = '
    <section class="default light" id="Empresa">
    <div class="section-title">'.$data['titulo'].'</div>
    <div class="section-desc">'.$data['descricao'].'</div>
    <div class="section-body">';

    return $html;
}

/**
 * Cria a abertura de um bloco dark
 * 
 * @param array associativo | dados do abertura_dark(['titulo' => 'Serviços', 'descricao' => 'SERVIÇOS QUE PRESTAMOS'])
 * @return string | cogido HTML
 * 
 */

function abertura_dark($data) {
    $html = '
    <section class="default dark" id="Servicos">
    <div class="section-title">'.$data['titulo'].'</div>
    <div class="section-desc">'.$data['descricao'].'</div>
    <div class="section-body">';
    return $html;
}

/**
 * Cria a abertura de um bloco section_service
 * 
 * @param array associativo | dados do section_service(['imagem' => 'assets/images/balao.png', 'titulo' => 'Suporte rápido e gratuito', 'paragrafo' => 'Até os Deuses ficam com inveja'])
 * @return string | cogido HTML
 * 
 */

function section_service($data) {
    $html = ' 
    <div class="section-service">
        <img src="'.$data['imagem'].'"/>
        <h4>'.$data['titulo'].'</h4>
        <p>'.$data['paragrafo'].'</p>
    </div>';

    return $html;
}


/**
 * Cria um bloco de estrutura para mostrar um livro
 * 
 * @param array associativo | section_livros(['titulo' => ' ', 'paragrafo'=> ' ', 'imagem' => ' '])
 * @return string | cogido HTML
 */

function section_livros($data) {
    $html = '
    <div class="section-livros--photo">
                      <div class="section-livros--photoarea">
                          <div class="section-livros--photoinfo">
                              <div class="card text-center ">
                                  <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                                      <img src="'.$data['imagem'].'" class="img-fluid" />
                                      <a href="#!">
                                          <div class="mask"></div>
                                      </a>
                                  </div>
                                  <div class="card-header">'.$data['titulo'].'</div>
                                  <div class="card-body">
                                      <p class="card-text">'.$data['paragrafo'].'</p>
                                      <button type="button" class="btn btn-primary">Comprar</button>
                                  </div>
                              </div>
                          </div>
                          <img src="'.$data['imagem'].'" />
                      </div>
                  </div>';

    return $html;
}
const botoesCarrossel1 = document.querySelectorAll('.buttonarea1');


botoesCarrossel1.forEach( (botao1, indice) => {
    botao1.addEventListener('click', () => {


        SelecionarBotaoCarossel1(botao1);

    })
})

function desativarBotaoSelecionado1() {
    const botaoSelecionado = document.querySelector('.actives');
    botaoSelecionado.classList.remove('actives');
}


function SelecionarBotaoCarossel1(botao1) {
    const teste = document.querySelector('.banner');
    teste.classList.add('margem-negativa');
}

const botoesCarrossel2 = document.querySelectorAll('.buttonarea2');

botoesCarrossel2.forEach( (botao2, indice) => {
    botao2.addEventListener('click', () => {

        

        SelecionarBotaoCarossel2(botao2);

    })
})

function desativarBotaoSelecionado2() {
    const botaoSelecionado = document.querySelector('.actives');
    botaoSelecionado.classList.remove('actives');
}


function SelecionarBotaoCarossel2(botao2) {
    const teste2 = document.querySelector('.banner');
    teste2.classList.remove('margem-negativa');
}


const iconMenu = document.getElementById('mobile');
const MobileMenu = document.getElementById('MobileMenu')

iconMenu.addEventListener('click', () => {
    if(MobileMenu.classList.contains('MobileAtc')){
        MobileMenu.classList.remove('MobileAtc');
    }else{
        MobileMenu.classList.add('MobileAtc');
    }
})


// JS DO CONTATO

const changeIcon = document.getElementsByClassName('changeView')[0].children;
const contEsquerda = document.getElementsByClassName('cont_esquerda')[0]
const Aba = document.getElementsByClassName('AbaLateral')[0]
const contDireita = document.getElementsByClassName('cont_direita')[0]

const ContatoView = () => {
    changeIcon[0].style.display = 'block';
    changeIcon[1].style.display = 'none';  
    contEsquerda.classList.add('esquerdaAtiva');
    Aba.classList.add('AbaAtiva')
    contDireita.classList.add('offdireita')

}

const FormView = () => {
    changeIcon[0].style.display = 'none';
    changeIcon[1].style.display = 'block'; 
    
    contEsquerda.classList.remove('esquerdaAtiva');
    Aba.classList.remove('AbaAtiva');
    contDireita.classList.remove('offdireita');
}

for(let i=0; i < changeIcon.length; i++){
    changeIcon[i].addEventListener('click', () => {
        switch(i){
            case 1:
            ContatoView();
            break;

            case 0:
            FormView();
            break;
        }
    })
}


// JavaScript para adicionar a classe "scrolled" ao cabeçalho quando a página for rolada
window.addEventListener('scroll', () => {
    const header = document.getElementById('header');
    if (window.scrollY > 0) {
        header.classList.add('scrolled');
    } else {
        header.classList.remove('scrolled');
    }
});

// JavaScript para alternar a visibilidade do menu (hamburguer)
document.getElementById('menu-icon').addEventListener('click', function() {
    const menu = document.getElementById('menu');
    menu.classList.toggle('active');
});

// Adiciona o evento de clique a todos os itens do menu
document.querySelectorAll('#menu').forEach(function(item) {
item.addEventListener('click', function() {
    const menu = document.getElementById('menu');
    menu.classList.remove('active');
    });
});

// JavaScript para atualizar a largura da barra de progresso conforme a rolagem da página.
document.addEventListener('scroll', function() {
    const scrollTopPosition = window.pageYOffset || document.documentElement.scrollTop;
    const totalDocumentHeight = document.documentElement.scrollHeight;
    const viewportHeight = window.innerHeight;
    const scrollPercentage = (scrollTopPosition / (totalDocumentHeight - viewportHeight)) * 100;
    
    document.querySelector('.progress-bar').style.width = scrollPercentage + '%';
});
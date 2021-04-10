var app = document.getElementById('typewriter');

var typewriter = new Typewriter(app, {
    loop: true,
    delay: 80,
    deleteSpeed: 60
});

typewriter
    .pauseFor(2500)
    .typeString('Um simples e poderoso gerador de <strong>cardápios<strong/>')
    .pauseFor(300)
    .deleteChars(9)
    .typeString('<strong>lista de produtos</strong><br/>')
    .pauseFor(600)
    .typeString('Tenha seus produtos <strong>Online</strong>')
    .pauseFor(300)
    .deleteChars(6)
    .typeString('nas <strong>redes sociais</strong>')
    .pauseFor(300)
    .deleteChars(16)
    .typeString('os <strong>aplicativos de mensageria.</strong><br/>')
    .pauseFor(600)
    .typeString('Para quem vende <strong>Doces</strrong>')
    .pauseFor(300)
    .deleteChars(5)
    .typeString('<strong>Roupas</strong>')
    .pauseFor(300)
    .deleteChars(6)
    .typeString('<strong>Serviços</strong>')
    .pauseFor(300)
    .deleteChars(20)
    .typeString('<strong>Você.</strong>')
    .pauseFor(2000)
    .start();

var categorias = [];
$("#add-categoria").click(function(e) {
    e.preventDefault();
    categoria = $("#titulo").val();
    categorias.push(categoria);
    $("#titulo").val('')
    if (categoria.length > 0) {
        $("#list-categorias").append('<li class="list-group-item">' + categoria + '</li>');
    }
});
function Validar(nome, usuario, senha, email) {

    var nome = document.form1.nome.value;
    var usuario = document.form1.usuario.value;
    var senha = document.form1.senha.value;
    var email = document.form1.email.value;
    var msg = document.getElementById("msg");
    alert("ASA");

    if (nome == '') {
        var c = document.createTextNode("Nome vazio!");
        msg.appendChild(c);

    }
    if (usuario == '') {
        var c = document.createTextNode("Usuario vazio!");
        msg.appendChild(c);
    }
    if (senha == '') {
        var c = document.createTextNode("Senha vazia!");
        msg.appendChild(c);
    }
    if (senha.length < 6) {
        var c = document.createTextNode("Senha muito curta, devera ter no minimo 6 caractere");
        msg.appendChild(c);
    }
    if (email == '') {

        var c = document.createTextNode("email vazio");
        msg.appendChild(c);
    }
    if (!email.includes('@')) {
        var c = document.createTextNode("email sem o @");
        msg.appendChild(c);
    }

}



$("#enviar").click( () => {
   

    var nome = $("#nome").val();
    var email = $("#email").val();
    var fone = $("#fone").val();
    var cidade = $("#cidade").val();
    var estado = $("#estado").val();
    var modelo = $("#modelo").val();
    var hora = $("#hora").val();
    var mensagem = $("#mensagem").val();
    var aceito = $("#aceito").val();

    const contato = new Contato(nome,email,fone,cidade,estado,modelo,hora,mensagem,aceito);

    const controller = new contatoController(contato);

    controller.validar();

});


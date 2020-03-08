

class contatoController{
    constructor(contato){
        this.contato = contato;
    }

    enviarDados(){
        var msg = new mensagensView();
        $.ajax({
            type: "post",
            data: this.contato,
            url: "App/php/App.php",
            beforeSend: function(){
                msg.enviando();
            }
        })
        .done(function(){
            msg.enviado();
        })
        .fail(function(){
            msg.falha();
        });
    }
}


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

    validar(){
        var msg = new mensagensView();

        var mensagens = [];

        this.validaEmail(mensagens);
        this.validaCampoVazio(mensagens);
        
        msg.validacaoForm(mensagens);
    }

    validaCampoVazio(mensagens){
        for(const indice in this.contato){
            if(this.contato[indice].length === 0){
                var vazio = true;
            }
        }
        if(vazio === true){
             mensagens.push(`por favor,preencha todos campos!`);
        }
    }

    validaEmail(mensagens){
        const email = this.contato['email'];
        const regex = /^[a-zA-Z]+.\w+.@.\w+[.].\w+/g;
        const regexEspaco = /(?=\s{1,})/;

        var validacao = regex.test(email);
        var valido = email.match(regex);
        var espacamento = regexEspaco.test(email);

        console.log(validacao);
        console.log(espacamento);

        if(validacao === false || espacamento === true){
             mensagens.push(`o email <span class="destaque-vermelho">${email}</span> não é um email valido`);    
        };
    }

    validatelefone(mensagens){
        
    }
}


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

        const validacaoEmail = this.validaEmail(mensagens);
        const validacaoCampos = this.validaCampoVazio(mensagens);
        const validacaoTelefone= this.validaTelefone(mensagens);
        const validacaoTermos = this.validaTermos(mensagens);
        
        msg.validacaoForm(mensagens);

        if(validacaoEmail == true &&
            validacaoCampos == true &&
            validacaoTelefone == true &&
            validacaoTermos == true
        ){
            return true;
        };
    }

    validaCampoVazio(mensagens){
        for(const indice in this.contato){
            if(this.contato[indice].length === 0){
                var vazio = true;
            }
        }
        if(vazio === true){
             mensagens.push(`por favor,preencha todos campos!`);
             return false;
        }else{
            return true;
        }
    }

    validaEmail(mensagens){
        const email = this.contato['email'];
        const regex = /^[a-zA-Z]{0,}.\w+.@.\w+[.].\w+/g;
        const regexEspaco = /(?=\s{1,})/;

        var validacao = regex.test(email);
        var valido = email.match(regex);
        var espacamento = regexEspaco.test(email);

        if(validacao === false || espacamento === true){
             mensagens.push(`o email <span class="destaque-vermelho">${email}</span> não é um email valido`);
             return false;    
        }else{
            return true;
        }
        
    }

    validaTelefone(mensagens){
        const fone = this.contato['fone'];
        
        var regex = /\d{9,11}/;
        var tel = fone.match(regex);
        var validacao = regex.test(fone);

        if(validacao == false){
            mensagens.push(`numero de telefone <span class="destaque-vermelho">${this.contato['fone']}</span> invalido,somente numeros`);
            return false;
        }else{
            return true;
        }
    }

    validaTermos(mensagens){
        if(this.contato['aceito'] === false){
            mensagens.push(`para continuar aceite os termos de politica de privacidade`);
            return false;
        }else{
            return true;
        }
    }
}
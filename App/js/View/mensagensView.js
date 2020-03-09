

class mensagensView{

    constructor(contato){
        this.contato = contato;
        this.mensagem = $(".mensagem");
    }

    visibilidade(){
        this.mensagem.toggleClass("invisible");
        this.mensagem.toggleClass("visible");
    }

    enviado(){
        this.mensagem.text(`Contato enviado com sucesso`);
        this.visibilidade();
        console.log("enviado");
        this.tempoMsg();
    }

    enviando(){
        this.visibilidade();
        this.mensagem.text("enviando");

    }

    falha(){
        this.mensagem.text("falha no envio,tente novamente");
        this.tempoMsg();
    }    

    validacaoForm(mensagens){
    
        var string = `<ul>`;

        for(var i = 0; i < mensagens.length;i++){
            string += `<li>${mensagens[i]}</li>`;
        }

        string += `</ul>`;

        this.visibilidade();
        this.mensagem.html(string);
        this.tempoMsg();
    }

    tempoMsg(){
        setTimeout(() =>{
            this.mensagem.addClass("invisible");
        },5000);
    }
}
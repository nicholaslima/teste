

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
        this.mensagem.text("contato enviado com sucesso");
    }

    enviando(){
        this.visibilidade();
        this.mensagem.text("enviando");

    }

    falha(){
        this.mensagem.text("falha no envio,tente novamente");
    }    
}
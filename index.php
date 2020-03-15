<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cadastre-se</title>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="App/css/header.css">  
    <link rel="stylesheet" href="App/css/texto.css">  
    <link rel="stylesheet" href="App/css/layout.css">  
</head>
<body>

    <div class="container my-3">
        <img src="App/imgs/logo1.png" alt="" id="logo1">
    </div>

    <div class="fundo">
        <header class="container">
            <div class="bloco-header">
                
                <img src="App/imgs/coy.png" id="carro1" class="img-fluid">
               
    
                 <div class="p-3 rounded" id="formulario">
                    <h5 class="text-white upper-case mb-4 text-center text-uppercase">solicite já sua proposta</h5>
                        <input type="text" class="form-control my-2" placeholder="Nome" id="nome" >
                        <input type="text" class="form-control my-2" placeholder="E-mail" id="email" >
                        <input type="text"  class="form-control my-2" id="fone" placeholder="telefone">

                        <input type="text" class="form-control my-2" placeholder="cidade" id="cidade" >

                        <select  class="form-control my-2" placeholder="Estado" id="estado" >
                            <option value="">estado</option>
                            <option value="RJ">rio de janeiro</option>
                            <option value="SP">são paulo</option>
                        </select>

                        <select  class="form-control my-2" placeholder="Modelo do Carro" id="modelo" >
                            <option value="carro">modelo do carro</option>
                            <option value="civic">civic</option>
                            <option value="crv">crv</option>
                        </select>

                        <input type="text" class="form-control my-2" placeholder="Horario para ligar" id="hora" >
                        <textarea name="mensagem" id="mensagem" cols="30" rows="3" placeholder="mensagem" class="form-control my-1" required></textarea>

                        <div class="d-flex flex-row ">
                            <input type="checkbox" class="form-control col-md-2" id="aceito" >
                            <p class="text-white" class="col-md-10">li e aceito as politicas de privacidade</p> 
                        </div>
                        

                        <button  class="btn rounded-pill mx-auto text-white text-capitalize" id="enviar"><b class="texto-botao">enviar</b><i class="fa fa-arrow-circle-right mx-2" aria-hidden="true"></i></button>                  
                    </div>
           
            </div>
        </header>
    </div>

    <main class="container">
        <div class="d-flex justify-content-between flex-column ">

                <div class="bloco-central">
                    <div class="bloco-propaganda">
                        <h1 class="titulo flex-fill"><b><i>novo honda cr-v</i></b></h1> 
                        <p class="texto-propaganda">nossos clientes elogiam nossa <spam class="destaque-vermelho">transparência vontade de atender e paixão</spam> pela honda. entre em contato e nos dê oportunidade de lhe atender como você merece!</p>
                    </div>
                    
                    <img src="App/imgs/logo2.png" class="" alt="logo honda" id="logo2">
                </div>
                
        </div>
    </main>

    <footer class="container my-5">
  
            <div class="titulo-preto">outros modelos</div>
            <div class="d-flex flex-row justify-content-around fotos mx-auto">
                <div>
                    <img src="App/imgs/fit.png" alt="foto novo fit" class="img-fluid foto">
                    <p class="modelo-carro text-center">Novo Fit</p>
                </div>

                <div>
                    <img src="App/imgs/civic.png" alt="foto novo civic" class="img-fluid foto">
                    <p class="modelo-carro text-center">Novo Civic</p>
                </div>
                
                <div>
                    <img src="App/imgs/crv.png" alt="foto novo CR-V" class="img-fluid  foto">
                    <p class="modelo-carro text-center">Honda CR-V</p>
                </div>
                
                <div>
                    <img src="App/imgs/city.png" alt="foto novo fit" class="img-fluid foto">
                    <p class="modelo-carro text-center">Honda City</p>
                </div>
                
            </div>
        <p class="mensagem text-center invisible "></p>
    </footer>

    
</body>
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>

    <script src="App/js/Model/Contato.js"></script>
    <script src="App/js/View/mensagensView.js"></script>
    <script src="App/js/Controllers/contatoController.js"></script>
    
    <script src="App/js/App.js"></script>
</html>
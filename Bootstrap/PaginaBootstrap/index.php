<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <link href="css/style.css" rel="stylesheet" >

    <title>Hello, world!</title>
</head>
<body>
    <div class="tudo">
    <nav class="navbar navbar-light bg-light">
  <a class="navbar-brand" href="#">
      
 <!-- <img src="http://localhost/CursoPHP/botstrap/imagens/Dre.png" class="d-inline-block align-top img" alt=""> -->
  </a>


      <ul class="nav justify-content-end">
          <li class="nav-item">
            <a class="nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Sobre <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item ">
            <a class="nav-link" href="#">Contato <span class="sr-only">(current)</span></a>
        </li>

    </ul>

</nav>

<section class="banner">
    <div class="overlay"></div>
    <div class="container chamada-banner">
        <div class="row">
            <div class="col-md-12 text-center">
             <h2><?php echo htmlentities('<'); ?>New. Project<?php echo htmlentities('>');  ?></h2>
             <p>Empresa voltada para desenvolvimento web e marketing digital</p>
             <a href="">Saiba Mais!</a>
         </div>
     </div> 
 </div>
</section>

<section class="cadastro-lead">
  <div class="container">
    <div class="row text-center">
        <div class="col-md-6">

         <h2><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-bookmark-check-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" d="M4 0a2 2 0 0 0-2 2v13.5a.5.5 0 0 0 .74.439L8 13.069l5.26 2.87A.5.5 0 0 0 14 15.5V2a2 2 0 0 0-2-2H4zm6.854 5.854a.5.5 0 0 0-.708-.708L7.5 7.793 6.354 6.646a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0l3-3z"/>
      </svg>  Entre na nossa lista!</h2>
  </div>
  <div class="col-md-6">
      <form method="post">
        <input type="text" name="nome" /><input type="submit" value="Enviar" />
    </form>
</div>
</div>
</div>
</section>

<section class="depoimento text-center">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
              <h2>Depoimento</h2>
              <blockquote>
                  <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eget lorem varius, pellentesque ipsum convallis, suscipit neque. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nam quis orci quam. Phasellus dictum erat at nibh bibendum, eget porta urna pretium. Maecenas vel augue massa. Nulla facilisi. Nulla a suscipit quam, eu pharetra justo."</p>
              </blockquote>
          </div>
      </div>
  </div>
</section>

<section class="diferenciais text-center">
  <h2>Conheça nossa empresa!</h2>
  <div class="container diferenciais-container">
    <div class="row">
        <div class="col-md-4 quadrado">
            <h3> <h3><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-check-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
              <path fill-rule="evenodd" d="M10.97 4.97a.75.75 0 0 1 1.071 1.05l-3.992 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.236.236 0 0 1 .02-.022z"/>
          </svg></h3></span></h3>
          <h2>Diferencial #1</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent lorem nisi, faucibus vestibulum pellentesque a, malesuada vel metus. Aliquam iaculis, quam sed tempus posuere, nulla metus ullamcorper turpis, ut fringilla dolor risus eget elit. Pellentesque elementum iaculis ex. Morbi quis molestie purus. Donec dapibus turpis ac imperdiet rhoncus. </p>
      </div>
      <div class="col-md-4 quadrado">
        <h3><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-check-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
          <path fill-rule="evenodd" d="M10.97 4.97a.75.75 0 0 1 1.071 1.05l-3.992 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.236.236 0 0 1 .02-.022z"/>
      </svg></h3>
      <h2> Diferencial #2</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent lorem nisi, faucibus vestibulum pellentesque a, malesuada vel metus. Aliquam iaculis, quam sed tempus posuere, nulla metus ullamcorper turpis, ut fringilla dolor risus eget elit. Pellentesque elementum iaculis ex. Morbi quis molestie purus. Donec dapibus turpis ac imperdiet rhoncus.</p>
  </div>
  <div class="col-md-4 quadrado">
   <h3><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-check-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
      <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
      <path fill-rule="evenodd" d="M10.97 4.97a.75.75 0 0 1 1.071 1.05l-3.992 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.236.236 0 0 1 .02-.022z"/>
  </svg></h3>                    <h2>Diferencial #3</h2>
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent lorem nisi, faucibus vestibulum pellentesque a, malesuada vel metus. Aliquam iaculis, quam sed tempus posuere, nulla metus ullamcorper turpis, ut fringilla dolor risus eget elit. Pellentesque elementum iaculis ex. Morbi quis molestie purus. Donec dapibus turpis ac imperdiet rhoncus.</p>
</div>

</div>
</section>

<section class="equipe">
  <h2>Equipe</h2>
    <div class="container equipe-container">
        <div class="row">
            <div class="col-md-6">
                <div class="equipe-single">
                    <div class="row">
                        <div class="col-md-2">
                            <div class="user-picture">
                                <div class="user-picture-child"></div>
                            </div>
                        </div>   
                    <div class="col-md-10">
                        <h3>Evellyn</h3>
                        <p>Aliquam iaculis, quam sed tempus posuere, nulla metus ullamcorper turpis, ut fringilla dolor risus eget elit. </p>
                    </div>
            </div>
        </div>
    </div>
            <div class="col-md-6">
                <div class="equipe-single">
                    <div class="row">
                        <div class="col-md-2">
                            <div class="user-picture">
                                <div class="user-picture-child"></div>
                            </div>
                        </div>   
                    <div class="col-md-10">
                        <h3>Evellyn</h3>
                        <p>Aliquam iaculis, quam sed tempus posuere, nulla metus ullamcorper turpis, ut fringilla dolor risus eget elit. </p>
                    </div>
                </div>
            </div>


        </div>

        <div class="col-md-6">
                <div class="equipe-single">
                    <div class="row">
                        <div class="col-md-2">
                            <div class="user-picture">
                                <div class="user-picture-child"></div>
                            </div>
                        </div>   
                    <div class="col-md-10">
                        <h3>Evellyn</h3>
                        <p>Aliquam iaculis, quam sed tempus posuere, nulla metus ullamcorper turpis, ut fringilla dolor risus eget elit. </p>
                    </div>
                </div>
            </div>


        </div>

        <div class="col-md-6">
                <div class="equipe-single">
                    <div class="row">
                        <div class="col-md-2">
                            <div class="user-picture">
                                <div class="user-picture-child"></div>
                            </div>
                        </div>   
                    <div class="col-md-10">
                        <h3>Evellyn</h3>
                        <p>Aliquam iaculis, quam sed tempus posuere, nulla metus ullamcorper turpis, ut fringilla dolor risus eget elit. </p>
                    </div>
                </div>
            </div>


        </div>
    </div>
</section>

<section class="final-site">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2>Fale conosco</h2>
                <form>
                        <div class="form-group">
                          <label for="email">Nome:</label>
                          <input type="text" name="nome" class="form-control" id="nome">
                        </div>

                         <div class="form-group">
                          <label for="email">E-mail:</label>
                          <input type="email" name="email" class="form-control" id="email">
                        </div>

                         <div class="form-group">
                          <label for="email">Mensagem:</label>
                          <textarea class="form-control"></textarea>
                        </div>
                      
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>

            </div>

            <div class="col-md-6">
                      <h2>Nossos planos</h2>
                        <table class="table">
                            <thead>
                              <tr>
                                <th>Plano Semanal</th>
                                <th>Plano Diário</th>
                                <th>Plano Anual</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>R$199,00</td>
                               <td>R$299,00</td>
                                <td>R$399,00</td>
                              </tr>

                              <tr>
                                <td>R$199,00</td>
                               <td>R$299,00</td>
                                <td>R$399,00</td>
                              </tr>

                               <tr>
                                <td>R$199,00</td>
                               <td>R$299,00</td>
                                <td>R$399,00</td>
                              </tr>
                            </tbody>
                          </table>
                </div>
        </div>

    </div>
    
</section>

       <footer>
        <p class="text-center">Todos os direitos reservados!</p>
      </footer>

</div>

<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>


</body>
</html>
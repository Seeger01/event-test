<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Tilbud</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/modern-business.css" rel="stylesheet">
    <link href="css/my-style.css" rel="stylesheet">


  </head>

  <body>
    <div class="topbar navbar fixed-top " >
      <h5 class="topbartext">Ring til os på 20 54 01 80 | kontakt@eventlageret.dk</h5>
      <div class="d-flex justify-content-lg-end">
      <div class="p-2"><button class="p2">Få Tilbud</button></div>
      </div>

      
    </div>
    <!-- Navigation -->

    <nav class=" navstyle navbar navbar-expand-lg navbar-light">

      <div class="container">
        <a class="navbar-brand" href="index.html"><img src="img/logo_2.png"></a>

        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="nav-box collapse navbar-collapse" id="navbarResponsive">

          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="about.html">Stødbånd/Stød armbånd</a>
            </li>
            <li class=" nav-item">
              <a class="nav-link" href="services.html">Beer Pong</a>
            </li>
            <li class=" nav-item">
              <a class="nav-link" href="contact.html">Lyd og Lys</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.html">Booking</a>
            </li>

          </ul>
        </div>
      </div>
    </nav>
    <header>
      <h1 class="my-5 text-center">
        FÅ TILBUD
      </h1>
    </header>

    <!-- Page Content -->
    <form action="create_order.php", method="post">  
    <div class="container">

      <h5 class="my-3">Hvad er anledningen for festen?</h5>

      <!-- Vælg anledningen Section -->
     <div class="buttons" id="eventButtons">
        <div class="row">
          <div class="col-lg">
            <button onclick="doTheThing(this)" id="bryllup" type="button" name="bryllup" class="btn1 btn-block btn-lg">
              Bryllup
            </button>
          </div>
          <div class="col-lg">
            <button onclick="doTheThing(this)" id="fodselsdag" type="button" value="false" name="fodselsdag" class="btn1 btn-block btn-lg">
              Fødselsdag
            </button>
          </div>
          <div class="col-lg">
            <button onclick="doTheThing(this)" id="firmafest" type="button" value="false" name="firmafest" class="btn1 btn-block btn-lg">
              Firmafest
            </button>
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col-lg">
            <button onclick="doTheThing(this)" id="julefrokost" type="button" value="false" name="julefrokost" class="btn1 btn-block btn-lg">
              Julefrokost
            </button>
          </div>
          <div class="col-lg">
            <button onclick="doTheThing(this)" id="privatfest" type="button" value="false" name="privatfest" class="btn1 btn-block btn-lg">
              Privatfest
            </button>
          </div>
          <div class="col-lg">
            <input onclick="doTheThing(this)" id="andet" type="button" value="Andet" name="andet" class="btn1 btn-block btn-lg">
          </div>
        </div>
    </div>
         <br>

      
      <!-- Portfolio Section -->
<!--       <h5 class="my-3">Hvor afholdes festen?</h5>

      <div class="row">
          <div class="col-lg"><input type="button" onclick="doTheChange(this)" value="Restaurant, lejede lokaler osv." class="btn2 btn-block btn-lg"></div>
          <div class="col-lg"><input type="button" onclick="doTheChange(this)" value="Adresse: privat eller firma" class="btn2 btn-block btn-lg"></div>
        </div>
        <br> -->

              
        <!-- <div class="row" >
          <div class="col-lg">
            <h6 class="my-1">Stedets navn</h6>
            <input class="form-control" type="text" name="sted" placeholder="">
          </div>
          <div class="col-lg">
            <h6 class="my-1">By</h6>
            <input class="form-control" type="text" placeholder="">
          </div>
        </div>
        <br> -->

        <h5 class="my-3">Hvad skal i have tilbud på?</h5>

        <div id="accordion" role="tablist">
          <div class="card">
            <div class="card-header" role="tab" id="headingOne">
              <h5 class="mb-0">
                <a data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                Musik
                </a>
              </h5>
            </div>

            <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
              <div class="card-body">

                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="defaultCheck1" name='speakers' onclick="value='true'">
                  <label class="form-check-label" for="defaultCheck1">
                    1 - Højtalere 
                  </label>
                </div>

                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="defaultCheck1" name='lys' onclick="value='true'">
                  <label class="form-check-label" for="defaultCheck1">
                    Lys 
                  </label>
                </div>

                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="defaultCheck1" name='sspeakers' onclick="value='true'">
                  <label class="form-check-label" for="defaultCheck1">
                    2 - Højtalere 
                  </label>
                </div>

                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="defaultCheck1" name='soundboks' onclick="value='true'">
                  <label class="form-check-label" for="defaultCheck1">
                    Soundboks
                  </label>
                </div>

                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="defaultCheck1" name='anleg' onclick="value='true'">
                  <label class="form-check-label" for="defaultCheck1">
                    Fuldt anlæg med Top-bund system
                  </label>
                </div>

                 <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="defaultCheck1" name="dj" onclick="value='true'">
                  <label class="form-check-label" for="defaultCheck1">
                    DJ
                  </label>
                </div>

              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" role="tab" id="headingTwo">
              <h5 class="mb-0">
                <a class="collapsed" data-toggle="collapse" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  Underholdning
                </a>
              </h5>
            </div>
            <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
              <div class="card-body">
                
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="defaultCheck1" name="beerpong" onclick="value='true'">
                  <label class="form-check-label" for="defaultCheck1">
                    Beerpong
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="defaultCheck1" name="stodband" onclick="value='true'">
                  <label class="form-check-label" for="defaultCheck1">
                    Stødbånd
                  </label>
                </div>

              </div>
            </div>
          </div>
        </div>
        <br>

               <h5 class="my-3">Hvornår skal festen holdes? - og hvor mange forventer i at blive?</h5>
        <div class="row">
          <div class="col-lg">
            <h6 class="my-1">Dato</h6>
            <input class="form-control" name="dato" type="date" placeholder="">
          </div>
         <div class="col-lg">
            <h6 class="my-1">Tid</h6>
            <input class="form-control" name="tid" type="time" placeholder="">
          </div>
          <div class="col-lg">
            <h6 class="my-1">Antal gæster</h6>
            <input class="form-control" name="antal" type="text" placeholder="" value="">
          </div>
        </div>
        <br>

        <h5 class="my-3">Hvor afholdes festen?</h5>
        <div class="row">
          <div class="col-lg">
            <h6 class="my-1">By</h6>
            <input required="" class="form-control" type="text" name="by" placeholder="" value="">
          </div>
          <div class="col-lg">
            <h6 class="my-1">Adresse</h6>
            <input required="" class="form-control" type="text" name="adresse" placeholder="" value="">
          </div>
        </div>
        <br>

        <h5 class="my-3">Oplysninger</h5>
        <div class="row">
          <div class="col-lg">
            <h6 class="my-1">Navn</h6>
            <input required="" class="form-control" name="navn" type="text" placeholder="" value="">
          </div>
          <div class="col-lg">
            <h6 class="my-1">Telefonnummer</h6>
            <input required="" class="form-control" name="telefonnummer" type="text" placeholder="" value="">
          </div>
          <div class="col-lg">
            <h6  class="my-1">E-mail</h6>
            <input required="" class="form-control" name="email" type="text" placeholder="" value="">
          </div>
        </div>
        <br>

        <h5 class="my-3">Oplysninger</h5>
        <div class="row">
          <div class="col-lg">
            <h6 class="my-1">Andre kommentarer</h6>
            <textarea class="form-control" rows="5" type="input" name="kommentar" placeholder="F.eks. Tema for festen, specielle forhold, særlige krav eller andre ønsker"></textarea>
          </div>
        </div>
        <br>

              <hr>

      <!-- Call to Action Section -->
      <div class="row mb-4">
        <div class="col-md-8">
          <p>læs venligst vores lejebetingelser <a href="">her</a> og klik enig for at bestille dette tilbud.</p>
          <div class="form-check">
                  <input required="" class="form-check-input" type="checkbox" id="defaultCheck1" name="betingelser" onclick="value='true'">
                  <label class="form-check-label" for="defaultCheck1">
                    Enig
                  </label>
                </div>
        </div>
        <div class="col-md-4">
          <input class="btn2 btn btn-lg btn-secondary btn-block" type="submit" value="BESTIL TILBUD NU" href="#">
        </div>
      </div>
       <hr>
    </div>

    <!-- /.container -->


        </form>


     
      <!-- /.row -->



    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2018</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript">
      function doTheThing(button) {       
        var list = document.getElementsByClassName("btn1");
        for (var i = 0; i < list.length; i++){
          if(button.id !== list[i].id){
              list[i].style.backgroundColor = '#13aff0';
          } else {
              list[i].style.backgroundColor = 'red';
              if (list[i].id === 'andet'){
                list[i].type = 'text';
                if (list[i].value === 'Andet'){
                  list[i].value = '';
                }
              } else {
                var andetButton = document.getElementById('andet');
                andetButton.type = 'Button';
                andetButton.value = 'Andet';
                list[i].value = 'true';
              }
          }
        }   
      }


      // console.log(bryllupButton)
      // bryllupButton.addEventListener(('click'), function(){
      //   bryllupButton.value = 'true';
      //   console.log(bryllupButton)
      // })



      //       function doTheChange(button) {
          
      // var list1 = document.getElementsByClassName("btn2");

      // for (var j = 0; j <= list1.length; j++){
      // if(button.id !== list1[j].id){
      //  list1[j].style.backgroundColor = '#13aff0';
      // } else {
      // list1[j].style.backgroundColor = 'red';
      // }
      // }
          
      // }
      // var bryllup = document.getElementById('bryllup')
      // var fodselsdag = document.getElementById('fodselsdag')
      // var firmafest = document.getElementById('firmafest')
      // var julefrokost = document.getElementById('julefrokost')
      // var privatfest = document.getElementById('privatfest')

      // function chooseThisButton(button){
      //   button.style.backgroundColor = 'red'
      // };


      // var all = document.getElementById('eventButtons');
      // var lenAll = all.length

      // for(i=0;i<lenAll;i++){
      //   var sub = all[i]
      //   var lenSub = sub.length
      //   for (j=0;j<lenSub;j++){
      //     sub[j].addEventListener(('click'), function(){
      //       console.log(sub[j])
      //       if (sub[j].checked == true){
      //         sub[j].style.backgroundColor = "red";
      //         sub[j].checked = false
      //       }
      //       else{
      //         sub[j].style.backgroundColor = "#13aff0";
      //         sub[j].checked = true
      //       }
      //     })
      //   }
      // }

    // bryllup.addEventListener(('click'), function(){
    //   if (bryllup.checked == true){
    //     bryllup.style.backgroundColor = "red";
    //     bryllup.checked = false
    //   }
    //   else{
    //     bryllup.style.backgroundColor = "#13aff0";
    //     bryllup.checked = true
    //   }
    // })
    // fodselsdag.addEventListener(('click'), function(){
    //   if (fodselsdag.checked == true){
    //     fodselsdag.style.backgroundColor = "red";
    //     fodselsdag.checked = false
    //   }
    //   else{
    //     fodselsdag.style.backgroundColor = "#13aff0";
    //     fodselsdag.checked = true
    //   }
    // })
    // firmafest.addEventListener(('click'), function(){
    //   if (firmafest.checked == true){
    //     firmafest.style.backgroundColor = "red";
    //     firmafest.checked = false
    //   }
    //   else{
    //     firmafest.style.backgroundColor = "#13aff0";
    //     firmafest.checked = true
    //   }
    // })
    // julefrokost.addEventListener(('click'), function(){
    //   if (julefrokost.checked == true){
    //     julefrokost.style.backgroundColor = "red";
    //     julefrokost.checked = false
    //   }
    //   else{
    //     julefrokost.style.backgroundColor = "#13aff0";
    //     julefrokost.checked = true
    //   }
    // })
    // privatfest.addEventListener(('click'), function(){
    //   if (privatfest.checked == true){
    //     privatfest.style.backgroundColor = "red";
    //     privatfest.checked = false
    //   }
    //   else{
    //     privatfest.style.backgroundColor = "#13aff0";
    //     privatfest.checked = true
    //   }
    // })

    // bryllup.addEventListener(('click'), function(){
    //   // if ticked remove predefined styling
    //   console.log(this.checked)
    //   var color = 
    //   if (this.checked) {
    //     document.getElementById('bryllup').style.backgroundColor = 'red';
    //   }
    //   // if not ticked, add "pointer-event: none;" styling to set
    //   else if (this.checked == false){
    //     document.getElementById('bryllup').style.backgroundColor = 'blue';
    //   }
    // })


      // function chooseNotThisButton(button){
      //   button.style.backgroundColor = "green"
      // }

      // function isChecked(button){
      //   if (button.checked){
      //     return true
      //   }
      //   else{
      //     return false
      //   }
      // }

      // var alle = document.getElementById('bryllup, fodselsdag, firmafest, julefrokost, privatfest')

      // eventBryllup = bryllup.addEventListener("click", function(){})
      // eventfodselsdag = fodselsdag.addEventListener("click", function(){})
      // eventfirmafest = firmafest.addEventListener("click", function(){})
      // eventjulefrokost = julefrokost.addEventListener("click", function(){})
      // eventprivatfest = privatfest.addEventListener("click", function(){})

      // function addListinerOnClick(button){
      //   button.addEventListener("click", function(){
      //     chooseTopButton(button)
      //   });
      // }
      // function chooseTopButton(button) {
      //     button.style.backgroundColor = 'red';
      // }
      // addListinerOnClick(bryllup)
    </script>

  </body>
</html>

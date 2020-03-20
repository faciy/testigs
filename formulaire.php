<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">


    <link rel="stylesheet" href="file:///C:/wamp64/www/site1/fontawesome-free-5.12.1-web/css/all.css">
    <title>Formulaire</title>
    </head>

    <body>
      


        <div class="wrapper">
            <div class="payment">
              <div class="payment-logo">
                <p>P</p>
              </div>
          
          
              <h2> Form Payment </h2>
              <div class="form">
               
                <div class="card space icon-relative">
                    <label class="label">Articles differents</label>

                    <form name="form" id="form" method="" action=""  >
                    <select name="sujet" onchange="ret()" id="select" class="input"  required>
                        <option disabled selected value="">Choississez un article</option>
                        <option  value="1">Instagram</option>
                        <option value="2">Twitter</option>
                        <option value="3">Facebook</option>
                        <option value="4">Pinterest</option>
                        <option value="5">Whatsapp</option>
                        <option value="6">GIthub</option>
                    </select>
                    <input type="text" maxlength="100" id="champs1" name="champs1" disabled>
                  
                    
                </div>

                
                
                
                <div class="card space icon-relative">
                  <label class="label">Nombres d'exemplaires <span class="span">*</span></label>
                  <input type="text" name="exempalire" id="exemplaire" class="input"  value="" required placeholder="Exemplaires" onkeyup="ret()">
             

                </div>
                  
                </div>

                <div class="card space icon-relative">
                    <label class="label">Facture</label>
                    <input type="text" id="prix" class="input"  disabled>
                    
                  </div>

                 
                <div id="agree" >
                    <label>I agree</label>
                    <input name="java" id="java" type="checkbox"  class="agree" value="checkbox"> 

                </div>
              
          
                <div class="botn" id="btn">
                 <input type="submit" name="submit" value="Valider" id="Valider">
                </div>
                <div class="botn" id="btn">
                  <input type="reset" name="reset" value="Annuler">
                </div>
          
              </div>
            </div>
          </div>

        </form>
        
    
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    
    <script src="script.js" ></script>
    <script src="js/jquery-3.4.1.min.js" ></script>
    <script src="js/popper.min.js" ></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
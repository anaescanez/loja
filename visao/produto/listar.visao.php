<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>World of Books</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./publico/css/app.css">
        <script src="publico/js/funcoes.js"></script>
         <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    </head>
    <style>
      .mySlides {display:none;}
    </style>
    <body>
 
        <div class="w3-content w3-display-container" style="margin-bottom: 6%">
          <img class="mySlides" src="publico/imgs/propagandas2.png" style="width:100%">
          <img class="mySlides" src="publico/imgs/propagandas3.png" style="width:100%">
          <img class="mySlides" src="publico/imgs/propagandas4.png" style="width:100%">

          <button  class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
          <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
        </div>

        
        <script>
          var slideIndex = 1;
          showDivs(slideIndex);
          function plusDivs(n) {
            showDivs(slideIndex += n);
          }
          function showDivs(n) {
            var i;
            var x = document.getElementsByClassName("mySlides");
            if (n > x.length) {slideIndex = 1}    
            if (n < 1) {slideIndex = x.length}
            for (i = 0; i < x.length; i++) {
              x[i].style.display = "none";  
            }
            x[slideIndex-1].style.display = "block";  
          }
        </script>
        
        
        
        
<div id="ProdutoUser">
   
        <?php foreach ($produtos as $produto): ?>
            <div class="product-box">
                
                <div id="caixaImagemProd">
                    <img src="<?=$produto["imagem"]?>" alt="Imagem" style="width:200px; height: 300px;" onClick="location = 'produto/ver/<?= $produto["idproduto"] ?>'">
                </div>
                
                <div id="caixatxtProd">
                    
                        
                    <a href="./produto/ver/<?=$produto['idproduto']?>" style="text-decoration: none;"><h2 class="txtProd"><?= $produto["nomeproduto"] ?></h2></a>
                    <a href="./produto/ver/<?=$produto['idproduto']?>" style="text-decoration: none;"><h4 class="txtProd">R$ <?= $produto["preco"] ?></h4></a>
                    <a id="comprarLink" href="./produto/comprar/<?= $produto['idproduto'] ?>"><button id="btnComprar">Comprar</button></a>
                </div>
            </div>
   
        <?php endforeach; ?>
      
</div>
 
    
    </body>
</html>
<?php
  $Token    = $_GET['token'];
  if ( !empty($Token) ){
    $TokenIMG   = 'https://api.sezar.network/TokenIMG.php?token='.$Token;
  }else{
    $TokenIMG   = 'https://api.sezar.network/TokenIMG.php?token=btc';
  }
?>
<html>
  <head>
    <title>Crypto Tokens Image API</title>
  </head>  
  <body>
    <img src="<?= $TokenIMG ?>" title="<?= $Token ?>">
  </body>
</html>

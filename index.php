<!DOCTYPE html>
    <html>
        <head>
            </head>
            <body>
                <p>
                    <?php
                    $myname = "Simeon";
                    $myage = 15;

                    if($myage >= 16 && $myage < 18){
                        print "You can buy specs!";
                    }
                     elseif($myage >= 18 && $myage < 21 ){
                         print "You can buy mugs";
                     }
                      elseif($myage >= 21){
                          print "You can buy sausage rolls";
                      }
                      else{
                          print "Sorry you can't buy";
                      }
                    ?>
                </p>
            </body>
        </html>

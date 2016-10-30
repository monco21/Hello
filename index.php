<!DOCTYPE html>
    <html>
        <head>
            </head>
            <body>
                <p>
                    <?php
                    $myname = "Simeon";
                    $myage = 18;

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

                      $wantedgood = "mugs";
                    switch($wantedgood){
                        case "mugs":
                            echo "You must have 18";
                            break;
                        case "specs":
                            echo "You must have 16";
                            break;
                        case "sausage rolls";
                            echo "You must be 21";
                            break;
                        default:
                         echo "YOu can't buy";
                    }
                    ?>
                </p>
            </body>
        </html>

<!DOCTYPE html>
    <html>
        <head>
            </head>
            <body>
                <p>
                    <?php
                            $mugsCount = 7;
                            $specsCount = 7;
                            $sausageCount = 7;
                           for ($i = 1; $i < 31; $i++) {
                               $thisMonthGoods = rand(0,2);

                            if($thisMonthGoods == 0){
                                if($mugsCount > 0) {
                                    echo "<br> On the $i of the month Mugs are available";
                                }else{
                                    echo "<br> No more Mugs available this month";
                                }
                            }
                            elseif ($thisMonthGoods == 1){
                                if($specsCount > 0) {
                                    echo "<br> On the $i of the month Specs are available";
                                }
                                else{
                                    echo "<br> No more Mugs available this month";
                                }
                            }
                            elseif ($thisMonthGoods == 2){
                                if($sausageCount > 0) {
                                    echo "<br>On the $i of the month Sausage are available";
                                }
                                else{
                                    echo "<br> No more Mugs available this month";
                                }
                            }
                            else{
                                echo "<br>No more goods are available this month";
                            }





                              /* If ($i % 2 == 0 && $i % 3 == 0 && $i % 4 == 0) {
                                   echo "<br>On the $i of the month Mugs, Specs and Sausage are available";
                               } elseif ($i % 2 == 0 && $i % 3 == 0) {
                                   echo "<br>On the $i of the month Mugs and Specs are available";
                               } elseif ($i % 2 == 0 && $i % 4) {
                                   echo "<br> On the $i of the month Mugs and Sausage are available";
                               } elseif ($i % 3 == 0 && $i % 4 == 0) {
                                   echo "<br> On the $i of the month Specs and Sausage are available";
                               } elseif ($i % 2 == 0) {
                                   echo "<br> On the $i of the month Mugs are available";
                               } elseif ($i % 3 == 0) {
                                   echo "<br> On the $i of the month Specs are available";
                               } elseif ($i % 4 == 0) {
                                   echo "<br> On the $i of the month Sausages are available";
                               } else {
                                   echo "<br>On the $i of the month no products are available";
                               }*/
                           }


                    ?>
                </p>
            </body>
        </html>

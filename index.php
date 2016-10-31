<!DOCTYPE html>
    <html>
        <head>
            </head>
            <body>
                <p>
                    <?php
                        $provisionedActivities = array("Specs", "Drugs", "Rock and Roll");

                        foreach($provisionedActivities as $x){
                            print "<p>$x</p>";

                            $provisionedActivities[1] = "hugs";
                            print "<p>$x</p>";
                            $provisionedActivities[2] = "";
                            print "<p>$x</p>";

                            for($i = 1; $i < 31; $i++){
                                if($i/2){
                                    echo "On the $i of the month Specs are available";
                                }
                                elseif($i/3){
                                    echo "On the $i of the month Mugs are available";
                                }
                                elseif ($i/4){
                                    echo "On the $i of the month Sausage Rolls are available";
                                }
                                else{
                                    echo "On the $i of the month no products are available";
                                }
                            }
                        }
                    ?>
                </p>
            </body>
        </html>

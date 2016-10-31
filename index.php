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
                                If($i/2 && $i/3 && $i/4){
                                    echo "On the $i of the month Mugs, Sausage Rolls and Specs are available";
                                }


                            }

                        }
                    ?>
                </p>
            </body>
        </html>

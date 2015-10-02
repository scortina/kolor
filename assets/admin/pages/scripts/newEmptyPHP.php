<?php
                  
                    $x  = 0;
                    $valorx = mysql_num_rows($paises_ciudad);
                    echo 'var bar_datax = 
                             [';
                    while($filax = mysql_fetch_array($paises_ciudad)){
                        $x++;
                        if($x == $valorx ){
                           echo '["'.$filax["pa_nombre"].'", '.$filax["total"].']';
                        }else{
                           echo '["'.$filax["pa_nombre"].'", '.$filax["total"].'],'; 
                        }
                    }
                    echo ']';


                ?>
<fieldset class='batima2'>
    <legend class='titleliste'>
        <i class="fa fa-home"></i>
        <h2> Rankin</h2>
    </legend>

    <form >
        <table class=tab>
            <tr>
                <td class=tab>
                    <li>
                        <div class='card'><strong>Rank</strong></div>
                    </li>
                </td>
                <td class=tab>
                    <li>
                        <div class='card'><strong>Pseudo</strong></div>
                    </li>
                </td>
                <td class=tab>
                    <li>
                        <div class='card'><strong>point</strong></div>
                    </li>
                </td>
                <td class=tab>
                    <li>
                        <div class='card'><strong>id</strong></div>
                    </li>
                </td>
                <td class=tab>
                    <li>
                        <div class='card'><strong>pts Perdu</strong></div>
                    </li>
                </td>
                
                
            </tr>
            <?php
                $tab = ranking();
                $i = 1;
                while( $row = mysqli_fetch_assoc($tab)){
                   if($row["role"]!='Pro'){ 
                    echo'
                        <tr>
            
                            <td class=tab> 
                                <li>' .$i. ' </li> 
                            </td>
                            <td class=tab> 
                                <li>' . $row["pseudo"] . ' </li> 
                            </td>
                            <td class=tab>
                                <li> '. $row["point"] . ' </li> 
                            </td>
                            <td class=tab>
                                <li>'. $row["id"] . ' </li> 
                            </td>
                            </td>
                            <td class=tab>
                                <li>'. $row["point"] . ' </li> 
                            </td>
                            <td class=tab>
                                <li>
                                    <a class="button" href ="index.php?page=profil&id='.$row["id"].'"> Afficher </a>
                                </li> 
                            </td>
            
                        <tr>
                        ';
                        $i++;
                    }
                }
                echo'
                </table>';
            ?>

    </form>
</fieldset>
<?php
session_start();
require('includes/init.php');

?>

    <div class="row">
        <div class="tweets col-xs-10 col-xs-offset-1 col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1 col-lg-10 col-lg-offset-1">
            <h3>Toutes les annonces</h3>
            <table class="table table-striped table-hover">
                <tr>
                    <td><b>Utilisateur</b></td>
                    <td><b>Titre de l'annonce</b></td>
                    <td><b>Deadline</b></td>
                    <td><b>Description</b></td>
                </tr>
                <?php

                $req = $db->query("SELECT * FROM ad");
                $ads=$req->fetchAll();
                foreach ($ads as $ad)
                {
                    $id = $ad['id_user'];
                    $req = $db->query("SELECT * FROM user WHERE id_user = $id");
                    $user=$req->fetch();
                    ?>
                    ?>

                    <tr>
                        <td>
                            <?php echo $user['username']; ?>
                        </td>
                        <td>
                            <?php echo $ad['title']; ?>
                        </td>
                        <td>
                        <?php
                            if(isset($ad['deadline'])) {
                                echo $ad['deadline'];
                            }
                        ?>
                        </td>
                        <td>
                            <?php echo $ad['description']; ?>
                        </td>
                    </tr>


                    <?php
                }
                ?>
            </table>
        </div>
    </div>

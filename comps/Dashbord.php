<?php 
    session_start();
    include('../include/head.php') ?>
<?php include('../include/db.php') ?>

<body>
    <div class="overflow-x-auto">
        <table class="table table-compact w-full">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Date de naissance</th>
                    <th>Ville</th>
                    <th>Pays</th>
                    <th>Numéro</th>
                    <th>Adresse email</th>
                    <th>Date d'enregistrement</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $query = "SELECT * FROM formulaire_adhesion";
                    $statement = $conn->prepare($query);
                    $statement->execute();

                    $statement->setFetchMode(PDO::FETCH_OBJ);
                    $result = $statement->fetchAll();
                    if($result){
                        foreach($result as $row){
                            ?>
                            
                            <tr>
                            
                                <th><?php $row->id; ?></th>
                                <td><?php $row->Name; ?></td>
                                <td><?php $row->Firstname; ?></td>
                                <td><?php $row->Dayborn; ?></td>
                                <td><?php $row->City; ?></td>
                                <td><?php $row->Countrie; ?></td>
                                <td><?php $row->Number; ?></td>
                                <td><?php $row->Email; ?></td>
                                <td><?php $row->Dayregist; ?></td>


                            
                            </tr>
                            
                            <?php

                        }
                    }
                    else{
                        ?>
                        <?php 
                    }

                    ?>

                ?>
                <tr>
                    <th>1</th>
                    <td>Cy Ganderton</td>
                    <td>Quality Control Specialist</td>
                    <td>Littel, Schaden and Vandervort</td>
                    <td>Canada</td>
                    <td>12/16/2020</td>
                    <td>Blue</td>
                    <td>+22500707070</td>
                    <td>12/12/12 10:10:20min </td>
                </tr>

            </tbody>
            <tfoot>
                <tr>
                    <th>id</th>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Date de naissance</th>
                    <th>Ville</th>
                    <th>Pays</th>
                    <th>Numéro</th>
                    <th>Adresse email</th>
                    <th>Date d'enregistrement</th>
                </tr>
            </tfoot>
        </table>
    </div>
</body>
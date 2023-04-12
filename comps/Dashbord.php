<?php
// session_start();
include('../include/head.php');

?>


<!-- <?php include('../include/db.php') ?> -->

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
                try {
                    $conn = new PDO("mysql:host=localhost;dbname=baction", "root", "");
                    // return $conn;
                } catch (\Throwable $e) {
                    print "Erreur " . $e->getMessage() . "<br/>";
                }
                $req = "SELECT * FROM formulaire_adhesion";
                $res = $conn->query($req);
                
                
                ?>

                <?php foreach($conn->query($req) as $row) :
                    // print_r($row);
                    ?>

                <tr>
                    <th><?= $row["id"] ?></th>
                    <td><?= $row["Name"] ?></td>
                    <td><?= $row["Firstname"] ?></td>
                    <td><?= $row["Dayborn"] ?></td>
                    <td><?= $row["City"] ?></td>
                    <td><?= $row["Country"] ?></td>
                    <td><?= $row["Number"] ?></td>
                    <td><?= $row["Email"] ?></td>
                    <td><?= $row["Dayregist"] ?></td>
                </tr>
                <!-- <tr>
                    <th>1</th>
                    <td>Cy Ganderton</td>
                    <td>Quality Control Specialist</td>
                    <td>Littel, Schaden and Vandervort</td>
                    <td>Canada</td>
                    <td>12/16/2020</td>
                    <td>Blue</td>
                    <td>+22500707070</td>
                    <td>12/12/12 10:10:20min </td>
                </tr> -->

                <?php endforeach ?>

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
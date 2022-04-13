<?php require_once"src/public/header.php";?>

    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-8 m-auto">
                <h1 class="my-5 text-center">List entreprises</h1>
                <table class="table table-success table-striped fs-4">
                    <thead>
                        <th>Nom</th>
                        <th>Coordonnee_gps</th>
                        <th>Siege_social</th>
                        <th>Date_creation</th>
                        <th>Nimea</th>
                        <th>Page_web</th>
                        
                        <th>Action</th>
                    </thead>
                    <tbody>

                        <tr class="table-active">
                            <?php
                                foreach ($data as $entreprise )
                                {
                                    echo "<tr>";
                                    echo "<td>" . $entreprise->getNom(). "</td>";
                                    echo "<td>" . $entreprise->getCoordonnee_gps() . "</td>";
                                    echo "<td>" . $entreprise->getSiege_social(). "</td>";
                                    echo "<td>" . $entreprise->getDate_creation(). "</td>";
                                    echo "<td>" . $entreprise->getNimea(). "</td>";
                                    echo "<td>" . $entreprise->getPage_web(). "</td>";
                                    
                                    echo "<td>";

                                    echo '<a href="http://localhost/nous_les_femme/Entreprise/edit ?id='.$entreprise->getId().'"><button type="button" class="btn btn-warning fs-5 mx-1">edit</button></a>';
                                    echo '<a href="http://localhost/nous_les_femme/Entreprise/delete?id='. $entreprise->getId() .'"><button type="button" class="btn btn-danger fs-5 mx-1">delete</button></a>';
                                    echo "</td>";
                                    echo "</tr>";

                                }
                            ?>

                        ...
                        </tr>
                        <tr>
                        ...
                        </tr>
                        <tr>


                        </tr>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
    <?php require_once"src/public/footer.php"?>

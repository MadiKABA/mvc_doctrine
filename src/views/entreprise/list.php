<?php require_once"src/public/header.php";?>

    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-8 m-auto">
                <h1 class="my-5 text-center">List Proprietaires</h1>
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
                                foreach ($data as $proprietaire )
                                {
                                    echo "<tr>";
                                    echo "<td>" . $proprietaire->getNom(). "</td>";
                                    echo "<td>" . $proprietaire->getCoordonnee_gps() . "</td>";
                                    echo "<td>" . $proprietaire->getSiege_social(). "</td>";
                                    echo "<td>" . $proprietaire->getDate_creation(). "</td>";
                                    echo "<td>" . $proprietaire->getNimea(). "</td>";
                                    echo "<td>" . $proprietaire->getPage_web(). "</td>";
                                    
                                    echo "<td>";

                                    echo '<a href="http://localhost/mesProjest/doctrine-ModuleGproprietaire/entreprise/edit ?id='.$proprietaire->getId().'"><button type="button" class="btn btn-warning fs-5 mx-1">edit</button></a>';
                                    echo '<a href="http://localhost/mesProjest/doctrine-ModuleGproprietaire/entreprise/delete?id='. $proprietaire->getId() .'"><button type="button" class="btn btn-danger fs-5 mx-1">delete</button></a>';
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

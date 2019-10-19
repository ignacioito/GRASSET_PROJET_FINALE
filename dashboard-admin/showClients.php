<!-- Main content -->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h2 class="card-title">Tableau des Clients</h2>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0" style="height: 900px;">
                <table class="table table-head-fixed">
                    <thead>
                        <tr>
                            <th>Nom</th>
                            <th>Couriel</th>
                            <th>Telephone</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql = "SELECT * FROM `utilisateurs`";
                        if ($res = $connexion->query($sql)) {
                            if ($res->num_rows > 0) {
                                while ($row = $res->fetch_assoc()) {
                                    echo "<tr>";
                                    echo "<td>" . $row['nom'] . "</td>";
                                    echo "<td>" . $row['eMail'] . "</td>";
                                    echo "<td>" . $row['telephone'] . "</td>";
                                    echo "</tr>";
                                }
                                $res->free();
                            } else {
                                echo "------------------------------------------------------ERROR 3: No matching records are found. ";
                            }
                        } else {
                            echo "------------------------------------------------------ERROR 2: Could not able to execute $sql. "
                                . $connexion->error;
                        }
                        $connexion->close();
                        ?>
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
</div>
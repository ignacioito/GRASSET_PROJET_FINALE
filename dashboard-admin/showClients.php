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
                        $mysqli = new mysqli("127.0.0.1", "root", "", "BF21");
                        if ($mysqli === false) {
                            die("------------------------------------------------------ERROR 1: Could not connect. "
                                . $mysqli->connect_error);
                        }
                        $sql = "SELECT * FROM `utilisateurs`";
                        if ($res = $mysqli->query($sql)) {
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
                                . $mysqli->error;
                        }
                        $mysqli->close();
                        ?>
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
</div>
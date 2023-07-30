<?php

include_once('connect.php');

$sql = "SELECT * FROM scores, students WHERE scores.student_id = students.id;";
$result = $conn->query($sql);
$data = $result->fetch_all(MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html lang = "en">
    <head>
        <meta charset = "UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0;">
        <title>DATA RANKS</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    </head>

    <body>
        <nav class="navbar bg-dark">
            <div class="container-fluid">
                <span class="navbar-brand mb-0 h1 text-white">RANKING XI RPL</span>
                <form class="form-inline my-2 my-lg-0 d-flex">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-outline-success my-2 my-sm-0 me-3 ms-1" type="submit">Search</button>
                </form>
            </div>
        </nav>
        <div class="container mt-3">
            <div class="row">
                <div class="col-4">
                    <div class="card">
                        <div class="card-header bg-dark">
                            <h3 class="text-center text-white">Input Data</h3>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="">
                                <div class="mb-3">
                                    <label for="name">Name</label>
                                    <input id="name" type="text" name="name" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label for="score">Score</label>
                                    <input id="score" type="number" name="score" class="form-control">
                                </div>
                            </form>
                        </div>
                        <div class="card-footer">
                            <div class="d-grid gap-2">
                                <button class="btn btn-dark" type="submit">Submit</button>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-8">
                    <div class="card">
                        <div class="card-header bg-dark">
                            <h3 class="text-center text-white">Ranking List</h3>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr class="text-center">
                                        <th>No</th>
                                        <th>Name</th>
                                        <th>Score</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($data as $key => $d): ?>
                                        <tr class="text-center">
                                            <td><?= $key + 1 ?></td>
                                            <td><?= $d['name'] ?></td>
                                            <td><?= $d['score'] ?></td>
                                        </tr>
                                        <?php endforeach ?>
                                </tbody>
                                <tfoot>
                                    <tr class="text-center text-white">
                                        <th>No</th>
                                        <th>Name</th>
                                        <th>Score</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                            </div>
                       </div>
                  </div>
        <footer class="py-3 my-4 bg-dark">
            <p class="text-center text-white">Jika sebuah peristiwa tak mampu dihapuskan, cukup buat kenangan baru yang lebih indah.</p>
        </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>
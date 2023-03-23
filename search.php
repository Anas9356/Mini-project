<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="nav.css">
    <title>Funda Of Web IT</title>
</head>
<body>
<header>
        <div class="logo">
            <p>godavari college of engineering , jalagon</p>
        </div>
        <nav>
            <ul>
                <li><a href="table.php">Home</a></li>
                <li><a href="search.php">search </a></li>
                <li><a href="table.php">table</a></li>
               
            </ul>
        </nav>
        
    </header>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-4">
                   
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-7">

                                <form action="" method="GET">
                                    <div class="input-group mb-3">
                                        <input type="text" name="search" required value="<?php if(isset($_GET['search'])){echo $_GET['search']; } ?>" class="form-control" placeholder="Search data">
                                        <button type="submit" class="btn btn-primary">Search</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>fulname</th>
                                    <th>date</th>
                                    <th>m_no</th>

                                    <th>address</th>
                                    <th>purpose</th>
                                    <th>companion</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $con = mysqli_connect("localhost","root","","mysql");

                                    if(isset($_GET['search']))
                                    {
                                        $filtervalues = $_GET['search'];
                                        $query = "SELECT * FROM entry WHERE CONCAT(fulname,  date,m_no,address, purpose,companion) LIKE '%$filtervalues%' ";
                                        $query_run = mysqli_query($con, $query);

                                        if(mysqli_num_rows($query_run) > 0)
                                        {
                                            foreach($query_run as $items)
                                            {
                                                ?>
                                                <tr>
                                                    <td><?= $items['fulname']; ?></td>
                                                    <td><?= $items['date']; ?></td>
                                                    <td><?= $items['m_no']; ?></td>
                                                    <td><?= $items['address']; ?></td>
                                                    <td><?= $items['purpose']; ?></td>
                                                    <td><?= $items['companion']; ?></td>
                                                </tr>
                                                <?php
                                            }
                                        }
                                        else
                                        {
                                            ?>
                                                <tr>
                                                    <td colspan="4">No Record Found</td>
                                                </tr>
                                            <?php
                                        }
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
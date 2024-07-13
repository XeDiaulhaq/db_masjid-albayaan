<?php 
include("proses\connect.php");
$query = mysqli_query($conn, "SELECT * FROM tb_user");
while ($record = mysqli_fetch_array($query)) {
    $result[]= $record;
}

?>

<div class="container-lg">
    <h2>USER PAGE</h2>
    <div class="row">
        <div class="col d-flex justify-content-end">
            <div class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModalADD">Add User</div>
        </div>
        <!-- Modal ADD -->
        <div class="modal fade" id="exampleModalADD" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-xl modal-fullscreen-md-down">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title ADD</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        ...
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal end ADD -->
        <!-- Modal SEE -->
        <div class="modal fade" id="exampleModalSEE" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-xl modal-fullscreen-md-down">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title SEE</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        ...
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal end SEE -->
        <!-- Modal EDIT -->
        <div class="modal fade" id="exampleModalEDIT" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-xl modal-fullscreen-md-down">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title EDIT</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        ...
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal end ADD -->
        <!-- Modal DELETE -->
        <div class="modal fade" id="exampleModalDELETE" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-xl modal-fullscreen-md-down">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title DELETE</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        ...
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal end DELETE -->
    </div>

    <div class="row">
        <?php 
if (empty($result)) {
   echo "Data user tidak ada";
}else{
?>
        <div class="col table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Username</th>
                        <th scope="col">Level</th>
                        <th scope="col">No HP</th>
                        <th scope="col">Opsi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no=1;
                    foreach ($result as $row){
                     ?>
                    <tr>
                        <th scope="row"><?php echo $no++ ?></th>
                        <td><?php echo $row['nama'] ?></td>
                        <td><?php echo $row['username'] ?></td>
                        <td><?php echo $row['level'] ?></td>
                        <td><?php echo $row['no_hp'] ?></td>

                        <td class="d-flex">
                            <button class="btn btn-outline-info btn-sm me-1" data-bs-toggle="modal"
                                data-bs-target="#exampleModalSEE"><i class="bi bi-eye"></i></button>
                            <button class="btn btn-outline-warning btn-sm me-1" data-bs-toggle="modal"
                                data-bs-target="#exampleModalEDIT"><i class="bi bi-pencil-square"></i></button>
                            <button class="btn btn-outline-danger btn-sm" data-bs-toggle="modal"
                                data-bs-target="#exampleModalDELETE"><i class="bi bi-trash"></i></button>
                        </td>
                   
                    <?php 
                    }
                    ?>
                </tbody>
            </table>
        </div>
        <?php }
        ?>
    </div>
</div>
</div>
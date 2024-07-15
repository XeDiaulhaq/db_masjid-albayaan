<?php
include("proses/connect.php");

$query = mysqli_query($conn, "SELECT * FROM tb_user");
while ($record = mysqli_fetch_array($query)) {
    $result[] = $record;
}
?>


<nav>
    <div class="nav nav-tabs mt-2" id="nav-tab" role="tablist">
        <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button"
            role="tab" aria-controls="nav-home" aria-selected="true">USER</button>
        <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button"
            role="tab" aria-controls="nav-profile" aria-selected="false">DONASI</button>
    </div>
</nav>
<div class="tab-content" id="nav-tabContent">
    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">
        <div class="container mt-5">
            <h2 class="text-center"> USER MANAGEMENT</h2>
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
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Tambahkan User</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form class="needs-validation form-floating" novalidate
                                    action="proses/proses_input_user.php" method="POST">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-floating mb-3">
                                                <input type="text" class="form-control" id="floatingInput"
                                                    placeholder="Your Name" name="nama" required>
                                                <label for="floatingInput">Nama</label>
                                                <div class="invalid-feedback">
                                                    Please fill in the Name
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-floating mb-3">
                                                <input type="email" class="form-control" id="floatingInput"
                                                    placeholder="Email Anda" name="username" required>
                                                <label for="floatingInput">Email</label>
                                                <div class="invalid-feedback">
                                                    Please fill in the Email
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <select class="form-select form-select-lg mb-3"
                                                aria-label="Large select example" name="level" required>
                                                <option selected hidden value="">Pilih Level User</option>
                                                <option value="1">Owner</option>
                                                <option value="2">User</option>
                                            </select>
                                            <div class="invalid-feedback">
                                                Please Select Level
                                            </div>
                                        </div>
                                        <div class="col-lg-8">
                                            <div class="form-floating mb-3">
                                                <input type="number" class="form-control" id="floatingInput"
                                                    placeholder="NO-HP Anda" name="no_hp" required>
                                                <label for="floatingInput">+62-8xxx-xxxxx</label>
                                                <div class="invalid-feedback">
                                                    Please fill in the Phone Number
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-floating mb-3">
                                                    <input type="password" class="form-control" id="floatingPassword"
                                                        placeholder="Nama Anda" value="a" readonly name="password"
                                                        required>
                                                    <label for="floatingPassword">Password</label>
                                                    <div class="invalid-feedback">
                                                        Please fill in the Password
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-floating mb-3">
                                                    <textarea class="form-control" name="alamat" required></textarea>
                                                    <label for="floatingInput">Alamat</label>
                                                    <div class="invalid-feedback">
                                                        Please fill in the Alamat
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="reset" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Reset</button>
                                        <button type="submit" class="btn btn-primary" name="submit_validate_user"
                                            value="a">Save
                                            changes</button>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- Modal end ADD -->
                <?php 
        foreach ($result as $row){
        ?>
                <!-- Modal SEE -->
                <div class="modal fade" id="exampleModalSEE<?php echo $row['id_user']?>" tabindex="-1"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-xl modal-fullscreen-md-down">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Detail User</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form class="needs-validation form-floating" novalidate
                                    action="proses/proses_input_user.php" method="POST">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-floating mb-3">
                                                <input type="text" class="form-control" id="floatingInput"
                                                    placeholder="Your Name" name="nama"
                                                    value="<?php echo $row['nama']?>" readonly>
                                                <label for="floatingInput">Nama</label>
                                                <div class="invalid-feedback">
                                                    Please fill in the Name
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-floating mb-3">
                                                <input type="email" class="form-control" id="floatingInput"
                                                    placeholder="Email Anda" name="username"
                                                    value="<?php echo $row['username']?>" readonly>
                                                <label for="floatingInput">Email</label>
                                                <div class="invalid-feedback">
                                                    Please fill in the Email
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <input type="text" class="form-control" id="floatingInput"
                                                placeholder="Level User" name="level" value="
                                                <?php 
                                        if($row['level'] == 1){
                                            echo " Owner"; } else { echo "User" ; } ?>" readonly>
                                        </div>
                                        <div class="col-lg-8">
                                            <div class="form-floating mb-3">
                                                <input type="text" class="form-control" id="floatingInput"
                                                    placeholder="NO-HP Anda" name="no_hp"
                                                    value="<?php echo $row['no_hp']?>" readonly>
                                                <label for="floatingInput">+62-8xxx-xxxxx</label>
                                                <div class="invalid-feedback">
                                                    Please fill in the Phone Number
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-floating mb-3">
                                                    <textarea class="form-control" name="alamat"
                                                        readonly><?php echo $row['alamat']?></textarea>
                                                    <label for="floatingInput">Alamat</label>
                                                    <div class="invalid-feedback">
                                                        Please fill in the Alamat
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal end SEE -->
                <?php 
        }
        ?>
                <!-- Modal EDIT -->
                <!-- Modal EDIT -->
                <?php 
        foreach ($result as $row){
        ?>
                <div class="modal fade" id="exampleModalEDIT<?php echo $row['id_user']; ?>" tabindex="-1"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-xl modal-fullscreen-md-down">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Edit User</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form class="needs-validation form-floating" novalidate
                                    action="proses/proses_edit_user.php" method="POST">
                                    <input type="hidden" name="id_user" value="<?php echo $row['id_user']; ?>">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-floating mb-3">
                                                <input type="text" class="form-control" id="floatingInput"
                                                    placeholder="Your Name" name="nama"
                                                    value="<?php echo $row['nama']?>" required>
                                                <label for="floatingInput">Nama</label>
                                                <div class="invalid-feedback">
                                                    Please fill in the Name
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-floating mb-3">
                                                <input type="email" class="form-control" id="floatingInput"
                                                    placeholder="Email Anda" name="username"
                                                    value="<?php echo $row['username']?>" required>
                                                <label for="floatingInput">Email</label>
                                                <div class="invalid-feedback">
                                                    Please fill in the Email
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <select class="form-select form-select-lg mb-3"
                                                aria-label="Large select example" name="level" required>
                                                <option hidden value="">Pilih Level User</option>
                                                <option value="1" <?php if($row['level']==1) echo 'selected' ; ?>>Owner
                                                </option>
                                                <option value="2" <?php if($row['level']==2) echo 'selected' ; ?>>User
                                                </option>
                                            </select>
                                            <div class="invalid-feedback">
                                                Please Select Level
                                            </div>
                                        </div>
                                        <div class="col-lg-8">
                                            <div class="form-floating mb-3">
                                                <input type="number" class="form-control" id="floatingInput"
                                                    placeholder="NO-HP Anda" name="no_hp"
                                                    value="<?php echo $row['no_hp']?>" required>
                                                <label for="floatingInput">+62-8xxx-xxxxx</label>
                                                <div class="invalid-feedback">
                                                    Please fill in the Phone Number
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-floating mb-3">
                                                    <textarea class="form-control" name="alamat"
                                                        required><?php echo $row['alamat']?></textarea>
                                                    <label for="floatingInput">Alamat</label>
                                                    <div class="invalid-feedback">
                                                        Please fill in the Alamat
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="reset" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary" name="submit_validate_user"
                                            value="a">Save
                                            changes</button>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- Modal end EDIT -->
                <?php 
        }
        ?>
                <!-- Modal DELETE -->
                <?php 
        foreach ($result as $row) {
        ?>

                <div class="modal fade" id="exampleModalDELETE<?php echo $row['id_user']; ?>" tabindex="-1"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-xl modal-fullscreen-md-down">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Konfirmasi Penghapusan</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form class="needs-validation" novalidate action="proses/proses_delete_user.php"
                                    method="POST">
                                    <input type="hidden" value="<?php echo $row['id_user']; ?>" name="id_user">
                                    <div class="col-lg-12">
                                        <?php if ($row['username'] == $_SESSION['username_user']) { ?>
                                        <div class='alert alert-danger'>Anda tidak dapat menghapus akun sendiri</div>
                                        <?php } else { ?>
                                        <div class='alert alert-danger'>Apakah Anda yakin ingin menghapus
                                            <b>
                                                <?php echo $row['username']; ?>
                                            </b>?
                                        </div>
                                        <?php } ?>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Batal</button>
                                        <button type="submit" class="btn btn-danger" name="submit_validate_user"
                                            value="a" <?php echo ($row['username']==$_SESSION['username_user'])
                                            ? 'disabled' : '' ; ?>>Hapus</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <?php 
        }
        ?>

                <!-- Modal end DELETE -->



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
                                    <th scope="row">
                                        <?php echo $no++ ?>
                                    </th>
                                    <td>
                                        <?php echo $row['nama'] ?>
                                    </td>
                                    <td>
                                        <?php echo $row['username'] ?>
                                    </td>
                                    <td>
                                        <?php 
                                        if($row['level'] == 1){
                                            echo "Owner";
                                        } else {
                                            echo "User";
                                        }
                                        ?>
                                    </td>
                                    <td>
                                        <?php echo $row['no_hp'] ?>
                                    </td>

                                    <td class="d-flex">
                                        <button class="btn btn-outline-info btn-sm me-1" data-bs-toggle="modal"
                                            data-bs-target="#exampleModalSEE<?php echo $row['id_user']?>"><i
                                                class="bi bi-eye"></i></button>
                                        <button class="btn btn-outline-warning btn-sm me-1" data-bs-toggle="modal"
                                            data-bs-target="#exampleModalEDIT<?php echo $row['id_user']; ?>">
                                            <i class="bi bi-pencil-square"></i>
                                        </button>
                                        <button class="btn btn-outline-danger btn-sm" data-bs-toggle="modal"
                                            data-bs-target="#exampleModalDELETE<?php echo $row['id_user']; ?>"><i
                                                class="bi bi-trash"></i></button>
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
    </div>
    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0"><?php
        require('proses\connect.php');
        
        // Query untuk mengambil semua data dari tabel tb_donasi
        $query = "SELECT * FROM tb_donasi";
        $result = $conn->query($query);
        
        if ($result->num_rows > 0) {
            $donations = [];
            while($row = $result->fetch_assoc()) {
                $donations[] = $row;
            }
        } else {
            $donations = [];
        }
        
        $conn->close();
        ?>
        
        <body>
            <div class="container mt-5">
                <h2 class="text-center">Laporan Donasi</h2>
                <div class="col table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Email</th>
                                <th scope="col">Jumlah</th>
                                <th scope="col">Pesan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (!empty($donations)): ?>
                                <?php $no = 1; ?>
                                <?php foreach ($donations as $donasi): ?>
                                    <tr>
                                        <th scope="row"><?php echo $no++; ?></th>
                                        <td><?php echo $donasi['nama']; ?></td>
                                        <td><?php echo $donasi['email']; ?></td>
                                        <td><?php echo $donasi['jumlah']; ?></td>
                                        <td><?php echo $donasi['pesan']; ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php else: ?>
                                <tr>
                                    <td colspan="5" class="text-center">Tidak ada data donasi</td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </body>
        </html>
        </div>

</div>

<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (() => {
        'use strict'

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        const forms = document.querySelectorAll('.needs-validation')

        // Loop over them and prevent submission
        Array.from(forms).forEach(form => {
            form.addEventListener('submit', event => {
                if (!form.checkValidity()) {
                    event.preventDefault()
                    event.stopPropagation()
                }

                form.classList.add('was-validated')
            }, false)
        })
    })()
</script>
<script>const triggerTabList = document.querySelectorAll('#myTab button')
    triggerTabList.forEach(triggerEl => {
        const tabTrigger = new bootstrap.Tab(triggerEl)

        triggerEl.addEventListener('click', event => {
            event.preventDefault()
            tabTrigger.show()
        })
    })</script>
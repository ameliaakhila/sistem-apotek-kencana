<?php
    if (isset($_GET['pesan'])) {
        if ($_GET['pesan'] == "gagal") {
            echo "
            <div class='alert alert-danger alert-dismissible fade show' role='alert'>
                Username atau Password Salah
                <button class='btn-close' type='button' data-bs-dismiss='alert' aria-label='Close'></button>
            </div>
            ";
        } elseif ($_GET['pesan'] == "logout") {
            echo "
            <div class='alert alert-primary alert-dismissible fade show' role='alert'>
                Anda Berhasil Logout
                <button class='btn-close' type='button' data-bs-dismiss='alert' aria-label='Close'></button>
            </div>
            ";
        } elseif ($_GET['pesan'] == "edit_berhasil") {
            echo "
            <div class='alert alert-primary alert-dismissible fade show' role='alert'>
                Update Data Berhasil
                <button class='btn-close' type='button' data-bs-dismiss='alert' aria-label='Close'></button>
            </div>
            ";
        } elseif ($_GET['pesan'] == "hapus_berhasil") {
            echo "
            <div class='alert alert-primary alert-dismissible fade show' role='alert'>
                Hapus Data Berhasil
                <button class='btn-close' type='button' data-bs-dismiss='alert' aria-label='Close'></button>
            </div>
            ";
        } elseif ($_GET['pesan'] == "belum_login") {
            echo "
            <div class='alert alert-primary alert-dismissible fade show' role='alert'>
                Anda Harus Login
                <button class='btn-close' type='button' data-bs-dismiss='alert' aria-label='Close'></button>
            </div>
            ";
        } elseif ($_GET['pesan'] == "tambah_berhasil") {
            echo "
            <div class='alert alert-primary alert-dismissible fade show' role='alert'>
                Tambah Data Berhasil
                <button class='btn-close' type='button' data-bs-dismiss='alert' aria-label='Close'></button>
            </div>
            ";
         } elseif ($_GET['pesan'] == "edit_password_berhasil") {
            echo "
            <div class='alert alert-primary alert-dismissible fade show' role='alert'>
                Edit Password Berhasil
                <button class='btn-close' type='button' data-bs-dismiss='alert' aria-label='Close'></button>
            </div>
            ";
        } elseif ($_GET['pesan'] == "update_clear_temper_berhasil") {
            echo "
            <div class='alert alert-primary alert-dismissible fade show' role='alert'>
                Update Clear Tamper Berhasil
                <button class='btn-close' type='button' data-bs-dismiss='alert' aria-label='Close'></button>
            </div>
            ";
        }
        
    }
?>
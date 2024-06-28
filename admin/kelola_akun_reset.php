<?php
session_start();
include '../koneksi.php';

if (empty($_SESSION['username']) && empty($_SESSION['password'])) {
    echo "<meta http-equiv='refresh' content='0; url=index.php?alert=1'>";
} else {
    if (isset($_POST['simpan'])) {
        if (isset($_SESSION['id_user'])) {
            $pw_lama = mysqli_real_escape_string($koneksi, trim($_POST['pw_lama']));
            $pw_baru = mysqli_real_escape_string($koneksi, trim($_POST['pw_baru']));
            $pw_retype = mysqli_real_escape_string($koneksi, trim($_POST['pw_retype']));

            $id_user = $_SESSION['id_user'];

            $edit_pw = mysqli_query($koneksi, "SELECT password FROM tb_user WHERE id_user=$id_user")
                or die('Ada kesalahan pada query seleksi password: ' . mysqli_error($koneksi));
            $data = mysqli_fetch_assoc($edit_pw);
            var_dump($data);
            if (!password_verify($password, $data['password'])) {
                header("Location: kelola_modal_reset.php?pesan=edit_gagal");
            } else {
                if ($pw_baru != $pw_retype) {
                    header("Location: kelola_modal_reset.php?module=password&alert=2");
                } else {
                    $pw_baru_hashed = password_hash($pw_baru, PASSWORD_DEFAULT);
                    $query = mysqli_query($koneksi, "UPDATE tb_user SET password = '$pw_baru_hashed' WHERE id_user = '$id_user'")
                        or die('Ada kesalahan pada query update password: ' . mysqli_error($koneksi));

                    if ($query) {
                        header("Location: .kelola_modal_reset.php?module=password&alert=3");
                    }
                }
            }
        }
    }
}

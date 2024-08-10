<?php
                                                    // Tanggal saat ini
                                                    $tanggal = $d['tgl_kadaluarsa']; // Contoh tanggal dalam format m-d-Y

                                                    // Formatkan tanggal kadaluarsa dan tanggal saat ini ke format Y-m
                                                    $bulanTahunKadaluarsa = date('Y-m', strtotime($tanggal));
                                                    $bulanTahunSkrg = date('Y-m');

                                                    // Debugging output
                                                    // var_dump($bulanTahunSkrg);
                                                    // var_dump($bulanTahunKadaluarsa);

                                                    // Perbandingan tanggal
                                                    if ($bulanTahunSkrg > $bulanTahunKadaluarsa) {
                                                        $status = "Obat Kadaluarsa";
                                                        $badgeClass = "badge-danger";
                                                    } elseif ($bulanTahunSkrg < $bulanTahunKadaluarsa) {
                                                        $status = "Obat Aman Digunakan";
                                                        $badgeClass = "badge-success";
                                                    } elseif ($bulanTahunSkrg = $bulanTahunKadaluarsa) {
                                                        $status = "Obat Kadaluarsa";
                                                        $badgeClass = "badge-danger";
                                                    } else {
                                                        $status = "Obat Tidak Terdeteksi";
                                                        $badgeClass = "badge-light";
                                                    }

                                                    // Menampilkan badge dengan status yang sesuai
                                                    echo "<div class='bootstrap-badge'>
                                                            <span class='badge badge-sm $badgeClass'>$status</span>
                                                        </div>";
                                                    ?>
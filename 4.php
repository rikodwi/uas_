<?php
                                        $getpesanan = mysqli_query($koneksi,"SELECT * FROM pesanan p, pelanggan pl WHERE p.id_pelanggan=pl.id_pelanggan AND id_pesanan='202211'");
                                        ?>
<?php
                                        $get = mysqli_query($koneksi,"SELECT * FROM detail_pesanan p, produk pr WHERE p.id_produk=pr.id_produk AND  id_pesanan='$idp'");
                                        $i=1;
                                        while($p=mysqli_fetch_array($get)){
                                            $qty = $p['qty'];
                                            $harga = $p['harga'];
                                            $nama_produk = $p ['nama_produk'];
                                            $subtotal = $qty * $harga;
                                    
                                    
                                    ?>
                                        <tr>
                                            
                                            <td><?= $si++; ?></td>
                                            <td><?= $nama_produk; ?></td>
                                            <td><?= $harga; ?></td>
                                            <td><?= $qty; ?></td>
                                            <td><?= $subtotal; ?></td>
                                            <td>tampilkan | edit</td>
                                        </tr>
                                        <?php };?>
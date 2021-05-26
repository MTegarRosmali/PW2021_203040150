<?php 
 require '../functions.php';

$handphone = cari($_POST['keyword'])

?>
<table class="table table-bordered table-striped table-hover text-center bg-warning" >
                <tr>
                    <th>#</th>
                    <th>Detail</th>
                    <th>Gambar</th>
                    <th>Nama</th>
                </tr>

                <?php if(empty($handphone)) : ?>
                <tr>
                    <td colspan="4"><p style="color: red; font-style: italic;">data handphone tidak ditemukan!</p></td>
                </tr>
                <?php endif; ?>

                <?php $i = 1; 
                foreach($handphone as $hp) : ?>
                    <tr>
                        <td><?= $i++; ?></td>
                        <td>
                            <a href="detail.php?id=<?= $hp['id']; ?>">Lihat Detail</a>
                        </td>
                        <td><img src="img/<?= $hp['Gambar'] ?>" width="100"></td>
                        <td><?= $hp['Nama']; ?></td>
                    </tr>
                <?php endforeach; ?>
            </table>
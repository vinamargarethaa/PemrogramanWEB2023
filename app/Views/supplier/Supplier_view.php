<div class="container pt-5">
    <a href="<?= base_url('supplier/tambah');?>" class="btn btn-dark mb-2">Tambah Data</a>
    <div class="card">
        <div class="card-header bg-dark text-white">
            <h4 class="card-title">Data Supplier</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama Supplier</th>
                            <th>Alamat Supplier</th>
                            <th>Aksi</th>
                        </tr> 
                    </thead>
                    <tbody>
                        <?php $no=1; foreach($getSupplier as $isi){?>
                            <tr>
                                <td><?= $no;?></td>
                                <td><?= $isi['nama_supplier'];?></td>
                                <td><?= $isi['alamat_supplier'];?></td>
                                <td>
                                    <a href="<?= base_url('supplier/edit/'.$isi['id_supplier']);?>" 
                                    class="btn btn-dark">
                                    Edit</a>
                                    <a href="<?= base_url('supplier/hapus/'.$isi['id_supplier']);?>" 
                                    onclick="javascript:return confirm('Apakah ingin menghapus data supplier ?')"
                                    class="btn btn-secondary">
                                    Hapus</a>

                                </td>
                            </tr>
                        <?php $no++;}?>
                    </tbody>  

                </table>
            </div>
        </div>
    </div>
</div>
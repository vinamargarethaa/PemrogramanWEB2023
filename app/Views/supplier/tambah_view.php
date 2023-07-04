<div class="container p-5">
    <a href="<?= base_url('supplier');?>" class="btn btn-secondary mb-2">Kembali</a>
    <div class="card">
        <div class="card-header bg-dark text-white">
            <h4 class="card-title">Tambah Data Supplier</h4>
        </div>
        <div class="card-body">
            <form method="post" action="<?= base_url('supplier/add');?>">
                <div class="form-group">
                    <label for="">Nama Supplier</label>
                    <input type="text" name="nama" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">Alamat Supplier</label>
                    <input type="text" name="alamat" class="form-control" required>
                </div>
                <button class="btn btn-dark">Tambah Data</button>
            </form>
            
        </div>
    </div>
</div>
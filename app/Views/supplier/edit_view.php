<div class="container p-5">
    <a href="<?= base_url('supplier');?>" class="btn btn-secondary mb-2">Kembali</a>
    <div class="card">
        <div class="card-header bg-dark text-white">
            <h4 class="card-title">Edit Supplier : <?= $supplier->nama_supplier;?></h4>
        </div>
        <div class="card-body">
            <form method="post" action="<?= base_url('supplier/update');?>">
                <div class="form-group">
                    <label for="">Nama Supplier</label>
                    <input type="text" value="<?= $supplier->nama_supplier;?>" name="nama" required class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Alamat Supplier</label>
                    <input type="text" value="<?= $supplier->nama_supplier;?>" name="alamat" required class="form-control">
                </div>
                <input type="hidden" value="<?= $supplier->id_supplier;?>" name="id_supplier">
                <button class="btn btn-dark">Edit Data</button>
            </form>
            
        </div>
    </div>
</div>
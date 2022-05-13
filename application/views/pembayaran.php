<div class="container-fluid">
    <div class="row"></div>
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <div class="btn btn-sm btn-success">
            <?php  
            $grand_total=0;
            if ($keranjang = $this->cart->contents()){
                foreach ($keranjang as $item){
                    $grand_total = $grand_total + $item['subtotal'];
                }
                echo "<h5>Total Belanja Anda: Rp. ".number_format($grand_total,0,',','.');

            
            ?>
        </div><br><br>

        <h3>Input Alamat pengiriman dan Pembayaran</h3>

        <form action="<?php echo base_url('dashboard/proses_pesanan')?> " method="post">
            <div class="form-group">
                <label>Nama Lengkap</label>
                <input class="form-control" type="text" name="nama" placeholder="Nama Lengkap Anda">
            </div>

            <div class="form-group">
                <label>Alamat Lengkap</label>
                <input class="form-control" type="text" name="alamat" placeholder="Alamat Lengkap Anda">
            </div>

            <div class="form-group">
                <label>No. telepon</label>
                <input class="form-control" type="text" name="no_telpn" placeholder="Nomor Telepon Anda">
            </div>

            <div class="form-group">
                <label>Jasa Pengiriman</label>
                <select class="form-control">
                <option>JNE</option>
                <option>TIKI</option>
                <option>J&T</option>
                <option>Wahana</option>
                <option>Ninja</option>
                </select>
            </div>

            <div class="form-group">
                <label>Bank</label>
                <select class="form-control">
                <option>BCA - XXXXXXX</option>
                <option>BNI - XXXXXXX</option>
                <option>BRI - XXXXXXX</option>
                <option>BSI - XXXXXXX</option>
                <option>BTN - XXXXXXX</option>
                </select>
            </div>

            <button type="submit" class="btn btn-sm btn-primary mb-3">Pesan Sekarang </button>

        </form>
        <?php 
        } else{
            echo "Keranjang Belanja Anda Masih Kosong";
        } 
        ?>

    </div>

    
    <div class="col-md-2"></div>
</div>
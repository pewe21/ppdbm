<div class="container">
    <div class="col-lg-12 col-md-12" style="margin-top: 100px;">
        <?php if ($this->session->flashdata('err')) : ?>
            <div class="alert alert-warning" role="alert">
                <b>
                    <?= $this->session->flashdata('err') ?>
                </b>
            </div>
        <?php endif ?>
        <div class="panel-body">
            <form enctype="multipart/form-data" method="post" id="form-data">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label>Nama Lengkap</label>
                            <input type="text" class="form-control" name="nama_pendaftar">
                        </div>
                        <div class="form-group">
                            <label>NISN</label>
                            <input type="text" class="form-control" id="nisn" name="nisn">
                            <small class="form-text text-muted">*Masukkan 10 Angka NISN</small>
                        </div>
                        <div class="form-group">
                            <label>Tempat Lahir</label>
                            <input type="text" class="form-control" name="tempat_lahir">
                        </div>
                        <div class="form-group">
                            <label>Tanggal Lahir</label>
                            <input type="text" class="form-control" id="datepicker" name="tgl_lahir" readonly>
                        </div>
                        <div class="form-group">
                            <label>Jenis Kelamin</label>
                            <select class="form-control" name="jk">
                                <option value="">Pilih Jekel</option>
                                <option value="L">Laki-Laki</option>
                                <option value="P">Perempuan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Agama</label>
                            <input type="text" class="form-control" name="agama" value="Islam" readonly>
                        </div>
                        <div class="form-group">
                            <label>Asal Sekolah</label>
                            <input type="text" class="form-control" name="asal_sekolah">
                        </div>
                        <div class="form-group">
                            <label>NPSN</label>
                            <input type="text" class="form-control" name="npsn">
                        </div>
                        <div class="form-group">
                            <label>NSM/NSS</label>
                            <input type="text" class="form-control" name="nsm">
                        </div>
                        <div class="form-group">
                            <label>No. Whatsapp</label>
                            <input type="text" id="wa" class="form-control" name="telp" placeholder="08xxx">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" class="form-control" name="email">
                        </div>
                        <div class="form-group">
                            <label>Provinsi</label>
                            <select class="form-control" id="provinsii">
                                <option value="">Pilih Provinsi</option>
                            </select>
                            <input type="text" name="provinsi" id="txtp">
                        </div>
                        <div class="form-group">
                            <label>Kabupaten/Kota</label>
                            <select class="form-control" id="kotaa" disabled>
                                <option value="">Pilih Kota</option>
                            </select>
                            <input type="text" name="kabupaten" id="txtb">
                        </div>
                        <div class="form-group">
                            <label>Kecamatan</label>
                            <select class="form-control" id="kecam" disabled>
                                <option value="">Pilih Kecamatan</option>
                            </select>
                            <input type="text" name="kecamatan" id="txtc">
                        </div>
                        <div class="form-group">
                            <label>Alamat</label>
                            <textarea style="resize: none;" class="form-control" name="alamat" rows="5"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Nama Ayah</label>
                            <input type="text" class="form-control" name="nama_ayah">
                        </div>
                        <div class="form-group">
                            <label>Nama Ibu</label>
                            <input type="text" class="form-control" name="nama_ibu">
                        </div>
                    </div>
                </div>
                <div class="text-right">
                    <button onclick="return confirm ('Yakin data yang kamu inputkan sudah benar?');" type="submit" class="btn btn-primary">Daftar Akun <span class="fa fa-arrow-right"></span></button>
                </div>
            </form>
        </div>
    </div>
</div>
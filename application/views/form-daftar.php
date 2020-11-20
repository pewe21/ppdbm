<div class="container">
    <div class="col-lg-12 col-md-12">
        <div class="panel-body">
            <form>
                <div class="row" style="margin-top: 90px;">
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label>Nama Lengkap</label>
                            <input type="text" class="form-control" name="nama">
                        </div>
                        <div class="form-group">
                            <label>NISN</label>
                            <input type="text" class="form-control" id="nisn" name="nisn">
                            <small class="form-text text-muted">*Masukkan 10 Angka NISN</small>
                        </div>
                        <div class="form-group">
                            <label>Tempat Lahir</label>
                            <input type="text" class="form-control" name="tempat">
                        </div>
                        <div class="form-group">
                            <label>Tanggal Lahir</label>
                            <input type="text" class="form-control" id="datepicker" name="tanggal" readonly>
                        </div>
                        <div class="form-group">
                            <label>Agama</label>
                            <input type="text" class="form-control" name="agama" value="Islam" readonly>
                        </div>
                        <div class="form-group">
                            <label>Asal Sekolah</label>
                            <input type="text" class="form-control" name="asal">
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
                            <label>Email</label>
                            <input type="text" class="form-control" name="email" required>
                        </div>
                        <div class="form-group">
                            <label>No. Whatsapp</label>
                            <input type="text" id="wa" class="form-control" name="no_wa" placeholder="08xxx">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label>Provinsi</label>
                            <select class="form-control" name="provinsi" id="provinsi">
                                <option value="">Pilih Provinsi</option>
                            </select>
                            <input type="hidden" name="txtprov" id="txtp">
                        </div>
                        <div class="form-group">
                            <label>Kabupaten/Kota</label>
                            <select class="form-control" name="kabupaten" id="kota" disabled>
                                <option value="">Pilih Kota</option>
                            </select>
                            <input type="hidden" name="txtkab" id="txtb">
                        </div>
                        <div class="form-group">
                            <label>Kecamatan</label>
                            <select class="form-control" name="kecamatan" id="kecamatan" disabled>
                                <option value="">Pilih Kecamatan</option>
                            </select>
                            <input type="hidden" name="txtkec" id="txtc">
                        </div>
                        <div class="form-group">
                            <label>Alamat</label>
                            <textarea style="resize: none;" class="form-control" name="alamat" rows="5"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Nama Ayah</label>
                            <input type="text" class="form-control" name="ayah">
                        </div>
                        <div class="form-group">
                            <label>Nama Ibu</label>
                            <input type="text" class="form-control" name="ibu">
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
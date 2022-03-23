<div class="row klik_menu">
    <div class="col-3 g-3">
        <div class="card menu" style="width: 13.2;">
            <a href="#" id="sekolah">
                <div class="card-body">
                    <img src="asset/img/menu/sekolah.jpg" style="height:100px;margin-bottom: 0.75rem;">
                    <span>SEKOLAH</span>
                </div>
            </a>
        </div>
    </div>
    <div class="col-3 g-3">
        <div class="card menu" style="width: 13.2;">
            <a href="#" id="siswa">
                <div class="card-body">
                    <img src="asset/img/menu/siswa.jpg" style="height:100px;margin-bottom: 0.75rem;">
                    <span>SISWA</span>
                </div>
            </a>
        </div>
    </div>
    <div class="col-3 g-3">
        <div class="card menu" style="width: 13.2;">
            <a href="#" id="guru">
                <div class="card-body">
                    <img src="asset/img/menu/guru.jpg" style="height:100px;margin-bottom: 0.75rem;">
                    <span>GURU</span>
                </div>
            </a>
        </div>
    </div>
    <div class="col-3 g-3">
        <div class="card menu" style="width: 13.2;">
            <a href="#" id="karyawan">
                <div class="card-body">
                    <img src="asset/img/menu/karyawan.jpg" style="height:100px;margin-bottom: 0.75rem;">
                    <span>KARYAWAN</span>
                </div>
            </a>
        </div>
    </div>

    <div class="col-3 g-3">
        <div class="card menu" style="width: 13.2;">
            <a href="#" id="surat">
                <div class="card-body">
                    <img src="asset/img/menu/surat.jpg" style="height:100px;margin-bottom: 0.75rem;">
                    <span>SURAT-SURAT</span>
                </div>
            </a>
        </div>
    </div>
    <div class="col-3 g-3">
        <div class="card menu" style="width: 13.2;">
            <a href="#" id="keuangan">
                <div class="card-body">
                    <img src="asset/img/menu/keuangan.jpg" style="height:100px;margin-bottom: 0.75rem;">
                    <span>KEUANGAN</span>
                </div>
            </a>
        </div>
    </div>
    <div class="col-3 g-3">
        <div class="card menu" style="width: 13.2;">
            <a href="#" id="menu">
                <div class="card-body">
                    <img src="asset/img/menu/gembok.jpg" style="height:100px;margin-bottom: 0.75rem;">
                    <span>MENU</span>
                </div>
            </a>
        </div>
    </div>
    <div class="col-3 g-3">
        <div class="card menu" style="width: 13.2;">
            <a href="#" id="menu">
                <div class="card-body">
                    <img src="asset/img/menu/gembok.jpg" style="height:100px;margin-bottom: 0.75rem;">
                    <span>MENU</span>
                </div>
            </a>
        </div>
    </div>

    <div class="col-3 g-3">
        <div class="card menu" style="width: 13.2;">
            <a href="#" id="menu">
                <div class="card-body">
                    <img src="asset/img/menu/gembok.jpg" style="height:100px;margin-bottom: 0.75rem;">
                    <span>MENU</span>
                </div>
            </a>
        </div>
    </div>
    <div class="col-3 g-3">
        <div class="card menu" style="width: 13.2;">
            <a href="#" id="menu">
                <div class="card-body">
                    <img src="asset/img/menu/gembok.jpg" style="height:100px;margin-bottom: 0.75rem;">
                    <span>MENU</span>
                </div>
            </a>
        </div>
    </div>
    <div class="col-3 g-3">
        <div class="card menu" style="width: 13.2;">
            <a href="#" id="menu">
                <div class="card-body">
                    <img src="asset/img/menu/gembok.jpg" style="height:100px;margin-bottom: 0.75rem;">
                    <span>MENU</span>
                </div>
            </a>
        </div>
    </div>
    <div class="col-3 g-3">
        <div class="card menu" style="width: 13.2;">
            <a href="#" id="setting">
                <div class="card-body">
                    <img src="asset/img/menu/setting.jpg" style="height:100px;margin-bottom: 0.75rem;">
                    <span>SETTING</span>
                </div>
            </a>
        </div>
    </div>
</div>

<script>
$(document).ready(function(){
    $('.klik_menu a').click(function(){
        var hal = $(this).attr('id');
        $('.konten').load('kategori/'+hal+'.php');
        return false;
    });
});
</script>


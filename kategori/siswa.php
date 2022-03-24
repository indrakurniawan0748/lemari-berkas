<div class="row klik_menu">
    <div class="col-12 g-3">
        <div class="card submenu">
            <div class="card-body">
                <button type="button" class="btn btn-light btn-sm back"><i class="ti-back-left"></i> back</button>
                <button type="button" class="btn btn-primary btn-sm float-end">+ Category</button>

                <ol class="list-group list-group-numbered" style="margin-top:20px">
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                        <div class="ms-2 me-auto menu-cat">
                            <div class="fw-bold">Dokumen Siswa</div>
                                <div class="show-item-1" style="display:none">
                                    <div>- Ijazah <span class="badge bg-primary rounded-pill">14</span></div>
                                    <div>- E-Raport <span class="badge bg-primary rounded-pill">14</span></div>
                                </div>
                        </div>
                        <i class="ti-angle-right" id-cat="1" stat="hide" style="cursor:pointer"></i>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-start" >
                        <div class="ms-2 me-auto menu-cat">
                            <div class="fw-bold">Dokumen Keluarga </div>
                                <div class="show-item-2" style="display:none">
                                    <div>- Kartu Keluarga <span class="badge bg-primary rounded-pill">14</span></div>
                                    <div>- KTP Ayah/Ibu <span class="badge bg-primary rounded-pill">14</span></div>
                                </div>
                        </div>
                        <i class="ti-angle-right" id-cat="2" stat="hide" style="cursor:pointer"></i>
                    </li>
                </ol>
            </div>
        </div>
    </div>
    
</div>

<script>
$(document).ready(function(){
    $('.back').click(function(){
        $('.konten').load('kategori/home.php');
        return false;
    });

    $('li i').click(function(){
        var id   = $(this).attr('id-cat');
        var stat = $(this).attr('stat');
        
        if(stat=='hide'){
            $('.show-item-'+id).show('slow');
            $(this).attr('stat','show');
            $(this).attr('class','ti-angle-down');
        }else{
            $('.show-item-'+id).hide('slow');
            $(this).attr('stat','hide');
            $(this).attr('class','ti-angle-right');
        }
        return false;
    });

    $("li").contextmenu(function(e){
    e.preventDefault();
    
    var jenis = $(this).attr('data-jenis');
    var norm = $(this).attr('data-norm');
    var kdrj = $(this).attr('data-kdrj');
        $('#judul').text($(this).attr('data-nama'));
        $('.pk').attr('href','/print/kwitansi?tx='+jenis+'&id='+norm+'&kdrj='+kdrj);
        $('.pl').attr('href','/print/label?tx='+jenis+'&id='+norm+'&kdrj='+kdrj);
        $('.ps').attr('href','/print/screening?tx='+jenis+'&id='+norm+'&kdrj='+kdrj);
        
    var contextElement = document.getElementById("context-menu");
    contextElement.style.top = e.pageY + "px";
    contextElement.style.left = e.pageX + "px";
    contextElement.classList.add("active");
    
    });
    $("body , #upload").click(function(){
        document.getElementById("context-menu").classList.remove("active");
    });
    
});
</script>
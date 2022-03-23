<div class="row klik_menu">
    <div class="col-12 g-3">
        <div class="card submenu">
            <div class="card-body">
            <button type="button" class="btn btn-light btn-sm back" style="margin-bottom:20px"><img src="https://cdn-icons-png.flaticon.com/128/263/263085.png" height="20px"> back</button>
            <button type="button" class="btn btn-primary btn-sm float-end">+ Add Category</button>

                <ol class="list-group list-group-numbered">
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                        <div class="ms-2 me-auto">
                        <div class="fw-bold">Subheading</div>
                        Content for list item
                        </div>
                        <span class="badge bg-primary rounded-pill">14</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                        <div class="ms-2 me-auto">
                        <div class="fw-bold">Subheading</div>
                        Content for list item
                        </div>
                        <span class="badge bg-primary rounded-pill">14</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                        <div class="ms-2 me-auto">
                        <div class="fw-bold">Subheading</div>
                        Content for list item
                        </div>
                        <span class="badge bg-primary rounded-pill">14</span>
                    </li>
                </ol>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function(){
        
        // fungsi yang mengatur konten mana yang akan ditampilkan
        $('.back').click(function(){
           $('.konten').load('kategori/home.php');
            return false;
            
        });
    });
</script>
<!-- <link rel="stylesheet" href="<?php echo base_url("assets/dist/css/styleelement.css") ?>">
<link rel="stylesheet" href="<?php echo base_url("assets/dist/css/styleupload.css") ?>">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
 
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>

<style>
  .peped-30 {
    padding: 30px!important;
  }
  .peped-10 {
    padding: 10px!important;
  }
  a.draggable {
  display: inline-block;
  cursor: move;
}
.sembarang {
  min-height: 100px;
  border: 1px dashed #ccc;
}
[class^="col-md-"] {
  min-height: 100px;
}
.solid-section {
  background: #e1e1e1;
}
</style>
<div class="bg-light py-3">
  <div class="container-fluid px-5">
    <a href="<?php echo base_url("sw-admin/element") ?>" class="btn btn-primary">Return to Admin</a>
  </div>
</div>
<section class="container-fluid px-5">
  <form method="post">


    <div class="form-group mb-3">
      <label>Title</label>
      <input type="text" class="form-control" name="post_title" placeholder="Post Title" value="<?php echo set_value("post_title", $element['post_title']) ?>">
      <?php echo form_error("post_title") ?>
      <textarea name="post_content" style="display: none;" id="hiddentext"><?php echo $element['post_content'] ?></textarea>
    </div>
    <div class="isis">
      <div class="row jangan">
        <div class="col-md-3 no-border">
          <div class="accordion accordion-flush" id="accordionFlushExample">
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">Area</button>
              </h2>
              <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                  <button id="section1" class="btn btn-outline-info draggable" draggable="true" ondragstart="drag(event)" data-type="section">Section</button>
                  <button id="section2" class="btn btn-outline-info draggable" draggable="true" ondragstart="drag(event)" data-type="solid section">Solid Section</button>
                  <button id="container1" class="btn btn-outline-info draggable" draggable="true" ondragstart="drag(event)" data-type="container">Container</button>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">Grid</button>
              </h2>
              <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">


                  <button id="grid2" class="btn btn-outline-info draggable" draggable="true" ondragstart="drag(event)" data-type="grid2">Grid 2</button>
                  <button id="grid2" class="btn btn-outline-info draggable" draggable="true" ondragstart="drag(event)" data-type="grid3">Grid 3</button>
                  <button id="grid2" class="btn btn-outline-info draggable" draggable="true" ondragstart="drag(event)" data-type="grid4">Grid 4</button>
                  <button id="row1" class="btn btn-outline-info draggable" draggable="true" ondragstart="drag(event)" data-type="row">Row</button>
                  <button id="g1" class="btn btn-outline-info draggable" draggable="true" ondragstart="drag(event)" data-type="isigrid1">Isi Grid 1</button>
                  <button id="g2" class="btn btn-outline-info draggable" draggable="true" ondragstart="drag(event)" data-type="isigrid2">Isi Grid 2</button>
                  <button id="g3" class="btn btn-outline-info draggable" draggable="true" ondragstart="drag(event)" data-type="isigrid3">Isi Grid 3</button>
                  <button id="g4" class="btn btn-outline-info draggable" draggable="true" ondragstart="drag(event)" data-type="isigrid4">Isi Grid 4</button>
                  <button id="g5" class="btn btn-outline-info draggable" draggable="true" ondragstart="drag(event)" data-type="isigrid5">Isi Grid 5</button>
                  <button id="g6" class="btn btn-outline-info draggable" draggable="true" ondragstart="drag(event)" data-type="isigrid6">Isi Grid 6</button>
                  <button id="g7" class="btn btn-outline-info draggable" draggable="true" ondragstart="drag(event)" data-type="isigrid7">Isi Grid 7</button>
                  <button id="g8" class="btn btn-outline-info draggable" draggable="true" ondragstart="drag(event)" data-type="isigrid8">Isi Grid 8</button>
                  <button id="g9" class="btn btn-outline-info draggable" draggable="true" ondragstart="drag(event)" data-type="isigrid9">Isi Grid 9</button>
                  <button id="g10" class="btn btn-outline-info draggable" draggable="true" ondragstart="drag(event)" data-type="isigrid10">Isi Grid 10</button>

                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsenavbar" aria-expanded="false" aria-controls="flush-collapsenavbar">Navbar</button>
              </h2>
              <div id="flush-collapsenavbar" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                  <button id="navbar1" class="btn btn-outline-info draggable" draggable="true" ondragstart="drag(event)" data-type="navbar">outline-info Navbar</button>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">Text</button>
              </h2>
              <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">

                  <button id="h1" class="btn btn-outline-info draggable" draggable="true" ondragstart="drag(event)" data-type="h1">Heading 1</button>
                  <button id="h2" class="btn btn-outline-info draggable" draggable="true" ondragstart="drag(event)" data-type="h2">Heading 2</button>
                  <button id="h3" class="btn btn-outline-info draggable" draggable="true" ondragstart="drag(event)" data-type="h3">Heading 3</button>
                  <button id="h4" class="btn btn-outline-info draggable" draggable="true" ondragstart="drag(event)" data-type="h4">Heading 4</button>
                  <button id="h5" class="btn btn-outline-info draggable" draggable="true" ondragstart="drag(event)" data-type="h5">Heading 5</button>
                  <button id="h6" class="btn btn-outline-info draggable" draggable="true" ondragstart="drag(event)" data-type="h6">Heading 6</button>
                  <button id="p1" class="btn btn-outline-info draggable" draggable="true" ondragstart="drag(event)" data-type="p">Paragraph</button>

                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">Etc</button>
              </h2>
              <div id="flush-collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">

                  <button id="sliderx" class="btn btn-outline-info draggable" draggable="true" ondragstart="drag(event)" data-type="carousel caption">Carousel Caption</button>
                  <button id="slider1" class="btn btn-outline-info draggable" draggable="true" ondragstart="drag(event)" data-type="carousel">Carousel</button>
                  <button id="slider2" class="btn btn-outline-info draggable" draggable="true" ondragstart="drag(event)" data-type="multi carousel">Multi Carousel</button>
                  <button id="slider2" class="btn btn-outline-info draggable" draggable="true" ondragstart="drag(event)" data-type="double carousel">Double Carousel</button>
                  <button id="image1" class="btn btn-outline-info draggable" draggable="true" ondragstart="drag(event)" data-type="image">image</button>
                  <button id="image2" class="btn btn-outline-info draggable" draggable="true" ondragstart="drag(event)" data-type="image rounded">image rounded</button>
                  <button id="link1" class="btn btn-outline-info draggable" draggable="true" ondragstart="drag(event)" data-type="link">Link</button>
                  <button id="iframe1" class="btn btn-outline-info draggable" draggable="true" ondragstart="drag(event)" data-type="iframe">Iframe</button>
                  <button id="card1" class="btn btn-outline-info draggable" draggable="true" ondragstart="drag(event)" data-type="vertical card">Vertical Card</button>
                  <button id="card2" class="btn btn-outline-info draggable" draggable="true" ondragstart="drag(event)" data-type="horizontal card">Horizontal Card</button>

                </div>
              </div>
            </div>
          </div>

          <div id="letak" class="py-2"></div>
        </div>
        <div class="col-md-9 ">
          <div id="eekditor" ondrop="drop(event)" ondragover="allowDrop(event)" style="max-height: 600px;overflow-y: scroll;"><?php echo $element['post_content'] ?></div>
          <br>

        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-3">
        <div class="row">
          <div class="col-6 text-start">
            <button class="btn btn-primary">Save</button>
          </div>
          <div class="col-6 text-end">
            <a href="<?php echo base_url("sw-admin/element") ?>" class="btn btn-danger">Close</a>
          </div>
        </div>
      </div>
    </div>

  </form>
</section>

<div class="modal fade" id="image-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-lg modal-xl" role="document">
    <div class="modal-content" style="border-radius: 0px">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Media Library</h4>
      </div>
      <div class="modal-body">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
        <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Upload File</button>
        </li>
        <li class="nav-item" role="presentation">
        <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Media Library</button>
        </li>


        </ul>
        <br>
        <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
          <form  id="uploadimage" method="post" enctype="multipart/form-data" action="" class="form-upload">
            <div class="form-group files">
              <input type="file" class="name" name="name">
            </div>
            <div class="progress hidden">
              <div class="progress-bar" role="progressbar"  aria-valuemin="0" aria-valuemax="100" style="width: 0%;">
              </div>
            </div>
          </form>
        </div>
        <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
          <div class="row">
                <div class="col-md-9" style="border-right: 1px solid #f1f1f1">
                  <form method="post"  style="margin-bottom: 10px;">
                    <div class="form-group">
                      <div class="input-group mb-2">
                        <input type="text" class="form-control" name="search" placeholder="Media title..">
                        <div class="input-group-btn">
                          <button class="btn btn-primary btn-search">Search</button>
                        </div>
                      </div>
                    </div>
                  </form>
                  <div class="clearfix"></div>
                  <div class="progress">
                    <div class="progress-bar" role="progressbar"  aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>
                  </div>
                  <div class=" media-holder">
                    <div class="row media-place"></div>
                    <div class="clearfix"></div>
                    <div class="text-center">
                      <a href="" class="btn btn-default btn-load-more" posisi="0" batas="4">
                        <i class="fa fa-reload"></i> Load More
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-edit hidden">
                    <form method="post">
                      <div class="form-group">
                        <a href="" class="delete text-danger small">Delete Permanent</a>
                      </div>
                      <input type="hidden" name="media_id" class="form-control">
                      <div class="form-group">
                        <label>Url</label>
                        <input type="text" class="form-control" name="media_url" readonly>
                      </div>
                      <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="media_title" class="form-control">
                      </div>
                      <div class="form-group">
                        <label>Size</label>
                        <select class="form-control size">
                          <option value="">Original Size</option>
                          <option value="thumbnail">Thumbnail</option>
                          <option value="large">Large</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label>Caption</label>
                        <textarea class="form-control" name="media_caption"></textarea>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
        </div>
        </div>
        
      </div>
      <div class="modal-footer">
        <button class="btn btn-primary disabled" id="insert">Insert Post</button>
      </div>
    </div>
  </div>
</div>


<script>
/* =========================
   UTIL & BOOTSTRAP HELPERS
   ========================= */

const $d = document;
let selected_id = null;          // elemen terakhir yg dipilih di builder
let selected_is_container = false; // true kalau targetnya kontainer, bukan <img>
let lastPickedMediaId = null;    // media terpilih di modal
let mediaPagePos = 0;            // posisi pagination grid
const MEDIA_PAGE_SIZE = 4;

// Bootstrap 5 Modal helper
function getModal(el) {
  return bootstrap.Modal.getOrCreateInstance(el);
}

/* =========================
   HIDDEN TEXT SYNC (editor)
   ========================= */
setInterval(() => {
  const ed = $d.getElementById('eekditor');
  const hid = $d.getElementById('hiddentext');
  if (ed && hid) hid.value = ed.innerHTML;
}, 500);

/* =========================
   AJAX HELPERS
   ========================= */

function ajaxPost(url, data, onSuccess, onError) {
  $.ajax({
    type: 'POST',
    url,
    data,
    success: onSuccess,
    error: onError || function (xhr) { console.error('AJAX error:', xhr.responseText || xhr.statusText); }
  });
}

function reloadMediaGrid({ posisi = 0, append = false } = {}) {
  mediaPagePos = posisi;
  $('.progress').removeClass('hidden');
  ajaxPost('<?php echo base_url("ajax/showmedia") ?>', 'batas=' + MEDIA_PAGE_SIZE + '&posisi=' + posisi, function (html) {
    $('.progress').addClass('hidden');
    if (append) {
      $(".media-place").append(html);
    } else {
      $(".media-place").html(html);
    }
    // re-apply selection if any
    if (lastPickedMediaId) {
      $('.media-image').removeClass('img-selected');
      $('.media-image[idnya="' + lastPickedMediaId + '"]').addClass('img-selected');
      enableInsertButton(true);
    }
  });
}

function fetchMediaDetail(id, cb) {
  ajaxPost('<?php echo base_url("ajax/getmedia") ?>', 'id=' + id, function (json) {
    try {
      const data = typeof json === 'string' ? JSON.parse(json) : json;
      cb(data);
    } catch (e) {
      console.error('Invalid JSON from getmedia:', json);
    }
  });
}

/* =========================
   MODAL WIRING
   ========================= */

const modalEl = $d.getElementById('image-modal');
const insertBtn = $d.getElementById('insert');
const progressBar = $('.progress-bar');
const tabs = {
  upload: '#home-tab',
  uploadPane: '#home-tab-pane',
  library: '#profile-tab',
  libraryPane: '#profile-tab-pane'
};

// Pastikan tombol close lama (markup Bootstrap 4) tetap nutup modal di Bootstrap 5
$(document).on('click', '.close,[data-dismiss="modal"]', function () {
  getModal(modalEl).hide();
});

// Buka modal dari tombol “Browse” (panel kanan editor)
$(document).on('click', '#browse', function () {
  // reset state
  lastPickedMediaId = null;
  enableInsertButton(false);
  // tampilkan tab Library dan load awal
  const tabBtn = $d.querySelector(tabs.library);
  if (tabBtn) new bootstrap.Tab(tabBtn).show();
  reloadMediaGrid({ posisi: 0, append: false });
  getModal(modalEl).show();
});

// Buka modal dari tombol/mekanisme lain yg pakai .add-media
$(document).on('click', '.add-media', function (e) {
  e.preventDefault();
  lastPickedMediaId = null;
  enableInsertButton(false);
  const tabBtn = $d.querySelector(tabs.library);
  if (tabBtn) new bootstrap.Tab(tabBtn).show();
  reloadMediaGrid({ posisi: 0, append: false });
  getModal(modalEl).show();
});

// “Load More”
$(document).on('click', '.btn-load-more', function (e) {
  e.preventDefault();
  mediaPagePos = parseInt($(this).attr('posisi') || '0', 10) + MEDIA_PAGE_SIZE;
  $(this).attr('posisi', mediaPagePos);
  reloadMediaGrid({ posisi: mediaPagePos, append: true });
});

// Search media
$(document).on('click', '.btn-search', function (e) {
  e.preventDefault();
  const s = $('input[name=search]').val() || '';
  $('.progress').removeClass('hidden');
  $.ajax({
    type: 'POST',
    url: '<?php echo base_url("ajax/searchmedia") ?>',
    data: 'title=' + encodeURIComponent(s),
    success: function (html) {
      $('.progress').addClass('hidden');
      $(".media-place").html(html);
      lastPickedMediaId = null;
      enableInsertButton(false);
    }
  });
});

/* =========================
   MEDIA GRID INTERACTION
   ========================= */

// klik gambar di grid -> select
$(document).on('click', '.media-image', function () {
  $('.media-image').removeClass('img-selected');
  $(this).addClass('img-selected');

  const id = $(this).attr('idnya');
  lastPickedMediaId = id;

  fetchMediaDetail(id, function (data) {
    // isi panel kanan
    $(".form-edit").removeClass("hidden").addClass("show");
    $("input[name=media_id]").val(data.media_id || '');
    $("input[name=media_url]").val(data.media_url || '');
    $("input[name=media_title]").val(data.media_title || '');
    $("textarea[name=media_caption]").val(data.media_caption || '');
    enableInsertButton(true);
  });
});

// Delete media (panel kanan)
$(document).on('click', '.delete', function (e) {
  e.preventDefault();
  const media_id = $("input[name=media_id]").val();
  if (!media_id) return;

  ajaxPost('<?php echo base_url("ajax/deletemedia") ?>', 'id=' + media_id, function () {
    lastPickedMediaId = null;
    enableInsertButton(false);
    $(".form-edit").removeClass("show").addClass("hidden");
    // reload awal
    reloadMediaGrid({ posisi: 0, append: false });
    $('.btn-load-more').attr('posisi', '0');
  });
});

/* =========================
   UPLOAD MEDIA
   ========================= */

$(document).on('change', '#uploadimage input[type=file]', function (e) {
  const file = this.files && this.files[0];
  if (!file) return;

  const form_data = new FormData();
  form_data.append('file', file);

  $('.progress').removeClass('hidden');
  progressBar.css('width', '0%').text('0%');

  $.ajax({
    xhr: function () {
      const xhr = new window.XMLHttpRequest();
      xhr.upload.addEventListener("progress", function (evt) {
        if (evt.lengthComputable) {
          let pct = parseInt((evt.loaded / evt.total) * 100, 10);
          progressBar.css('width', pct + '%').text(pct + '%');
        }
      }, false);
      return xhr;
    },
    url: '<?php echo base_url("ajax/uploadmedia") ?>',
    dataType: 'text',
    cache: false,
    contentType: false,
    processData: false,
    data: form_data,
    type: 'post',
    success: function (lastid) {
      // reset input
      $('#uploadimage input[type=file]').val('');
      // pindah ke tab Library dan reload grid, lalu auto-select item baru
      const tabBtn = $d.querySelector(tabs.library);
      if (tabBtn) new bootstrap.Tab(tabBtn).show();

      lastPickedMediaId = String(lastid);
      reloadMediaGrid({ posisi: 0, append: false });

      // fetch detail utk panel kanan
      fetchMediaDetail(lastPickedMediaId, function (data) {
        $(".form-edit").removeClass("hidden").addClass("show");
        $("input[name=media_id]").val(data.media_id || '');
        $("input[name=media_url]").val(data.media_url || '');
        $("input[name=media_title]").val(data.media_title || '');
        $("textarea[name=media_caption]").val(data.media_caption || '');
        enableInsertButton(true);
      });

      $('.progress').addClass('hidden');
    },
    error: function () {
      $('.progress').addClass('hidden');
      alert('Upload gagal. Coba lagi ya.');
    }
  });
});

/* =========================
   INSERT MEDIA → BUILDER
   ========================= */

function enableInsertButton(on) {
  if (on) {
    $('#insert').removeClass('disabled');
  } else {
    $('#insert').addClass('disabled');
  }
}

function applyPickedMediaToBuilder() {
  if (!lastPickedMediaId) return;

  fetchMediaDetail(lastPickedMediaId, function (data) {
    const url = data.media_url || '';
    // Perhatikan: untuk file gambar kita simpan apa adanya,
    // untuk dokumen (pdf/xlsx/...) kita tampilkan ikon dokumen
    const isDoc = /\.(xlsx|pptx|docx|pdf|zip|rar)$/i.test(url);
    let finalSrc = url;

    // Kalau showmedia mengirim URL absolut utk dokumen, pakai langsung
    // Kalau gambar: pastikan prefiks base_url kalau bukan absolut
    if (!/^https?:\/\//i.test(finalSrc)) {
      // builder butuh resolusi original. Jika user ganti size di kanan, kamu bisa menyesuaikan di sini
      finalSrc = '<?php echo base_url("assets/media/") ?>' + finalSrc;
    }

    let targetEl = selected_id ? $d.getElementById(selected_id) : null;

    if (targetEl) {
      if (targetEl.tagName.toLowerCase() === 'img') {
        // Replace src pada <img> yang diklik di builder
        targetEl.setAttribute('src', isDoc ? '<?php echo base_url("assets/media/documents.png") ?>' : finalSrc);
      } else {
        // Append <img> baru ke kontainer yang diklik
        const img = $d.createElement('img');
        img.src = isDoc ? '<?php echo base_url("assets/media/documents.png") ?>' : finalSrc;
        img.alt = data.media_title || 'media';
        img.className = 'img-fluid draggable';
        img.id = 'image-' + Math.random().toString(36).slice(2, 8);
        targetEl.appendChild(img);
      }
    } else {
      // fallback: append ke #eekditor paling bawah
      const ed = $d.getElementById('eekditor');
      if (ed) {
        const img = $d.createElement('img');
        img.src = isDoc ? '<?php echo base_url("assets/media/documents.png") ?>' : finalSrc;
        img.alt = data.media_title || 'media';
        img.className = 'img-fluid draggable';
        img.id = 'image-' + Math.random().toString(36).slice(2, 8);
        ed.appendChild(img);
      }
    }

    // tutup modal
    getModal(modalEl).hide();
  });
}

$(document).on('click', '#insert', function (e) {
  e.preventDefault();
  if ($(this).hasClass('disabled')) return;
  applyPickedMediaToBuilder();
});

/* =========================
   BUILDER SIDE PANEL (RIGHT)
   ========================= */

// Klik gambar di builder → tampilkan panel edit + tombol "Browse"
$d.addEventListener('click', function (e) {
  const ed = $d.getElementById('eekditor');
  if (!ed || !ed.contains(e.target)) return;

  // Block klik link dalam builder
  if (e.target.closest('a')) {
    e.preventDefault();
  }

  const t = e.target;
  const tag = t.tagName.toLowerCase();

  const allowedHeadings = ['h1','h2','h3','h4','h5','h6','p','span'];
  const allowedContainers = ['div','section','nav','iframe'];

  if (tag === 'img') {
    selected_id = t.id || ('image-' + Math.random().toString(36).slice(2, 8));
    if (!t.id) t.id = selected_id;
    selected_is_container = false;

    // Panel kanan
    const form = [];
    form.push(`<div class="input-group mb-3">
      <input id="src_edit" class="form-control" value="${t.src}">
      <button type="button" class="btn btn-outline-secondary" id="browse">Choose</button>
    </div>`);
    form.push(class_edit(t.className));
    form.push(btn_remove(selected_id));
    form.push(btn_finish(selected_id));
    $('#letak').html(form.join(''));

    // Live update src
    $(document).off('input.src_edit').on('input.src_edit', '#src_edit', function () {
      const el = $d.getElementById(selected_id);
      if (el) el.setAttribute('src', this.value);
    });

  } else if (allowedHeadings.includes(tag)) {
    selected_id = t.id || ('txt-' + Math.random().toString(36).slice(2, 8));
    if (!t.id) t.id = selected_id;
    selected_is_container = false;

    const text = t.innerHTML.replace('<br>', '\n');
    const form = [];
    form.push(class_edit(t.className));
    form.push(text_edit(text));
    form.push(btn_remove(selected_id));
    form.push(btn_finish(selected_id));
    $('#letak').html(form.join(''));

    $(document).off('input.text_edit').on('input.text_edit', '#text_edit', function () {
      const el = $d.getElementById(selected_id);
      if (el) el.innerHTML = this.value.replace(/\n/g, '<br>');
    });

  } else if (allowedContainers.includes(tag)) {
    if (t.id === 'eekditor') return;
    selected_id = t.id || ('box-' + Math.random().toString(36).slice(2, 8));
    if (!t.id) t.id = selected_id;
    selected_is_container = true;

    const form = [];
    form.push(class_edit(t.className));
    form.push(style_edit(t.getAttribute('style') || ''));
    form.push(`<div class="mb-2">
      <button type="button" class="btn btn-sm btn-outline-primary" id="browse">Browse & Insert Image</button>
    </div>`);
    form.push(btn_remove(selected_id));
    form.push(btn_finish(selected_id));
    $('#letak').html(form.join(''));
  }
});

// Finish / Remove (builder panel)
$(document).on('click', '#finish', function () {
  $('#letak').empty();
});
$(document).on('click', '#remove[target]', function () {
  const tid = $(this).attr('target');
  const el = $d.getElementById(tid);
  if (el) el.remove();
  $('#letak').empty();
});

// Edit class/style/href/target live
$(document).on('input', '#class_edit', function () {
  const el = $d.getElementById(selected_id);
  if (el) el.className = this.value;
});
$(document).on('input', '#style_edit', function () {
  const el = $d.getElementById(selected_id);
  if (el) el.setAttribute('style', this.value);
});
$(document).on('input', '#href_edit', function () {
  const el = $d.getElementById(selected_id);
  if (el) el.setAttribute('href', this.value);
});
$(document).on('change', '#target_edit', function () {
  const el = $d.getElementById(selected_id);
  if (el) el.setAttribute('target', this.value);
});

/* =========================
   HELPERS (builder panel UI)
   ========================= */

function btn_remove(id){
  return `<button type='button' id='remove' class='btn btn-danger btn-sm me-2' target='${id}'>remove</button>`;
}
function btn_finish(id){
  return `<button type='button' id='finish' class='btn btn-success btn-sm'>finish</button>`;
}
function class_edit(cname){
  return `<label class="form-label mt-2">Class</label>
  <input type='text' id='class_edit' class='form-control' value='${cname || ''}'>`;
}
function style_edit(style){
  return `<label class="form-label mt-2">Style</label>
  <input type='text' id='style_edit' class='form-control' value='${style || ''}'>`;
}
function text_edit(text){
  return `<label class="form-label mt-2">Text</label>
  <textarea id='text_edit' rows='5' class='form-control'>${(text || '')}</textarea>`;
}
function href_edit(href){
  return `<label class="form-label mt-2">Href</label>
  <input type='text' id='href_edit' class='form-control' value='${href || ''}'>`;
}
function target_edit(target) {
  return `<label class="form-label mt-2">Target</label>
  <select class="form-control" id="target_edit">
    <option value="" ${!target ? 'selected' : ''}>select</option>
    <option value="_self" ${target==="_self"?'selected':''}>Same Tab</option>
    <option value="_blank" ${target==="_blank"?'selected':''}>New Tab</option>
  </select>`;
}

/* =========================
   SAFETY: BLOCK LINK CLICK
   ========================= */
$(document).on('click', '#eekditor a, #eekditor a *', function (e) {
  e.preventDefault();
  return false;
});

/* =========================
   CKEDITOR (opsional)
   =========================
   Kalau kamu masih pakai CKEditor untuk “Insert Post” lama,
   tinggal panggil CKEDITOR.instances.editor.insertHtml(imgHtml)
   di applyPickedMediaToBuilder(). Saat ini kita fokus ke builder saja.
*/

</script>



 -->


  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5 col-lg-12 mx-auto">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
           
           <div class="col-lg-6">
            <div class="text-center">
             <div class="p-5">
              <div class="alert alert-primary" role="alert">
              Kamera
            </div>
            
           
            
              
            
           <video autoplay="true" id="video-webcam" class="col-lg-8">
           Izinkan untuk Mengakses Webcam untuk Demo
           </video>
           <hr>
          
           <button  onclick="takeSnapshot()"  >Ambil Gambar</button>
        
        </div>
        </div>
        </div>

          <div class="col-lg-6 ">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Pengisian Buku Tamu</h1>
              </div>
              

              <form class="user">
               <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="name" name="name" placeholder="Nama">
              
                </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="jabatan" name="jabatan" placeholder="Jabatan">
                </div>
                <div class="form-group">
                <input type="text" class="form-control form-control-user" id="instansi" name="instansi" placeholder="Instansi">
                </div>  
                <div class="form-group">
                <input type="text" class="form-control form-control-user" id="tujuan" name="tujuan" placeholder="Tujuan">
                </div>
                </div>
               
                <button type="submit" class="btn btn-primary btn-user btn-block">
                  Simpan
                </button>
               
               
              </form>
              <hr>
              
            </div>
          </div>
        </div>
      </div>
    </div>
     

  </div>

   <script type="text/javascript">
    // seleksi elemen video
    var video = document.querySelector("#video-webcam");

    // minta izin user
    navigator.getUserMedia = navigator.getUserMedia || navigator.webkitGetUserMedia || navigator.mozGetUserMedia || navigator.msGetUserMedia || navigator.oGetUserMedia;

    // jika user memberikan izin
    if (navigator.getUserMedia) {
        // jalankan fungsi handleVideo, dan videoError jika izin ditolak
        navigator.getUserMedia({ video: true }, handleVideo, videoError);
    }

    // fungsi ini akan dieksekusi jika  izin telah diberikan
    function handleVideo(stream) {
        video.srcObject = stream;
    }

    // fungsi ini akan dieksekusi kalau user menolak izin
    function videoError(e) {
        // do something
        alert("Izinkan menggunakan webcam untuk demo!")
    }

    function takeSnapshot() {
    // buat elemen img
    var img = document.createElement('img');
    var context;

    // ambil ukuran video
    var width = video.offsetWidth
            , height = video.offsetHeight;

    // buat elemen canvas
    canvas = document.createElement('canvas');
    canvas.width = width;
    canvas.height = height;

    // ambil gambar dari video dan masukan 
    // ke dalam canvas
    context = canvas.getContext('2d');
    context.drawImage(video, 0, 0, width, height);

    // render hasil dari canvas ke elemen img
    img.src = canvas.toDataURL('image/png');
    document.body.appendChild(img);
}
</script>

  
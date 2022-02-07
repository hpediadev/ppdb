<!-- =====================================
      ==== Start nav -->
      
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <!-- navbar brand -->
            <a class="navbar-brand" href="#">
                <img src="<?= base_url('assets/img/')?>logo.png" alt="">
            </a>
            <!-- navbar button toggler -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="frs"></span>
                <span class="sec"></span>
                <span class="thr"></span>
            </button>
            <!-- navbar links -->
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="<?= base_url('v1/')?>" k="0">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('v1/alur')?>" k="1">Alur</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('v1/daftar')?>" k="2">Daftar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('v1/pengumuman')?>" k="3">Pengumuman</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?= base_url('v1/masuk')?>" k="4">Masuk</a>
              </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('v1/kontak')?>" k="5">Kontak</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?= base_url('v1/home')?>" k="6">Blog</a>
              </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('v1/home')?>" k="7">Contact</a>
                </li>
                </ul>
            </div>
        </div>

       <div class="r-nav">
        <span class="search-input">
            <input type="text" placeholder="search">
            <a href="#0"><i class="fas fa-arrow-right"></i></a>
        </span>
        <span class="search">
          <a href="#0"><i class="fas fa-search"></i></a>
        </span>
       </div>

       <div class="l-nav">
        <span class="to-top">
         <a href="#0" data-scroll-nav="0"><i class="fas fa-angle-up"></i></a>
        </span>
       </div>
    </nav>
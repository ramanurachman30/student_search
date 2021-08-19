<?php
require_once 'php/config.php';
require_once 'app/header.php';
?>


<body>
    <?php
    require_once 'app/navbar.php';
    require_once 'app/sidebar.php';
    ?>

    <!-- Main  -->
    <main class="mt-5 pt-3">
        <div class="container-fluid">
            <div class="row">
              <div class="mx-auto">
                <div class="col-md-12 mb-3">
                  <div class="card">
                      <div class="card-header">
                          <!-- Form  -->
                          <form action="index.php" method="GET">
                            <div class="form-group mb-3 input-group">
                              <span class="input-group-text">
                                <i class='bx bx-search'></i>
                              </span>
                              <input type="text" class="form-control" placeholder="Cari Data" name="cari">
                              <button type="submit" class="btn btn-success">Cari</button>
                            </div>
                            <div class="mb-3 radio-group">
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="radiocheck" id="radioNis" value="nis" autocomplete="off">
                                <label class="form-check-label" for="radioNis">NIS</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="radiocheck" id="radioNama" value="nama" autocomplete="off">
                                <label class="form-check-label" for="radioNama">Nama</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="radiocheck" id="radioTempat" value="tempatlahir" autocomplete="off">
                                <label class="form-check-label" for="radioTempat">Tempat Lahir</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="radiocheck" id="radioSemua" value="semua" autocomplete="off">
                                <label class="form-check-label" for="radioSemua">Semua</label>
                              </div>
                            </div>
                          </form>
                          <!-- END Form -->
                          <div class="mb-3">
                              <a class="btn btn-danger" href="index.php">Refresh</a>
                          </div>
                      </div>
                      <div class="card-body">
                          <!-- Table  -->
                          <div class="table-responsive px-3">
                            <table class="table table-bordered mt-3">
                                <thead>
                                  <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">NIS</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Tempat Lahir</th>
                                  </tr>
                                </thead>
                                <tbody id="show">
                                    <?php
                                    include 'php/search.php';
                                    while ($row = mysqli_fetch_object($query)) {
                                    ?>
                                        <tr>
                                            <td><?= $no++; ?></td>
                                            <td><?= $row->nis; ?></td>
                                            <td><?= $row->nama; ?></td>
                                            <td><?= $row->tempatlahir; ?></td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                          </div>
                          <!-- End Table  -->
                      </div>
                  </div>
              </div>
          </div>
        </div>
      </div>
    </main>
    <!-- END Main -->

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>
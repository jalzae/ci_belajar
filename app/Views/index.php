<html class="">

<head>
  <title><?= $title ?></title>
  <!-- FontAwesome 6.2.0 CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
    integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
    crossorigin="anonymous"
    referrerpolicy="no-referrer" />

  <!-- (Optional) Use CSS or JS implementation -->
  <script
    src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/js/all.min.js"
    integrity="sha512-naukR7I+Nk6gp7p5TMA4ycgfxaZBJ7MO5iC3Fp6ySQyKFHOGfpkSZkYVWV5R7u7cfAicxanwYQ5D1e17EfJcMA=="
    crossorigin="anonymous"
    referrerpolicy="no-referrer"></script>

</head>

<body>

  <a class="btn btn-primary" href="<?= base_url('Home/tambah') ?>">Tambah</a>

  <div
    class="table-responsive">
    <table
      class="table table-primary">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Username</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $no = 1;
        foreach ($users as $user) {
        ?>
          <tr class="">
            <td scope="row"><?= $no++ ?></td>
            <td><?= $user['username'] ?></td>
            <td>
              <a class="btn btn-primary" href="<?= base_url('Home/edit/' . $user['id']) ?>">

                <i class="fas fa-edit"></i>
              </a>

              <a class="btn btn-danger" href="<?= base_url('Home/delete/' . $user['id']) ?>">

                <i class="fas fa-trash"></i>
              </a>
            </td>
          </tr>
        <?php } ?>

      </tbody>
    </table>
  </div>


</body>

</html>
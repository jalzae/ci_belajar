<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title></title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
</head>

<body>

  <form method="post" action="<?= base_url('Home/save') ?>">
    <div class="form-group">
      <label>Username</label>
      <input type="text" name="username" placeholder="Nama username" />
      <?php if (isset($error['username'])): ?>
        <span style="color: red;"><?= esc($error['username']) ?></span>
      <?php endif; ?>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

  <script src="" async defer></script>
</body>

</html>
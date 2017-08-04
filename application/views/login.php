<html>
<?php
if (isset($this->session->userdata['logged_in'])) {
$username = ($this->session->userdata['logged_in']['username']);
//$email = ($this->session->userdata['logged_in']['email']);
} else {
//header("location: Login");
}
?>
<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]> <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]> <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Login Form</title>
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/style.css">
  <!--[if lt IE 9]><script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</head>
<body>
  <section class="container">
    <div class="login">
      <h1>Login Form</h1>
      <form method="post" action="<?php echo base_url() ?>Auth/cek_login ">
        <p><input type="text" name="username" value="" placeholder="Username"></p>
        <p><input type="password" name="password" value="" placeholder="Password"></p>
        <p><?=$image;?></p>
    		<p>Masukkan kode gambar : <input type="text" name="security_code"></p>
        <p class="submit"><input type="submit"  value="Login"></p>
      </form>
    </div>

    <div class="login-help">
      <p><a href="<?php echo base_url() ?> ">Klik disini untuk kembali</a></p>
    </div>
  </section>
</body>

<span class="glyphicon glyphicon-pencil"></span>
</html>

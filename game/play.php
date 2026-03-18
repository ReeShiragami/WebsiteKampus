<?php
if(!file_exists("state.json")){
  $wins = array_rand(array_flip(range(1,5)), 2);   // pilih 2 angka menang
  file_put_contents("state.json", json_encode([
    "wins"=>$wins,
    "reward"=>"Sticker"
  ]));
}

$data = json_decode(file_get_contents("state.json"), true);
$pick = intval($_POST['pick']);

if(in_array($pick, $data["wins"])){
  $win = true;
  $reward = $data["reward"];

  // acak ulang 2 angka menang berikutnya
  $wins = array_rand(array_flip(range(1,5)), 2);
  $data["wins"] = $wins;
  file_put_contents("state.json", json_encode($data));
}else{
  $win = false;
}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300..700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Space+Grotesk:wght@300..700&display=swap" rel="stylesheet">
<title>Result</title>
<style>
body{
  background:#050b1a;
  color:white;
  font-family:'Inter', sans-serif;
}

h1{
  font-family:'Space Grotesk', sans-serif;
  letter-spacing:3px;
  font-weight:700;
}

p{
  opacity:.8;
  font-size:18px;
}

.btn-main{
  background:linear-gradient(135deg,#00c6ff,#0072ff);
  border:none;
  border-radius:14px;
  padding:14px 44px;
  font-weight:600;
  letter-spacing:1px;
  box-shadow:0 0 25px rgba(0,198,255,.6);
  transition:.3s;
}

.center{ 
    min-height:100vh; 
    display:flex; 
    align-items:center; 
    justify-content:center; 
    text-align:center; 
}
.btn-main:hover{
  transform:scale(1.08);
  box-shadow:0 0 40px rgba(0,198,255,.9);
}

</style>
</head>
<body>
<div class="center">
  <?php if($win): ?>
    <div>
      <h1 class="mb-3">🎉 SELAMAT!!</h1>
      <p>Anda Mendapatkan <b><?= $reward ?></b></p>
      <a href="index.php" class="btn btn-main mt-4">Ulang</a>
    </div>
  <?php else: ?>
    <div>
      <h1 class="mb-3">😢 Belum Beruntung</h1>
      <p>Coba lagi ya!</p>
      <a href="index.php" class="btn btn-main mt-4">Ulang</a>
    </div>
  <?php endif; ?>
</div>
</body>
</html>

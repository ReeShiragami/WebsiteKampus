<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Tebak Angka</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300..700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Space+Grotesk:wght@300..700&display=swap" rel="stylesheet">
<style>
body{
  background:#050b1a;
  color:white;
  font-family:'Inter', sans-serif;
}

h1{
  font-family:'Space Grotesk', sans-serif;
  letter-spacing:3px;
}

p{
  opacity:.75;
}

.center{
    min-height:100vh;
    display:flex;
    align-items:center;
    justify-content:center;
    text-align:center
}

.pick{
  width:90px;
  height:90px;
  border-radius:22px;
  background:#2f80ff;
  display:flex;
  align-items:center;
  justify-content:center;
  font-size:30px;
  margin:12px;
  cursor:pointer;
  transition:.25s;
}

.pick:hover{transform:scale(1.1);}

.pick{
  background:#2f80ff;
}

.pick input:checked + span{
  color:white;
}

.pick input:checked{
  display:none;
}

.pick:has(input:checked){
  background:linear-gradient(135deg,#0047ff,#002a7f);
  box-shadow:0 0 40px rgba(0,80,255,.8);
  transform:scale(1.12);
}

.btn-main{
    background:#2f80ff;
    border:none;
    border-radius:12px;
    padding:12px 40px
}
.mb-2 {
    font font-family: 'space grotesk', sans-serif;
}

.mb-4{
    font-family: 'inter', sans-serif;
}
.back-expo{
  position:fixed;
  top:24px;
  right:24px;
  padding:10px 22px;
  border-radius:20px;
  background:rgba(255,255,255,.08);
  backdrop-filter:blur(10px);
  color:white;
  text-decoration:none;
  font-size:14px;
  letter-spacing:2px;
  transition:.3s;
  z-index:100;
}

.back-expo:hover{
  background:linear-gradient(135deg,#00c6ff,#0072ff);
  box-shadow:0 0 25px rgba(0,198,255,.7);
  transform:scale(1.08);
}

</style>
</head>
<body>
<a href="../index.html" class="back-expo">← Back to Preview</a>

<div class="center">
  <form action="play.php" method="post">
    <h1 class="mb-2">TEBAK ANGKA BERHADIAH!</h1>
    <p class="mb-4">Pilih satu angka untuk memenangkan hadiahnya</p>

    <div class="d-flex justify-content-center mb-4">
        <?php for($i=1;$i<=5;$i++): ?>
            <label class="pick">
                <input type="radio" name="pick" value="<?= $i ?>" hidden required>
                <span><?= $i ?></span>
            </label>
        <?php endfor; ?>
    </div>


    <button class="btn btn-main">Kirim</button>
  </form>
</div>

</body>
</html>

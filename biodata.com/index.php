<?php
$biodata = [
  "Nama" =>"Maheswari Dian Paramita",
  "Alamat" =>"Jl. Joyoboyo 34 Aloha",
  "TTL" =>"Sidoarjo, 22 Juli 2005",
  "Kelamin" =>"Perempuan",
  "Agama" =>"Islam",
  "Email" =>"maheswaridian@icloud.com",
  "Status" =>"Mahasiswa"
];
$pendidikan = [
    ["name" => "Madarasah Aliyah Negeri Sidoarjo (2020-2023)"],
    ["name" => "Universitas Pembangunan Nasional Veteran Jawa Timur (2023-sekarang)"]
];
$skills = [
    ["name" => "Pemasaran digital", "image" => "12.jpg"],
    ["name" => "Socmed marketing", "image" => "13.jpeg"],
    ["name" => "Akutansi keuangan", "image" => "16.jpeg"]
];
$experience = [
    "company" => "PT. PUTRA BAROKAH TRANS",
    "position" => "Magang",
    "tasks" => [
        "Menyusun dan merancang pemasaran digital",
        "Mengelola laporan keuangan",
        "Melakukan analisis konten"
    ]
];
$Hobi = [
  ["name" => "Scroll tiktok", "image" => "tiktok.jpg "],
  ["name" => "Listening music", "image" => "musik.jpg"],
  ["name" => "Watching K-drama", "image" => "netflix.jpg"],
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
<style>
* {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
}

body {
  background-color: #333;
  font-family: Arial;
  color: #FBAED2;
  padding: 10px;
}

.topnav {
  position: fixed;
  width: 100%;
  top: 0;
  left: 0;
  background-color: #333;
  display: flex;
  padding: 10px ;
  z-index: 1000;
  overflow: hidden;
  justify-content: center;
}

.topnav a {
  font-size: 8rem;
  display: block;
  color:#FBAED2 ;
  float: left;
  font-weight: 500;
  padding: 20px 80px;
  text-decoration: none;
  transition: .3s;
  margin-left: 6rem;
  font-family:Georgia, 'Times New Roman', Times, serif;
}

.topnav a:hover {
  background-color: #FBAED2;
  color: black;
}

section {
  min-height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
  text-align: center;
  padding: 50px 20px;
}

.home {
  flex-direction: column;
  padding-top: 80px; 
}


.profile {
  display: flex;
  justify-content: center;
  align-items: center;
  gap: 3rem;
}

.profile img {
  width:30%;
  height: auto;
  border-radius: 50%;
  margin-left: 20%;
}

.text-box h1 {
  font-size: 30rem;
  font-weight: bold;
  gap: 2rem;
  line-height: 1;
  color: #FBAED2;
  margin-left: 20rem;
  font-family:Georgia, 'Times New Roman', Times, serif;
}

.text-box h2 {
  font-size: 30rem;
  font-weight: bold;
  gap: 2rem;
  line-height: 1;
  color: #FBAED2;
  margin-left: 20rem;
  font-family:Georgia, 'Times New Roman', Times, serif;
}


div.relative {
  position: relative;
  width: 70%;
  height: 1800px;
  border: 30px solid #FBAED2;
  background-color: #333;
  font-size: 15rem;
  font-family:Georgia, 'Times New Roman', Times, serif;
} 
.relative table{
  width: 70%;
  height: 250px; 
  padding: 70px; 
  border-radius: 25px;
  background-color: #333;
  font-size: 9rem;
  text-align: left;
  align-items: center;
  justify-content: center;
  font-family:Georgia, 'Times New Roman', Times, serif;
}

div.absolute {
  position:absolute;
  top: 80px;
  right: 0;
  width: 700px;
  height: 800px;
  margin-right: 10rem
}
.absolute img {
  width: 100%; 
  height: 100%; 
  object-fit: cover; 
  border-radius: 10px;
}

/*hobi section*/
.Hobi {
  flex-direction: column;
  font-size: 10rem;
  font-family:Georgia, 'Times New Roman', Times, serif;
}

.Hobi ul {
  list-style: none;
  font-size: 10rem;
  text-align: center;
  column-count: 3;
  column-gap: 50px;
  font-family:Georgia, 'Times New Roman', Times, serif;
}
.Hobi ul img {
  width: 70%;
  border-radius: 50%;
  margin-top:70px;
}

.Hobi ul li {
  margin: 10px 0;
  margin-bottom: 100px;
}
.Hobi h2{
  margin-bottom: 100px;
}

/* Educ Section */
.pendidikan{
  flex-direction: column;
  font-size: 15rem;
  margin-bottom: 20%;
  font-family:Georgia, 'Times New Roman', Times, serif;
}

.pendidikan ul{
  list-style: none;
  font-size: 10rem;
  text-align: left;
  font-family:Georgia, 'Times New Roman', Times, serif;
}

.Pendidikan ul li{
  margin: 10px 0;
}
.pendidikan h2 {
  margin-bottom: 100px;
}
/* Skills Section */
.skills {
  flex-direction: column;
  font-size: 10rem;
  font-family:Georgia, 'Times New Roman', Times, serif;
}

.skills ul {
  list-style: none;
  font-size: 10rem;
  text-align: center;
  column-count: 3;
  column-gap: 50px;
  font-family:Georgia, 'Times New Roman', Times, serif;
}
.skills ul img{
  width: 70%;
  border-radius: 50%;
  margin-top:70px;
}

.skills ul li {
  margin: 10px 0;
  margin-bottom: 100px;
}
.skills h2{
  margin-bottom: 100px;
}
 
/* Exp Section */
.Experience{
  flex-direction: column;
  font-size: 9rem;
  margin-bottom: 20%;
  font-family:Georgia, 'Times New Roman', Times, serif;
}

.Experience ul{
  list-style: none;
  font-size: 8rem;
  text-align: left;
  font-family:Georgia, 'Times New Roman', Times, serif;
  margin-left: 10%;
}

.Experience ul li{
  margin: 10px 0;
}
.Experience h2 {
  margin-bottom: 50px;
}
.Experience img{
  border-radius: 30%;
  width: 30%;
}
/* Responsive Design */
@media screen and (max-width: 768px) {
  .profile {
    flex-direction: column;
    gap: 1.5rem;
  }
  
  .text-box h1 {
    margin-left: 0;
  }
}
</style>
</head>
<body>
<div class="topnav">
  <a href="#home">Home</a>
  <a href="#about">Biodata</a>
  <a href="#Hobi">Hoby</a>
  <a href="#pendidikan">Education</a>
  <a href="#skills">Skill</a>
  <a href="#Experience">Experience</a>
</div>

<section id="home" class="home">
    <div class="profile">
        <div class="text-box">
            <h1>Hola!</h1>
            <h2>It's me</h2>
        </div>
    </div>
</section>

<section id="about" class="about">
  <div class="relative" style="font-weight: bold;">Biodata
    <div class="absolute">
      <img src="FOTO 2.jpg" width="50%">
    </div>
    <table style="width: 500px">
      <?php foreach ($biodata as $key => $value) : ?>
          <tr>
              <td><?= $key ?></td>
              <td>:<?= $value ?></td>
          </tr>
      <?php endforeach; ?>
    </table>
  </div>
</section>

<section id="Hobi" class="Hobi">
<h2>Hobi</h2>
  <ul>
      <?php foreach ($Hobi as $Hoby): ?>
          <li><?= $Hoby["name"] ?>
            <img src="<?= $Hoby["image"] ?>" width="70%">
          </li>
      <?php endforeach; ?>
  </ul>
</section>

<section id="pendidikan" class="pendidikan">
    <h2>Education</h2>
    <ul>
    <?php foreach ($pendidikan as $edu): ?>
      <li>- <?= $edu["name"] ?>
          </li>
      <?php endforeach; ?>
  </ul>
</section>

<section id="skills" class="skills">
  <h2>Skill</h2>
  <ul>
      <?php foreach ($skills as $skill): ?>
          <li><?= $skill["name"] ?>
            <img src="<?= $skill["image"] ?>" width="70%">
          </li>
      <?php endforeach; ?>
  </ul>
</section>

<section id="Experience" class="Experience">
    <h2>Experience</h2>
    <img src="FOTO 3.jpg" width="30%">
    <ul>
      <h4><?= $experience["company"] ?></h4>
      <li><?= $experience["position"] ?></li>
      <?php foreach ($experience["tasks"] as $task): ?>
          <li>- <?= $task ?></li>
      <?php endforeach; ?>
    </ul>
</section>
</body>
</html>

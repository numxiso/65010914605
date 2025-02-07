<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>สมัครสมาชิกชมรมคนรักยุงลายประเทศไทย</title>
  <!-- Bootstrap -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css2?family=Itim&display=swap" rel="stylesheet">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <style>
    body {
      font-family: "Itim", cursive;
      background-color: #ffe4e1; /* สีพื้นหลังชมพูอ่อน */
      color: #d63384; /* สีข้อความชมพูสดใส */
    }
    .header {
      text-align: center;
      color: #d63384;
      font-weight: bold;
      margin-top: 20px;
    }
    .header h1 i {
      color: #ff69b4;
    }
    .image-center {
      display: block;
      margin: 20px auto;
      max-width: 100%;
      height: auto;
      border: 5px solid #ffb6c1; /* กรอบสีชมพู */
      border-radius: 15px;
    }
    .btn-primary {
      background-color: #ff69b4;
      border-color: #ff69b4;
    }
    .btn-primary:hover {
      background-color: #d63384;
      border-color: #d63384;
    }
    .btn-danger {
      background-color: #ff6f61;
      border-color: #ff6f61;
    }
    .btn-danger:hover {
      background-color: #e63946;
      border-color: #e63946;
    }
    .form-label {
      font-weight: bold;
    }
    .marquee-container h2 {
      color: #d63384;
      font-size: 24px;
      animation: pulse 1.5s infinite;
    }
    @keyframes pulse {
      0%, 100% {
        transform: scale(1);
      }
      50% {
        transform: scale(1.2);
      }
    }
    footer {
      text-align: center;
      margin-top: 30px;
      color: #ff69b4;
    }
    footer i {
      color: #ff69b4;
    }
  </style>
</head>
<body>
  <!-- Header -->
  <div class="header">
    <h1><i class="fa fa-heart"></i> สมัครสมาชิกชมรมคนรักยุงลายประเทศไทย <i class="fa fa-heart"></i></h1>
  </div>

  <!-- Image --><img src="สมัครสมาชิกชมรมคนรักยุงลายประเทศไทย.jpg" alt="ชมรมคนรักยุงลาย" width="516" height="281" class="image-center"><!-- Marquee -->
  <div class="marquee-container text-center">
    <h2><i class="fa fa-smile-beam"></i> ยินดีต้อนรับเข้าสู่ชมรม! <i class="fa fa-smile-beam"></i></h2>
</div>

  <!-- Form -->
<div class="container mt-5">
    <form method="post" action="">
      <div class="mb-3">
        <label for="name" class="form-label">ชื่อ-สกุล</label>
        <input type="text" name="a" class="form-control" id="name" required>
      </div>
      <div class="mb-3">
        <label for="id" class="form-label">รหัสนิสิต</label>
        <input type="text" name="id" class="form-control" id="id">
      </div>
      <div class="mb-3">
        <label class="form-label">เพศ</label><br>
        <input type="radio" name="title" value="ชาย"> ชาย
        <input type="radio" name="title" value="หญิง"> หญิง
      </div>
      <div class="mb-3">
        <label for="address" class="form-label">ที่อยู่</label>
        <textarea name="address" class="form-control" id="address" rows="3"></textarea>
      </div>
      <div class="mb-3">
        <label for="phone" class="form-label">เบอร์โทรศัพท์</label>
        <input type="text" name="Phone" class="form-control" id="phone">
      </div>
      <div class="mb-3">
        <label for="edu" class="form-label">ระดับการศึกษา</label>
        <select name="Edu" class="form-select" id="edu">
          <option value="ต่ำกว่าปริญญาตรี">ต่ำกว่าปริญญาตรี</option>
          <option value="ปริญญาตรี">ปริญญาตรี</option>
          <option value="ปริญญาโท">ปริญญาโท</option>
          <option value="ปริญญาเอก">ปริญญาเอก</option>
        </select>
      </div>
      <div class="mb-3">
        <label class="form-label">เวลาว่างชอบทำอะไร</label><br>
        <input type="checkbox" name="Food" value="ตบยุง"> ตบยุง<br>
        <input type="checkbox" name="Food" value="พายุงไปเดินเล่น"> พายุงไปเดินเล่น<br>
        <input type="checkbox" name="Food" value="เพาะพันธุ์ยุง"> เพาะพันธุ์ยุง
      </div>
      <div class="mb-3">
        <label for="username" class="form-label">Username</label>
        <input type="email" name="Username" class="form-control" id="username" placeholder="name@example.com">
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" name="password" class="form-control" id="password">
      </div>
      <button type="submit" name="Sudmit" class="btn btn-primary"><i class="fa fa-paper-plane"></i> สมัครสมาชิก</button>
      <button type="reset" class="btn btn-danger"><i class="fa fa-times"></i> ยกเลิก</button>
    </form>
  </div>

  <!-- Footer -->
  <footer>
    <p>สร้างด้วยความรัก <i class="fa fa-heart"></i> โดยสมาชิกชมรม</p>
  </footer>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/stylefoo.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/w3.css">
    <link rel="stylesheet" type="text/css" href="./fonts/fontawesome-free-5.15.4-web/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Yesteryear&family=Zen+Antique+Soft&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/bootstrap.css">
    <script type="text/javascript" src="js/_jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <title>Trang Chủ</title>
</head>
<body>
  <div class="header">
    <img src="images/bannertgu.png">
  </div>
<!--NỘI DUNG -->
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" style="font-weight: bolder; color: #0000CD" href="#">TGU</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="index.php">Trang Chủ</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Thông tin khoa <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Khoa Kỹ thuật - Công nghệ</a></li>
          <li><a href="#">Khoa Kinh tế - Luật</a></li>
          <li><a href="#">Khoa Sư phạm & Khoa học cơ bản</a></li>
          <li><a href="#">Khoa Nông nghiệp - Công nghệ thực phẩm</a></li>
        </ul>
      </li>
      <li class="active"><a href="#">Liên hệ</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Bậc học<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Đại Học</a></li>
          <li><a href="#">Cao Đẳng</a></li>
          
        </ul>
      </li>
    </ul>
    <form class="navbar-form navbar-left" action="/action_page.php">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Tìm Kiếm" name="search">
        <div class="input-group-btn">
          <button class="btn btn-default" type="submit">
            <i class="glyphicon glyphicon-search"></i>
          </button>
        </div>
      </div>
    </form>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>



<div class="w3-container w3-padding-32" id="contact">
    <h2 class="sent-notification"></h2>
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Liên hệ</h3>
    
    <p>Bạn có thắc mắc khó khăn cần giúp đỡ xin hãy điền thông tin và nội dung bên dưới </p>
    <form  id="myForm">
      <input class="w3-input w3-border"  id="name" type="text" placeholder="Enter Name" required>
      <input class="w3-input w3-section w3-border" id="email" type="text" placeholder="Enter Email" required >
      <input class="w3-input w3-section w3-border"  id="subject" type="text" placeholder=" Enter Subject"  required>
      <input class="w3-input w3-section w3-border" type="text"  id="body" rows="5" placeholder="import content" required>
      <div class="form-submit mt-5">
          <button class="btn btn-common" type="submit" id="form-submit"  type="button" onclick="sendEmail()" value="Send An Email" ><i class="material-icons mdi mdi-message-outline"></i> Send Message</button>
              <div id="msgSubmit" class="h3 text-center hidden"></div>
               <div class="clearfix"></div>
      </div>

    </form>
  </div>
  <script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script type="text/javascript">
        function sendEmail() {
            var name = $("#name");
            var email = $("#email");
            var subject = $("#subject");
            var body = $("#body");

            if (isNotEmpty(name) && isNotEmpty(email) && isNotEmpty(subject) && isNotEmpty(body)) {
                $.ajax({
                   url: 'sendEmail.php',
                   method: 'POST',
                   dataType: 'json',
                   data: {
                       name: name.val(),
                       email: email.val(),
                       subject: subject.val(),
                       body: body.val()
                   }, success: function (response) {
                        $('#myForm')[0].reset();
                        $('.sent-notification').text("Gửi thành công.");
                   }
                });
            }
        }

        function isNotEmpty(caller) {
            if (caller.val() == "") {
                caller.css('border', '1px solid red');
                return false;
            } else
                caller.css('border', '');

            return true;
        }
    </script>




<!--CHÂN TRANG-->
<footer class="footer">
  <div class="container">
    <div class="row">
      <div class="footer-col">
        <h4>About us</h4>
        <ul>
          <li><a href="#">Admissions</a></li>
          <li><a href="#">Address</a></li>
          <li><a href="#">Infrastructure</a></li>
          <li><a href="#">Education</a></li>
          <li><a href="#">Visit</a></li>
          <li><a href="#contact">Introduce</a></li>
          
        </ul>
      </div>
      <div class="footer-col">
        <h4>linked pages</h4>
        <ul>
          <li><a href="http://www.tgu.edu.vn/">Tien Giang University</a></li>
          <li><a href="http://qldt.tgu.edu.vn/">Training Management of TGU</a></li>
          <li><a href="https://lms.vnedu.vn/default/login">VnEdu-LMS</a></li>
          
        </ul>
      </div>
      <div class="footer-col">
        <h4>Category</h4>
        <ul>
          <li><a href="#">Home</a></li>
          <li><a href="#">Data</a></li>
          <li><a href="#">Contact</a></li>
          <li><a href="#">Manager</a></li>
          <li><a href="#contact">Students</a></li>
        </ul>
      </div>
      <div class="footer-col">
        <h4>follow us</h4>
        <div class="social-links">
          <a href="#"><i class="fab fa-facebook-f"></i></a>
          <a href="#"><i class="fab fa-twitter"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
          <a href="#"><i class="fab fa-linkedin-in"></i></a>
        </div>
      </div>
    </div>
  </div>
  
</footer>

</body>
</html>
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
      <li class="active"><a href="#">Trang Chủ</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Thông tin khoa <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Khoa Kỹ thuật - Công nghệ</a></li>
          <li><a href="#">Khoa Kinh tế - Luật</a></li>
          <li><a href="#">Khoa Sư phạm & Khoa học cơ bản</a></li>
          <li><a href="#">Khoa Nông nghiệp - Công nghệ thực phẩm</a></li>
        </ul>
      </li>
      <li class="active"><a href="lienhe.php">Liên hệ</a></li>
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
<!--Carousel 1-->
<div class="container">
  <h2>KHOA KỸ THUẬT CÔNG NGHỆ</h2>
  <p>FACULTY OF TECHNOLOGY ENGINEERING</p>
  <div id="myCarousel1" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="myCarousel1" data-slide-to="0" class="active"></li>
      <li data-target="myCarousel1" data-slide-to="1"></li>
      <li data-target="myCarousel1" data-slide-to="2"></li>
      <li data-target="myCarousel1" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <div class="item active">
        <a href="./khoakythuatcn/cntt.php"> <img src="images/congnghethongtin.jpg" alt="CNTT" style="width:100%;"> </a>
        <div class="carousel-caption">
          <h3>Công Nghệ Thông Tin</h3>
          <p>Ngành đào tạo mũi nhọn hướng đến sự phát triển của công nghệ và khoa học kỹ thuật trong thời đại số hóa ngày nay</p>
        </div>
      </div>

      <div class="item">
        <a href="./khoakythuatcn/cnktdientu.php" >  <img src="images/cnktdientu.jpg" alt="Điện Tử" style="width:100%;"></a>
        <div class="carousel-caption">
          <h3>Công nghệ kỹ thuật Điện tử - Tin học công nghiệp</h3>
          <p>Ngành rất quan trọng và không thể thiếu trong sự phát triển của khoa học kỹ thuật hiện đại trong bối cảnh trí tuệ nhân tạo (AI) cùng với Internet vạn vật (IoT) và dữ liệu lớn (Big Data) là những yếu tố cốt lõi của kỹ thuật số trong Cuộc cách mạng công nghiệp 4.0</p>
        </div>
      </div>
    
      <div class="item">
        <a href="./khoakythuatcn/codientu.php" > <img src="images/codientu.png" alt="Cơ Điện Tử" style="width:100%;"></a>
        <div class="carousel-caption">
          <h3>Cơ Điện Tử</h3>
          <p>Công nghệ kỹ thuật cơ điện tử là lĩnh vực liên ngành giữa điện – điện tử, cơ khí, công nghệ thông tin và các thuật toán điều khiển thông minh. Mỗi ứng dụng của cơ điện tử đều được tích hợp tất cả các yếu tố trên nhằm phát triển tư duy hệ thống trong thiết kế và phát triển sản phẩm, công nghệ mới có những tính năng vượt trội.</p>
        </div>
      </div>

      <div class="item">
        <a href="./khoakythuatcn/dktudonghoa.php"><img src="images/kythuatdktdh.jpg" alt="Điều khiển tự động hóa" style="width:100%; height:500px "></a>
        <div class="carousel-caption">
          <h3>Công nghệ kỹ thuật điều khiển và Tự động hóa</h3>
          <p>Ngành Công nghệ kỹ thuật điều khiển và Tự động hóa là ngành nghiên cứu, ứng dụng các kỹ thuật điện - điện tử, kỹ thuật cơ khí hiện đại, kỹ thuật điều khiển, kỹ thuật máy tính vào việc vận hành, điều khiển quá trình sản xuất nhằm thực hiện công việc mà không cần đến sự can thiệp trực tiếp của con người</p>
        </div>
      </div>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel1" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel1" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
<br>
<!--Carousel 2-->
<div class="container">
  <h2>KHOA KINH TẾ - LUẬT</h2>
  <p>FACULY OF ECONOMICS AND LAW</p>
  <div id="myCarousel2" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="myCarousel" data-slide-to="1"></li>
      <li data-target="myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <div class="item active">
        <img src="images/taichinhnganhang.jpg" alt="Tài chính ngân hàng" style="width:100%;">
        <div class="carousel-caption">
          <h3>Tài Chính Ngân Hàng</h3>
          <p> Tài chính ngân hàng là ngành nghề liên quan đến các dịch vụ giao dịch, luân chuyển tiền tệ thông qua ngân hàng và các công cụ tài chính của ngân hàng phát hành trong phạm vi nội địa và quốc tế. Tài chính ngân hàng là một phạm trù rất rộng, bao gồm các lĩnh vực nhỏ và chuyên biệt hơn như ngân hàng, tài chính doanh nghiệp, tài chính thuế, tài chính bảo hiểm, phân tích tài chính, kinh tế học tài chính,...</p>
        </div>
      </div>

      <div class="item">
        <img src="images/quantrikinhdoanh.jpg" alt="Quản trị kinh doanh" style="width:100%;">
        <div class="carousel-caption">
          <h3 style = "color: black;">Quản Trị Kinh Doanh</h3>
          <p style = "color: black;">Quản trị kinh doanh là ngành học luôn xếp vào hàng TOP các ngành được thí sinh đặc biệt ưu ái, đăng ký lựa chọn trong các kỳ tuyển sinh đại học. Lý do chọn cũng khá nhiều nhưng đa số là vì ngành học hot, cơ hội việc làm đa dạng</p>
        </div>
      </div>
    
      <div class="item">
        <img src="images/ketoan.jpg" alt="Kế toán" style="width:100%;">
        <div class="carousel-caption">
          <h3>Kế Toán</h3>
          <p>Kế toán có vai trò lớn lớn trong các công ty, các tổ chức vì thế kế toán có cơ hội việc làm khá cao. Cơ hội việc làm cho các cử nhân kế toán là vô cùng rộng lớn và đa dạng.</p>
        </div>
      </div>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel2" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel2" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
<br>
<!--Carousel 2-->
<div class="container">
  <h2>Khoa Sư phạm & Khoa học cơ bản</h2>
  <p>FACULTY OF PEDAGOGY & BASIC SCIENCE</p>
  <div id="myCarousel3" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="myCarousel" data-slide-to="1"></li>
      <li data-target="myCarousel" data-slide-to="2"></li>
      <li data-target="myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <div class="item active">
        <img src="images/vanhoahoc.jpg" alt="vanhoahoc" style="width:100%;">
        <div class="carousel-caption">
          <h3>Văn hóa học</h3>
          <p>Văn hoá học là một ngành khoa học được hình thành trên vùng tiếp giáp của các tri thức xã hội, nhân văn về con người và xã hội, nhằm nghiên cứu văn hoá như một chỉnh thể toàn vẹn và như một chức năng đặc biệt. 
            Ngành Văn hóa học trang bị những kiến thức cơ bản giúp sinh viên tiếp cận công việc đạt hiệu quả như mong muốn.</p>
        </div>
      </div>

      <div class="item">
        <img src="images/giaoductieuhoc.jpg" alt="Chicago" style="width:100%;">
        <div class="carousel-caption">
          <h3>Giáo dục tiểu học</h3>
          <p>Ngành Giáo dục Tiểu học hay Sư phạm Tiểu học là chuyên ngành đào tạo cử nhân Giáo dục tiểu học nhằm đáp ứng những yêu cầu đổi mới của giáo dục tiểu học trong thời kỳ công nghiệp hoá, hiện đại hoá đất nước.
             Là một ngành quan trọng trong hệ giáo dục của nước ta bao gồm cấp mầm non, tiểu học, trung học cơ sở, trung học phổ thông và trung cấp, cao đẳng, đại học.</p>
        </div>
      </div>
    
      <div class="item">
        <img src="images/suphamvan.jpg" alt="New York" style="width:100%;">
        <div class="carousel-caption">
          <h3>Sư phạm Ngữ văn</h3>
          <p>Ngành Sư phạm Ngữ văn (Literature and Linguistics Teacher Education) là ngành đào tạo giáo viên có khả năng giảng dạy môn Ngữ văn tại các trường THPT, trường chuyên và các cơ sở giáo dục chuyên nghiệp. Họ là những người có năng lực chuyên môn,
             có sức khỏe tốt phục vụ cho việc đổi mới chương trình giáo dục phổ thông nhằm nâng cao chất lượng giáo dục toàn diện thế hệ trẻ, đáp ứng yêu cầu phát triển nguồn nhân lực cho sự nghiệp công nghiệp hóa, hiện đại hóa đất nước.</p>
        </div>
      </div>

      <div class="item">
        <img src="images/Math.jpg" alt="Chicago" style="width:100%;">
        <div class="carousel-caption">
          <h3>Sư phạm toán học</h3>
          <p>Ngành Sư phạm Toán học (tên gọi TA là Mathematics Teacher Education) là một trong những ngành đào tạo giáo viên có chất lượng cao tại bậc Phổ thông và bậc Đại học có kiến thức về khoa học cơ bản, khoa học giáo dục,
            với năng lực sư phạm đáp ứng được yêu cầu của sự nghiệp đổi mới giáo dục, đào tạo hiện nay ở nước ta và đồng thời người học có thể cải tiến tiếp lên bậc cao hơn và tự học để hoàn thiện và nâng cao năng lực trong việc làm.</p>
        </div>
      </div>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel3" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel3" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
<br>
<!--Carousel 3-->

<div class="container">
  <h2>Khoa Nông nghiệp - Công nghệ thực phẩm</h2>
  <p>Faculty of Agriculture - Food Technology</p>
  <div id="myCarousel4" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="myCarousel" data-slide-to="1"></li>
      <li data-target="myCarousel" data-slide-to="2"></li>
      <li data-target="myCarousel" data-slide-to="3"></li>
      <li data-target="myCarousel" data-slide-to="4"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <div class="item active">
        <img src="images/food.jpg" alt="food" style="width:100%;">
        <div class="carousel-caption">
          <h3 style="color: black;">Công nghệ thực phẩm</h3>
          <p style="color: black;">Công nghệ thực phẩm trang bị cho người học những kiến thức về bảo quản, chế biến, đánh giá, kiểm định chất lượng sản phẩm, nghiên cứu phát triển sản phẩm mới; vận hành dây chuyền sản xuất.
            Ngành học này đào tạo ra đội ngũ kỹ thuật viên, chuyên gia và các nhà nghiên cứu, đóng vai trò quan trọng trong việc nâng cao giá trị sản phẩm, đồng thời là nguồn nhân lực cốt lõi trong các doanh nghiệp chế biến thực phẩm.
            </p>
        </div>
      </div>

      <div class="item">
        <img src="images/congnghesinhhoc1.jpg" alt="biology" style="width:100%;">
        <div class="carousel-caption">
          <h3 style="color: black;">Công nghệ sinh học</h3>
          <p style="color: black;">Công nghệ sinh học là lĩnh vực đa ngành và liên ngành, gắn kết với nhiều lĩnh vực trong sản xuất và cuộc sống như: chọn tạo giống cây trồng vật nuôi mang các đặc tính mới (trồng trọt, chăn nuôi, nuôi trồng thủy hải sản); chế biến và bảo quản thực phẩm; 
            sản xuất các chế phẩm sinh học sử dụng trong nông nghiệp, thuốc bảo vệ thực vật; ứng dụng trong y học và dược phẩm, chẩn đoán bệnh; xử lý ô nhiễm môi trường, rác thải…</p>
        </div>
      </div>
    
      <div class="item">
        <img src="images/baovethucvat.jfif" alt="protect" style="width:100%;">
        <div class="carousel-caption">
          <h3>Bảo vệ thực vật</h3>
          <p>Ngành Bảo vệ thực vật luôn đóng vai trò quan trọng sản xuất nông nghiệp nói chung và trồng trọt nói riêng. Bên cạnh sứ mệnh bảo vệ sản xuất cây trồng nông nghiệp, ngành này đã mang lại giá trị hiệu quả thiết thực cho người dân là nâng cao sản lượng và giá trị hàng hóa, tăng thu nhập trên cùng đơn vị diện tích cây trồng.
             Đặc biệt, ngành còn đóng góp quan trọng cho việc cải thiện rõ rệt công tác bảo vệ môi trường và sức khỏe cộng đồng.</p>
        </div>
      </div>

      <div class="item">
        <img src="images/seafood.jpg" alt="seafood" style="width:100%;">
        <div class="carousel-caption">
          <h3>Nuôi trồng thủy sản</h3>
          <p>Ngành Bảo vệ thực vật luôn đóng vai trò quan trọng sản xuất nông nghiệp nói chung và trồng trọt nói riêng. Bên cạnh sứ mệnh bảo vệ sản xuất cây trồng nông nghiệp, ngành này đã mang lại giá trị hiệu quả thiết thực cho người dân là nâng cao sản lượng và giá trị hàng hóa, tăng thu nhập trên cùng đơn vị diện tích cây trồng.
             Đặc biệt, ngành còn đóng góp quan trọng cho việc cải thiện rõ rệt công tác bảo vệ môi trường và sức khỏe cộng đồng.</p>
        </div>
      </div>

      <div class="item">
        <img src="images/channuoi.jpg" alt="channuoi" style="width:100%;">
        <div class="carousel-caption">
          <h3>Chăn nuôi</h3>
          <p>Ngành Chăn nuôi (tiếng Anh là Animal Husbandry) là một ngành quan trọng của nông nghiệp hiện đại, nuôi lớn vật nuôi để sản xuất những sản phẩm như:
             thực phẩm, lông, và sức lao động. Sản phẩm từ chăn nuôi nhằm cung cấp lợi nhuận và phục vụ cho đời sống sinh hoạt của con người.</p>
        </div>
      </div>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel4" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel4" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<br>
<!--Carousel 4-->

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
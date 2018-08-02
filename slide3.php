
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">
    <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <link rel="shortcut icon" href="img/favicon.png">

    <title> Slide 3 </title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>

  <body class="login-body">

    <div class="container ">
	  <p>&nbsp;</p>
	  <h3 style="text-align:center;">발신 제목: 비밀번호 변경을 위한 인증코드 </h3>
		
		<div class="modal-dialog">
		  <div class="modal-content">
			  <div class="modal-header">
				  <h4 class="modal-title">  <img src="images/logo.png" style="height:30px;"> ㈜ 경연파트너스 KY Consulting Group </h4>
			  </div>
			  <div class="modal-body">
				  <div class="col-md-12 topsec">
						<p>&nbsp;</p>
						<p style="text-align:left;">안녕하세요. 경연파트너스 시스템 운영 팀입니다. </p>

						<p style="text-align:left;">비밀번호 변경을 위한 인증코드입니다. </p>
						<p style="text-align:left;">인증코드를 화면상에 입력하시고 비번을 변경하시기 바랍니다. </p>
						<p>&nbsp;</p>
						<p style="text-align:left;font-weight:bold;">XGE03KGYT</p>
						<p>&nbsp;</p>
						<p style="text-align:left;">직접 비밀번호 변경 인증코드를 요청하신 게 아니시면 </p>
						<p style="text-align:left;"><a href="mailto:angela.kim@kycg.co.kr">angela.kim@kycg.co.kr</a> 로 메일을 보내 주세요. </p>
						<p>&nbsp;</p>
						<p style="text-align:left;">감사합니다.</p>
						<p style="text-align:left;">경연 파트너스 시스템 운영팀</p>
				  </div>
				  <div class="clearfix"></div>
			  </div>


		  </div>
	  </div>
		  <p style="text-align:center;"> <button data-toggle="modal" href="#success_pass" class="btn btn-sm"> Confirm popup</button> </p>
		  <!-- change password -->
          <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="success_pass" class="modal fade">
			  <form method="POST" action="">
              <div class="modal-dialog">
                  <div class="modal-content">
                      <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                          <h4 class="modal-title"> 비밀번호 변경 </h4>
                      </div>
                      <div class="modal-body">
                          <div class="col-md-12 topsec">
							  <p style="text-align:center;"> 비밀번호가 변경되었습니다. </p>
							  <p style="text-align:center;"> 다시 로그인하시기 바랍니다. </p>
							  
							  <p>&nbsp;</p>

							  <div class="form-group col-md-8 col-md-offset-2">
								  <button class="btn btn-sm btn-login center-block" type="submit"> 확인 </button>
							  </div>
						  </div>
						  
						  <div class="clearfix"></div>
                      </div>
                  </div>
              </div>
			  </form>
          </div>
          <!-- success change password -->


    </div>



    <!-- js placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>


  </body>
</html>

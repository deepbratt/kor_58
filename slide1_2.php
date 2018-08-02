
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">
    <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>FlatLab - Flat & Responsive Bootstrap Admin Template</title>

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

    <div class="container">
	  <h1 style="text-align:center;margin-top:50px;"><img src="images/logo.png"></h1>
	  <h3 style="text-align:center;">Welcome! 글로벌 인재 서치펌 <br />
		경연파트너스 업무관리시스템
	  </h3>
      <form class="form-signin" style="margin-top:40px;" method="POST" action="">
        <h2 class="form-signin-heading">Sign In</h2>
        <div class="login-wrap">
			<div class="form-group">
				  <label class="col-lg-3 col-sm-3 control-label" style="font-size:12px;font-weight:normal;padding:10px 0px;"> 사용자ID </label>
				  <div class="col-lg-9" style="padding:0px;">
						 <input type="text" class="form-control" placeholder="회사이메일 입력">
				  </div>
				  <div class="clearfix"></div>
			</div>

			<div class="form-group">
				  <label class="col-lg-3 col-sm-3 control-label" style="font-size:12px;font-weight:normal;padding:10px 0px;"> 비밀번호 </label>
				  <div class="col-lg-9" style="padding:0px;">
						 <input type="text" class="form-control" placeholder="비밀번호 입력">
				  </div>
				  <div class="clearfix"></div>
			</div>

            <label class="checkbox">
                <span class="pull-right">
                    <a data-toggle="modal" href="#myModal"> Forgot Password?</a>
                </span>
				<p>&nbsp;</p>
            </label>
            <button class="btn btn-lg btn-login btn-block" type="submit">Sign in</button>

        </div>

          <!-- Modal -->
          <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
              <div class="modal-dialog">
                  <div class="modal-content">
                      <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                          <h4 class="modal-title">Forgot Password ?</h4>
                      </div>
                      <div class="modal-body">
                          <div class="col-md-12 topsec">
							  <p>회사 이메일 주소를 입력해 주시면 해당 이메일로 인증코드가 발송됩니다.</p>
							  <p>인증코드를 아래 입력하시고 비밀번호를 재설정하시기 바랍니다.</p>
							  
							  <p>&nbsp;</p>

							  <div class="form-group col-md-8 col-md-offset-2">
								  <label class="col-lg-3 col-sm-3 control-label" style="font-size:12px;font-weight:normal;padding:10px 0px;"> 비밀번호 </label>
								  <div class="col-lg-9" style="padding:0px;">
										 <input type="text" class="form-control" placeholder="비밀번호 입력">
								  </div>
								  <button class="btn btn-sm btn-login center-block" type="submit"> 인증코드 전송 </button>
							  </div>
						  </div>
						  
						  <p style="text-align:left;padding-left:30px;"> 비밀번호 변경 </p>
						  <div class="col-md-12 btmsec">
								<div class="form-group col-md-12">
									  <div class="col-lg-6 col-md-6" style="padding:0px;">
											 <input type="text" class="form-control" placeholder="인증코드">
									  </div>
									  <label class="col-lg-6 col-md-6  pull-right" style="font-size:12px;font-weight:normal;padding:10px 10px;"> 인증코드를 입력해 주세요 </label>
									  
								</div>

								<div class="form-group col-md-12">
									  <div class="col-lg-6 col-md-6" style="padding:0px;">
											<input type="text" class="form-control" placeholder="비밀번호">
									  </div>
									  <label class="col-lg-6 col-md-6  pull-right" style="font-size:12px;font-weight:normal;padding:10px 10px;"> 새로운 비밀번호를 입력해 주세요 *숫자, 영문 포함 10자 이상 </label>
								</div>

								<div class="form-group col-md-12">
									  <div class="col-lg-6 col-md-6" style="padding:0px;">
											<input type="text" class="form-control" placeholder="비밀번호 확인">
									  </div>
									  <label class="col-lg-6 col-md-6  pull-right" style="font-size:12px;font-weight:normal;padding:10px 10px;"> 비밀번호를 한번 더 입력해 주세요 </label>
								</div>

								<div class="form-group col-md-8 col-md-offset-2">
									  <div class="col-lg-6 col-md-6" style="padding:0px;">
											<button class="btn btn-sm btn-login center-block" type="button" style="width:150px;"> 비밀번호 변경 </button>
									  </div>
									  <div class="col-lg-6 col-md-6" style="padding:0px;">
											<button class="btn btn-sm btn-login center-block" type="submit" style="width:150px;"> 닫기 </button>
									  </div>
								</div>
						   </div>
						  <div class="clearfix"></div>
                      </div>
                  </div>
              </div>
          </div>
          <!-- modal -->

      </form>

    </div>



    <!-- js placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>

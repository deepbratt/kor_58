
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keyword" content="">

    <title>Slide 44</title>
	<?php include("metalinks.php");?>
    <!--  summernote -->
	<link href="css/yamm.css" rel="stylesheet">
	<style>
		.bottom_border{
			border-bottom: none !important;
		}
	</style>
  </head>

  <body class="mega-nav">

  <section id="container" class="">
      <!--header start-->
      <?php include("header.php");?>
      <!--header end-->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
          <!-- page start-->
			 <div class="row">
				<div class="col-md-8 col-md-offset-2">
					<section class="panel">
                          <div class="panel-body">
							<form class="form-horizontal tasi-form" method="POST">
							<header class="form-group " style="font-size:1.5em;padding:15px;border:none !important;"> 컨설턴트 > 계정추가</header>
							  <div class="col-sm-12">
							   <div class="row">
							    <div class="col-sm-12">
									<div class="form-group">
									  <label class="col-lg-2 col-sm-2 control-label" style="font-size:12px;font-weight:normal;padding:10px 0px;"> 이름 </label>
									  <div class="col-lg-6" style="padding:0px;">
											 <input type="text" class="form-control" placeholder="">
									  </div>
									  <div class="clearfix"></div>
									</div>
									<div class="form-group">
										  <label class="col-lg-2 col-sm-2 control-label" style="font-size:12px;font-weight:normal;padding:10px 0px;"> 계정아이디 </label>
										  <div class="col-lg-6" style="padding:0px;">
												 <input type="text" class="form-control" placeholder="">
										  </div>
										  
										  <div class="clearfix"></div>
									</div>
									<div class="form-group">
										  <label class="col-lg-2 col-sm-2 control-label" style="font-size:12px;font-weight:normal;padding:10px 0px;"> 비밀번호 </label>
										  <div class="col-lg-6" style="padding:0px;">
											<input type="text" class="form-control" placeholder="">
										  </div>
										  <div class="col-md-4">@kycg.co.kr</div>
										  <div class="clearfix"></div>
									</div>
									<div class="form-group">
										  <label class="col-lg-2 col-sm-2 control-label" style="font-size:12px;font-weight:normal;padding:10px 0px;"> 직급 </label>
										  <div class="col-lg-6" style="padding:0px;">
												 <input type="text" class="form-control" placeholder="비밀번호 입력">
										  </div>
										  <div class="clearfix"></div>
									</div>
									  <div class="col-sm-4 col-sm-offset-5">
										<a class="btn btn-info" data-toggle="modal" href="#enroll"> 등록</a>
										<button class="btn btn-default" type="button">취소</button>
									  </div>
									</div>
								 </div>
								<!-- MODAL Start -->
									<div class="modal fade modal-dialog-center " id="enroll" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
									  <div class="modal-dialog ">
										  <div class="modal-content-wrap">
											  <div class="modal-content">
												  <div class="modal-header">
													  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
													  <h4 class="modal-title">프로필 등록 확인</h4>
												  </div>
												  <div class="modal-body">내 프로필을 등록하시겠습니까?.</div>
												  <div class="modal-footer">
													  <button data-dismiss="modal" class="btn btn-default" type="button">취소</button>
													  <button class="btn btn-warning" type="button"> 확인</button>
												  </div>
											  </div>
										  </div>
									  </div>
								  </div>
								<!-- Modal Ends -->
                              </form>
                          </div>
                      </section>
				</div>
			 </div>
		</div>
	  <!-- page end-->
	  
	  </section>
  </section>
      <!--main content end-->

<!-- MODAL Start -->
	<div class="modal fade modal-dialog-center " id="enroll" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	  <div class="modal-dialog ">
		  <div class="modal-content-wrap">
			  <div class="modal-content">
				  <div class="modal-header">
					  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					  <h4 class="modal-title">컨택내용등록</h4>
				  </div>
				  <div class="modal-body">강용오 Andrew.kang@kycg.co.kr 계정이 생성되었습니다. </div>
				  <div class="modal-footer">
					  <button data-dismiss="modal" class="btn btn-default" type="button">확인</button>
					  
				  </div>
			  </div>
		  </div>
	  </div>
  </div>
<!-- Modal Ends -->
      <!--footer start-->
     <?php include("footer.php");?>
	 
      <!--footer end-->
  </section>
    <!--this page plugins-->
  <script src="js/jquery.js"></script>
  <!--custom tagsinput-->
  <script src="js/jquery.tagsinput.js"></script>
  <!-- script for this page -->
  <script src="js/form-component.js"></script>
  <!--bootstrap swither-->
  </body>
</html>

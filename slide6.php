
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keyword" content="">

    <title>Slide 6</title>
	<?php include("metalinks.php");?>
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
				<div class="col-md-12">
					<section class="panel">
                          <div class="panel-body">
							<form class="form-horizontal tasi-form" method="POST">
							<header class="form-group bottom_border" style="font-size:1.5em;padding:15px;"> 3. 경력사항 </header>
							  <div class="col-sm-12">
							   <div class="row">
							    <div class="col-sm-12">
                                  <div class="form-group bottom_border">
                                      <label class="col-sm-3 control-label">재직기업</label>
                                      <div class="col-sm-2">
                                          <input type="text" class="form-control" placeholder="입력후 엔터">
                                      </div>
									  <div class="col-sm-5">
                                          <input type="text" id="tagsinput" class="tagsinput" value="황금에스티,시스코시스템즈 ">
                                      </div>
									  <div class="col-sm-2">
                                          <div class="col-md-2">
											 <input  type="checkbox" style="width: 20px" class="checkbox form-control" id="agree" name="agree" checked/>
										 </div>
										 <div class="col-md-10">
											 <label class="control-label">공개</label>
										 </div>
                                      </div>
                                  </div>

								  <div class="form-group bottom_border">
                                      <label class="col-sm-3 control-label">전문분야</label>
                                      <div class="col-sm-2">
                                          <input type="text" class="form-control" placeholder="입력후 엔터">
                                      </div>
									  <div class="col-sm-5">
                                          <input type="text" id="tagsinput" class="tagsinput" value="B2B,e-Commerce,신규사업기획">
                                      </div>
									  <div class="col-sm-2">
                                          <div class="col-md-2">
											 <input  type="checkbox" style="width: 20px" class="checkbox form-control" id="agree" name="agree" checked/>
										 </div>
										 <div class="col-md-10">
											 <label class="control-label">공개</label>
										 </div>
                                      </div>
                                  </div>

								  <div class="form-group bottom_border">
                                      <label class="col-sm-3 control-label">재직기업</label>
                                      <div class="col-sm-7">
                                          <textarea class="form-control"></textarea>
                                      </div>
									  <div class="col-sm-2">
                                          <div class="col-md-2">
											 <input  type="checkbox" style="width: 20px" class="checkbox form-control" id="agree" name="agree" checked/>
										 </div>
										 <div class="col-md-10">
											 <label class="control-label">공개</label>
										 </div>
                                      </div>
                                  </div>

								  <div class="form-group bottom_border">
                                      <label class="col-sm-3 control-label">자기소개</label>
                                      <div class="col-sm-7">
                                          <textarea class="form-control"></textarea>
                                      </div>
									  <div class="col-sm-2">
                                          <div class="col-md-2">
											 <input  type="checkbox" style="width: 20px" class="checkbox form-control" id="agree" name="agree" checked/>
										 </div>
										 <div class="col-md-10">
											 <label class="control-label">공개</label>
										 </div>
                                      </div>
                                  </div>
								  <div class="col-sm-10">
									  <div class="pull-right">
										  <a class="btn btn-info" data-toggle="modal" href="#enroll"> 등록</a>
										  <button class="btn btn-default" type="button">닫기</button>
									  </div>
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

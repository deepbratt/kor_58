
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keyword" content="">

    <title>Slide 26</title>
	<?php include("metalinks.php");?>
    <!--  summernote -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap-switch.css" />
	<!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="css/font-awesome.css" rel="stylesheet" />
      <!--right slidebar-->
    <link href="css/slidebars.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />

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
				<div class="col-md-12">
					<section class="panel">
                          <div class="panel-body">
							<form class="form-horizontal tasi-form" method="POST">
							<header class="form-group bottom_border" style="font-size:1.5em;padding:15px;"> 3. 경력정보 </header>
							  <div class="col-sm-12">
							   <div class="row">
							    <div class="col-sm-12">
                                  <div class="form-group bottom_border">
                                      <label class="col-sm-3 control-label">*핵심 키워드</label>
                                      <div class="col-sm-2">
                                          <input type="text" class="form-control" placeholder="입력후 엔터">
                                      </div>
									  <div class="col-sm-7">
                                          <input type="text" id="tagsinput" class="tagsinput" value="해외경력    , 중국어 실력,">
                                      </div>
                                  </div>
								  <div class="form-group bottom_border">
                                      <label class="col-sm-3 control-label">현재해외근무</label>
                                      <div class="col-sm-1">
                                          <div class="make-switch">
											  <input type="checkbox" checked>
										  </div>
                                      </div>
									  <div class="col-sm-4">
                                          <div class="input-group m-bot15">
											  <input type="text" class="form-control" placeholder="국가">
											  <span class="input-group-btn">
												<button type="button" class="btn btn-white"><i class="fa fa-search"></i></button>
											  </span>
										  </div>
                                      </div>
                                  </div>
								  <div class="form-group bottom_border">
                                      <label class="col-sm-3 control-label">해외경력</label>
                                      <div class="col-sm-1">
                                          <div class="make-switch">
											  <input type="checkbox" checked>
										  </div>
                                      </div>
									  <div class="col-sm-3">
                                          <div class="input-group m-bot15">
											  <input type="text" class="form-control" placeholder="국가">
											  <span class="input-group-btn">
												<button type="button" class="btn btn-white"><i class="fa fa-search"></i></button>
											  </span>
										  </div>
                                      </div>
									  <div class="col-sm-1">
                                          <input type="text" class="form-control">
                                      </div>
									  <div class="col-sm-1">
									    <div class="row">
											<label class="col-sm-2 control-label">년</label>
											<div class="col-sm-6">
												<button class="btn btn-info" type="submit">추가</button>
											</div>
										</div>
                                      </div>
									  <div class="col-sm-3">
                                           <input type="text" id="tagsinput" class="tagsinput" value="중국 3년">
                                      </div>
                                  </div>
								  <div class="form-group bottom_border">
                                      <label class="col-sm-3 control-label">*직종</label>
                                      <div class="col-sm-2">
                                          <button class="btn btn-info" type="submit">찾아보기</button>
                                      </div>
									  <div class="col-sm-7">
                                          <input type="text" id="tagsinput" class="tagsinput" value="IT인터넷 >웹개발    ,   웹IT인터넷>기획·PM">
                                      </div>
                                  </div>
								  <div class="form-group bottom_border">
								  	<label class="col-sm-3 control-label">경력기간</label>
									<div class="col-sm-6">
										<div class="row">
											<div class="col-sm-2">
											  <input type="text" class="form-control" placeholder="숫자">
										    </div>
										    <label class="col-sm-1 control-label">년</label>
											<div class="col-sm-2">
												 <input type="text" class="form-control" placeholder="숫자">
										    </div>
										    <label class="col-sm-2 control-label">개월</label>
										</div>
									</div>
									<div class="col-sm-3">
										<div class="row">
											<label class="col-sm-6 control-label">이직횟수</label>
											<div class="col-sm-6">
											  <input type="text" class="form-control">
										    </div>
										</div>
									</div>
                                  </div>
								  <div class="form-group bottom_border">
								    <label class="col-sm-3 control-label">재직기업</label>
                                      <div class="col-sm-3">
                                          <input type="text" class="form-control" placeholder="입력후 엔터">
										  <p class="help-block">최*근 재직기업 순으로 입력해 주세요</p>
                                      </div>
									  <div class="col-sm-6">
                                          <input type="text" id="tagsinput" class="tagsinput" value="삼성전자,삼성SDS">
                                      </div>
                                  </div>
								  <div class="form-group bottom_border">
								      <label class="col-sm-3 control-label">핵심역량</label>
                                      <div class="col-sm-3">
                                          <input type="text" class="form-control" placeholder="입력 후 엔터">
                                      </div>
									  <div class="col-sm-9" style="margin-left:322px;">
                                          <textarea class="form-control"></textarea>
                                      </div>
                                  </div>

								   <div class="form-group bottom_border">
								      <label class="col-sm-3 control-label">*상세경력</label>
                                      <div class="col-sm-9">
                                          <textarea class="form-control ckeditor" rows="6"></textarea>
                                      </div>
                                  </div>





								  <!-------------------------------------------------------------------------------->



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
  <script type="text/javascript" src="js/ckeditor.js"></script>
  <script src="js/jquery.tagsinput.js"></script>
  <!-- script for this page -->
  <script src="js/form-component.js"></script>
  <!--bootstrap swither-->
  <script src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/bootstrap-inputmask.min.js"></script>
  <!-- Script in pages -->
  <script src="js/bootstrap-switch.js"></script>
  <script type="text/javascript">
      $(document).ready(function () {
          // Resets to the regular style
          $('#dimension-switch').bootstrapSwitch('setSizeClass', '');
          // Sets a mini switch
          $('#dimension-switch').bootstrapSwitch('setSizeClass', 'switch-mini');
          // Sets a small switch
          $('#dimension-switch').bootstrapSwitch('setSizeClass', 'switch-small');
          // Sets a large switch
          $('#dimension-switch').bootstrapSwitch('setSizeClass', 'switch-large');
          $('#change-color-switch').bootstrapSwitch('setOnClass', 'success');
          $('#change-color-switch').bootstrapSwitch('setOffClass', 'danger');
      });
  </script>
  </body>
</html>

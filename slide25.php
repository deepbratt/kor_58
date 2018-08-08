
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keyword" content="">

    <title>Slide 25</title>
	<?php include("metalinks.php");?>
	<link href="css/bootstrap.min.css" rel="stylesheet">

	<link href="css/bootstrap-reset.css" rel="stylesheet">
    <link href="css/font-awesome.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />

    <link rel="stylesheet" type="text/css" href="css/bootstrap-fileupload.css" />
    <!--bootstrap switcher-->
    <link rel="stylesheet" type="text/css" href="css/bootstrap-switch.css" />
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
                          <header class="panel-heading">
                             인재>인재 신규등록
                          </header>
                          <div class="panel-body">
						    <h3 class="form-group">
								인재 신규등록
							</h3>
							<form class="form-horizontal tasi-form">
							<header class="form-group bottom_border" style="font-size:1.5em;padding:15px;"> 1.기본정보 </header>
							  <div class="col-sm-12">
							   <div class="row">
							    <div class="col-sm-6">
								  <div class="form-group bottom_border">
                                      <label class="col-sm-3 control-label">*이름</label>
                                      <div class="col-sm-5">
                                          <input type="text" class="form-control" placeholder="김태령">
                                      </div>
                                  </div>
								  <div class="form-group bottom_border">
                                      <label class="col-sm-3 control-label">*생년월일</label>
                                      <div class="col-sm-5">
                                          <input type="text" class="form-control" placeholder="19770521">
                                      </div>
                                  </div>

                                  <div class="form-group bottom_border">
                                      <label class="col-sm-3 control-label">*이메일</label>
                                      <div class="col-sm-5">
                                          <input type="text" class="form-control" placeholder="yeowu@naver.com">
                                      </div>
									  <div class="col-sm-2">
                                          <span><button type="button" class="btn btn-info">추가</button></span>
                                      </div>
									  
                                  </div>
                                   <div class="form-group bottom_border">
                                      <label class="col-sm-3 control-label">*연락처</label>
                                      <div class="col-sm-5">
                                          <input type="text" class="form-control" placeholder="01026487682">
                                      </div>
									  <div class="col-sm-2">
                                          <span><button type="button" class="btn btn-info">추가</button></span>
                                      </div>
                                  </div>
                                   <div class="form-group bottom_border">
                                      <label class="col-sm-3 control-label">*주소</label>
                                      <div class="col-sm-5">
                                          <input type="text" class="form-control">
                                      </div>
									  <div class="col-sm-2">
                                          <span>우편번호</span>
                                      </div>
									  <div class="col-sm-2">
                                          <span><input type="text" class="form-control"></span>
                                      </div>
                                  </div>

								  <div class="form-group bottom_border">
                                      <label class="col-sm-3 col-sm-3 control-label">*성별</label>
                                      <div class="col-sm-7">
                                          <div class="make-switch">
											  <input type="checkbox" checked>
										  </div>
                                      </div>
                                  </div>
								</div>

								<div class="col-sm-6">
										<div class="form-group last bottom_border">
										  <label class="control-label col-md-3">사진등록</label>
										  <div class="col-md-9">
											  <div class="fileupload fileupload-new" data-provides="fileupload">
												  <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
													  <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt="" />
												  </div>
												  <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
												  <div>
												   <span class="btn btn-white btn-file">
												   <span class="fileupload-new"><i class="fa fa-paper-clip"></i>사진등록</span>
												   <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
												   <input type="file" class="default" />
												   </span>
													  <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload"><i class="fa fa-trash"></i> Remove</a>
												  </div>
											  </div>
										  </div>
									  </div>
									  <div class="form-group bottom_border" style="margin-top:104px;">
										  <label class="col-sm-3 col-sm-3 control-label">결혼</label>
										  <div class="col-sm-7">
											  <div class="make-switch">
												  <input type="checkbox" checked>
											  </div>
										  </div>
									  </div>
									</div>
								</div>
							</div>
						</form>
					</div>
									
					<div class="panel-body form-horizontal">
						<div class="col-sm-12">
							<div class="row">
								<div class="col-sm-6">
									<header class="form-group bottom_border" style="font-size:1.5em;"> 2. 관리정보 </header>
								</div>
								<div class="col-sm-6">
								  <div class="form-group bottom_border">
									  <div class="col-sm-2">
											<span class="pull-right">
												 <button class="btn btn-info" data-toggle="modal" href="#duplicate_reg">중복체크</button>
											</span>
									  </div>
									  <div class="col-sm-6">
										<span>*기본정보 입력 후 체크해 주세요</span>
									  </div>
								  </div>
								</div>
							</div>
						</div>

						<div class="col-sm-6">
						   <div class="row">
							<div class="col-sm-12">
							  <div class="form-group bottom_border">
								  <label class="col-sm-3 control-label">등록자</label>
									<div class="col-sm-4">
									  <div class="input-group m-bot15">
										  <input type="text" class="form-control" value="강용오">
										  <span class="input-group-btn">
											<button type="button" class="btn btn-white"><i class="fa fa-search"></i></button>
										  </span>
									  </div>
									</div>
							  </div>
							  <div class="form-group bottom_border">
								  <label class="col-sm-3 control-label">발굴방법</label>
								  <div class="col-sm-4">
									  <select class="form-control input-sm m-bot15">
											<option value="선택" selected>선택</option>
									  </select>
								  </div>
							  </div>
							</div>
						</div>
					 </div>

					 <div class="col-md-12">
						<div class="form-group bottom_border">
						  <label class="col-sm-1 control-label">담당자메모</label>
						  <div class="col-sm-8" style="margin-left: 53px;">
							  <input type="text" class="form-control">
						  </div>
						</div>
					 </div>
				  </div>
			  </section>
			</div>
		 </div>
			<!-- MODAL Start -->
				<div class="modal fade modal-dialog-center " id="duplicate_reg" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				  <div class="modal-dialog ">
					  <div class="modal-content-wrap">
						  <div class="modal-content">
							  <div class="modal-header">
								  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
								  <h4 class="modal-title">인재 중복체크</h4>
							  </div>
							  <div class="modal-body text-center">중복된 인재가 없습니다. 등록 가능합니다</div>
							  <div class="modal-footer" style="border-top: none !important;">
								  <button data-dismiss="modal" class="btn btn-default" type="button">닫기</button>
								  <button class="btn btn-warning" type="button"> 확인</button>
							  </div>
						  </div>
					  </div>
				  </div>
			  </div>
			<!-- Modal Ends -->
          <!-- page end-->
          </section>
      </section>
      <!--main content end-->
      <!--footer start-->
     <?php include("footer.php");?>
      <!--footer end-->
  </section>
  <script src="js/jquery.js"></script>
  <script type="text/javascript" src="js/bootstrap-fileupload.js"></script>
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

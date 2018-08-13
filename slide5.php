
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keyword" content="">

    <title> 내 프로필 등록 페이지 1 </title>
	<?php include("metalinks.php");?>
    <link href="css/table-responsive.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap-fileupload.css" />
    <!--bootstrap switcher-->
    <link rel="stylesheet" type="text/css" href="css/bootstrap-switch.css" />
    <!-- switchery-->
    <link rel="stylesheet" type="text/css" href="css/switchery.css" />
    <!--select 2-->
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
				<div class="col-md-12">
					<section class="panel">
                          <header class="panel-heading">
                             My Page> 내 프로필>프로필 등록
                          </header>
                          <div class="panel-body">
						    <h3 class="form-group">
								프로필 등록
							</h3>
							<form class="form-horizontal tasi-form" method="POST">
							<header class="form-group bottom_border" style="font-size:1.5em;padding:15px;"> 1. 기본정보 </header>
							  <div class="col-sm-12">
							   <div class="row">
							    <div class="col-sm-6">
								  <div class="form-group bottom_border">
                                      <label class="col-sm-3 control-label">*이름</label>
                                      <label  class="col-sm-7 control-label">강용오</label>
                                  </div>
								  <div class="form-group bottom_border">
                                      <label class="col-sm-3 control-label">*이메일</label>
                                      <label  class="col-sm-7 control-label">andrew.kang@kycg.co.kr</label>
                                  </div>

                                  <div class="form-group bottom_border">
                                      <label class="col-sm-3 control-label">*확인이메일</label>
                                      <div class="col-sm-7">
                                          <input type="text" class="form-control">
                                      </div>
									  <div class="col-sm-2">
                                          <span>*개인 이메일</span>
                                      </div>
									  
                                  </div>
                                   <div class="form-group bottom_border">
                                      <label class="col-sm-3 control-label">*생년월일</label>
                                      <div class="col-sm-7">
                                          <input type="text" class="form-control">
                                      </div>
                                  </div>
                                   <div class="form-group bottom_border">
                                      <label class="col-sm-3 control-label">*연락처</label>
                                      <div class="col-sm-7">
                                          <input type="text" class="form-control">
                                      </div>
                                  </div>

								  <div class="form-group bottom_border">
                                      <label class="col-sm-3 col-sm-3 control-label">성별</label>
                                      <div class="col-sm-7">
                                          <div class="make-switch">
											  <input type="checkbox" checked>
										  </div>
                                      </div>
                                  </div>
								  <div class="form-group bottom_border">
                                      <label class="col-sm-3 col-sm-3 control-label">직급</label>
                                      <label  class="col-sm-7 control-label">상무</label>
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
									</div>
								</div>
								 </div>
									
								<h3 class="form-group bottom_border"></h3>
								<div class="col-md-12">
									<div class="row">
										<div class="col-md-6">
											<header class="form-group bottom_border" style="font-size:1.5em;padding:15px;"> 2.  학력사항 </header>
										</div>
										<div class="col-md-6">
											  <div class="col-sm-7  pull-right">
												  <div class="form-group ">
													  <div class="col-lg-10 col-sm-9">
														<div class="row">
															<div class="col-md-2">
																 <input  type="checkbox" style="width: 20px" class="checkbox form-control" id="agree" name="agree" checked/>
															 </div>
															 <div class="col-md-10">
																 <label class="control-label">공개</label>
															 </div>
														 </div>
													  </div>
												  </div>
											  </div>
										</div>
									</div>
								</div>
								<div class="col-sm-12">
								   <div class="row">
									<div class="col-sm-6">
										<div class="form-group bottom_border">
										  <label class="col-sm-3 col-sm-3 control-label">학력</label>
											<div class="col-sm-4">
												  <select class="js-example-basic-single">
														<option value="학력구분" selected>학력구분</option>
												  </select>
											</div>
											<div class="col-sm-4">
												  <select class="js-example-basic-single">
														<option value="졸업" selected>졸업</option>
												  </select>
											</div>
										</div>
										<div class="form-group bottom_border">
										  <label class="col-sm-3 col-sm-3 control-label">학교명</label>
											<div class="col-sm-4">
												  <select class="js-example-basic-single">
														<option value="국내" selected>국내</option>
												  </select>
											</div>
											<div class="col-sm-4">
												  <select class="js-example-basic-single">
														<option value="대학교명" selected>대학교명</option>
												  </select>
											</div>
										</div>
									</div>
									<div class="col-sm-6">
										 <div class="form-group bottom_border">
											  <label class="col-sm-3 col-sm-3 control-label">전공명</label>
											  <div class="col-sm-7">
												  <input type="text" class="form-control">
											  </div>
										  </div>
									
									</div>
								</div>
							 </div>
							<h3 class="form-group bottom_border"></h3>
							 <div class="col-md-12 text-center">
								<div class="form-group">
									<button type="button" class="btn btn-info">추가</button>
								</div>
							 </div>
                              </form>
                          </div>
                          
                          <div class="panel-body">
                              <section id="no-more-tables">
                                  <table class="table table-bordered table-striped table-condensed cf">
                                      <thead class="cf">
                                      <tr>
                                          <th>지역</th>
                                          <th>학교구분</th>
                                          <th class="numeric">학교명</th>
                                          <th class="numeric">전공명</th>
                                          <th class="numeric">졸업여부</th>
                                          <th class="numeric">최종학력</th>
                                          <th class="numeric">삭제</th>
                                      </tr>
                                      </thead>
                                      <tbody>
                                      <tr>
                                          <td data-title="Code">국내</td>
                                          <td data-title="Company">대학교</td>
                                          <td data-title="Price">성균관대학교</td>
                                          <td data-title="Change"></td>
                                          <td data-title="Change %"></td>
                                          <td data-title="Open"><input type="radio" checked></td>
                                          <td data-title="High"><input type="checkbox" checked></td>
                                      </tr>
                                      <tr>
                                          <td data-title="Code">국내</td>
                                          <td data-title="Company">고등학교</td>
                                          <td data-title="Price">문영여자고등학교</td>
                                          <td data-title="Change"></td>
                                          <td data-title="Change %"></td>
                                          <td data-title="Open"><input type="radio"></td>
                                          <td data-title="High"><input type="checkbox" checked></td>
                                      </tr>
                                      </tbody>
                                  </table>
                              </section>
                          </div>
                      </section>
                  </div>
              </div>

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

          <!-- page end-->
          </section>
      </section>
      <!--main content end-->
      <!--footer start-->
     <?php include("footer.php");?>
      <!--footer end-->
  </section>
	<!--custom checkbox & radio-->
  <script type="text/javascript" src="js/ga.js"></script>
    <!--this page plugins-->
  <script src="js/jquery.js"></script>
    <!--this page plugins-->
  <script type="text/javascript" src="js/bootstrap-fileupload.js"></script>
  <!--bootstrap-switch-->
  <script src="js/bootstrap-switch.js"></script>
  <!--bootstrap-switch-->
  <!--custom tagsinput-->
  <script src="js/jquery.tagsinput.js"></script>
  <!-- script for this page -->
  <script src="js/form-component.js"></script>
  <!--bootstrap swither-->
  <!--bootstrap swither-->
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

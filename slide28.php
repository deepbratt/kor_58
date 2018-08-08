
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keyword" content="">

    <title>Slide 28</title>
	<?php include("metalinks.php");?>
    <!--bootstrap switcher-->
    <link rel="stylesheet" type="text/css" href="css/bootstrap-switch.css" />
    <link rel="stylesheet" type="text/css" href="css/datepicker.css" />
    <link rel="stylesheet" type="text/css" href="css/datetimepicker.css" />
	<link href="css/demo_page.css" rel="stylesheet" />
    <link href="css/demo_table.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/DT_bootstrap.css" />
	<link rel="stylesheet" type="text/css" href="css/bootstrap-fileupload.css" />
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
                             인재>인재 상세
                          </header>
                          <div class="panel-body">
						    <h3 class="form-group">
								 인재 상세
							</h3>
							<form class="form-horizontal tasi-form" method="POST">
							  <div class="col-sm-12">
							  	<div class="row">
									<div class="col-sm-6">
									  <div class="form-group bottom_border">
										  <button class="btn btn-default btn-lg" type="submit">인쇄</button>
										  <button class="btn btn-info btn-lg" type="submit">추천</button>
									  </div>
									</div>
									<div class="col-sm-6">
									  <div class="form-group bottom_border pull-right">
										  <button class="btn btn-info btn-lg" type="submit">수정</button>
										  <button class="btn btn-default btn-lg" data-toggle="modal" href="#candid_register">삭제요청</button>
										  <button class="btn btn-default btn-lg" type="submit">인재목록</button>
									  </div>
									</div>
								</div>
							   </div>
							</form>
						 </div>
					
                          <div class="panel-body">
                              <div class="adv-table">
                                  <table  class="display table table-bordered table-striped">
                                      <thead>
                                      <tr>
                                          <th colspan="3">1. 기본정보</th>
                                      </tr>
                                      </thead>
                                      <tbody>
                                      <tr>
                                          <td><label>이름</label></td>
                                          <td><label>김태령</label></td>
                                          <th rowspan="6" width="30%" class="text-center">
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
										  </th>
                                      </tr>
                                      <tr>
                                          <td><label>생년월일</label></td>
                                          <td><label>19770521</label></td>
                                      </tr>
									  <tr>
                                          <td><label>이메일</label></td>
                                          <td><label><a href="javascript:void();">yeowu@naver.com</a></label></td>
                                      </tr>
									  <tr>
                                          <td><label>연락처</label></td>
                                          <td><label>010-2648-7682</label></td>
                                      </tr>

									  <tr>
                                          <td><label>결혼</label></td>
                                          <td><label>기혼</label></td>
                                      </tr>
									  <tr>
                                          <td><label>성별</label></td>
                                          <td><label>여자</label></td>
                                      </tr>
                                      </tbody>

									  <thead>
                                      <tr>
                                          <th colspan="3">2. 관리정보</th>
                                      </tr>
                                      </thead>
                                      <tbody>
                                      <tr>
                                          <td><label>등록자</label></td>
                                          <td colspan="2"><label>강용오</label></td>
                                      </tr>
                                      <tr>
                                          <td><label>발굴방법</label></td>
                                          <td colspan="2"><label>사람인</label></td>
                                      </tr>
									  <tr>
                                          <td><label>최종수정자</label></td>
                                          <td colspan="2"><label>김영민</label></td>
                                      </tr>
									  <tr>
                                          <td><label>담당자메모</label></td>
                                          <td colspan="2"><label>6월 1일 발굴-친절하나 선택에는 까다로움.</label></td>
                                      </tr>

									  <tr>
                                          <td><label>변경내역</label></td>
                                          <td colspan="2"><label>[18-06-01 11:15:16] [강용오-이메일추가] <br/> [18-06-12 15:11:56] [김현웅-이메일변경] <br/> [18-06-15 17:52:46] [김영민-핸드폰변경]</label></td>
                                      </tr>
                                      </tbody>
                                  </table>
                              </div>
                          </div>
                      </section>
                  </div>
              </div>
			  <!-- MODAL Start -->
				<div class="modal fade modal-dialog-center " id="candid_register" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				  <div class="modal-dialog ">
					  <div class="modal-content-wrap">
						  <div class="modal-content">
							  <div class="modal-header">
								  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
								  <h4 class="modal-title">관심후보자등록</h4>
							  </div>
							  <div class="modal-body">
								<div class="col-sm-12">
									<div class="row">

										<div class="col-sm-3">
											<span class="fa fa-folder" style="font-size:3.3em;"></span>
											<span>마케팅</span>
										</div>
										<div class="col-sm-3">
											<span class="fa fa-folder" style="font-size:3.3em;"></span>
											<span>영업</span>
										</div>
										<div class="col-sm-3">
											<span class="fa fa-folder" style="font-size:3.3em;"></span>
											<span>IT</span>
										</div>
										<div class="col-sm-3">
											<span class="fa fa-plus-square-o" style="font-size:3.3em;"></span>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-3">
											<span class="fa fa-folder" style="font-size:3.3em;"></span>
											<input type="text" class="form-control">
										</div>
									</div>
								</div>
							  </div>
							  <div class="modal-footer" style="border-top: none !important;">
								  <button data-dismiss="modal" class="btn btn-default" type="button">닫기</button>
								  <button class="btn btn-warning" type="button"> 저장</button>
							  </div>
						  </div>
					  </div>
				  </div>
			  </div>
			<!-- Modal Ends -->
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
    <!--this page plugins-->
    <script src="js/jquery.js"></script>
    <!--this page plugins-->

  <script type="text/javascript" src="js/bootstrap-datepicker.js"></script>
  <script type="text/javascript" src="js/bootstrap-datetimepicker.js"></script>
  <!--select2-->
  <script src="js/advanced-form-components.js"></script>
  <script type="text/javascript" src="js/bootstrap-fileupload.js"></script>
  <script type="text/javascript" language="javascript" src="js/jquery.dataTables.js"></script>
  <script type="text/javascript" src="js/DT_bootstrap.js"></script>
  <script src="js/dynamic_table_init.js"></script>
  </body>
</html>

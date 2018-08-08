
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keyword" content="">

    <title>Slide 45</title>
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
									컨설턴트 >컨설턴트 상세
								  </header>
								  <div class="panel-body">
									<h3 class="form-group">
										 1. 기본정보
									</h3>
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
												  <td><label>강용오</label></td>
												  <th rowspan="7" width="30%" class="text-center">
													  <div class="fileupload fileupload-new" data-provides="fileupload" style="margin-top:40px;">
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
												  <td><label>회사 이메일</label></td>
												  <td><label>0000@kycg.co.kr</label></td>
											  </tr>
											  <tr>
												  <td><label>개인 이메일</label></td>
												  <td><label><a href="javascript:void();">0000@naver.com</a></label></td>
											  </tr>
											  <tr>
												  <td><label>생년월일</label></td>
												  <td><label>1969****</label></td>
											  </tr>

											  <tr>
												  <td><label>연락처</label></td>
												  <td><label>01048686088</label></td>
											  </tr>
											  <tr>
												  <td><label>성별</label></td>
												  <td><label>남자</label></td>
											  </tr>

											   <tr>
												  <td><label>직급</label></td>
												  <td><label>상무</label></td>
											  </tr>
											  </tbody>
										  </table>
									  </div>
								  </div>
							  </section>
						  </div>
					  </div>

			              <section>
                           <div class="row">
							  <div class="col-lg-12">
								  <section class="panel">
									  <header class="panel-heading">
										  2. 학력사항
									  </header>
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
												  </tr>
												  </thead>
												  <tbody>
												  <tr>
													  <td data-title="Code">국내</td>
													  <td data-title="Company">대학교</td>
													  <td data-title="Price">성균관대학교</td>
													  <td data-title="Change">국제정치</td>
													  <td data-title="Change %">졸업</td>
													  <td data-title="Open"><input type="radio" checked></td>
												  </tr>
												  <tr>
													  <td data-title="Code">국내</td>
													  <td data-title="Company">고등학교</td>
													  <td data-title="Price">문영여자고등학교</td>
													  <td data-title="Change">국제정치</td>
													  <td data-title="Change %">졸업</td>
													  <td data-title="Open"><input type="radio"></td>
												  </tr>
												  </tbody>
											  </table>
										  </section>
									  </div>
								  </section>
							  </div>
						  </div>
                      </section>

					   <div class="row">
						<div class="col-md-12">
							<section class="panel">
								  <div class="panel-body">
									  <div class="adv-table">
										  <table  class="display table table-bordered table-striped">
											  <thead>
											  <tr>
												  <th colspan="3">3. 경력사항</th>
											  </tr>
											  </thead>
											  <tbody>
											  <tr>
												  <td><label>재직기업</label></td>
												  <td><label>이상네트웍스,이상글로벌,시스코시스템즈,황금에스티</label></td>
												 
											  </tr>
											  <tr>
												  <td><label>전문분야</label></td>
												  <td><label>마케팅, 기획, 교육, 네트워킹 </label></td>
											  </tr>
											  <tr>
												  <td><label>상세경력</label></td>
												  <td></td>
											  </tr>
											  <tr>
												  <td><label>자기소개</label></td>
												  <td></td>
											  </tr>

											  <tr>
												  <td><label>관리자메모</label></td>
												  <td><div class="col-sm-12">
														<input type="text" class="form-control" placeholder="">
														</div>
													</td>
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

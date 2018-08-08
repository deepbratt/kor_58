
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keyword" content="">

    <title>Slide 34</title>
	<?php include("metalinks.php");?>
    <!--bootstrap switcher-->
    <link rel="stylesheet" type="text/css" href="css/bootstrap-switch.css" />
    <link rel="stylesheet" type="text/css" href="css/datepicker.css" />
    <link rel="stylesheet" type="text/css" href="css/datetimepicker.css" />
	<link href="css/demo_page.css" rel="stylesheet" />
    <link href="css/demo_table.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/DT_bootstrap.css" />
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
                          <div class="panel-body">
							<form class="form-horizontal tasi-form" method="POST">
							<header class="form-group bottom_border" style="font-size:1.5em;padding:15px;"> 4. 학력사항 </header>
							  <div class="col-sm-12">
							   <div class="row">
								   <div class="col-sm-4">
									  <div class="form-group bottom_border">
										  <label class="col-sm-3 control-label">*학력</label>
										  <div class="col-sm-4 control-label">
											  <select class="form-control m-bot15">
													<option value="학력구분" selected>학력구분</option>
											  </select>
										  </div>
										  <div class="col-sm-4 control-label">
											  <select class="form-control m-bot15">
													<option value="졸업" selected>졸업</option>
											  </select>
										  </div>
									  </div>
									</div>
								</div>

								<div class="row">
								   <div class="col-sm-4">
									  <div class="form-group bottom_border">
										  <label class="col-sm-3 control-label">학교명</label>
										  <div class="col-sm-4 control-label">
											  <select class="form-control m-bot15">
													<option value="국내" selected>국내</option>
											  </select>
										  </div>
										  <div class="col-sm-5 control-label">
											  <div class="input-group m-bot15">
												  <input type="text" class="form-control" placeholder="대학교명">
												  <span class="input-group-btn">
													<button type="button" class="btn btn-white"><i class="fa fa-search"></i></button>
												  </span>
											  </div>
										  </div>
									  </div>
									</div>

									<div class="col-sm-4"></div>
									<div class="col-sm-4">
									  <div class="form-group bottom_border">
										  <label class="col-sm-3 control-label">전공명</label>
										  <div class="col-sm-6 control-label">
											  <input class="form-control" type="text">
										  </div>
									  </div>
									</div>
								</div>
								<div class="row">
									 <div class="col-sm-12">
									  <div class="form-group bottom_border text-center">
										  <button class="btn btn-info" type="submit">추가</button>
									  </div>
									 </div>
								</div>
								
								<div class="row">
									 <div class="col-sm-12">
										<div class="form-group bottom_border">
											<div class="adv-table editable-table ">
											  <div class="clearfix">
												  <div class="btn-group text-center">
													  <button id="editable-sample_new" class="btn green">
														  Add New <i class="fa fa-plus"></i>
													  </button>
												  </div>
												  <!--<div class="btn-group">
													  <button class="btn dropdown-toggle" data-toggle="dropdown">Tools <i class="fa fa-angle-down"></i>
													  </button>
													  <ul class="dropdown-menu pull-right">
														  <li><a href="#">Print</a></li>
														  <li><a href="#">Save as PDF</a></li>
														  <li><a href="#">Export to Excel</a></li>
													  </ul>
												  </div>-->
											  </div>
											  <div class="space15"></div>

											  <div class="table-responsive">

											  <table class="table table-striped table-hover table-bordered" id="editable-sample">
												  <thead>
												  <tr>
													  <th>재학기간</th>
													  <th>소재지</th>
													  <th>지역</th>
													  <th>학력구분</th>
													  <th>학교명</th>
													  <th>전공명</th>
													  <th>졸업여부</th>
													  <th>최종학력체크</th>
													  <th>Action</th>
												  </tr>
												  </thead>
												  <tbody>
												  <tr class="text-center">
													  <td>
													  	<div class="form-group bottom_border">
															<label>1993</label>
															<label>~</label>
															<label>1995</label>
														</div>
													  </td>
													  <td>
														<div class="form-group bottom_border">
														  <label>국내</label>
													    </div>
													  </td>
													  <td>
														<div class="form-group bottom_border">
														   <label>서울</label>
													    </div>
													  </td>
													  <td>
														<div class="form-group bottom_border">
														  <label>고등학교</label>
													    </div>
													  </td>
													  <td>
														<div class="form-group bottom_border">
														  <label>문영여자고등학교</label>
													    </div>
													  </td>
													  <td>
														<div class="form-group bottom_border">
														  <label></label>
														</div>
													  </td>
													  <td>
														<div class="form-group bottom_border">
														  <label></label>
														</div>
													  </td>
													  <td>
														 <div class="form-group bottom_border">
														   <input type="radio" class="form-control">
														</div>
													  </td>
													  <td>
														<div class="form-group bottom_border">
															  <button class="btn btn-info" type="submit">저장</button>
															  <button class="btn btn-info" type="submit">삭제</button>
														</div>
													  </td>
												  </tr>
												  </tbody>
											  </table>
											 </div>
										  </div>
									 </div>
								</div>
							  </div>
							</div>
							<header class="form-group bottom_border" style="font-size:1.5em;padding:15px;"> 5. 기타 </header>
							  <div class="col-sm-12">
							   <div class="row">
								   <div class="col-sm-4">
									  <div class="form-group bottom_border">
										  <label class="col-sm-3 control-label">외국어</label>
										  <div class="col-sm-4 control-label">
											  <div class="input-group m-bot15">
												  <input type="text" class="form-control">
												  <span class="input-group-btn">
													<button type="button" class="btn btn-white"><i class="fa fa-search"></i></button>
												  </span>
											  </div>
										  </div>
										  <div class="col-sm-3 control-label">
											  <select class="form-control m-bot15">
													<option value="수준선택" selected>수준선택</option>
											  </select>
										  </div>
										  <div class="col-sm-2 control-label">
											  <button class="btn btn-info" type="submit">추가</button>
										  </div>
									  </div>
									</div>
									<div class="col-sm-8">
									  <div class="form-group bottom_border">
										  <div class="col-sm-12 control-label">
											  <input type="text" id="tagsinput" class="tagsinput" value="영어 : 비즈니스 업무가능  ,   중국어: 비즈니스 업무 가능">
										  </div>
									  </div>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-4">
									  <div class="form-group bottom_border">
										  <label class="col-sm-3 control-label">자격증</label>
										  <div class="col-sm-7 control-label">
											 <div class="input-group m-bot15">
												  <input type="text" class="form-control">
												  <span class="input-group-btn">
													<button type="button" class="btn btn-white"><i class="fa fa-search"></i></button>
												  </span>
											  </div>
										  </div>
										  <div class="col-sm-2 control-label">
											  <button class="btn btn-info" type="submit">추가</button>
										  </div>
									  </div>
									</div>
									<div class="col-sm-11" style="margin-left:106px;">
										<input type="text" id="tagsinput" class="tagsinput" value="건설기계기사     ,  1종 운전면허">
									</div>
								</div>
							</div>
							<header class="form-group bottom_border" style="font-size:1.5em;padding:15px;"> 6. 희망근무조건 </header>
							  <div class="col-sm-12">
							   <div class="row">
								   <div class="col-sm-6">
									  <div class="form-group bottom_border">
										  <label class="col-sm-2 control-label">근무지</label>
										  <div class="col-sm-4 control-label">
											  <select class="form-control m-bot15">
													<option value="국내" selected>국내</option>
											  </select>
										  </div>
										  <div class="col-sm-3 control-label">
											  <input type="text" class="form-control" placeholder="서울">
										  </div>
										  <div class="col-sm-3 control-label">
											  <input type="text" class="form-control">
										  </div>
									  </div>
									</div>
									<div class="col-sm-6">
									   <div class="form-group bottom_border">
										  <label class="col-sm-3 control-label">희망연봉/현재연봉</label>
										  <div class="col-sm-3 control-label">
											  <input type="text" class="control-label form-control" value="1000">
										  </div>
										  <label class="col-sm-1 control-label">/</label>
										  <div class="col-sm-3 control-label">
											  <input type="text" class="control-label form-control" value="1000">
										  </div>
										  <label class="col-sm-1 control-label">만원</label>
									  </div>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-12">
									  <div class="form-group bottom_border">
										  <label class="col-sm-1 control-label">지원분야</label>
										  <div class="col-sm-11 control-label">
											 <input type="text" class="form-control">
										  </div>
									  </div>
									</div>
								</div>
							</div>
							<div class="col-sm-12 text-center" style="padding-top:20px;">
							  <div class="row">
								<div class="form-group bottom_border">
									<button class="btn btn-info">수정</button>
									<button class="btn btn-default">인재 목록</button>
								</div>
							   </div>
							</div>
						  </form>
						</div>
					 </section>
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
  <script src="js/form-component.js"></script>
	<!--custom checkbox & radio-->
  <script type="text/javascript" src="js/bootstrap-datepicker.js"></script>
  <script type="text/javascript" src="js/bootstrap-datetimepicker.js"></script>
  <!--select2-->
  <script src="js/jquery.tagsinput.js"></script>
  <script src="js/common-scripts.js"></script>
  <script type="text/javascript" src="js/jquery.dataTables.js"></script>
  <script type="text/javascript" src="js/DT_bootstrap.js"></script>
  <script src="js/advanced-form-components.js"></script>
  <script src="js/editable-table.js"></script>
  <script>
	  jQuery(document).ready(function() {
		  EditableTable.init();
	  });
  </script>
</html>

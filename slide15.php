
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keyword" content="">

    <title>Slide 15</title>
	<?php include("metalinks.php");?>
    <!--bootstrap switcher-->
    <link rel="stylesheet" type="text/css" href="css/bootstrap-switch.css" />
    <link rel="stylesheet" type="text/css" href="css/datepicker.css" />
    <link rel="stylesheet" type="text/css" href="css/datetimepicker.css" />
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
                             채용공고>채용공고목록>공고 신규등록
                          </header>
                          <div class="panel-body">
						    <h3 class="form-group">
								공고 신규등록
							</h3>
							<form class="form-horizontal tasi-form" method="POST">
							<header class="form-group bottom_border" style="font-size:1.5em;padding:15px;"> 1. 기본정보 </header>
							  <div class="col-sm-12">
								<div class="row">
									<div class="col-sm-6">
										 <div class="form-group bottom_border">
										  <label class="col-sm-2 control-label">*고객사</label>
										  <div class="col-sm-6 control-label">
											  <div class="input-group m-bot15">
												  <input type="text" class="form-control" value="고객사명 입력">
												  <span class="input-group-btn">
													<button type="button" class="btn btn-white"><i class="fa fa-search"></i></button>
												  </span>
											  </div>
										  </div>
									  </div>
									</div>
									<div class="col-sm-6">
										 <div class="form-group bottom_border">
										  <label class="col-sm-2 control-label">모집사유</label>
										  <div class="col-sm-10 control-label">
											  <input type="text" class="form-control">
										  </div>
									     </div>
									</div>
								</div>
							   <div class="row">
									<div class="col-sm-12">
										<div class="form-group bottom_border" style="margin-bottom:15px;padding-bottom:15px;">
										  <label class="col-sm-1 control-label">*채용제목</label>
										  <div class="col-sm-11 control-label">
											   <input type="text" class="form-control">
										  </div>
									  </div>
									</div>
							   </div>

							   <div class="row">
							    <div class="col-sm-6">
								  <div class="form-group bottom_border">
                                      <label class="col-sm-2 control-label">*경력사항</label>
                                      <div class="col-sm-2 control-label" style="padding-right:0px;">
										  <input type="text" class="form-control" value="신입">
									  </div>
									  <div class="col-sm-2 control-label" style="padding-right:0px;padding-left:0px;">
										  <input type="text" class="form-control" value="경력" readonly>
									  </div>
									  <div class="col-sm-2 control-label" style="padding-right:0px;padding-left:0px;">
										  <input type="text" class="form-control" placeholder="숫자입력">
									  </div>
									  <div class="col-sm-1 control-label">
										  <span style="font-size: 17px;">~</span>
									  </div>
									  <div class="col-sm-2 control-label" style="padding-right:0px;padding-left:0px;">
										  <input type="text" class="form-control" placeholder="숫자입력">
									  </div>
									  <div class="col-sm-1 control-label" style="padding-left:0px;">
										  <span>년</span>
									  </div>
                                  </div>

                                  <div class="form-group bottom_border">
                                      <label class="col-sm-2 control-label">직책</label>
                                      <div class="col-sm-10 control-label">
										  <select class="form-control m-bot15">
												<option value="" selected></option>
										  </select>
									  </div>
                                  </div>
                                   <div class="form-group bottom_border">
                                       <label class="col-sm-2 control-label">고용형태</label>
                                      <div class="col-sm-10 control-label">
										   <select class="form-control m-bot15">
												<option value="정규직" selected>정규직</option>
										  </select>
									  </div>
                                  </div>
                                 
								</div>

								<div class="col-sm-6">
									 <div class="form-group bottom_border">
										  <label class="col-sm-2 control-label">연봉</label>
										  <div class="col-sm-10 control-label">
											  <input type="text" class="form-control">
										  </div>
									  </div>

									  <div class="form-group bottom_border">
										  <label class="col-sm-2 control-label">직급</label>
										  <div class="col-sm-10 control-label">
											  <select class="form-control m-bot15">
												<option value="" selected></option>
											  </select>
										  </div>
									  </div>
									   <div class="form-group bottom_border">
										  <label class="col-sm-2 control-label">근무부서</label>
										  <div class="col-sm-10 control-label">
											  <input type="text" class="form-control">
										  </div>
									  </div>
									</div>
								</div>

								 <div class="row">
									<div class="col-sm-12">
										<div class="form-group bottom_border">
											  <label class="col-sm-1 control-label">직종</label>
											  <div class="col-sm-1 control-label">
												  <button class="btn btn-info" type="submit">찾아보기</button>
											  </div>
											  <div class="col-sm-10 control-label">
												  <input type="text" id="tagsinput" class="tagsinput">
											  </div>
										</div>
									</div>
							   </div>

							   <div class="row">
							    <div class="col-sm-6">
								  <div class="form-group bottom_border" style="margin-top:15px;">
                                      <label class="col-sm-2 control-label">성별</label>
                                      <div class="col-sm-3 control-label" style="padding-right:0px;">
										  <input type="text" class="form-control" value="무관">
									  </div>
									  <div class="col-sm-3 control-label" style="padding-right:0px;">
										  <input type="text" class="form-control" value="남자">
									  </div>
									  <div class="col-sm-3 control-label" style="padding-right:0px;">
										  <input type="text" class="form-control" value="여자" readonly>
									  </div>
                                  </div>

                                  <div class="form-group bottom_border">
                                      <label class="col-sm-2 control-label">나이</label>
                                      <div class="col-sm-2 control-label" style="padding-right:0px;">
										  <input type="text" class="form-control" value="무관">
									  </div>
									  <div class="col-sm-2 control-label" style="padding-right:0px;padding-left:0px;">
										  <input type="text" class="form-control" value="제한" readonly>
									  </div>
									  <div class="col-sm-2 control-label" style="padding-right:0px;padding-left:0px;">
										  <input type="text" class="form-control" placeholder="숫자입력">
									  </div>
									  <div class="col-sm-1 control-label">
										  <span style="font-size: 17px;">~</span>
									  </div>
									  <div class="col-sm-2 control-label" style="padding-right:0px;padding-left:0px;">
										  <input type="text" class="form-control" placeholder="숫자입력">
									  </div>
                                  </div>
								</div>

								<div class="col-sm-6">
									 <div class="form-group bottom_border"  style="margin-top:15px;">
										  <label class="col-sm-2 control-label">근무지</label>
										  <div class="col-sm-3 control-label"  style="padding-right:0px;">
											  <select class="form-control m-bot15">
												<option value="국내" selected>국내</option>
											  </select>
										  </div>
										  <div class="col-sm-3 control-label"  style="padding-right:0px;padding-left:0px;">
											  <input type="text" class="form-control">
										  </div>
										  <div class="col-sm-3 control-label" style="padding-left:0px;">
											  <input type="text" class="form-control">
										  </div>
									  </div>
									  <div class="form-group bottom_border">
										  <label class="col-sm-2 control-label">학력사항</label>
										  <div class="col-sm-3 control-label"  style="padding-right:0px;">
											  <input type="text" class="form-control" value="무관">
										  </div>
										  <div class="col-sm-3 control-label"  style="padding-right:0px;padding-left:0px;">
											  <input type="text" class="form-control" value="제한" readonly>
										  </div>
										  <div class="col-sm-3 control-label" style="padding-left:0px;">
											  <select class="form-control m-bot15">
												<option value="대학교졸업(4년)이상" selected>대학교졸업(4년)이상</option>
											  </select>
										  </div>
									  </div>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-12">
										<div class="form-group bottom_border">
											  <label class="col-sm-1 control-label">외국어</label>
											  <div class="col-sm-2 control-label">
												   <div class="input-group m-bot15">
													  <input type="text" class="form-control">
													  <span class="input-group-btn">
														<button type="button" class="btn btn-white"><i class="fa fa-search"></i></button>
													  </span>
												   </div>
											  </div>
											  <div class="col-sm-2 control-label">
												  <select class="form-control m-bot15">
														<option value="수준선택" selected>수준선택</option>
												  </select>
											  </div>
											  <div class="col-sm-1 control-label">
												  <button class="btn btn-info" type="submit">추가</button>
											  </div>
											  <div class="col-sm-6 control-label">
												  <input type="text" class="form-control">
											  </div>
										</div>
									</div>
							   </div>
							   <div class="row">
									<div class="col-sm-12">
										<div class="form-group bottom_border">
											  <label class="col-sm-1 control-label">접수기간</label>
											  <div class="col-sm-2 control-label">
												  <div data-date-viewmode="years" data-date-format="dd-mm-yyyy" data-date="12-02-2012"  class="input-append date dpYears">
													  <input type="text" readonly="" value="2018-07-01" size="16" class="form-control">
													  <span class="input-group-btn add-on">
														<button class="btn btn-danger" type="button"><i class="fa fa-calendar"></i></button>
													  </span>
												  </div>
											  </div>
											  <div class="col-sm-2 control-label">
												  <div data-date-viewmode="years" data-date-format="dd-mm-yyyy" data-date="12-02-2012"  class="input-append date dpYears">
													  <input type="text" readonly="" value="2018-07-31" size="16" class="form-control">
													  <span class="input-group-btn add-on">
														<button class="btn btn-danger" type="button"><i class="fa fa-calendar"></i></button>
													  </span>
												  </div>
											  </div>
											  <label class="col-sm-1 control-label" style="margin-left:20px;">채용시</label>
											  <div class="col-sm-4 control-label">
													<input value="1" type="radio" style="width:5%;height:1.5em;"/>
											  </div>
										</div>
									</div>
							   </div>
							   <div class="row">
									<div class="col-sm-12">
										<div class="form-group bottom_border">
										  <label class="col-sm-1 control-label">담당자</label>
										  <div class="col-sm-11 control-label">
											   <div class="input-group m-bot15">
												  <input type="text" class="form-control" placeholder="강용오">
												  <span class="input-group-btn">
													<button type="button" class="btn btn-white"><i class="fa fa-search"></i></button>
												  </span>
											   </div>
										   </div>
										</div>
									</div>
							   </div>
							   <div class="row">
									<div class="col-sm-12">
										<div class="form-group bottom_border">
											  <label class="col-sm-1 control-label">파트너</label>
											  <div class="col-sm-2 control-label">
												  <select class="form-control m-bot15">
														<option value="비공개" selected>비공개</option>
												  </select>
											  </div>
											  <div class="col-sm-2 control-label">
												  <div class="input-group m-bot15">
													  <input type="text" class="form-control">
													  <span class="input-group-btn">
														<button type="button" class="btn btn-white"><i class="fa fa-search"></i></button>
													  </span>
												   </div>
											  </div>
											  <div class="col-sm-1 control-label">
												  <button class="btn btn-info" type="submit">추가</button>
											  </div>
											  <div class="col-sm-6 control-label">
												  <input type="text" id="tagsinput" class="tagsinput" value="김영민,김미영,조철수,이회림">
											  </div>
										</div>
									</div>
							   </div>
							   <div class="row">
									<div class="col-sm-12">
										<div class="form-group bottom_border">
										  <label class="col-sm-1 control-label">진행상태</label>
										  <div class="col-sm-2 control-label">
											  <select class="form-control m-bot15">
													<option value="진행중" selected>진행중</option>
											  </select>
										  </div>
										  <div class="col-sm-2 control-label">
											  <select class="form-control m-bot15">
													<option value="추천가능" selected>추천가능</option>
											  </select>
										  </div>
										</div>
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
    <!--this page plugins-->
  <script src="js/jquery.js"></script>
  <script src="js/jquery.tagsinput.js"></script>
  <script src="js/bootstrap-switch.js"></script>
  <script src="js/form-component.js"></script>
  <script type="text/javascript" src="js/bootstrap-datepicker.js"></script>
  <script type="text/javascript" src="js/bootstrap-datetimepicker.js"></script>
  <!--select2-->
  <script src="js/advanced-form-components.js"></script>

  </body>
</html>

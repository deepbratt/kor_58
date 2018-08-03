
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keyword" content="">

    <title>Slide 21</title>
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
                          <header class="panel-heading">인재>인재 목록</header>
                          <div class="panel-body">
						    <h3 class="form-group">인재 목록</h3>
							<section class="panel"  style="border:2px solid #ddd;padding:10px;">
								  <header class="panel-heading tab-bg-dark-navy-blue ">
									  <ul class="nav nav-tabs">
										  <li class="active">
											  <a data-toggle="tab" href="#home">기본정보</a>
										  </li>
										  <li class="">
											  <a data-toggle="tab" href="#about">직종</a>
										  </li>
										  <li class="">
											  <a data-toggle="tab" href="#profile">학력/외국어</a>
										  </li>
									  </ul>
								  </header>
								  <div class="panel-body">
									  <div class="tab-content">
										  <div id="home" class="tab-pane active">
											 <form class="form-horizontal tasi-form" method="POST">
												
												<div class="col-sm-12">
												   <div class="row">
													<div class="col-sm-4">
													  <div class="form-group bottom_border">
														  <label class="col-sm-3 control-label">등록자</label>
														  <div class="col-sm-6 control-label">
															  <div class="input-group m-bot15">
																  <input type="text" class="form-control" placeholder="전체">
																  <span class="input-group-btn">
																	<button type="button" class="btn btn-white"><i class="fa fa-search"></i></button>
																  </span>
															  </div>
														  </div>
													  </div>
													  <div class="form-group bottom_border">
														  <label class="col-sm-3 control-label">경력</label>
														  <div class="col-sm-3 control-label"  style="padding-right:0px;">
															  <input type="text" class="form-control" placeholder="숫자입력">
														  </div>
														  <div class="col-sm-1 control-label">
															  <span style="font-size: 17px;">~</span>
														  </div>
														  <div class="col-sm-3 control-label"  style="padding-right:0px;padding-left:0px;">
																<input type="text" class="form-control" placeholder="숫자입력">
														  </div>
														  <div class="col-sm-1 control-label">
															  <span style="font-size: 12px;">년</span>
														  </div>
													  </div>

													  <div class="form-group bottom_border">
														  <label class="col-sm-3 control-label">출생년도</label>
														 <div class="col-sm-3 control-label"  style="padding-right:0px;">
															  <input type="text" class="form-control" placeholder="숫자입력">
														  </div>
														  <div class="col-sm-1 control-label">
															  <span style="font-size: 17px;">~</span>
														  </div>
														  <div class="col-sm-3 control-label"  style="padding-right:0px;padding-left:0px;">
																<input type="text" class="form-control" placeholder="숫자입력">
														  </div>
														  <div class="col-sm-1 control-label">
															  <span style="font-size: 12px;">생</span>
														  </div>
														  
													  </div>
													   <div class="form-group bottom_border">
														  <label class="col-sm-3 control-label">성별</label>
														  <div class="col-sm-2 control-label"  style="padding-right:0px;">
															  <input type="text" class="form-control" value="무관">
														  </div>
														  <div class="col-sm-2 control-label"  style="padding-right:0px;padding-left:0px;">
															  <input type="text" class="form-control" value="여자">
														  </div>
														  <div class="col-sm-2 control-label"  style="padding-left:0px;">
															  <input type="text" class="form-control" value="남자">
														  </div>
													  </div>
													   <div class="form-group bottom_border">
														  <label class="col-sm-3 control-label">현재연봉</label>
														  <div class="col-sm-3">
															  <select class="js-example-basic-single">
																	<option value="학력구분" selected>학력구분</option>
															  </select>
														  </div>
														   <div class="col-sm-3">
															  <select class="js-example-basic-single">
																	<option value="학력구분" selected>학력구분</option>
															  </select>
														  </div>
														   <div class="col-sm-3">
															  <span>만원</span>
														  </div>
													  </div>

													</div>

													<div class="col-sm-8">
														<div class="form-group bottom_border">
														  <label class="col-sm-3 control-label">인재명</label>
														  <div class="col-sm-6 control-label">
															  <div class="input-group m-bot15">
																  <input type="text" class="form-control" placeholder="전체">
																  <span class="input-group-btn">
																	<button type="button" class="btn btn-white"><i class="fa fa-search"></i></button>
																  </span>
															  </div>
														  </div>
													  </div>
													  <div class="form-group bottom_border">
														  <label class="col-sm-3 control-label">현 해외근무</label>
														  <div class="col-sm-2 control-label"  style="padding-right:0px;">
															  <input type="text" class="form-control" value="No">
														  </div>
														  <div class="col-sm-2 control-label"  style="padding-right:0px;padding-left:0px;">
															  <input type="text" class="form-control" value="YES">
														  </div>
														  <div class="col-sm-5 control-label"  style="padding-right:0px;padding-left:0px;">
															  <div class="input-group m-bot15">
																   <input type="text" class="form-control" placeholder="국가명 입력. 모든 국가는 전체로 입력">
																  <span class="input-group-btn">
																	<button type="button" class="btn btn-white"><i class="fa fa-search"></i></button>
																  </span>
															  </div>
														  </div>
													  </div>

													   <div class="form-group bottom_border">
														  <label class="col-sm-3 control-label">해외경력</label>
														  <div class="col-sm-2 control-label"  style="padding-right:0px;">
															  <input type="text" class="form-control" value="No">
														  </div>
														  <div class="col-sm-2 control-label"  style="padding-right:0px;padding-left:0px;">
															  <input type="text" class="form-control" value="YES">
														  </div>
														  <div class="col-sm-5 control-label"  style="padding-right:0px;padding-left:0px;">
															  <div class="input-group m-bot15">
																   <input type="text" class="form-control" placeholder="국가명 입력. 모든 국가는 전체로 입력">
																  <span class="input-group-btn">
																	<button type="button" class="btn btn-white"><i class="fa fa-search"></i></button>
																  </span>
															  </div>
														  </div>
													  </div>

													</div>
												</div>
											</div>

											 </form>
										  </div>
										  <div id="about" class="tab-pane">
											<div class="panel-body">
											  <div class="adv-table">
												  <table  class="display table table-bordered table-striped" id="dynamic-table">
													  <thead>
													  <tr>
														  <th colspan="2">직종 대분류</th>
														  <th colspan="4">직종 상세분류</th>
													  </tr>
													  </thead>
													  <tbody>
													  <tr>
														  <td>생산·제조></td>
														  <td>특수계층공공</td>
														  <td>전체</td>
														  <td>금속·금형</td>
														  <td>기계·기계설비</td>
														  <td>화학·에너지</td>
													  </tr>
													  <tr>
														  <td>디자인</td>
														  <td>서비스</td>
														  <td>섬유·의류·패션</td>
														  <td>전기·전자·제어</td>
														  <td>생산관리·품질관리</td>
														  <td>반도체·디스플레이·LCD</td>
													  </tr>
													  <tr>
														  <td>IT·인터넷</td>
														  <td>건설</td>
														  <td>생산·제조·포장·조립</td>
														  <td>비금속·요업·신소재</td>
														  <td>바이오·제약·식품</td>
														  <td>설계·CAD·CAM</td>
													  </tr>
													  <tr>
														  <td>경영사무</td>
														  <td>교육</td>
														  <td>안경·렌즈·광학</td>
														  <td></td>
														  <td></td>
														  <td></td>
													  </tr>
													  <tr>
														  <td>전문직</td>
														  <td>미디어</td>
														  <td></td>
														  <td></td>
														  <td></td>
														  <td></td>
													  </tr>
													  <tr>
														  <td>영업고객상담</td>
														  <td>의료</td>
														  <td></td>
														  <td></td>
														  <td></td>
														  <td></td>
													  </tr>
													  <tr>
														  <td>생산·제조</td>
														  <td>특수계층공공</td>
														  <td></td>
														  <td></td>
														  <td></td>
														  <td></td>
													  </tr>
													  </tbody>
												  </table>
											  </div>
										  </div>
									  </div>
									  <div id="profile" class="tab-pane">
										<div class="panel-body">
											<div class="col-sm-12">
											   <div class="row">
													  <div class="col-sm-4">
														<div class="row">
															<div class="col-sm-4">
																<header class="panel-heading bottom_border">최종학력</header>
															</div>
															<div class="col-sm-8">
															  <div class="adv-table">
																  <table  class="display table table-bordered table-striped" id="dynamic-table">
																	  <tbody>
																	  <tr>
																		  <td>고등학교 이하(5)</td>
																	  </tr>
																	  <tr>
																		  <td>대학교 4년(167)</td>
																	  </tr>
																	  <tr>
																		  <td>대학교 2,3년(12)</td>
																	  </tr>
																	  <tr>
																		  <td>대학원 석사(10)</td>
																	  </tr>
																	  <tr>
																		  <td>대학원 박사(5)</td>
																	  </tr>
																	  </tbody>
																  </table>
															  </div>
														   </div>
														 </div>
													</div>
												   <div class="col-sm-3">
													 <div class="row">
													  <div class="col-sm-12">
															<div class="col-sm-4" style="padding:0px;margin:0px;">
																<button class="btn btn-default" type="submit">국내</button>
															</div>
															<div class="col-sm-4" style="padding:0px;margin:0px;">
																<button class="btn btn-default" type="submit">해외</button>
															</div>
														</div>
													  </div>
												   </div>

												   <div class="col-sm-5">
													<div class="col-sm-12">
													  <div class="row">
														<div class="col-sm-2" style="padding:0px;margin:0px;">
															<label>대학명</label>
														</div>
														<div class="col-sm-8">
															<div class="input-group m-bot15">
																  <input type="text" class="form-control" placeholder="전체">
																  <span class="input-group-btn">
																	<button type="button" class="btn btn-white"><i class="fa fa-search"></i></button>
																  </span>
															</div>
														</div>
														<div class="col-sm-2">
															<button class="btn btn-info">추가</button>
														</div>
													  </div>
													<div class="row">
													  <div class="col-sm-2" style="padding:0px;margin:0px;">
														<label>선호대학</label>
													  </div>
													  <div class="col-sm-10">
														  <div class="adv-table">
															  <table  class="display table table-bordered table-striped" id="dynamic-table">
																  <tbody>
																  <tr>
																	  <td>서울대학교(5)</td>
																	  <td>연세대학교(5)</td>
																	  <td>고려대학교(5)</td>
																  </tr>
																  <tr>
																	  <td>서강대학교(6)</td>
																	  <td>한양대학교(7)</td>
																	  <td>이화여자대학교(7)</td>
																  </tr>
																  <tr>
																	  <td>KAIST(6)</td>
																	  <td>포항공과대학교(5)</td>
																	  <td>성균관대학교(6)</td>
																  </tr>
																  <tr>
																	  <td>중앙대학교(4)</td>
																	  <td>광주과학기술원(5)</td>
																	  <td>경희대학교(7)</td>
																  </tr>
																  <tr>
																	  <td>한국외국어대학교</td>
																	  <td>홍익대학교</td>
																	  <td>부산대학교</td>
																  </tr>
																  <tr>
																	  <td>경북대학교</td>
																	  <td>숭실대학교</td>
																	  <td>서울시립대학교</td>
																  </tr>
																  </tbody>
															  </table>
														  </div>
														</div>
													</div>
												  </div>
											   </div>
											</div>
											<div class="row">
												<div class="col-sm-12">
													<div class="row">
														<div class="col-sm-6">
															<div class="col-sm-2">
																<label>외국어</label>
															</div>
															<div class="col-sm-4">
																<div class="input-group m-bot15">
																  <input type="text" class="form-control" placeholder="외국어명">
																  <span class="input-group-btn">
																	<button type="button" class="btn btn-white"><i class="fa fa-search"></i></button>
																  </span>
																</div>
															</div>
															<div class="col-sm-4">
																 <select class="form-control m-bot15">
																		<option value="수준선택" selected>수준선택</option>
																  </select>
															</div>
															<div class="col-sm-2">
																<button class="btn btn-info" type="submit">추가</button>
															</div>
														</div>
													</div>
												</div>
											</div>
										  </div>
										</div>
									  </div>
								  </div>
							  </div>
							  </section>
								<div class="col-sm-12" style="margin-top:30px;">
									  <div class="form-group bottom_border">
										  <label class="col-sm-1 control-label">키워드</label>
										  <div class="col-sm-3 control-label"  style="padding-right:0px;">
											  <input type="text" class="form-control">
										  </div>
										  <div class="col-sm-1 control-label">
											  <input type="checkbox" class="form-control">
										  </div>
										  <div class="col-sm-1 control-label">
											  <span>And 검색</span>
										  </div>
										  <div class="col-sm-1 control-label">
											  <input type="checkbox" class="form-control">
										  </div>
										  <div class="col-sm-1 control-label">
											  <span>Or 검색</span>
										  </div>
										  <div class="col-sm-1 control-label">
											  <input type="checkbox" class="form-control">
										  </div>
										  <div class="col-sm-2 control-label">
											  <span>제외하여 검색</span>
										  </div>
										  <div class="col-sm-1 control-label">
											 <button class="btn btn-info" type="submit">추가</button>
										  </div>
									  </div>
								</div>

								<div class="col-sm-12" style="margin-top:30px;">
								  <div class="form-group bottom_border">
									  <label class="col-sm-2 control-label">검색조건 전체: 0000건 </label>
									  <div class="col-sm-10 control-label">
										  <input type="text" id="tagsinput" class="tagsinput" value="최종학력: 대학원 박사 ,직종: IT인터넷">
									  </div>
								  </div>
								</div>

								<div class="col-sm-12"  style="margin-top:50px;">
								  <div class="form-group bottom_border text-center">
										 <button class="btn btn-info btn-lg" type="submit">인재목록 검색값</button>
								  </div>
								</div>

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
    <!--this page plugins-->
  <script src="js/jquery.tagsinput.js"></script>
  <!--bootstrap-switch-->
  <script src="js/bootstrap-switch.js"></script>
  <!--bootstrap swither-->
  <script src="js/form-component.js"></script>
  </body>
</html>

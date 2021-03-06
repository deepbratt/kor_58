
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keyword" content="">

    <title>고객사 신규등록 화면</title>
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
			.pad0{
			padding:0px;
		}
		.col_label{
			border:1px solid #CCC;padding:10px;background:#CCC;
		}
		.col_contnt{
			border:1px solid #CCC;padding:10px;
		}
		.mar5{
			margin-top:5px;
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
									고객사>고객사 상세
								  </header>
								  <div class="panel-body">
									<h3 class="form-group">
										고객사 상세
									</h3>
									<div class="pull-right" style="padding-bottom:10px !important;">
										<a class="btn btn-info" >컨택내용등록</a>
										<a class="btn btn-info" >컨택내용등록</a>
										<a class="btn btn-info" >컨택내용등록</a>
										<a class="btn btn-info">컨택내용등록</a>
									</div>
								 </div>
							
								  <div class="panel-body">
									  <div class="adv-table">
										  <table  class="display table table-bordered table-striped">
											  <thead>
											  <tr>
												  <th colspan="4">1. 회사정보</th>
											  </tr>
											  </thead>
										  </table>
										  <div class="col-md-12">
										

										<div class="row pad0 mar5">
											<div class="col-md-12 pad0">
												<div class="col-md-2 col_label">분류</div>
												<div class="col-md-10 col_contnt">해외</div>
											</div>
										</div>
										<div class="row pad0 mar5">
											<div class="col-md-6 pad0">
												<div class="col-md-4 col_label">등록자</div>
												<div class="col-md-8 col_contnt">강용오</div>
											</div>
											<div class="col-md-6 pad0">
												<div class="col-md-4 col_label">담당자</div>
												<div class="col-md-8 col_contnt">김영민</div>
											</div>
										</div>
										
									

										<div class="row pad0 mar5">
											<div class="col-md-6 pad0">
												<div class="col-md-4 col_label">고객사명</div>
												<div class="col-md-8 col_contnt">JALA</div>
											</div>
											<div class="col-md-6 pad0">
												<div class="col-md-4 col_label">사업부</div>
												<div class="col-md-8 col_contnt">신사업 기획부</div>
											</div>
										</div>

										<div class="row pad0 mar5">
											<div class="col-md-12 pad0">
												<div class="col-md-2 col_label">주소</div>
												<div class="col-md-10 col_contnt">중국 상해~ </div>
											</div>
										</div>

										<div class="row pad0 mar5">
											<div class="col-md-6 pad0">
												<div class="col-md-4 col_label">홈페이지</div>
												<div class="col-md-8 col_contnt">www.jala.com</div>
											</div>
											<div class="col-md-6 pad0">
												<div class="col-md-4 col_label">대표자</div>
												<div class="col-md-8 col_contnt">Xiu su min </div>
											</div>
										</div>
										<div class="row pad0 mar5">
											<div class="col-md-12 pad0">
												<div class="col-md-2 col_label">업종</div>
												<div class="col-md-10 col_contnt">화장품 제조</div>
											</div>
										</div>

										<div class="row pad0 mar5">
											<div class="col-md-6 pad0">
												<div class="col-md-4 col_label">사업영역</div>
												<div class="col-md-8 col_contnt">화장품, 바스용품</div>
											</div>
											<div class="col-md-6 pad0">
												<div class="col-md-4 col_label">기업형태</div>
												<div class="col-md-8 col_contnt">대기업</div>
											</div>
										</div>

										<div class="row pad0 mar5">
											<div class="col-md-6 pad0">
												<div class="col-md-4 col_label">설립년도</div>
												<div class="col-md-8 col_contnt">2000</div>
											</div>
											<div class="col-md-6 pad0">
												<div class="col-md-4 col_label">경쟁사</div>
												<div class="col-md-8 col_contnt">아모레퍼시픽</div>
											</div>
										</div>

										<div class="row pad0 mar5">
											<div class="col-md-6 pad0">
												<div class="col-md-4 col_label">직원수</div>
												<div class="col-md-8 col_contnt">5600</div>
											</div>
											<div class="col-md-6 pad0">
												<div class="col-md-4 col_label">영업경로</div>
												<div class="col-md-8 col_contnt">링크드인 연락</div>
											</div>
										</div>
										
										<div class="row pad0 mar5">
											<div class="col-md-12 pad0">
												<div class="col-md-2 col_label">참고파일</div>
												<div class="col-md-10 col_contnt">Jala catalog.pptx</div>
											</div>
										</div>

										<div class="row pad0 mar5">
											<div class="col-md-12 pad0">
												<div class="col-md-2 col_label">사업자등록증</div>
												<div class="col-md-10 col_contnt">[사업자등록증.pdf</div>
											</div>
										</div>

										<div class="row pad0 mar5">
											<div class="col-md-12 pad0">
												<div class="col-md-2 col_label">기타정보</div>
												<div class="col-md-10 col_contnt">성균관대학교</div>
											</div>
										</div>

									

										<div class="row pad0 mar5">
											<div class="col-md-12 pad0">
												<div class="col-md-2 col_label">변경정보</div>
												<div class="col-md-10 col_contnt">
													18-06-07 15:16:14 강용오 등록 <br />
													[18-06-15 55:17:54 강용오 수정- 담당자1 이메일 수정
												</div>
											</div>
										</div>
								  </div>
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
										  2. 담당자 정보
									  </header>
									  <div class="panel-body">
										  <section id="no-more-tables">
											  <table class="table table-bordered table-striped table-condensed cf">
												  <thead class="cf">
												  <tr>
													  <th>담당자</th>
													  <th>이름</th>
													  <th class="numeric">이메일</th>
													  <th class="numeric">핸드폰</th>
													  <th class="numeric">부서</th>
													  <th class="numeric">사무실번호</th>
													  <th class="numeric">직책</th>
													  <th class="numeric">직급</th>
													  <th class="numeric">기타</th>
												  </tr>
												  </thead>
												  <tbody>
												  <tr>
													  <td data-title="Code">담당자</td>
													  <td data-title="Company">이영일</td>
													  <td data-title="Price">0100000@jala.com</td>
													  <td data-title="Change">010-1234-5678</td>
													  <td data-title="Change %">02-123-4567</td>
													  <td data-title="Change %">채용</td>
													  <td data-title="Change %">대리</td>
													  <td data-title="Change %">성격이 </td>
													  <td data-title="Change %">급함</td>

												  </tr>
												  <tr>
													  <td data-title="Code">담당자2</td>
													  <td data-title="Company">이영이</td>
													  <td data-title="Price">0100001@jala.com</td>
													  <td data-title="Change">010-1234-5679</td>
													  <td data-title="Change %">경영지원팀</td>
													  <td data-title="Change %">02-123-4568</td>
													  <td data-title="Change %">채용</td>
													  <td data-title="Change %">과장</td>
													  <td data-title="Change %"></td>
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
						    <h3 class="form-group">
								계약현황
							</h3>
							<form class="form-horizontal tasi-form" method="POST">
							  <div class="col-sm-12">
							   <div class="row">
							   		<div class="col-lg-12">
									  <section class="panel">
										  <div class="panel-body">
											  <form class="form-horizontal" role="form">
											  	<div class="col-md-6" style="padding:10px;">
												  <div class="form-group">
													  <label for="inputEmail1" class="col-lg-2 col-sm-2 control-label">계약상태</label>
													  <div class="col-lg-10">
														  <input type="text" class="form-control" id="inputEmail1" placeholder="계약">
													  </div>
												  </div>
												 </div>
												 <div class="col-md-6" style="padding:10px;">
												  <div class="form-group">
													  <label for="inputPassword1" class="col-lg-2 col-sm-2 control-label">계약일</label>
													  <div class="col-lg-10">
														  <input type="text" class="form-control" id="inputPassword1" placeholder="06월 05일">
													  </div>
												  </div>
												 </div>
												<div class="col-md-6" style="padding:10px;">
												  <div class="form-group">
													  <label for="inputPassword1" class="col-lg-2 col-sm-2 control-label">결제일</label>
													  <div class="col-lg-10">
														  <input type="text" class="form-control" id="inputPassword1" placeholder="입사 후 TT로 2주 이내">
													  </div>
												  </div>
												 </div>
												<div class="col-md-6" style="padding:10px;">
												  <div class="form-group">
													  <label for="inputPassword1" class="col-lg-2 col-sm-2 control-label">보증기간</label>
													  <div class="col-lg-10">
														  <input type="text" class="form-control" id="inputPassword1" placeholder="6개월">
													  </div>
												  </div>
												 </div>

												 <div class="col-md-6" style="padding:10px;">
												  <div class="form-group">
													  <label for="inputPassword1" class="col-lg-2 col-sm-2 control-label">요율</label>
													  <div class="col-lg-10">
														  <input type="text" class="form-control" id="inputPassword1" placeholder="20%">
													  </div>
												  </div>
												 </div>

												 <div class="col-md-6" style="padding:10px;">
												  <div class="form-group">
													  <label for="inputPassword1" class="col-lg-2 col-sm-2 control-label">계약서</label>
													  <div class="col-lg-10">
														  <input type="text" class="form-control" id="inputPassword1" placeholder="Recruiting Fee Contract_Jala.docx">
													  </div>
												  </div>
												 </div>
												<div class="col-md-6" style="padding:10px;">
												  <div class="form-group">
													  <label for="inputPassword1" class="col-lg-2 col-sm-2 control-label">계약메모</label>
													  <div class="col-lg-10">
														  <input type="text" class="form-control" id="inputPassword1" placeholder="">
													  </div>
												  </div>
												 </div>
											  </form>
										  </div>
									  </section>
								  </div>
							</div>
						</div>
                      </form>
                    </div>
                 </section>
				</div>
			 </div>

			    <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                              공고진행내역
							  <div class="make-switch pull-right">
								<input type="checkbox" value="" checked>
							</div>
                          </header>
                          <div class="panel-body">
                              <div class="adv-table">
                                  <table  class="display table table-bordered table-striped" id="dynamic-table">
                                      <thead>
                                      <tr>
                                          <th>채용공고명</th>
                                          <th>담당자</th>
                                          <th>Co-Work</th>
                                          <th>진행상태</th>
										  <th>추천수</th>
										  <th>등록일</th>
                                      </tr>
                                      </thead>
                                      <tbody>
							
                                      <tr>
                                          <td>PMD 채용</td>
                                          <td>강용오</td>
                                          <td>공개</td>
                                          <td>추천가능</td>
										  <td>3</td>
										  <td>2018-06-07</td>
                                      </tr>
										<tr>
                                          <td>화장품 포장 및 박스 디자인</td>
                                          <td>강용오</td>
                                          <td>공개</td>
                                          <td>추천가능</td>
										  <td>3</td>
										  <td>2018-06-07</td>
                                      </tr>
							
                                      </tbody>
                                  </table>
                              </div>
                          </div>
                      </section>
                  </div>
              </div>
						      <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading" style="">
                              고객사 컨택내역
							  <!--<span class="switch-right">ON</span>-->
							   <div class="pull-right" style="padding-bottom:10px !important;">
									<a class="btn btn-info" data-toggle="modal" href="#enroll">컨택내용등록</a>
									
								</div>
                          </header>
                          <div class="panel-body" >
                              <div class="adv-table">
                                  <table  class="display table table-bordered table-striped" id="dynamic-table">
                                      <thead>
                                      <tr>
                                          <th>내용</th>
                                          <th>담당자</th>
                                          <th>등록일</th>
                                      </tr>
                                      </thead>
                                      <tbody>
							
                                      <tr>
                                          <td>이력서 정리해서 보내 주기로 함</td>
                                          <td>강용오</td>
                                          <td>2018-07-10</td>
                                      </tr>
										<tr>
                                          <td>PMD 연봉 관련 문의</td>
                                          <td>강용오</td>
                                          <td>2018-06-15</td>
                                      </tr>
							
                                      </tbody>
                                  </table>
                              </div>
							<div class="pull-right" style="padding-bottom:10px !important;">
								<a class="btn btn-info" >인쇄</a>	
								<a class="btn btn-info" data-toggle="modal" href="#something">담당자이관요청</a>
								<a class="btn btn-info">수정</a>	
								<a class="btn btn-info">고객사 목록</a>	
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
			
	<!-- MODAL Start -->
	<div class="modal fade modal-dialog-center " id="enroll" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	  <div class="modal-dialog ">
		  <div class="modal-content-wrap">
			  <div class="modal-content">
				  <div class="modal-header">
					  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					  <h4 class="modal-title">컨택내용등록</h4>
				  </div>
				  <div class="modal-body"><textarea class="form-control"></textarea></div>
				  <div class="modal-footer">
					  <button data-dismiss="modal" class="btn btn-default" type="button">등록</button>
					  <button class="btn btn-warning" type="button">닫기</button>
				  </div>
			  </div>
		  </div>
	  </div>
  </div>
<!-- Modal Ends -->
	<!-- MODAL Start -->
	<div class="modal fade modal-dialog-center " id="something" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	  <div class="modal-dialog ">
		  <div class="modal-content-wrap">
			  <div class="modal-content">
				  <div class="modal-header">
					  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					  <h4 class="modal-title">컨택내용등록</h4>
				  </div>
				  <div class="modal-body">
				  <select class="form-control" tabindex="-1" aria-hidden="true">
                     <option value="AL">새 담당자명</option>
                   </select></div>
				  <div class="modal-footer">
					  <button data-dismiss="modal" class="btn btn-default" type="button">등록</button>
					  <button class="btn btn-warning" type="button">닫기</button>
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

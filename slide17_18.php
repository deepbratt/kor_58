
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keyword" content="">

    <title>채용공고의 상세보기 화면</title>
	<?php include("metalinks.php");?>
    <!--bootstrap switcher-->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/bootstrap-reset.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />
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
                             채용공고>공고 상세
                          </header>
                          <div class="panel-body">
						    <h3 class="form-group">
								 공고 상세
							</h3>
							  <div class="col-sm-12">
							  	<div class="row">
									<div class="col-sm-6">
	
									</div>
									<div class="col-sm-6">
									  <div class="form-group bottom_border pull-right">
										  <button class="btn btn-default btn-lg" type="submit">인쇄</button>
										  <button class="btn btn-default btn-lg" type="submit">수정</button>
										  <button class="btn btn-info btn-lg" type="submit">저장</button>
										  <button class="btn btn-default btn-lg" type="submit">채용공고목록</button>
									  </div>
									</div>
								</div>
							  </div>
						 </div>
					
                          <div class="panel-body">
                              <div class="adv-table">
                                  <table  class="display table table-bordered table-striped">
                                      <thead>
                                      <tr>
                                          <th colspan="3">1. 기본정보</th>
                                      </tr>
                                      </thead>
                                  </table>
								  <div class="col-md-12">
										
										<div class="row pad0 mar5">
											<div class="col-md-6 pad0">
												<div class="col-md-4 col_label">고객사</div>
												<div class="col-md-8 col_contnt">삼성SDS</div>
											</div>
											<div class="col-md-6 pad0">
												<div class="col-md-4 col_label">모집사유</div>
												<div class="col-md-8 col_contnt">증원</div>
											</div>
										</div>
										
										<div class="row pad0 mar5">
											<div class="col-md-12 pad0">
												<div class="col-md-2 col_label">채용제목</div>
												<div class="col-md-10 col_contnt">Agile 전문가 채용</div>
											</div>
										</div>

										<div class="row pad0 mar5">
											<div class="col-md-6 pad0">
												<div class="col-md-4 col_label">경력사항</div>
												<div class="col-md-8 col_contnt">경력 5-10년</div>
											</div>
											<div class="col-md-6 pad0">
												<div class="col-md-4 col_label">연봉</div>
												<div class="col-md-8 col_contnt">협의가능</div>
											</div>
										</div>

										<div class="row pad0 mar5">
											<div class="col-md-6 pad0">
												<div class="col-md-4 col_label">직책</div>
												<div class="col-md-8 col_contnt">팀장</div>
											</div>
											<div class="col-md-6 pad0">
												<div class="col-md-4 col_label">직급</div>
												<div class="col-md-8 col_contnt">부장</div>
											</div>
										</div>

										<div class="row pad0 mar5">
											<div class="col-md-6 pad0">
												<div class="col-md-4 col_label">고용형태</div>
												<div class="col-md-8 col_contnt">정규직</div>
											</div>
											<div class="col-md-6 pad0">
												<div class="col-md-4 col_label">근무조직</div>
												<div class="col-md-8 col_contnt">PMC 그룹</div>
											</div>
										</div>

										<div class="row pad0 mar5">
											<div class="col-md-6 pad0">
												<div class="col-md-4 col_label">직종</div>
												<div class="col-md-8 col_contnt">개발, 기획</div>
											</div>
											<div class="col-md-6 pad0">
												<div class="col-md-4 col_label">근무지</div>
												<div class="col-md-8 col_contnt">국내-서울-잠실</div>
											</div>
										</div>

										<div class="row pad0 mar5">
											<div class="col-md-6 pad0">
												<div class="col-md-4 col_label">성별</div>
												<div class="col-md-8 col_contnt">무관</div>
											</div>
											<div class="col-md-6 pad0">
												<div class="col-md-4 col_label">나이</div>
												<div class="col-md-8 col_contnt">무관</div>
											</div>
										</div>
										
										<div class="row pad0 mar5">
											<div class="col-md-12 pad0">
												<div class="col-md-2 col_label">학력사항</div>
												<div class="col-md-10 col_contnt">대학교(4년) 이상</div>
											</div>
										</div>

										<div class="row pad0 mar5">
											<div class="col-md-12 pad0">
												<div class="col-md-2 col_label">외국어</div>
												<div class="col-md-10 col_contnt">영어-비지니스업무가능, 스페인어-비지니스업무가능</div>
											</div>
										</div>

										<div class="row pad0 mar5">
											<div class="col-md-12 pad0">
												<div class="col-md-2 col_label">접수기간</div>
												<div class="col-md-10 col_contnt">18-07-01~18-08-31</div>
											</div>
										</div>

										<div class="row pad0 mar5">
											<div class="col-md-12 pad0">
												<div class="col-md-2 col_label">담당자</div>
												<div class="col-md-10 col_contnt">강용오</div>
											</div>
										</div>

										<div class="row pad0 mar5">
											<div class="col-md-6 pad0">
												<div class="col-md-4 col_label">등록일자</div>
												<div class="col-md-8 col_contnt">2018-06-01</div>
											</div>
											<div class="col-md-6 pad0">
												<div class="col-md-4 col_label">최종수정일</div>
												<div class="col-md-8 col_contnt">2018-07-01</div>
											</div>
										</div>

										<div class="row pad0 mar5">
											<div class="col-md-12 pad0">
												<div class="col-md-2 col_label">파트너</div>
												<div class="col-md-10 col_contnt">
													<select class="js-example-basic-single">
														<option value="진행중" selected>진행중</option>
													</select>

													<select class="js-example-basic-single">
														<option value="추천가능" selected>추천가능</option>
												    </select>
												</div>
											</div>
										</div>

										<div class="row pad0 mar5">
											<div class="col-md-12 pad0">
												<div class="col-md-2 col_label">변경사항</div>
												<div class="col-md-10 col_contnt">
													18-07-07 14:15:30 진행상태 변경 진행중>추천가능 진행중> 추천마감 <br />
													18-07-19 15:14:16 채용정보 상세> 참고자료 :수정
												</div>
											</div>
										</div>
								  </div>
                              </div>
                          </div>
                      </section>
                  </div>
              </div>

			  <div class="row">
						<div class="col-md-12">
							<section class="panel">
								  <header class="panel-heading">
									2. 채용정보 상세
								  </header>
		
							
								  <div class="panel-body">
									  <div class="adv-table">
										  <div class="col-md-12">
										

										<div class="row pad0 mar5">
											<div class="col-md-12 pad0">
												<div class="col-md-2 col_label">담당직무</div>
												<div class="col-md-10 col_contnt">
													<p>담당자는 Agile 전문가로서 팀 내의 개발</p>
													<p>***************************************************************************************************************************</p>
													<p>***************************************************************************************************************************</p>
												</div>
											</div>
										</div>

										<div class="row pad0 mar5">
											<div class="col-md-12 pad0">
												<div class="col-md-2 col_label">R*R</div>
												<div class="col-md-10 col_contnt">개발 팀장으로서 </div>
											</div>
										</div>
										
										<div class="row pad0 mar5">
											<div class="col-md-12 pad0">
												<div class="col-md-2 col_label">자격조건</div>
												<div class="col-md-10 col_contnt">
													<p>Agile 전문자격증</p>
													<p>팀장으로서 리딩 3년 이상</p>
												</div>
											</div>
										</div>

										<div class="row pad0 mar5">
											<div class="col-md-12 pad0">
												<div class="col-md-2 col_label">보고라인</div>
												<div class="col-md-10 col_contnt">본인-부서장</div>
											</div>
										</div>

										<div class="row pad0 mar5">
											<div class="col-md-12 pad0">
												<div class="col-md-2 col_label">진행절차</div>
												<div class="col-md-10 col_contnt">서류전형-1차면접-2차면접-3차면접</div>
											</div>
										</div>

										<div class="row pad0 mar5">
											<div class="col-md-12 pad0">
												<div class="col-md-2 col_label">제출서류</div>
												<div class="col-md-10 col_contnt">이력서</div>
											</div>
										</div>

										<div class="row pad0 mar5">
											<div class="col-md-12 pad0">
												<div class="col-md-2 col_label">참고자료</div>
												<div class="col-md-10 col_contnt">포트폴리오.docx</div>
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
												  3. 채용관련 외부 비공개 자료
											  </header>
											  <div class="panel-body">
												  <section id="no-more-tables">
													  <p>해당 인력을 뽑는 이 부서는 000을 하는 부서로서 개발의 총 책임.. …………………..</p>
												  </section>
											  </div>
										  </section>
									  </div>
								  </div>
					   </section>

			          <section>
                           <div class="row">
							  <div class="col-lg-12">
								  <section class="panel">
									  <header class="panel-heading">
										  4. 추천 목록
									  </header>
									  <div class="panel-body">
										  <section id="no-more-tables">
											  <table class="table table-bordered table-striped table-condensed cf">
												  <thead class="cf">
												  <tr>
													  <th>추천일</th>
													  <th>후보자</th>
													  <th>성별</th>
													  <th>생년월일</th>
													  <th>진행상태</th>
													  <th>예정일</th>
													  <th>추천자</th>
													  <th>메모</th>
												  </tr>
												  </thead>
												  <tbody>
												  <tr>
													  <td>2018-07-03</td>
													  <td>김태령</td>
													  <td>여자</td>
													  <td>1977</td>
													  <td>컨택중</td>
													  <td></td>
													  <td>강용오</td>
													  <td> </td>
												  </tr>
												  <tr>
													  <td>2018-07-04</td>
													  <td>홍길동</td>
													  <td>남자</td>
													  <td>1976</td>
													  <td>컨택중</td>
													  <td></td>
													  <td>조철수</td>
													  <td> </td>
												  </tr>
												  <tr>
													  <td>2018-07-04</td>
													  <td>김철수</td>
													  <td>남자</td>
													  <td>1568</td>
													  <td>컨택중</td>
													  <td></td>
													  <td>김영민</td>
													  <td>연결이 안됨</td>
												  </tr>
												  </tbody>
											  </table>
										  </section>
									  </div>
								  </section>
							  </div>
						  </div>
               </section>

			   <section>
                           <div class="row">
							  <div class="col-lg-12">
								  <section class="panel">
									  <header class="panel-heading">
										  5. 공고 진행내역  <button type="button" class="btn btn-info pull-right" style="padding:2px;" data-toggle="modal" href="#candid_register"> 공고 진행내역 등록 </button>
									  </header>
									  <div class="panel-body">
										  <section id="no-more-tables">
											  <table class="table table-bordered table-striped table-condensed cf">
												  <thead class="cf">
												  <tr>
													  <th>내용</th>
													  <th>등록자</th>
													  <th class="numeric">등록일</th>
												  </tr>
												  </thead>
												  <tbody>
												  <tr>
													  <td>이렇게 저렇게 프로젝트 진행되고 있음. 인사 담당자의 이러 이러한 의견 있음</td>
													  <td>강용오</td>
													  <td>18-07-19</td>
												  </tr>

												  <tr>
													  <td>프로젝트가 잠시 홀딩될 수 있음. </td>
													  <td>강용오</td>
													  <td>18-07-05</td>
												  </tr>
												  
												  </tbody>
											  </table>
										  </section>
									  </div>
								  </section>
							  </div>
						  </div>
               </section>
			   
			   <div class="col-sm-12 control-label center">
					<button type="button" class="btn btn-default"> 인쇄 </button>
					<button type="button" class="btn btn-default"> 수정 </button>
					<button type="button" class="btn btn-info"> 저장 </button>
					<button type="button" class="btn btn-default"> 채용공고목록 </button>
			   </div>
			   <p>&nbsp;</p>

			  <!-- MODAL Start -->
				<div class="modal fade modal-dialog-center " id="candid_register" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				  <div class="modal-dialog ">
					  <div class="modal-content-wrap">
						  <div class="modal-content">
							  <div class="modal-header">
								  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
								  <h4 class="modal-title">공고 진행내역 등록</h4>
							  </div>
							  <div class="modal-body">
								<div class="col-sm-12" style="padding:0px;margin:0px;">
									<textarea class="form-control" style="height:100px;"></textarea>
								</div>
							  </div>
							  <p>&nbsp;</p>
							  <p>&nbsp;</p>
							  <div class="modal-footer" style="border-top: none !important;margin:5px;">
								  <button data-dismiss="modal" class="btn btn-default" type="button">저장 </button>
								  <button class="btn btn-warning" type="button"> 취소 </button>
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
  <script src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/bootstrap-fileupload.js"></script>
  <script type="text/javascript" language="javascript" src="js/jquery.dataTables.js"></script>
  <script type="text/javascript" src="js/DT_bootstrap.js"></script>
  <script src="js/dynamic_table_init.js"></script>
  </body>
</html>

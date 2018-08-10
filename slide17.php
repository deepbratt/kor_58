
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keyword" content="">

    <title>채용공고의 상세보기 화면 1</title>
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

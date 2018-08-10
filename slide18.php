
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keyword" content="">

    <title>채용공고의 상세보기 화면 2</title>
	<?php include("metalinks.php");?>
    <!--bootstrap switcher-->
    <link rel="stylesheet" type="text/css" href="css/bootstrap-switch.css" />
    <link rel="stylesheet" type="text/css" href="css/datepicker.css" />
    <link rel="stylesheet" type="text/css" href="css/datetimepicker.css" />
	<link href="css/demo_page.css" rel="stylesheet" />
    <link href="css/demo_table.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/DT_bootstrap.css" />
		<link href="css/yamm.css" rel="stylesheet">
    <!--  summernote -->
	

	    <!--  summernote -->

	<!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="css/font-awesome.css" rel="stylesheet" />
      <!--right slidebar-->
    <link href="css/slidebars.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />
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
						    <h3 class="form-group">
								2. 채용정보 상세
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

			  <!-- page start-->
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
              <!-- page end-->
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

          <!-- page end-->
          </section>
      </section>
      <!--main content end-->

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
  <script src="js/form-components.js"></script>

  <script type="text/javascript" language="javascript" src="js/jquery.dataTables.js"></script>
  <script type="text/javascript" src="js/DT_bootstrap.js"></script>
  <script src="js/dynamic_table_init.js"></script>

  <!--bootstrap swither-->
  <script src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/bootstrap-inputmask.min.js"></script>
  <!-- Script in pages -->
  <script src="js/bootstrap-switch.js"></script>
  </body>
</html>

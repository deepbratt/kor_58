
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keyword" content="">

    <title>Slide 40</title>
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
						    <h3 class="form-group">
								
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

			  <!-- page start-->
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                              공고진행내역
							  <span>
							  </span>
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

  <script type="text/javascript" language="javascript" src="js/jquery.dataTables.js"></script>
  <script type="text/javascript" src="js/DT_bootstrap.js"></script>
  <script src="js/dynamic_table_init.js"></script>
  </body>
</html>

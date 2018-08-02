
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keyword" content="">

    <title>Slide 11</title>
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
                          <header class="panel-heading">
                             My Page > 내 포인트 현황
                          </header>
                          <div class="panel-body">
						    <h3 class="form-group">
								 내 포인트 현황
							</h3>
							<form class="form-horizontal tasi-form" method="POST">
							  <div class="col-sm-12">
							   <div class="row">
							    <div class="col-sm-6">
								  <div class="form-group bottom_border">
                                      <label class="col-sm-3 control-label">포인트 종류</label>
									  <div class="col-sm-7 control-label">
										  <select class="js-example-basic-single">
												<option value="전체" selected>전체</option>
										  </select>
									  </div>
                                  </div>
								  <div class="form-group bottom_border">
                                      <label class="col-sm-3 control-label">기간</label>
									  <div class="col-sm-3 control-label">
										  <div data-date-viewmode="years" data-date-format="dd-mm-yyyy" data-date="12-02-2012"  class="input-append date dpYears">
											  <input type="text" readonly="" value="2018-07-01" size="16" class="form-control">
											  <span class="input-group-btn add-on">
												<button class="btn btn-danger" type="button"><i class="fa fa-calendar"></i></button>
											  </span>
										  </div>
									  </div>
									  <div class="col-sm-3 control-label">
										  <div data-date-viewmode="years" data-date-format="dd-mm-yyyy" data-date="12-02-2012"  class="input-append date dpYears">
											  <input type="text" readonly="" value="2018-07-31" size="16" class="form-control">
											  <span class="input-group-btn add-on">
												<button class="btn btn-danger" type="button"><i class="fa fa-calendar"></i></button>
											  </span>
										  </div>
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

			  <!-- page start-->
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                              검색결과:4건
                          </header>
                          <div class="panel-body">
                              <div class="adv-table">
                                  <table  class="display table table-bordered table-striped" id="dynamic-table">
                                      <thead>
                                      <tr>
                                          <th>날짜</th>
                                          <th>포인트 종류</th>
                                          <th>컨설턴트명</th>
                                          <th>포인트 수</th>
                                      </tr>
                                      </thead>
                                      <tbody>
                                      <tr>
                                          <td>18-07-24</td>
                                          <td>내 프로필 등록</td>
                                          <td>강용오</td>
                                          <td>5</td>
                                      </tr>
                                      <tr>
                                          <td>18-07-20</td>
                                          <td>채용공고등록</td>
                                          <td>강용오</td>
                                          <td>10</td>
                                      </tr>
									  <tr>
                                          <td>18-07-18</td>
                                          <td>인재 컨택내용 등록</td>
                                          <td>강용오</td>
                                          <td>5</td>
                                      </tr>
									  <tr>
                                          <td>18-07-05</td>
                                          <td>고객사 담당자 기타 등록</td>
                                          <td>강용오</td>
                                          <td>5</td>
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

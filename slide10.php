
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keyword" content="">

    <title>Slide 10</title>
	<?php include("metalinks.php");?>
    <link href="css/table-responsive.css" rel="stylesheet" />
    <!--bootstrap switcher-->
    <link rel="stylesheet" type="text/css" href="css/bootstrap-switch.css" />
    <link rel="stylesheet" type="text/css" href="css/datepicker.css" />
    <link rel="stylesheet" type="text/css" href="css/datetimepicker.css" />
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
                             My Page> 내 업무 히스토리
                          </header>
                          <div class="panel-body">
						    <h3 class="form-group">
								내 업무 히스토리
							</h3>
							<form class="form-horizontal tasi-form" method="POST">
							  <div class="col-sm-12">
							   <div class="row">
							    <div class="col-sm-6">
								  <div class="form-group bottom_border">
                                      <label class="col-sm-3 control-label">로그종류</label>
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
											  <input type="text" readonly="" value="2018-07-10" size="16" class="form-control">
											  <span class="input-group-btn add-on">
												<button class="btn btn-danger" type="button"><i class="fa fa-calendar"></i></button>
											  </span>
										  </div>
									  </div>
									  <div class="col-sm-3 control-label">
										  <div data-date-viewmode="years" data-date-format="dd-mm-yyyy" data-date="12-02-2012"  class="input-append date dpYears">
											  <input type="text" readonly="" value="2018-07-13" size="16" class="form-control">
											  <span class="input-group-btn add-on">
												<button class="btn btn-danger" type="button"><i class="fa fa-calendar"></i></button>
											  </span>
										  </div>
									  </div>
                                  </div>
								</div>

								<div class="col-sm-6">
									<div class="form-group bottom_border" style="margin-top:65px;">
                                      <label class="col-sm-3 control-label">통합검색</label>
									  <div class="col-sm-4">
                                          <input type="text" class="form-control">
                                      </div>
									  <div class="col-sm-3">
                                          <button type="button" class="btn btn-info">검색</button>
                                      </div>
                                  </div>
								  <div class="form-group bottom_border"></div>
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
                              <section id="no-more-tables">
                                  <table class="table table-bordered table-striped table-condensed cf">
                                      <thead class="cf">
                                      <tr>
                                          <th>로그종류</th>
                                          <th>로그시간</th>
                                          <th class="numeric">직원명</th>
                                          <th class="numeric">직원계정</th>
                                          <th class="numeric">상세정보</th>
                                      </tr>
                                      </thead>
                                      <tbody>
                                      <tr>
                                          <td data-title="Code">로그인</td>
                                          <td data-title="Company">2018-07-13  11:24:11 AM</td>
                                          <td data-title="Price">강용오</td>
                                          <td data-title="Change">Andrew</td>
                                          <td data-title="Change %">[211.178.126.92] 로그인</td>
                                      </tr>
                                      <tr>
                                          <td data-title="Code">인재-인재상세</td>
                                          <td data-title="Company">2018-07-10  14:36:11 AM</td>
                                          <td data-title="Price">강용오</td>
                                          <td data-title="Change">Andrew</td>
                                          <td data-title="Change %">[211.178.126.92] 후보자명: 김태령(1977:여) (1/30)</td>
                                      </tr>
									  <tr>
                                          <td data-title="Code">고객사 목록>고객사상세</td>
                                          <td data-title="Company">2018-07-10  13:01:11 AM</td>
                                          <td data-title="Price">강용오</td>
                                          <td data-title="Change">Andrew</td>
                                          <td data-title="Change %">[211.178.126.92] 삼성SDS </td>
                                      </tr>
									  <tr>
                                          <td data-title="Code">채용공고-채용공고 상세</td>
                                          <td data-title="Company">2018-07-10  11:24:11 AM</td>
                                          <td data-title="Price">강용오</td>
                                          <td data-title="Change">Andrew</td>
                                          <td data-title="Change %">[211.178.126.92] 삼성SDS – Agile 전문가</td>
                                      </tr>
                                      </tbody>
                                  </table>
                              </section>
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

  </body>
</html>

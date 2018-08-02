
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keyword" content="">

    <title>Slide 12</title>
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
                             My Page > 내 쪽지
                          </header>
                          <div class="panel-body">
						    <h3 class="form-group">
								  내 쪽지
							</h3>
							<form class="form-horizontal tasi-form" method="POST">
							  <div class="col-sm-12">
							   <div class="row">
							    <div class="col-sm-6">
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
                              검색결과:10건
                          </header>
                          <div class="panel-body">
                              <div class="adv-table">
                                  <table  class="display table table-bordered table-striped" id="dynamic-table">
                                      <thead>
                                      <tr>
                                          <th>송수신구분</th>
                                          <th>쪽지구분</th>
                                          <th>내용 </th>
                                          <th>수신인</th>
										  <th>일자</th>
                                      </tr>
                                      </thead>
                                      <tbody>
                                      <tr>
                                          <td>수신</td>
                                          <td>고객사 담당자 변경</td>
                                          <td>SK텔레콤의 담당자가 ‘김미영’에서 ‘강용오’로 변경됩니다. </td>
                                          <td>김미영, 강용오</td>
										  <td></td>
                                      </tr>
                                      <tr>
                                          <td>수신</td>
                                          <td>고객사 담당자 이관요청-승인</td>
                                          <td>삼성전자의 담당자가 ‘강용오’에서 ‘김영민’으로 이관됩니다.</td>
                                          <td>강용오, 김영민</td>
										  <td></td>
                                      </tr>
									  <tr>
                                          <td>송신</td>
                                          <td>고객사 담당자 이관요청</td>
                                          <td>삼성전자의 담당자를 ‘강용오’에서 ‘김영민’으로 이관 요청합니다.</td>
                                          <td>관리자</td>
										  <td></td>
                                      </tr>
									  <tr>
                                          <td>송신</td>
                                          <td>고객산 담당자 이관요청-반려</td>
                                          <td>엘지화학의 담당자를 ‘강용오’에서 ‘조철수’로 이관요청을 반려합니다.</td>
                                          <td>강용오, 조철수</td>
										  <td></td>
                                      </tr>


									  <tr>
                                          <td>송신</td>
                                          <td>고객산 담당자 이관요청</td>
                                          <td>엘지화학의 담당자를 ‘강용오’에서 ‘조철수’로 이관요청 합니다</td>
                                          <td>관리자</td>
										  <td></td>
                                      </tr>
									  <tr>
                                          <td>송신</td>
                                          <td>인재 삭제요청-확인</td>
                                          <td>인재 ‘김태령’의 DB가 삭제됩니다.</td>
                                          <td>강용오</td>
										  <td></td>
                                      </tr>
									  <tr>
                                          <td>송신</td>
                                          <td>인재 삭제요청</td>
                                          <td>인재 ‘김태령’의 DB 삭제를 요청합니다 </td>
                                          <td>관리자</td>
										  <td></td>
                                      </tr>
									  <tr>
                                          <td>송신</td>
                                          <td>인재 검생 건수 추가 요청- 확인</td>
                                          <td>금월 인재 검색 건수가 20개 추가됩니다. </td>
                                          <td>강용오</td>
										  <td></td>
                                      </tr>
									  <tr>
                                          <td>송신</td>
                                          <td>인재 검생 건수 추가 요청</td>
                                          <td>금월 인재 검색 건수 추가 20개 요청합니다. </td>
                                          <td>관리자</td>
										  <td></td>
                                      </tr>
									  <tr>
                                          <td>송신</td>
                                          <td>기타</td>
                                          <td></td>
                                          <td></td>
										  <td></td>
                                      </tr>
									  <tr>
                                          <td>송신</td>
                                          <td>기타</td>
                                          <td></td>
                                          <td></td>
										  <td></td>
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

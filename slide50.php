
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keyword" content="">

    <title>Slide 50</title>
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
                             채용공고> 추천현황
                          </header>
                          <div class="panel-body">
						    <h3 class="form-group">
								  추천현황
							</h3>
							<form class="form-horizontal tasi-form" method="POST">
							  <div class="col-sm-12">
							   <div class="row">
								   <div class="col-sm-4">
									  <div class="form-group bottom_border">
										  <label class="col-sm-3 control-label">담당자</label>
										  <div class="col-sm-6 control-label">
											  <div class="input-group m-bot15">
												  <input type="text" class="form-control" value="전체">
												  <span class="input-group-btn">
													<button type="button" class="btn btn-white"><i class="fa fa-search"></i></button>
												  </span>
											  </div>
										  </div>
									  </div>
									</div>
									<div class="col-sm-4">
									  <div class="form-group bottom_border">
										  <label class="col-sm-2 control-label">추천자</label>
										  <div class="col-sm-8 control-label">
											  <div class="input-group m-bot15">
												  <input type="text" class="form-control" value="전체">
												  <span class="input-group-btn">
													<button type="button" class="btn btn-white"><i class="fa fa-search"></i></button>
												  </span>
											  </div>
										  </div>
									  </div>
									</div>
									<div class="col-sm-4">
									  <div class="form-group bottom_border">
										  <label class="col-sm-3 control-label">공고상태</label>
										  <div class="col-sm-3 control-label">
											  <select class="form-control m-bot15" style="width:90px;">
													<option value="진행중" selected>진행중</option>
											  </select>
										  </div>
										  <div class="col-sm-6 control-label">
											  <select class="form-control m-bot15" style="width:90px;">
													<option value="추천가능" selected>추천가능</option>
											  </select>
										  </div>
									  </div>
									</div>
								</div>

								<div class="row">
								   <div class="col-sm-4">
									  <div class="form-group bottom_border">
										  <label class="col-sm-3 control-label">추천 진행상태</label>
										  <div class="col-sm-8 control-label">
											  <select class="form-control m-bot15">
													<option value="컨택중" selected>컨택중</option>
											  </select>
										  </div>
									  </div>
									</div>
									<div class="col-sm-4"></div>
									<div class="col-sm-4">
									  <div class="form-group bottom_border">
										  <label class="col-sm-3 control-label">통합검색</label>
										  <div class="col-sm-6 control-label">
											  <input class="form-control" type="text" value="키워드">
										  </div>
										  <div class="col-sm-1 control-label" style="padding-left:0px;margin-left:0px;">
											  <button class="btn btn-info">검색</button>
										  </div>
									  </div>
									</div>
								</div>
							</div>
						  </form>
						</div>
					
                          <header class="" style="padding-top:30px;">
							<div class="col-lg-12">
								<div class="row panel-heading bottom_border">
									<div class="col-lg-4 ">
										<span>검색결과:10,504건</span>
									</div>
									<div class="col-lg-8">
										<span class="pull-right">
											 <label class="col-sm-4 control-label">정렬항목</label>
											  <div class="col-sm-4 control-label">
												  <select class="form-control m-bot15">
														<option value="추천일" selected>추천일</option>
												  </select>
											  </div>
											  <div class="col-sm-4 control-label">
												  <select class="form-control m-bot15">
														<option value="내림차순" selected>내림차순</option>
												  </select>
											  </div>
										</span>
									</div>
								</div>
							</div>
                          </header>
                          <div class="panel-body">
                              <div class="adv-table">
                                  <table  class="display table table-bordered table-striped" id="dynamic-table">
                                      <thead>
                                      <tr>
                                          <th>고객사</th>
                                          <th>채용공고명</th>
                                          <th>담당자 </th>
                                          <th>후보자</th>
										  <th>추천자</th>
										  <th>추천진행상태</th>
                                          <th>예정일 </th>
                                          <th>추천일</th>
										  <th>수정일</th>
										  <th>진행메모</th>
                                      </tr>
                                      </thead>
                                      <tbody>
                                      <tr>
                                          <td>삼성SDS</td>
                                          <td>Agile 전문가</td>
                                          <td>강용오</td>
                                          <td>김태령</td>
										  <td>김영민</td>
										  <td>컨택중</td>
                                          <td>18-07-25</td>
                                          <td>18-07-01</td>
										  <td>18-07-31</td>
										  <td></td>
                                      </tr>
                                      <tr>
                                          <td></td>
                                          <td></td>
                                          <td></td>
                                          <td></td>
										  <td></td>
										  <td></td>
                                          <td></td>
                                          <td></td>
										  <td></td>
										  <td></td>
                                      </tr>
									  <tr>
                                          <td></td>
                                          <td></td>
                                          <td></td>
                                          <td></td>
										  <td></td>
										  <td></td>
                                          <td></td>
                                          <td></td>
										  <td></td>
										  <td></td>
                                      </tr>
									  <tr>
                                          <td></td>
                                          <td></td>
                                          <td></td>
                                          <td></td>
										  <td></td>
										  <td></td>
                                          <td></td>
                                          <td></td>
										  <td></td>
										  <td></td>
                                      </tr>


									  <tr>
                                          <td></td>
                                          <td></td>
                                          <td></td>
                                          <td></td>
										  <td></td>
										  <td></td>
                                          <td></td>
                                          <td></td>
										  <td></td>
										  <td></td>
                                      </tr>
									  <tr>
                                          <td></td>
                                          <td></td>
                                          <td></td>
                                          <td></td>
										  <td></td>
										  <td></td>
                                          <td></td>
                                          <td></td>
										  <td></td>
										  <td></td>
                                      </tr>
									  <tr>
                                          <td></td>
                                          <td></td>
                                          <td></td>
                                          <td></td>
										  <td></td>
										  <td></td>
                                          <td></td>
                                          <td></td>
										  <td></td>
										  <td></td>
                                      </tr>
									  <tr>
                                          <td></td>
                                          <td></td>
                                          <td></td>
                                          <td></td>
										  <td></td>
										  <td></td>
                                          <td></td>
                                          <td></td>
										  <td></td>
										  <td></td>
                                      </tr>
									  <tr>
                                          <td></td>
                                          <td></td>
                                          <td></td>
                                          <td></td>
										  <td></td>
										  <td></td>
                                          <td></td>
                                          <td></td>
										  <td></td>
										  <td></td>
                                      </tr>
									  <tr>
                                          <td></td>
                                          <td></td>
                                          <td></td>
                                          <td></td>
										  <td></td>
										  <td></td>
                                          <td></td>
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

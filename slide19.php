
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keyword" content="">

    <title>채용공고에 대한 후보자 추천 현황 목록</title>
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
                             채용공고 > 추천현황
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
										  <label class="col-sm-3 control-label">담당자명</label>
										  <div class="col-sm-6 control-label">
											  <div class="input-group m-bot15">
												  <input type="text" class="form-control">
												  <span class="input-group-btn">
													<button type="button" class="btn btn-white"><i class="fa fa-search"></i></button>
												  </span>
											  </div>
										  </div>
									  </div>
									</div>

									<div class="col-sm-4">
									  <div class="form-group bottom_border">
										  <label class="col-sm-3 control-label">진행상태</label>
										  <div class="col-sm-6 control-label">
											  <div class="input-group m-bot15">
												  <input type="text" class="form-control">
												  <span class="input-group-btn">
													<button type="button" class="btn btn-white"><i class="fa fa-search"></i></button>
												  </span>
											  </div>
										  </div>
									  </div>
									</div>


									<div class="col-sm-4">
										<div class="col-sm-6 control-label">
											  <div class="input-group m-bot15">
												  <input type="text" class="form-control">
												  <span class="input-group-btn">
													<button type="button" class="btn btn-white"><i class="fa fa-search"></i></button>
												  </span>
											  </div>
										</div>

									    <div class="col-sm-6 control-label">
										  <div class="input-group m-bot15">
											  <input type="text" class="form-control">
											  <span class="input-group-btn">
												<button type="button" class="btn btn-white"><i class="fa fa-search"></i></button>
											  </span>
										  </div>
									    </div>
									</div>
								</div>

								<div class="row">
								   <div class="col-sm-4">
									  <div class="form-group bottom_border">
										  <label class="col-sm-3 control-label">고객사명</label>
										  <div class="col-sm-6 control-label">
											  <div class="input-group m-bot15">
												  <input type="text" class="form-control">
												  <span class="input-group-btn">
													<button type="button" class="btn btn-white"><i class="fa fa-search"></i></button>
												  </span>
											  </div>
										  </div>
									  </div>
									</div>
									<div class="col-sm-3"></div>
									<div class="col-sm-5">
									  <div class="form-group bottom_border">
										  <label class="col-sm-2 control-label">통합검색</label>
										  <div class="col-sm-7 control-label">
											  <input class="form-control" type="text" placeholder="키워드">
										  </div>
										  <div class="col-sm-3 control-label">
											  <button class="btn btn-info" type="submit">검색</button>
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
                          <header class="">
							<div class="col-lg-12">
								<div class="row panel-heading">
									<div class="col-lg-4 ">
										<span>검색결과:2,789건</span>
									</div>
									<div class="col-lg-8">
										<span class="pull-right">
											 <label class="col-sm-4 control-label">정렬항목</label>
											  <div class="col-sm-4 control-label">
												  <select class="js-example-basic-single" style="width:100px;">
														<option value="등록일" selected>등록일</option>
												  </select>
											  </div>
											  <div class="col-sm-4 control-label">
												  <select class="js-example-basic-single" style="width:100px;">
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
                                          <th>No</th>
                                          <th>고객사</th>
                                          <th>채용공고명 </th>
                                          <th>담당자</th>
										  <th>진행상태</th>

										  <th>추천수</th>
                                          <th>등록일 </th>
                                          <th>접수마감일</th>
										  <th>파트너</th>
                                      </tr>
                                      </thead>
                                      <tbody>
                                      <tr>
                                          <td>1</td>
                                          <td>삼성SDS</td>
                                          <td>Agile 전문가</td>
                                          <td>강용오</td>
										  <td>진행중</td>
										  <td>5</td>
                                          <td>2018-07-16</td>
                                          <td>2018-07-31</td>
										  <td>공개</td>
                                      </tr>
                                      <tr>
                                          <td>2</td>
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
                                          <td>3</td>
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
                                          <td>4</td>
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
                                          <td>5</td>
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
                                          <td>6</td>
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
                                          <td>7</td>
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
                                          <td>8</td>
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
                                          <td>9</td>
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
                                          <td>10</td>
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

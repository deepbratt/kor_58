
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keyword" content="">

    <title>Slide 27</title>
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
							<form class="form-horizontal tasi-form" method="POST">
							<header class="form-group bottom_border" style="font-size:1.5em;padding:15px;"> 4. 학력사항 </header>
							  <div class="col-sm-12">
							   <div class="row">
								   <div class="col-sm-4">
									  <div class="form-group bottom_border">
										  <label class="col-sm-3 control-label">*학력</label>
										  <div class="col-sm-4 control-label">
											  <select class="form-control m-bot15" style="width:90px;">
													<option value="학력구분" selected>학력구분</option>
											  </select>
										  </div>
										  <div class="col-sm-4 control-label">
											  <select class="form-control m-bot15" style="width:90px;">
													<option value="졸업" selected>졸업</option>
											  </select>
										  </div>
									  </div>
									</div>

									<div class="col-sm-4">
									  <div class="form-group bottom_border">
										  <label class="col-sm-3 control-label">*학교명</label>
										  <div class="col-sm-6 control-label">
											  <div class="input-group m-bot15">
												  <input type="text" class="form-control" placeholder="대학교명">
												  <span class="input-group-btn">
													<button type="button" class="btn btn-white"><i class="fa fa-search"></i></button>
												  </span>
											  </div>
										  </div>
									  </div>
									</div>


									<div class="col-sm-4">
									  <div class="form-group bottom_border">
										  <label class="col-sm-3 control-label">소재지</label>
										  <div class="col-sm-3 control-label">
											  <select class="form-control m-bot15" style="width:70px;">
													<option value="국내" selected>국내</option>
											  </select>
										  </div>
										  <div class="col-sm-3 control-label">
											  <input type="text" class="form-control" placeholder="서울">
										  </div>
									  </div>
									</div>
								</div>

								<div class="row">
								   <div class="col-sm-4">
									  <div class="form-group bottom_border">
										  <label class="col-sm-3 control-label">재학기간</label>
										  <div class="col-sm-4 control-label">
											<input type="text" class="form-control" placeholder="1996">
										  </div>
										  <div class="col-sm-1 control-label">
											<span class="control-label">~</span>
										  </div>
										  <div class="col-sm-4 control-label">
											<input type="text" class="form-control" placeholder="2001">
										  </div>
									  </div>
									</div>

									<div class="col-sm-4"></div>
									<div class="col-sm-4">
									  <div class="form-group bottom_border">
										  <label class="col-sm-3 control-label">전공명</label>
										  <div class="col-sm-6 control-label">
											  <input class="form-control" type="text">
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

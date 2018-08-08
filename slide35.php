
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keyword" content="">

    <title>Slide 35</title>
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
                             고객사>고객사목록
                          </header>
                          <div class="panel-body">
						    <h3 class="form-group">
								  고객사목록
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
										  <label class="col-sm-3 control-label">공고진행상태</label>
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
									<div class="col-sm-4">
									  <div class="form-group bottom_border">
										  <label class="col-sm-2 control-label">분류</label>
										  <div class="col-sm-8 control-label">
											  <select class="form-control m-bot15">
													<option value="전체" selected>전체</option>
											  </select>
										  </div>
									  </div>
									</div>
								</div>

								<div class="row">
								   <div class="col-sm-6">
									  <div class="form-group bottom_border">
										  <label class="col-sm-2 control-label">계약현황</label>
										  <div class="col-sm-9 control-label">
											  <select class="form-control m-bot15">
													<option value="전체" selected>전체</option>
											  </select>
										  </div>
									  </div>
									</div>
									<div class="col-sm-6">
									  <div class="form-group bottom_border">
										  <label class="col-sm-2 control-label">영업경로</label>
										  <div class="col-sm-9 control-label">
											  <select class="form-control m-bot15">
													<option value="전체" selected>전체</option>
											  </select>
										  </div>
									  </div>
									</div>
								</div>

								<div class="row">
								   <div class="col-sm-6">
									  <div class="form-group bottom_border">
										  <label class="col-sm-2 control-label">고객사명</label>
										  <div class="col-sm-9 control-label">
											  <div class="input-group m-bot15">
												  <input type="text" class="form-control" placeholder="전체">
												  <span class="input-group-btn">
													<button type="button" class="btn btn-white"><i class="fa fa-search"></i></button>
												  </span>
											  </div>
										  </div>
									  </div>
									</div>
									<div class="col-sm-6">
									  <div class="form-group bottom_border">
										  <label class="col-sm-2 control-label">기업형태</label>
										  <div class="col-sm-9 control-label">
											  <select class="form-control m-bot15">
													<option value=""></option>
											  </select>
										  </div>
									  </div>
									</div>
								</div>

								<div class="row">
									<div class="col-sm-6">
									  <div class="form-group bottom_border">
										  <label class="col-sm-2 control-label">통합검색</label>
										  <div class="col-sm-9 control-label">
											  <input class="form-control" type="text" placeholder="키워드">
										  </div>
										  <div class="col-sm-1 control-label">
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
										<span>검색결과:30,000건</span>
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
                                          <th>계약</th>
                                          <th>분류</th>
                                          <th>고객사명 </th>
                                          <th>담당자</th>
										  <th>사업영역</th>
										  <th>담당자</th>
                                          <th>이메일 </th>
                                          <th>연락처</th>
										  <th>공고진행(공고수)</th>
										  <th>등록일</th>
										  <th>수정일</th>
                                      </tr>
                                      </thead>
                                      <tbody>
                                      <tr>
                                          <td>계약</td>
                                          <td>국내</td>
                                          <td>삼성SDS</td>
                                          <td>강용오</td>
										  <td></td>
										  <td></td>
                                          <td></td>
                                          <td></td>
										  <td>진행중(6)</td>
										  <td></td>
										  <td></td>
                                      </tr>
                                      <tr>
                                          <td>영업중(미계약)</td>
                                          <td>해외</td>
                                          <td>JALA</td>
                                          <td>강용오</td>
										  <td></td>
										  <td></td>
                                          <td></td>
                                          <td></td>
										  <td>진행중(3)</td>
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

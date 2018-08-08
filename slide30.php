
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keyword" content="">

    <title>Slide 30</title>
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
                              <div class="adv-table">
                                  <table  class="display table table-bordered table-striped">
                                      <thead>
									  <tr>
									  	<th colspan="7">
											<div class="col-md-12">
												<div class="row">
													<div class="col-md-6">
														<span class="form-group">
															 3. 채용공고 진행내역
														</span>
													</div>
													<div class="col-md-6">
													  <div class="form-group" >
														<div class="make-switch pull-right">
															  <input type="checkbox" checked>
														</div>
													  </div>
													</div>
												</div>
											</div>
										</th>
									  </tr>
                                      <tr>
                                          <th>등록일</th>
										  <th>채용공고명</th>
										  <th>고객사</th>
										  <th>진행상태</th>
										  <th>예정일</th>
										  <th>등록자</th>
										  <th>추천자</th>
                                      </tr>
                                      </thead>
                                      <tbody>
                                      <tr>
                                          <td><label>2018-07-13 11:56</label></td>
										  <td><label>마케팅</label></td>
										  <td><label>인성정보시스템</label></td>
										  <td><label>컨택중</label></td>
										  <td><label>2018-07-13 11:56</label></td>
										  <td><label>김영민</label></td>
										  <td><label>김현웅</label></td>
                                      </tr>
                                      <tr>
                                          <td><label>2018-07-01 16:25</label></td>
										  <td><label>디지털 마케터 </label></td>
										  <td><label>에스넷</label></td>
										  <td><label>지원의사없음</label></td>
										  <td><label></label></td>
										  <td><label>조철수</label></td>
										  <td><label>김현웅</label></td>
                                      </tr>
                                      </tbody>
                                  </table>
                              </div>
                          </div>
                          <div class="panel-body">
                              <div class="adv-table">
                                  <table  class="display table table-bordered table-striped">
                                      <thead>
									  <tr>
									  	<th colspan="7">
											<div class="row">
													<div class="col-md-6">
														<span class="form-group">
															 4. 후보자 컨택내용
														</span>
													</div>
													<div class="col-md-6">
													  <div class="form-group">
														<button class="btn btn-info pull-right" data-toggle="modal" href="#duplicate_reg">컨택내용등록</button>
													  </div>
													</div>
												</div>
											</div>
										</th>
									  </tr>
                                      <tr>
                                          <th>내용</th>
										  <th>등록자</th>
										  <th>등록일</th>
                                      </tr>
                                      </thead>
                                      <tbody>
                                      <tr>
                                          <td><label>인성정보 관심 있음. 이력서 수정하겟음</label></td>
										  <td><label>김영민</label></td>
										  <td><label>18-07-13 112:00:01</label></td>
                                      </tr>
                                      <tr>
                                          <td><label>다른 곳으로 추천해 주세요</label></td>
										  <td><label>조철수</label></td>
										  <td><label>18-07-01 16:15:12</label></td>
                                      </tr>
                                      </tbody>
                                  </table>
                              </div>
                          </div>

                      </section>
                  </div>
              </div>
			  <!-- MODAL Start -->
				<div class="modal fade modal-dialog-center" id="duplicate_reg" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				  <div class="modal-dialog ">
					  <div class="modal-content-wrap">
						  <div class="modal-content">
							  <div class="modal-header">
								  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
								  <h4 class="modal-title">컨택내용등록</h4>
							  </div>
							  <div class="modal-body">
								<div class="col-sm-12">
									<div class="row">
										<input type="text" class="form-control">
									</div>
								</div>
							  </div>
							  <div class="modal-footer" style="border-top: none !important;">
							    <div class="col-sm-12" style="padding:16px;">
									<div class="row">
									  <button data-dismiss="modal" class="btn btn-info" type="button">등록</button>
									  <button class="btn btn-info" type="button"> 닫기</button>
									</div>
								</div>
							  </div>
						  </div>
					  </div>
				  </div>
			  </div>
			<!-- Modal Ends -->
              <!-- page end-->

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
  <script src="js/bootstrap-switch.js"></script>
  <script type="text/javascript" src="js/bootstrap-fileupload.js"></script>
  <script type="text/javascript" language="javascript" src="js/jquery.dataTables.js"></script>
  <script type="text/javascript" src="js/DT_bootstrap.js"></script>
  <script src="js/dynamic_table_init.js"></script>
  </body>
</html>

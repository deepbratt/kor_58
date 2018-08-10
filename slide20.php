
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keyword" content="">

    <title>Slide 20</title>
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
		.pad0{
			padding:0px;
		}
		.col_label{
			border:1px solid #CCC;padding:10px;background:#CCC;
		}
		.col_contnt{
			border:1px solid #CCC;padding:10px;
		}
		.mar5{
			margin-top:5px;
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
				<div class="col-md-10 col-md-offset-1">
					<section class="panel">
                        
						 <div class="modal-header">
							  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							  <h4 class="modal-title"> 추천진행상테 </h4>
						 </div>
					
                          <div class="panel-body">
                              <div class="adv-table">
                                  <table  class="display table table-bordered table-striped">
                                      <thead>
                                      <tr>
                                          <th colspan="3">1. 후보자 정보 </th>
                                      </tr>
                                      </thead>
                                  </table>
								  <div class="col-md-12">
										
										<div class="row pad0 mar5">
											<div class="col-md-6 pad0">
												<div class="col-md-4 col_label">후보자</div>
												<div class="col-md-8 col_contnt">김태령</div>
											</div>
											<div class="col-md-6 pad0">
												<div class="col-md-4 col_label">출생년도</div>
												<div class="col-md-8 col_contnt">1977</div>
											</div>
										</div>
										
										<div class="row pad0 mar5">
											<div class="col-md-6 pad0">
												<div class="col-md-4 col_label">성별</div>
												<div class="col-md-8 col_contnt">여자</div>
											</div>
											<div class="col-md-6 pad0">
												<div class="col-md-4 col_label">이메일</div>
												<div class="col-md-8 col_contnt"><a href="mailto:yeowu@naver.co">yeowu@naver.co</a></div>
											</div>
										</div>

										<div class="row pad0 mar5">
											<div class="col-md-6 pad0">
												<div class="col-md-4 col_label">추천자</div>
												<div class="col-md-8 col_contnt">김영민</div>
											</div>
											<div class="col-md-6 pad0">
												<div class="col-md-4 col_label">추천일</div>
												<div class="col-md-8 col_contnt"></div>
											</div>
										</div>

										<div class="row pad0 mar5">
											<div class="col-md-6 pad0">
												<div class="col-md-4 col_label">추천진행상태</div>
												<div class="col-md-8 col_contnt" style="padding:0px;margin:0px;">
													<select class="js-example-basic-single" style="width:90%;height:35px;margin:2px;text-align:center;">
														<option value="추천가능" selected>추천가능</option>
												    </select>
												</div>
											</div>
											<div class="col-md-6 pad0">
												<div class="col-md-4 col_label">예정일</div>
												<div class="col-md-8 col_contnt"><a href="mailto:yeowu@naver.co">yeowu@naver.co</a></div>
											</div>
										</div>


										<div class="row pad0 mar5">
											<div class="col-md-12 pad0">
												<div class="col-md-2 col_label">파트너</div>
												<div class="col-md-10 col_contnt">
													<select class="js-example-basic-single">
														<option value="진행중" selected>진행중</option>
													</select>

													<select class="js-example-basic-single">
														<option value="추천가능" selected>추천가능</option>
												    </select>
												</div>
											</div>
										</div>

										<div class="row pad0 mar5">
											<div class="col-md-12 pad0">
												<div class="col-md-2 col_label">변경사항</div>
												<div class="col-md-10 col_contnt">
													18-07-07 14:15:30 진행상태 변경 진행중>추천가능 진행중> 추천마감 <br />
													18-07-19 15:14:16 채용정보 상세> 참고자료 :수정
												</div>
											</div>
										</div>
								  </div>
                              </div>
                          </div>
                      </section>
                  </div>
              </div>

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
  <script type="text/javascript" src="js/bootstrap-fileupload.js"></script>
  <script type="text/javascript" language="javascript" src="js/jquery.dataTables.js"></script>
  <script type="text/javascript" src="js/DT_bootstrap.js"></script>
  <script src="js/dynamic_table_init.js"></script>
  </body>
</html>

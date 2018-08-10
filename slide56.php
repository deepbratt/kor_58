
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keyword" content="">

    <title>Slide 56</title>
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
							  <h4 class="modal-title"> 공지상세 </h4>
						 </div>
					
                          <div class="panel-body">
                              <div class="adv-table">
                             
								  <div class="col-md-12">
										<div class="row pad0 mar5">
											<div class="col-md-12 pad0">
												<div class="col-md-2 col_label">등록일</div>
												<div class="col-md-10 col_contnt">2018-07-01</div>
											</div>
										</div>


										<div class="row pad0 mar5">
											<div class="col-md-12 pad0">
												<div class="col-md-2 col_label">제목</div>
													<div class="col-md-10 col_contnt">조철수 상무님 입사</div>
												</div>
										</div>

										<div class="row pad0 mar5">
											<div class="col-md-12 pad0">
												<div class="col-md-2 col_label">내용</div>
												<div class="col-md-10 col_contnt">
													안녕하세요. 경연 파트너스 임직원 여러분7월 12일부로 조철수 상무님이 입사하셨습니다. 여러분의 환영과 환대 바랍니다 

												</div>
											</div>
										</div>
											<div class="row pad0 mar5">
											<div class="col-md-12 pad0">
												<div class="col-md-2 col_label">첨부파일</div>
												<div class="col-md-10 col_contnt">
													없음 
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

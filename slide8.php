
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keyword" content="">

    <title>Slide 5</title>
	<?php include("metalinks.php");?>
    <link href="css/table-responsive.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap-fileupload.css" />
    <!--bootstrap switcher-->
    <link rel="stylesheet" type="text/css" href="css/bootstrap-switch.css" />
    <!-- switchery-->
    <link rel="stylesheet" type="text/css" href="css/switchery.css" />
    <!--select 2-->
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
                             My Page> 내 계정
                          </header>
                          <div class="panel-body">
						    <h3 class="form-group">
								내 계정
							</h3>
							<form class="form-horizontal tasi-form" method="POST">
							  <div class="col-sm-12">
							   <div class="row">
							    <div class="col-sm-6">
								  <div class="form-group bottom_border">
                                      <label class="col-sm-3 control-label">이름</label>
                                      <label  class="col-sm-7 control-label">강용오</label>
                                  </div>
								  <div class="form-group bottom_border">
                                      <label class="col-sm-3 control-label">아이디</label>
                                      <label  class="col-sm-7 control-label">andrew.kang@kycg.co.kr</label>
                                  </div>

                                  <div class="form-group bottom_border">
                                      <label class="col-sm-3 control-label">기존비번</label>
                                      <div class="col-sm-5">
                                          <input type="password" class="form-control" placeholder="*************">
                                      </div>
                                  </div>

								  <div class="form-group bottom_border">
                                      <label class="col-sm-3 control-label">변경비번</label>
                                      <div class="col-sm-5">
                                          <input type="password" class="form-control" placeholder="*************">
                                      </div>
									  <div class="col-sm-4">
                                          <span>*숫자, 영문 포함 10자 이상</span>
                                      </div>
                                  </div>

                                   <div class="form-group bottom_border">
                                      <label class="col-sm-3 control-label">비번확인</label>
                                      <div class="col-sm-5">
                                          <input type="text" class="form-control" placeholder="*************">
                                      </div>
                                  </div>
								</div>
							  </div>
							</div>
							<h3 class="form-group bottom_border"></h3>
							 <div class="col-md-12 text-center">
								<div class="form-group">
									<button type="button" class="btn btn-info">수정</button>
									<button type="button" class="btn btn-default">취소</button>
								</div>
							 </div>
                              </form>
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
  <script type="text/javascript" src="js/ga.js"></script>
    <!--this page plugins-->
  <script src="js/jquery.js"></script>
    <!--this page plugins-->
  <script type="text/javascript" src="js/bootstrap-fileupload.js"></script>
  <!--bootstrap-switch-->
  <script src="js/bootstrap-switch.js"></script>
  <!--bootstrap-switch-->
  <!--bootstrap swither-->
  <script type="text/javascript">
      $(document).ready(function () {
          // Resets to the regular style
          $('#dimension-switch').bootstrapSwitch('setSizeClass', '');
          // Sets a mini switch
          $('#dimension-switch').bootstrapSwitch('setSizeClass', 'switch-mini');
          // Sets a small switch
          $('#dimension-switch').bootstrapSwitch('setSizeClass', 'switch-small');
          // Sets a large switch
          $('#dimension-switch').bootstrapSwitch('setSizeClass', 'switch-large');


          $('#change-color-switch').bootstrapSwitch('setOnClass', 'success');
          $('#change-color-switch').bootstrapSwitch('setOffClass', 'danger');
      });
  </script>
  </body>
</html>

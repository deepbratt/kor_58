
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keyword" content="">

    <title>Slide 29</title>
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
				<div class="col-md-10" style="margin-left:114px;">
					<section class="panel">

					<div class="col-md-12">
					  <div class="panel-heading">
						<div class="row">
							<div class="col-md-6">
								<label>인재 추천</label>
							</div>
							<div class="col-md-6 ">
								<button class="btn btn-info pull-right">&times;</button>
							</div>
						</div>
					  </div>
					</div>
					 
					  <div class="panel-body">
						<form class="form-horizontal tasi-form" method="POST">
						  <div class="col-sm-12">
						   <div class="row">
							<div class="col-sm-12">
							  <div class="form-group bottom_border">
								  <label class="col-sm-3 control-label">추천자</label>
								  <div class="col-sm-4 control-label">
									  <div class="input-group m-bot15">
										  <input type="text" class="form-control" placeholder="강용오">
										  <span class="input-group-btn">
											<button type="button" class="btn btn-white"><i class="fa fa-search"></i></button>
										  </span>
									  </div>
								  </div>
							  </div>
							  <div class="form-group bottom_border">
								  <label class="col-sm-3 control-label">이름</label>
								  <label class="col-sm-7 control-label">김태령</label>
							  </div>
							  <div class="form-group bottom_border">
								  <label class="col-sm-3 control-label">*채용공고</label>
								  <label class="col-sm-1 control-label">고객사</label>
								  <div class="col-sm-8 control-label">
									  <div class="input-group m-bot15">
										  <input type="text" class="form-control" placeholder="전체">
										  <span class="input-group-btn">
											<button type="button" class="btn btn-white"><i class="fa fa-search"></i></button>
										  </span>
									  </div>
								  </div>
							  </div>
							  <div class="form-group bottom_border">
								  <label class="col-sm-3 control-label"></label>
								  <label class="col-sm-1 control-label">채용공고</label>
								  <div class="col-sm-8">
									  <select class="form-control m-bot15">
											<option value="전체" selected>전체</option>
									  </select>
								  </div>
							  </div>
							   <div class="form-group bottom_border">
								  <label class="col-sm-3 control-label">*진행상태</label>
								  <div class="col-sm-4">
									 <select class="form-control m-bot15">
											<option value="컨택중" selected>컨택중</option>
									  </select>
								  </div>
							  </div>

							   <div class="form-group bottom_border">
								  <label class="col-sm-3 control-label">*추천사유</label>
								  <div class="col-sm-9">
									 <textarea class="form-control"></textarea>
								  </div>
							  </div>

							</div>
						  </div>
						</div>
						<h3 class="form-group bottom_border"></h3>
						 <div class="col-md-12 col-md-offset-10">
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

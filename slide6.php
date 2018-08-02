
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keyword" content="">

    <title>Slide 6</title>
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
                          
                          <div class="panel-body">
						   
							<form class="form-horizontal tasi-form" method="POST">
							<header class="form-group bottom_border" style="font-size:1.5em;padding:15px;"> 3. 경력사항 </header>
							  <div class="col-sm-12">
							   <div class="row">
							    <div class="col-sm-12">
								  
                                  <div class="form-group bottom_border">
                                      <label class="col-sm-3 control-label">재직기업</label>
                                      <div class="col-sm-2">
                                          <input type="text" class="form-control" placeholder="입력후 엔터">
                                      </div>
									  <div class="col-sm-5">
                                          <input type="text" id="tagsinput" class="tagsinput" value="황금에스티,시스코시스템즈 ">
                                      </div>
									  <div class="col-sm-2">
                                          <div class="col-md-2">
											 <input  type="checkbox" style="width: 20px" class="checkbox form-control" id="agree" name="agree" checked/>
										 </div>
										 <div class="col-md-10">
											 <label class="control-label">공개</label>
										 </div>
                                      </div>
                                  </div>

								  <div class="form-group bottom_border">
                                      <label class="col-sm-3 control-label">전문분야</label>
                                      <div class="col-sm-2">
                                          <input type="text" class="form-control" placeholder="입력후 엔터">
                                      </div>
									  <div class="col-sm-5">
                                          <input type="text" id="tagsinput" class="tagsinput" value="B2B,e-Commerce,신규사업기획
">
                                      </div>
									  <div class="col-sm-2">
                                          <div class="col-md-2">
											 <input  type="checkbox" style="width: 20px" class="checkbox form-control" id="agree" name="agree" checked/>
										 </div>
										 <div class="col-md-10">
											 <label class="control-label">공개</label>
										 </div>
                                      </div>
                                  </div>

								  <div class="form-group bottom_border">
                                      <label class="col-sm-3 control-label">재직기업</label>
                                      <div class="col-sm-7">
                                          <textarea class="form-control"></textarea>
                                      </div>
									  <div class="col-sm-2">
                                          <div class="col-md-2">
											 <input  type="checkbox" style="width: 20px" class="checkbox form-control" id="agree" name="agree" checked/>
										 </div>
										 <div class="col-md-10">
											 <label class="control-label">공개</label>
										 </div>
                                      </div>
                                  </div>

								  <div class="form-group bottom_border">
                                      <label class="col-sm-3 control-label">자기소개</label>
                                      <div class="col-sm-7">
                                          <textarea class="form-control"></textarea>
                                      </div>
									  <div class="col-sm-2">
                                          <div class="col-md-2">
											 <input  type="checkbox" style="width: 20px" class="checkbox form-control" id="agree" name="agree" checked/>
										 </div>
										 <div class="col-md-10">
											 <label class="control-label">공개</label>
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
                              No More Tables
                          </header>
                          <div class="panel-body">
                              <section id="no-more-tables">
                                  <table class="table table-bordered table-striped table-condensed cf">
                                      <thead class="cf">
                                      <tr>
                                          <th>지역</th>
                                          <th>학교구분</th>
                                          <th class="numeric">학교명</th>
                                          <th class="numeric">전공명</th>
                                          <th class="numeric">졸업여부</th>
                                          <th class="numeric">최종학력</th>
                                          <th class="numeric">삭제</th>
                                      </tr>
                                      </thead>
                                      <tbody>
                                      <tr>
                                          <td data-title="Code">국내</td>
                                          <td data-title="Company">대학교</td>
                                          <td data-title="Price">성균관대학교</td>
                                          <td data-title="Change"></td>
                                          <td data-title="Change %"></td>
                                          <td data-title="Open"><input type="radio" checked></td>
                                          <td data-title="High"><input type="checkbox" checked></td>
                                      </tr>
                                      <tr>
                                          <td data-title="Code">국내</td>
                                          <td data-title="Company">고등학교</td>
                                          <td data-title="Price">문영여자고등학교</td>
                                          <td data-title="Change"></td>
                                          <td data-title="Change %"></td>
                                          <td data-title="Open"><input type="radio"></td>
                                          <td data-title="High"><input type="checkbox" checked></td>
                                      </tr>
                                      </tbody>
                                  </table>
                              </section>
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
  <!--custom tagsinput-->
  <script src="js/jquery.tagsinput.js"></script>
  <!-- ckEditor-->
  <script type="text/javascript" src="js/ckeditor.js"></script>
  <script type="text/javascript" src="js/bootstrap-inputmask.min.js"></script>
  <!-- script for this page -->
  <script src="js/form-component.js"></script>
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

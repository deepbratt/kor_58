
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keyword" content="">

    <title>Slide 48</title>
	<?php include("metalinks.php");?>
    <link href="css/table-responsive.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap-fileupload.css" />
    <!--bootstrap switcher-->
    <link rel="stylesheet" type="text/css" href="css/bootstrap-switch.css" />
    <!-- switchery-->
    <link rel="stylesheet" type="text/css" href="css/switchery.css" />

    <link rel="stylesheet" type="text/css" href="css/datepicker.css" />
    <link rel="stylesheet" type="text/css" href="css/datetimepicker.css" />
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
                            컽설턴트  > 인재 검색수 관리
                          </header>
                      </section>
				</div>
			 </div>

			  <!-- page start-->
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                               인재 검색수 관리
                          </header>
						        <div class="panel-body">
								
								
								<div class="col-md-5">
								<div class="col-md-12">
								  <div class="form-group">
									  <label for="inputPassword1" class="col-md-2 col-sm-2 control-label">컨설턴트명</label>
									  <div class="col-md-10">
										  <input type="text" class="form-control" id="inputPassword1" placeholder="전체">
									  </div>
								  </div>
								 </div>
                              </div>
							
                          </div>
                     
                      </section>
                  </div>

			
              </div>
			

			<div class="row">
				  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                              검색결과:4건
                          </header>
                          <div class="panel-body">
                              <section id="no-more-tables">
                                  <table class="table table-bordered table-striped table-condensed cf">
                                      <thead class="cf">
                                      <tr>
										<th> 
											<div class="checkbox">
												  <label>
													  <input type="checkbox"> 
												  </label>
											  </div>
										</th>
                                          <th>컨설턴트명</th>
                                          <th>한달 기본 건수</th>
                                          <th class="numeric">전년도 보너스 건수</th>
                                          <th class="numeric">추가 건수</th>
										  <th class="numeric">총 가능 건수</th>
										  
                                       
                                      </tr>
                                      </thead>
                                      <tbody>
                                      <tr>
                                          <td data-title="Code">
										  <div class="checkbox">
											  <label>
												  <input type="checkbox">
											  </label>
										  </div>
										  </td>
                                          <td data-title="Company">강용오</td>
                                          <td data-title="Price">30</td>
                                          <td data-title="Change">0</td>
										  <td data-title="Change">5</td>
										  <td data-title="Change">35</td>
                                      </tr>

									   <tr>
                                          <td data-title="Code">
										  <div class="checkbox">
											  <label>
												  <input type="checkbox">
											  </label>
										  </div></td>
                                          <td data-title="Company">김미영</td>
                                          <td data-title="Price">30</td>
                                          <td data-title="Change">0</td>
										  <td data-title="Change">6</td>
										  <td data-title="Change">36</td>
										  
                                      </tr>
									   <tr>
                                          <td data-title="Code">
										  <div class="checkbox">
											  <label>
												  <input type="checkbox">
											  </label>
										  </div>
										</td>
                                          <td data-title="Company">김영민</td>
                                          <td data-title="Price">30</td>
                                          <td data-title="Change">0</td>
										  <td data-title="Change">6</td>
										  <td data-title="Change">36</td>
										  
                                      </tr>
									   <tr>
                                          <td data-title="Code">
										  	<div class="checkbox">
											  <label>
												  <input type="checkbox">
											  </label>
										  </div>
										  </td>
                                          <td data-title="Company">조철수</td>
                                          <td data-title="Price">30</td>
                                          <td data-title="Change">0</td>
										  <td data-title="Change">7</td>
										  <td data-title="Change">47</td>
										  
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

<!-- MODAL Start -->
	<div class="modal fade modal-dialog-center " id="enroll" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	  <div class="modal-dialog ">
		  <div class="modal-content-wrap">
			  <div class="modal-content">
				  <div class="modal-header">
					  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					  <h4 class="modal-title">컨택내용등록</h4>
				  </div>
				  <div class="modal-body">강용오 (andrew.kang) 계정을 비활성화하시겠습니까?계정을 비활성화하는 경우 사용자의 시스템 접근이 제한됩니다 </div>
				  <div class="modal-footer">
					  <button data-dismiss="modal" class="btn btn-default" type="button">확인</button>
					  <button class="btn btn-warning" type="button">취소</button>
				  </div>
			  </div>
		  </div>
	  </div>
  </div>
<!-- Modal Ends -->

<!-- MODAL Start -->
	<div class="modal fade modal-dialog-center " id="something" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	  <div class="modal-dialog ">
		  <div class="modal-content-wrap">
			  <div class="modal-content">
				  <div class="modal-header">
					  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					  <h4 class="modal-title">컨택내용등록</h4>
				  </div>
				  <div class="modal-body">강용오 (andrew.kang) 계정을 활성화하시겠습니까? 계정을 활성화하는 경우 사용자의 시스템 접근이 가능합니다 </div>
				  <div class="modal-footer">
					  <button data-dismiss="modal" class="btn btn-default" type="button">확인</button>
					  <button class="btn btn-warning" type="button">취소</button>
				  </div>
			  </div>
		  </div>
	  </div>
  </div>
<!-- Modal Ends -->
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
    <script type="text/javascript" src="js/bootstrap-datepicker.js"></script>
  <script type="text/javascript" src="js/bootstrap-datetimepicker.js"></script>
  <!--select2-->
  <script src="js/advanced-form-components.js"></script>
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

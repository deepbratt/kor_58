
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keyword" content="">

    <title>Slide 41</title>
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
                            공지사항>공지사항 목록
                          </header>
                      </section>
				</div>
			 </div>

			  <!-- page start-->
              <div class="row">
                  <div class="col-lg-6">
                      <section class="panel">
                          <header class="panel-heading">
                               공지사항 목록
                          </header>
                          <div class="panel-body">
									<div class="col-md-12">
									  <div class="col-md-2 col-lg-2 col-sm-12">
										<label class="control-label" style="padding-top:10px;">등록일</label>
									  </div>

									  <div class="col-md-4 col-lg-4 col-sm-12" style="margin:5px;">
										  <div data-date-viewmode="years" data-date-format="dd-mm-yyyy" data-date="12-02-2012" class="input-append date dpYears">
											  <input type="text" readonly="" value="12-02-2012" size="16" class="form-control" >
											  <span class="input-group-btn add-on" >
												<button class="btn btn-danger" type="button" ><i class="fa fa-calendar"></i></button>
											  </span>
										  </div>
									  </div>
									   <div class="col-md-4 col-lg-4 col-sm-12" style="margin:5px;">
										  <div data-date-viewmode="years" data-date-format="dd-mm-yyyy" data-date="12-02-2012" class="input-append date dpYears">
											  <input type="text" readonly="" value="12-02-2012" size="16" class="form-control">
											  <span class="input-group-btn add-on">
												<button class="btn btn-danger" type="button" ><i class="fa fa-calendar"></i></button>
											  </span>
										  </div>
									  </div>
								  </div>
                          </div>
                      </section>
                  </div>

				  <div class="col-lg-6">
                      <section class="panel">
                          <header class="panel-heading">
                              인재 검색 건수
                          </header>
                          <div class="panel-body">
						  	 <div class="col-md-11">
								<div class="col-md-12">
								  <div class="form-group">
									  <label for="inputPassword1" class="col-md-2 col-sm-2 control-label">계약서</label>
									  <div class="col-md-10">
										  <input type="text" class="form-control" id="inputPassword1" placeholder="키워드">
									  </div>
								  </div>
								 </div>
                              </div>
							 <div class="col-md-1"style="padding:0 !important;">
							 	<a class="btn btn-info" data-toggle="modal" href="#enroll" >검색</a>
							 </div>
                          </div>
                      </section>
                  </div>
              </div>

			<div class="row">
				  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                              검색결과:15건
                          </header>
                          <div class="panel-body">
                              <section id="no-more-tables">
                                  <table class="table table-bordered table-striped table-condensed cf">
                                      <thead class="cf">
                                      <tr>
                                          <th>NO</th>
                                          <th>중요</th>
                                          <th class="numeric">제목</th>
                                          <th class="numeric">등록자</th>
										  <th class="numeric">등록일</th>

                                       
                                      </tr>
                                      </thead>
                                      <tbody>
                                      <tr>
                                          <td data-title="Code">1</td>
                                          <td data-title="Company">중요</td>
                                          <td data-title="Price">사이트 오픈</td>
                                          <td data-title="Change">관리자</td>
										  <td data-title="Change">2018-07-06</td>

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
					  <h4 class="modal-title">공지 상세</h4>
				  </div>
				  <div class="modal-body">    
					<section id="no-more-tables">
					  <table class="table table-bordered table-striped table-condensed cf">
						  <tbody>
						  <tr>
							  <td data-title="Code">등록일</td>
							  <td data-title="Company">2018-07-01</td>
						  </tr>
						    <tr>
							  <td data-title="Code">제목</td>
							  <td data-title="Company">조철수 상무님 입사</td>
						  </tr>
						    <tr>
							  <td data-title="Code">내용</td>
							  <td data-title="Company">안녕하세요. 경연 파트너스 임직원 여러분7월 12일부로 조철수 상무님이 입사하셨습니다. 여러분의 환영과 환대 바랍니다 </td>
						  </tr>
						    <tr>
							  <td data-title="Code">첨부파일</td>
							  <td data-title="Company">없음</td>
						  </tr>
						  </tbody>
					  </table>
                       </section>
					</div>
				  <div class="modal-footer">
					  <button data-dismiss="modal" class="btn btn-default" type="button">닫기</button>
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

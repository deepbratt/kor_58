
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keyword" content="">

    <title>Slide 58</title>
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
						 고객사> 담당자 이관요청
					  </header>
					  <div class="panel-body">
						  <div class="col-sm-12">
							<div class="form-group bottom_border">
							  <label class="col-sm-2 control-label">추천자</label>
							  <div class="col-sm-6 control-label">
								  <select class="form-control m-bot-15">
									<option value="업종">업종</option>
								  </select>
							  </div>
						  </div>
						</div>
					</div>
				 </section>
				</div>
			 </div>
			  <!-- page start-->
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <div class="panel-body">
                              <div class="adv-table">
                                  <table  class="display table table-bordered table-striped" id="dynamic-table">
                                      <thead>
                                      <tr>
                                          <th>no</th>
                                          <th>이관요청일</th>
                                          <th>고객사명</th>
                                          <th>등록자</th>
										  <th>기존담당자</th>
										  <th>담당자새 </th>
                                          <th>기업 담당자</th>
                                          <th>이메일</th>
										  <th>연락처</th>
										  <th>Action</th>
                                      </tr>
                                      </thead>
                                      <tbody>
                                      <tr>
                                          <td>3</td>
                                          <td>18-07-13</td>
                                          <td>삼성SDS</td>
                                          <td>강용오</td>
										  <td>강용오</td>
										  <td>김미영</td>
                                          <td></td>
                                          <td></td>
										  <td></td>
										  <td><button class="btn btn-info" data-toggle="modal" href="#acknowledgement">승인</button>
											  <button class="btn btn-info" data-toggle="modal" href="#companion">반려</button>
										  </td>
                                      </tr>
                                      <tr>
                                          <td>2</td>
                                          <td>18-07-11</td>
                                          <td>JALA</td>
                                          <td>강용오</td>
										  <td>강용오</td>
										  <td>김영민</td>
                                          <td></td>
                                          <td></td>
										  <td></td>
										  <td>
											  <button class="btn btn-info" data-toggle="modal" href="#acknowledgement">승인</button>
											  <button class="btn btn-info" data-toggle="modal" href="#companion">반려</button>
										  </td>
                                      </tr>
									  <tr>
                                          <td>1</td>
                                          <td>18-07-10</td>
                                          <td>시스코시스템즈</td>
                                          <td>김태령</td>
										  <td>김미영</td>
										  <td>조철수</td>
                                          <td></td>
                                          <td></td>
										  <td></td>
										  <td><button class="btn btn-info" data-toggle="modal" href="#acknowledgement">승인</button>
											  <button class="btn btn-info" data-toggle="modal" href="#companion">반려</button>
										  </td>
                                      </tr>
                                      </tbody>
                                  </table>
                              </div>
                          </div>
                      </section>
                  </div>
              </div>
              <!-- page end-->
			  <!-- MODAL Start -->
				<div class="modal fade modal-dialog-center " id="acknowledgement" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				  <div class="modal-dialog ">
					  <div class="modal-content-wrap">
						  <div class="modal-content">
							  <div class="modal-header">
								  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
								  <h4 class="modal-title">고객사 담당자 이관 확인</h4>
							  </div>
							  <div class="modal-body">
									<div style="border: 1px solid #ddd; padding:15px;text-align:center;">삼성SDS의 담당자가 강용오에서 김미영으로 이관됩니다. </div> 
							  </div>
							  <div class="modal-footer">
							  	  <button class="btn btn-info" type="button"> 확인</button>
								  <button data-dismiss="modal" class="btn btn-default" type="button">취소</button>
							  </div>
						  </div>
					  </div>
				  </div>
			  </div>
			<!-- Modal Ends -->
			<!-- MODAL Start -->
				<div class="modal fade modal-dialog-center " id="companion" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				  <div class="modal-dialog ">
					  <div class="modal-content-wrap">
						  <div class="modal-content">
							  <div class="modal-header">
								  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
								  <h4 class="modal-title">고객사 담당자 이관 확인</h4>
							  </div>
							  <div class="modal-body">
									<div class="modal-body">
										<div style="border: 1px solid #ddd; padding:15px;text-align:center;">삼성SDS 담당자의 이관요청을 반려합니다 </div> 
								    </div>
							  </div>
							  <div class="modal-footer">
							  	  <button class="btn btn-info" type="button"> 확인</button>
								  <button data-dismiss="modal" class="btn btn-default" type="button">취소</button>
							  </div>
						  </div>
					  </div>
				  </div>
			  </div>
			<!-- Modal Ends -->

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

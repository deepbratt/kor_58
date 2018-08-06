
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keyword" content="">

    <title>Slide 24</title>
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
                             인재>인재 목록
                          </header>
                          <div class="panel-body">
						    <h3 class="form-group">
								 인재 목록
							</h3>
							<form class="form-horizontal tasi-form" method="POST">
							  <div class="col-sm-12">
							  <div class="form-group bottom_border text-center">
								  <button class="btn btn-info btn-lg" type="submit">검색조건</button>
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
                          <header>
                              <div class="col-lg-12">
								<div class="row panel-heading">
									<div class="col-lg-4 ">
										<span>검색결과:10,789건</span>
									</div>
									<div class="col-lg-8">
										<span class="pull-right">
											 <button class="btn btn-info" data-toggle="modal" href="#candid_register">관심후보자등록</button>
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
                                          <th><input type="checkbox" class="form-control" style="height:18px !important;"></th>
                                          <th>등록일 수정일</th>
                                          <th>성명/성별/출생년도</th>
                                          <th>프로필 요약</th>
										  <th>등록자</th>
										  <th>등록자메모</th>
                                      </tr>
                                      </thead>
                                      <tbody>
                                      <tr>
                                          <td><input type="checkbox" class="form-control" style="height:18px !important;" checkbox></td>
                                          <td>18-07-12<br/>18-07-19</td>
                                          <td>김태령/여/1977</td>
                                          <td>성균관대학교 정치외교학과 학사<br/>황금에스티/차장<br/>영어- 비지니스업무가능/중국어-비즈니스업무가능<br/>웹기획, 웹마케팅, B2B<br/></td>
										  <td>강용오</td>
										  <td></td>
                                      </tr>
                                      <tr>
                                          <td><input type="checkbox" class="form-control" style="height:18px !important;"></td>
                                          <td>18-07-11<br/>18-07-20</td>
                                          <td>홍길동/남/1969</td>
                                          <td>서율대학교 컴퓨터공학과 박사<br/>SK Telecome/이사<br/>영어- 비지니스업무가능<br/>빅데이터, 인공지능<br/></td>
										  <td>강용오</td>
										  <td></td>
                                      </tr>
									  <tr>
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
                                      </tr>


									  <tr>
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
                                      </tr>
									  <tr>
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
                                      </tr>
									  <tr>
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
                                      </tr>
									  <tr>
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
			  <!-- MODAL Start -->
				<div class="modal fade modal-dialog-center " id="candid_register" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				  <div class="modal-dialog ">
					  <div class="modal-content-wrap">
						  <div class="modal-content">
							  <div class="modal-header">
								  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
								  <h4 class="modal-title">관심후보자등록</h4>
							  </div>
							  <div class="modal-body">
								<div class="col-sm-12">
									<div class="row">

										<div class="col-sm-3">
											<span class="fa fa-folder" style="font-size:3.3em;"></span>
											<span>마케팅</span>
										</div>
										<div class="col-sm-3">
											<span class="fa fa-folder" style="font-size:3.3em;"></span>
											<span>영업</span>
										</div>
										<div class="col-sm-3">
											<span class="fa fa-folder" style="font-size:3.3em;"></span>
											<span>IT</span>
										</div>
										<div class="col-sm-3">
											<span class="fa fa-plus-square-o" style="font-size:3.3em;"></span>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-3">
											<span class="fa fa-folder" style="font-size:3.3em;"></span>
											<input type="text" class="form-control">
										</div>
									</div>
								</div>
							  </div>
							  <div class="modal-footer" style="border-top: none !important;">
								  <button data-dismiss="modal" class="btn btn-default" type="button">닫기</button>
								  <button class="btn btn-warning" type="button"> 저장</button>
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

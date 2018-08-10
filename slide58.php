
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

	.pad0{
			padding:0px;
		}
		.col_label{
			border:1px solid #CCC;padding:10px;background:#CCC;
		}
		.col_label1{
			border:1px solid #CCC;padding:10px;background:white;
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
			  <div class="row" style="margin-top:20px;">
			  <div class="col-md-10 col-md-offset-1">
       					<section class="panel ">

								<div class="col-md-6" style="background:white;border:1px solid #cccccc;padding:0 !important;">
						 <div class="modal-header "  >
							  
							  <h4 class="modal-title"> 대분류 </h4>
						 </div>
						
                          <div class="panel-body">
                              <div class="adv-table">
								   <div class="col-md-8 col-md-offset-2" style="border:1px solid #cccccc;">

										<div class="row pad0 " style="border:1px solid #676767;">
											<div class=" pad0">
												<div class="col-md-12 col_label">IT·웹·통신</div>
											</div>
										</div>

										<div class="row pad0 " style="border:1px solid #676767;">
											<div class=" pad0">
												<div class="col-md-12 col_label1">건설업</div>
											</div>
										</div>
										<div class="row pad0 " style="border:1px solid #676767;">
											<div class=" pad0">
												<div class="col-md-12 col_label1">교육업</div>
											</div>
										</div>
										<div class="row pad0 " style="border:1px solid #676767;">
											<div class=" pad0">
												<div class="col-md-12 col_label1">기관·협회</div>
											</div>
										</div>
										<div class="row pad0 " style="border:1px solid #676767;">
											<div class=" pad0">
												<div class="col-md-12 col_label1">미디어·디자인</div>
											</div>
										</div>
										<div class="row pad0 " style="border:1px solid #676767;">
											<div class=" pad0">
												<div class="col-md-12 col_label1">서비스업</div>
											</div>
										</div>
										<div class="row pad0 " style="border:1px solid #676767;">
											<div class=" pad0">
												<div class="col-md-12 col_label1">은행·금융업</div>
											</div>
										</div>
										<div class="row pad0 " style="border:1px solid #676767;">
											<div class=" pad0">
												<div class="col-md-12 col_label1">의료·제약·복지</div>
											</div>
										</div>
										<div class="row pad0 " style="border:1px solid #676767;">
											<div class=" pad0">
												<div class="col-md-12 col_label1">제조·화학</div>
											</div>
										</div>
									
									
								  </div>
								  <p>&nbsp;</p>
                              </div>
                          </div>
						  </div>
                        <div class="col-md-6" style="background:white;border:1px solid #cccccc;padding:0 !important;">
						 <div class="modal-header "  >
							  
							  <h4 class="modal-title"> 중분류</h4>
						 </div>
						
                          <div class="panel-body">
                              <div class="adv-table">
                              
								  <div class="col-md-8 col-md-offset-2" style="border:1px solid #cccccc;">
										
										<div class="row pad0 " style="border:1px solid #676767;">
											<div class=" pad0">
												<div class="col-md-12 col_label">웹에이젼시</div>
												
											</div>
										</div>

											<div class="row pad0 " style="border:1px solid #676767;">
											<div class=" pad0">
												<div class="col-md-12 col_label">네트워크·통신·모바일</div>
												
											</div>
										</div>

											<div class="row pad0 " style="border:1px solid #676767;">
											<div class=" pad0">
												<div class="col-md-12 col_label">솔루션·SI·ERP·CRM</div>
												
											</div>
										</div>

											<div class="row pad0 " style="border:1px solid #676767;">
											<div class=" pad0">
												<div class="col-md-12 col_label">포털·인터넷·컨텐츠</div>
												
											</div>
										</div>

										<div class="row pad0 " style="border:1px solid #676767;">
											<div class=" pad0">
												<div class="col-md-12 col_label">하드웨어·장비</div>
												
											</div>
										</div>

											<div class="row pad0 " style="border:1px solid #676767;">
											<div class=" pad0">
												<div class="col-md-12 col_label">IT컨설팅</div>
												
											</div>
										</div>

											<div class="row pad0 " style="border:1px solid #676767;">
											<div class=" pad0">
												<div class="col-md-12 col_label">쇼핑몰·오픈마켓</div>
												
											</div>
										</div>
											<div class="row pad0 " style="border:1px solid #676767;">
											<div class=" pad0">
												<div class="col-md-12 col_label">정보보안·백신</div>
												
											</div>
										</div>
											<div class="row pad0 " style="border:1px solid #676767;">
											<div class=" pad0">
												<div class="col-md-12 col_label">게임</div>
												
											</div>
										</div>
								  </div>
								  <p>&nbsp;</p>
                              </div>
                          </div>
						  </div>
				
                      </section>
					 </div>
					 </div>

			<div class="row" style="margin-top:20px;">
				<div class="col-md-10 col-md-offset-1">
					<section class="panel">
					  <div class="panel-body">

						  <div class="col-sm-6">
							<div class="form-group bottom_border">
							  <div class="col-sm-6 control-label">
								  <input type="text" class="form-control" placeholder="IT/정보통신업">
							  </div>
							  <div class="col-md-1">
							  	<a class="btn btn-info" >수정</a>
							  </div>
							  <div class="col-md-1 " style="margin-left:10px;">
							  	<a class="btn btn-info" >추가</a>
							  </div>
						  </div>
						</div>
						<div class="col-sm-6">
							<div class="form-group bottom_border">
							  <div class="col-sm-6 control-label">
								  <input type="text" class="form-control" placeholder="IT/정보통신업">
							  </div>
							  <div class="col-md-1">
							  	<a class="btn btn-info" >수정</a>
							  </div>
							  <div class="col-md-1" style="margin-left:10px;">
							  	<a class="btn btn-info" >추가</a>
							  </div>
						  </div>
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

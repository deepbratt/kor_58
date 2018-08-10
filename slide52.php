
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keyword" content="">

    <title>Slide 52</title>
	<?php include("metalinks.php");?>
    <link href="css/demo_page.css" rel="stylesheet" />
    <link href="css/demo_table.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/DT_bootstrap.css" />
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
                            인재>인재 삭제요청
                          </header>
                          <div class="panel-body">
						    <h3 class="form-group">
								 인재 삭제요청
							</h3>
						  </div>
				  </section>
               </div>
            </div>
			

			<div class="row">
				  <div class="col-lg-12">
                      <section class="panel">
                          <div class="panel-body">
                              <div class="adv-table">
                                  <table class="display table table-bordered table-striped" id="dynamic-table">
                                      <thead>
                                      <tr>
										  <th>no</th>
                                          <th>삭제요청일</th>
                                          <th>요청자</th>
                                          <th class="numeric">성명/성별/출생년도</th>
                                          <th class="numeric">학교</th>
										  <th class="numeric">최종재직기업/직급</th>
										  <th class="numeric">경력키워드</th>
                                          <th class="numeric">이메일/연락처</th>
										  <th class="numeric">Action</th>
                                      </tr>
                                      </thead>
                                      <tbody>
                                      <tr>
                                          <td data-title="Code">3</td>
                                          <td data-title="Company">18-07-13</td>
                                          <td data-title="Price">김현웅</td>
                                          <td data-title="Change">김태령/여/1977</td>
										  <td data-title="Change">***대학교</td>
										  <td data-title="Change">황금에스티/차장</td>
										  <td data-title="Change">마케팅,B2B,기획운영</td>
										  <td data-title="Change"><a href="javascript:void(0);">yeowu@naver.com</a>010-2648-76782</td>
										  <td data-title="Change"><button class="btn btn-info">비활성화</button></td>
                                      </tr>

									   <tr>
                                          <td data-title="Code">2</td>
                                          <td data-title="Company">18-07-11</td>
                                          <td data-title="Price"></td>
                                          <td data-title="Change"></td>
										  <td data-title="Change"></td>
										  <td data-title="Change"></td>
										  <td data-title="Change"></td>
										  <td data-title="Change"></td>
										  <td data-title="Change"><button class="btn btn-info">활성화</button></td>
										  
                                      </tr>
									   <tr>
                                          <td data-title="Code">1</td>
                                          <td data-title="Company">18-07-10</td>
                                          <td data-title="Price"></td>
                                          <td data-title="Change"></td>
										  <td data-title="Change"></td>
										  <td data-title="Change"></td>
										  <td data-title="Change"></td>
										  <td data-title="Change"></td>
										  <td data-title="Change"><button class="btn btn-info">비활성화</button></td>										  
                                      </tr>
                                      </tbody>
                                  </table>
                              </div>
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
    <!--this page plugins-->
	<script src="js/jquery.js"></script>
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script src="js/dynamic_table_init.js"></script>
	<script type="text/javascript" language="javascript" src="js/jquery.dataTables.js"></script>
    <script type="text/javascript" src="js/DT_bootstrap.js"></script>
    <script src="js/respond.min.js" ></script>
  </body>
</html>

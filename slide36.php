
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keyword" content="">

    <title>Slide 36</title>
	<?php include("metalinks.php");?>
    <!--bootstrap switcher-->
    <link rel="stylesheet" type="text/css" href="css/bootstrap-switch.css" />
    <link rel="stylesheet" type="text/css" href="css/datepicker.css" />
    <link rel="stylesheet" type="text/css" href="css/datetimepicker.css" />
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
                             고객사>고객사 신규등록
                          </header>
                          <div class="panel-body">
						    <h3 class="form-group">
								고객사 신규등록
							</h3>
							<form class="form-horizontal tasi-form" method="POST">
							<header class="form-group bottom_border" style="font-size:1.5em;padding:15px;"> 1. 회사정보 </header>
							  <div class="col-sm-12">
								<div class="row">
									<div class="col-sm-6">
										 <div class="form-group bottom_border">
										  <label class="col-sm-2 control-label">*분류</label>
										  <div class="col-sm-6 control-label">
											  <select class="form-control m-bot15">
													<option value="" selected></option>
											  </select>
										  </div>
									  </div>
									</div>
									<div class="col-sm-6">
										 <div class="form-group bottom_border">
										  <label class="col-sm-2 control-label">*담당자</label>
										  <div class="col-sm-10 control-label">
											  <div class="input-group m-bot15">
												  <input type="text" class="form-control" vaue="강용오">
												  <span class="input-group-btn">
													<button type="button" class="btn btn-white"><i class="fa fa-search"></i></button>
												  </span>
											   </div>
										  </div>
									     </div>
									</div>
								</div>

								<div class="row">
									<div class="col-sm-6">
										 <div class="form-group bottom_border">
										  <label class="col-sm-2 control-label">*고객사명</label>
										  <div class="col-sm-6 control-label">
											  <div class="input-group m-bot15">
												  <input type="text" class="form-control" vaue="고객사명">
												  <span class="input-group-btn">
													<button type="button" class="btn btn-white"><i class="fa fa-search"></i></button>
												  </span>
											   </div>
										  </div>
										  <div class="col-sm-1 control-label">
											<button class="btn btn-info">중복체크</button>
										  </div>
									  </div>
									</div>
									<div class="col-sm-6">
										 <div class="form-group bottom_border">
										  <label class="col-sm-2 control-label">사업부</label>
										  <div class="col-sm-10 control-label">
												<input type="text" class="form-control">
										  </div>
									     </div>
									</div>
								</div>

								<div class="row" style="margin-bottom:15px;">
									<div class="col-sm-6 control-label">
										 <div class="form-group bottom_border">
										  <label class="col-sm-2 control-label">주소</label>
										  <div class="col-sm-10">
											<input type="text" class="form-control">
										  </div>
									  </div>
									</div>
									<div class="col-sm-4 control-label">
										 <div class="form-group bottom_border">
										 <label class="col-sm-3 control-label">우편번호</label>
										  <div class="col-sm-6">
											<input type="text" class="form-control">
										  </div>
									  </div>
									</div>
								</div>

								<div class="row" style="margin-bottom:15px;">
									<div class="col-sm-6 control-label">
										 <div class="form-group bottom_border">
										  <label class="col-sm-2 control-label">홈페이지</label>
										  <div class="col-sm-10">
											<input type="text" class="form-control">
										  </div>
									  </div>
									</div>
									<div class="col-sm-4 control-label">
										 <div class="form-group bottom_border">
										  <label class="col-sm-3 control-label">대표자</label>
										  <div class="col-sm-6">
											<input type="text" class="form-control">
										  </div>
									  </div>
									</div>
								</div>

								<div class="row" style="margin-bottom:15px;">
									<div class="col-sm-12">
										 <div class="form-group bottom_border">
										  <label class="col-sm-1 control-label">업종</label>
										  <div class="col-sm-1">
											<button class="btn btn-info">찾아보기</button>
										  </div>
										  <div class="col-sm-10">
											<input type="text" id="tagsinput" class="tagsinput" value="제조화학:전기전자제어 ">
										  </div>
									  </div>
									</div>
								</div>

								<div class="row">
									<div class="col-sm-6 control-label">
										 <div class="form-group bottom_border">
										  <label class="col-sm-2 control-label">사업영역</label>
										  <div class="col-sm-10">
											<input type="text" class="form-control">
										  </div>
									  </div>
									</div>
									<div class="col-sm-4 control-label">
										 <div class="form-group bottom_border">
										  <label class="col-sm-3 control-label">기업형태</label>
										  <div class="col-sm-6">
											  <select class="form-control m-bot15">
													<option value="" selected></option>
											  </select>
										  </div>
									  </div>
									</div>
								</div>

								<div class="row"  style="margin-bottom:15px;">
									<div class="col-sm-6 control-label">
										 <div class="form-group bottom_border">
										  <label class="col-sm-2 control-label">설립년도</label>
										  <div class="col-sm-10">
											<input type="text" class="form-control">
										  </div>
									  </div>
									</div>
									<div class="col-sm-4 control-label">
										 <div class="form-group bottom_border">
										  <label class="col-sm-3 control-label">경쟁사</label>
										  <div class="col-sm-6">
											  <input type="text" class="form-control">
										  </div>
									  </div>
									</div>
								</div>

								<div class="row">
									<div class="col-sm-6 control-label">
										 <div class="form-group bottom_border">
										  <label class="col-sm-2 control-label">직원수</label>
										  <div class="col-sm-10">
											<input type="text" class="form-control">
										  </div>
									  </div>
									</div>
									<div class="col-sm-4 control-label">
										 <div class="form-group bottom_border">
										  <label class="col-sm-3 control-label">영업경로</label>
										  <div class="col-sm-6">
											  <select class="form-control m-bot15">
													<option value="" selected></option>
											  </select>
										  </div>
									  </div>
									</div>
								</div>

								<div class="row">
									<div class="col-sm-12">
										<div class="form-group bottom_border">
										  <label class="col-sm-1 control-label">담당자</label>
										  <div class="col-sm-11 control-label">
											   <div class="input-group m-bot15">
												  <span class="input-group-btn">
													<button type="button" class="btn btn-info">찾아보기</button>
												  </span>
												  <input type="text" id="tagsinput" class="tagsinput" value="*회사소개, 복리후생, 기타  자료 복리후생.doc ">
											   </div>
										   </div>
										</div>
									</div>
							   </div>
								
								<div class="row">
									<div class="col-sm-12">
										<div class="form-group bottom_border">
										  <label class="col-sm-1 control-label">사업자등록증</label>
										  <div class="col-sm-11 control-label">
											   <div class="input-group m-bot15">
												  <span class="input-group-btn">
													<button type="button" class="btn btn-info">찾아보기</button>
												  </span>
												  <input type="text" id="tagsinput" class="tagsinput" value="사업자등록증.pdf">
											   </div>
										   </div>
										</div>
									</div>
							   </div>

								<div class="row">
									<div class="col-sm-12">
										<div class="form-group bottom_border">
										  <label class="col-sm-1 control-label">기타정보</label>
										  <div class="col-sm-11 control-label">
											<input type="text" id="tagsinput" class="tagsinput" value="관련 뉴스 링크 등 ">
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
          <!-- page end-->
          </section>
      </section>
      <!--main content end-->
      <!--footer start-->
     <?php include("footer.php");?>
      <!--footer end-->
  </section>
    <!--this page plugins-->
  <script src="js/jquery.js"></script>
  <script src="js/jquery.tagsinput.js"></script>
  <script src="js/bootstrap-switch.js"></script>
  <script src="js/form-component.js"></script>
  <!--select2-->
  </body>
</html>

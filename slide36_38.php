
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keyword" content="">

    <title>고객사 신규등록 화면</title>
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
			  <div class="row">
				<div class="col-md-12">
					<section class="panel">
						
                          <div class="panel-body">
						  
							<form class="form-horizontal tasi-form" method="POST">
							<header class="form-group bottom_border" style="font-size:1.5em;padding:15px;"> 2. 담당자 정보 </header>
							  <div class="col-sm-12">
							   <div class="row">
								   <div class="col-sm-12">
									  <div class="form-group bottom_border">
										  <label class="col-sm-1 control-label">*이름</label>
										  <div class="col-sm-3 control-label">
											  <input type="text" class="form-control">
										  </div>
										  <label class="col-sm-1 control-label">*이메일</label>
										  <div class="col-sm-3 control-label">
											  <input type="text" class="form-control">
										  </div>
										  <label class="col-sm-1 control-label">*핸드폰</label>
										  <div class="col-sm-3 control-label">
											  <input type="text" class="form-control">
										  </div>
									  </div>
									</div>
								</div>

								<div class="row">
								   <div class="col-sm-12">
									  <div class="form-group bottom_border">
										  <label class="col-sm-1 control-label">부서</label>
										  <div class="col-sm-2 control-label">
											  <input type="text" class="form-control">
										  </div>
										  <label class="col-sm-1 control-label">*사무실번호</label>
										  <div class="col-sm-2 control-label">
											  <input type="text" class="form-control">
										  </div>
										  <label class="col-sm-1 control-label">직책</label>
										  <div class="col-sm-2 control-label">
											  <input type="text" class="form-control">
										  </div>
										  <label class="col-sm-1 control-label">직급</label>
										  <div class="col-sm-2 control-label">
											  <input type="text" class="form-control">
										  </div>
									  </div>
									</div>
								</div>

								<div class="row">
								   <div class="col-sm-12">
									  <div class="form-group bottom_border">
										  <label class="col-sm-1 control-label">기타</label>
										  <div class="col-sm-11 control-label">
											  <input type="text" class="form-control" placeholder="담당자 성향 등 참고사항">
										  </div>
									  </div>
									</div>
								</div>
								
								<div class="row" style="margin-top:15px;">
									 <div class="col-sm-12">
									  <div class="form-group bottom_border text-center">
										  <button class="btn btn-info" type="submit">추가하기</button>
									  </div>
									 </div>
								</div>
								
								<div class="row"  style="margin-top:15px;">
									 <div class="col-sm-12">
										<div class="form-group bottom_border">
											<div class="adv-table editable-table ">
											  <div class="clearfix"></div>
											  <div class="space15"></div>
											  <div class="table-responsive">
											  <table class="table table-striped table-hover table-bordered" id="editable-sample">
												  <thead>
												  <tr>
													  <th>담당자</th>
													  <th>이름</th>
													  <th>이메일</th>
													  <th>핸드폰</th>
													  <th>부서</th>
													  <th>사무실번호</th>
													  <th>직책</th>
													  <th>직급</th>
													  <th>기타</th>
													  <th>Action</th>
												  </tr>
												  </thead>
												  <tbody>
												  <tr class="text-center">
													  <td>담당자1</td>
													  <td>이영일</td>
													  <td>0100000@jala.com</td>
													  <td>010-1234-5678</td>
													  <td>경영지원팀</td>
													  <td>02-123-4567</td>
													  <td>채용</td>
													  <td>대리</td>
													  <td></td>
													  <td>
														<div class="form-group bottom_border">
															  <button class="btn btn-info" type="submit">저장</button>
															  <button class="btn btn-default" type="submit">삭제</button>
														</div>
													  </td>
												  </tr>
												  <tr class="text-center">
													  <td>담당자2</td>
													  <td>이영이</td>
													  <td>0100001@jala.com</td>
													  <td>010-1234-5679</td>
													  <td>경영지원팀</td>
													  <td>02-123-4568</td>
													  <td>채용</td>
													  <td>과장</td>
													  <td></td>
													  <td>
														<div class="form-group bottom_border">
															  <button class="btn btn-info" type="submit">저장</button>
															  <button class="btn btn-default" type="submit">삭제</button>
														</div>
													  </td>
												  </tr>
												  </tbody>
											  </table>
											 </div>
										  </div>
									 </div>
								</div>
							  </div>
							</div>
							<header class="form-group bottom_border" style="font-size:1.5em;padding:15px;"> 3. 계약현황 </header>
							  <div class="col-sm-12">
							   <div class="row">
								   <div class="col-sm-4">
									  <div class="form-group bottom_border">
										  <label class="col-sm-3 control-label">*계약상태</label>
										  <div class="col-sm-9 control-label">
											  <select class="form-control m-bot15">
													<option value="영업중" selected>영업중</option>
											  </select>
										  </div>
									  </div>
									</div>
									<div class="col-sm-4"></div>
									<div class="col-sm-4">
									  <div class="form-group bottom_border">
										  <label class="col-sm-3 control-label">계약일</label>
										  <div class="col-sm-8 control-label">
											  <div data-date-viewmode="years" data-date-format="dd-mm-yyyy" data-date="12-02-2012"  class="input-append date dpYears">
												  <input type="text" readonly="" size="16" class="form-control">
													  <span class="input-group-btn add-on">
														<button class="btn btn-danger" type="button"><i class="fa fa-calendar"></i></button>
													  </span>
											  </div>
										  </div>
									  </div>
									</div>
								</div>

								<div class="row">
								   <div class="col-sm-4">
									  <div class="form-group bottom_border">
										  <label class="col-sm-3 control-label">결제조건</label>
										  <div class="col-sm-9 control-label">
											  <input type="text" class="form-control">
										  </div>
									  </div>
									</div>
									<div class="col-sm-4"></div>
									<div class="col-sm-4">
									  <div class="form-group bottom_border">
										  <label class="col-sm-3 control-label">보증기간</label>
										  <div class="col-sm-8 control-label">
											  <input type="text" class="form-control">
										  </div>
									  </div>
									</div>
								</div>

								<div class="row" style="margin-top:15px;">
								   <div class="col-sm-12">
									  <div class="form-group bottom_border" style="padding-bottom:0px;">
										  <label class="col-sm-1 control-label">요율</label>
										  <div class="col-sm-1 control-label" style="padding-right:0px;margin-right:0px;">
											  <input type="text" class="form-control" value="범위지정" readonly>
										  </div>
										  <div class="col-sm-1 control-label" style="padding-left:0px;margin-left:0px;">
											  <input type="text" class="form-control" value="범위미지정">
										  </div>
										  <div class="col-sm-2 control-label">
											  <input type="text" class="form-control">
										  </div>
										  <label class="col-sm-1 control-label" style="text-align: center;">~</label>
										  <div class="col-sm-2 control-label">
											  <input type="text" class="form-control">
										  </div>
										  <label class="col-sm-1 control-label" style="text-align: center;">만원</label>
										  <div class="col-sm-1 control-label">
											  <input type="text" class="form-control">
										  </div>
										  <label class="col-sm-1 control-label">%</label>
										  <div class="col-sm-1 control-label">
											  <button class="btn btn-info">요율추가</button>
										  </div>
									  </div>
									  <div class="col-sm-11">
										<div class="form-group bottom_border">
											<div class="col-sm-12 control-label" style="margin-left:90px;">
											  <input type="text" id="tagsinput" class="tagsinput" value="영어 : 비즈니스 업무가능  ,   중국어: 비즈니스 업무 가능">
										  </div>
										</div>
									  </div>
									</div>
								</div>
							
							   <div class="row" style="margin-top:15px;">
								   <div class="col-sm-12">
									  <div class="form-group bottom_border">
										  <label class="col-sm-1 control-label">계약서</label>
										  <div class="col-sm-11 control-label">
											  <div class="controls">
												  <div class="fileupload fileupload-new" data-provides="fileupload">
													<span class="btn btn-white btn-file">
													<span class="fileupload-new"><i class="fa fa-paper-clip"></i> 찾아보기</span>
													<span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
													<input type="file" class="default" />
													</span>
													  <span class="fileupload-preview" style="margin-left:5px;"></span>
													  <a href="#" class="close fileupload-exists" data-dismiss="fileupload" style="float: none; margin-left:5px;"></a>
												  </div>
											  </div>
										  </div>
									  </div>
									</div>
								</div>
								<div class="row">
								   <div class="col-sm-12">
									  <div class="form-group bottom_border">
										  <label class="col-sm-1 control-label">계약메모</label>
										  <div class="col-sm-11 control-label">
												<input type="text" class="form-control">
										  </div>
									  </div>
									</div>
								</div>
							</div>
							<div class="col-sm-12 text-center" style="padding-top:20px;">
							  <div class="row">
								<div class="form-group bottom_border">
									<button class="btn btn-info">등록</button>
									<button class="btn btn-default">고객사목록</button>
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

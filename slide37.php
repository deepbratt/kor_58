
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keyword" content="">

    <title>Slide 37</title>
	<?php include("metalinks.php");?>
    <!--bootstrap switcher-->
    <link rel="stylesheet" type="text/css" href="css/bootstrap-switch.css" />
    <link rel="stylesheet" type="text/css" href="css/datepicker.css" />
    <link rel="stylesheet" type="text/css" href="css/datetimepicker.css" />
	<link href="css/demo_page.css" rel="stylesheet" />
    <link href="css/demo_table.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/DT_bootstrap.css" />
	<link rel="stylesheet" type="text/css" href="css/bootstrap-fileupload.css" />
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
									  <div class="adv-table">
										  <table  class="display table table-bordered table-striped">
											  <thead>
											  <tr>
												  <th colspan="4">업종찾기</th>
											  </tr>
											  </thead>
											  <tbody>
											  <tr>
												<th rowspan="3" width="30%" class="text-center" >
													<label>서비스업</label>
												</th>
												  <td><label>호텔·여행·항공</label></td>
												  <td><label>외식업·식음료</label></td>
												  <td><label>웨딩·장례·이벤트</label></td>
											
											  </tr>
											   <tr>
												  <td><label>AS·카센터·주유</label></td>
												  <td><label>뷰티·미용</label></td>
												  <td><label>시설관리·경비·용역</label></td>
											  </tr>
											    <tr>
												  <td><label>레저·스포츠·여가</label></td>
												  <td><label>렌탈·임대</label></td>
												  <td><label>기타서비스업</label></td>
											  </tr>
											
											 
											  <tr>
												<th rowspan="4" width="30%" class="text-center" >
													<label>제조·화학</label>
												</th>
												  <td><label>전기·전자·제어</label></td>
												  <td><label>석유·화학·에너지</label></td>
												  <td><label>식품가공·개발</label></td>
											
											  </tr>
											   <tr>
												  <td><label>반도체·광학·LCD</label></td>
												  <td><label>섬유·의류·패션</label></td>
												  <td><label>환경</label></td>
											  </tr>
											    <tr>
												  <td><label>농업·어업·광업·임업</label></td>
												  <td><label>기계·설비·자동차</label></td>
												  <td><label>가구·목재·제지</label></td>
											  </tr>
											     <tr>
												  <td><label>조선·항공·우주</label></td>
												  <td><label>화장품·뷰티</label></td>
												  <td><label>금속·재료·철강·요업</label></td>
											  </tr>


											  <tr>
												<th rowspan="2" width="30%" class="text-center" >
													<label>의료·제약·복지</label>
												</th>
												  <td><label>의료(진료과목별)</label></td>
												  <td><label>의료(병원종류별)</label></td>
												  <td><label>제약·보건·바이오</label></td>
											
											  </tr>
											   <tr>
												  <td><label>사회복지</label></td>
												  <td><label></label></td>
												  <td><label></label></td>
											  </tr>
											  <tr>
												<th rowspan="2" width="30%" class="text-center" >
													<label>판매·유통</label>
												</th>
												  <td><label>판매(매장종류별)</label></td>
												  <td><label>판매(상품품목별)</label></td>
												  <td><label>유통·무역·상사</label></td>
											
											  </tr>
											   <tr>
												  <td><label>운송·운수·물류</label></td>
												  <td><label></label></td>
												  <td><label></label></td>
											  </tr>

											  <tr>
												<th rowspan="2" width="30%" class="text-center" >
													<label>교육업</label>
												</th>
												  <td><label>초중고·대학</label></td>
												  <td><label>유아·유치원</label></td>
												  <td><label>교재·학습지</label></td>
											
											  </tr>
											   <tr>
												  <td><label>학원·어학원</label></td>
												  <td><label>전문·기능학원</label></td>
												  <td><label></label></td>
											  </tr>

											  <tr>
												<th rowspan="2" width="30%" class="text-center" >
													<label>건설업</label>
												</th>
												  <td><label>건설·건축·토목·시공</label></td>
												  <td><label>실내·인테리어·조경</label></td>
												  <td><label>환경·설비</label></td>
											
											  </tr>
											   <tr>
												  <td><label>부동산·임대·중개</label></td>
												  <td><label></label></td>
												  <td><label></label></td>
											  </tr>

											  <tr>
												<th rowspan="3" width="30%" class="text-center" >
													<label>IT·웹·통신</label>
												</th>
												  <td><label>웹에이젼시</label></td>
												  <td><label>포털·인터넷·컨텐츠</label></td>
												  <td><label>쇼핑몰·오픈마켓</label></td>
											
											  </tr>
											   <tr>
												  <td><label>네트워크·통신·모바일</label></td>
												  <td><label>하드웨어·장비</label></td>
												  <td><label>정보보안·백신</label></td>
											  </tr>
											   <tr>
												  <td><label>솔루션·SI·ERP·CRM</label></td>
												  <td><label>IT컨설팅</label></td>
												  <td><label>게임</label></td>
											  </tr>

											<tr>
												<th rowspan="3" width="30%" class="text-center" >
													<label>미디어·디자인</label>
												</th>
												  <td><label>신문·잡지·언론사</label></td>
												  <td><label>방송사·케이블</label></td>
												  <td><label>연예·엔터테인먼트</label></td>
											
											  </tr>
											   <tr>
												  <td><label>광고·홍보·전시</label></td>
												  <td><label>영화·배급·음악</label></td>
												  <td><label>공연·예술·문화</label></td>
											  </tr>
											   <tr>
												  <td><label>출판·인쇄·사진</label></td>
												  <td><label>캐릭터·애니메이션</label></td>
												  <td><label>디자인·설계</label></td>
											  </tr>

											  <tr>
												<th rowspan="2" width="30%" class="text-center" >
													<label>은행·금융업</label>
												</th>
												  <td><label>은행·금융·저축</label></td>
												  <td><label>대출·캐피탈·여신</label></td>
												  <td><label>기타금융</label></td>
											
											  </tr>
											   <tr>
												  <td><label>증권·보험·카드</label></td>
												  <td><label></label></td>
												  <td><label></label></td>
											  </tr>

											  <tr>
												<th rowspan="2" width="30%" class="text-center" >
													<label>기관·협회</label>
												</th>
												  <td><label>정부·공공기관·공기업</label></td>
												  <td><label>협회·단체</label></td>
												  <td><label>법률·법무·특허</label></td>
											
											  </tr>
											   <tr>
												  <td><label>세무·회계</label></td>
												  <td><label>연구소·컨설팅·조사</label></td>
												  <td><label></label></td>
											  </tr>
											
									
											  
											  </tbody>
										  </table>
									  </div>
									  <div class="col-lg-offset-5 col-lg-7" style="margin-top:10px;">
                                          <button type="submit" class="btn btn-danger" style="padding-right:20px;padding-left:20px;">닫기</button>
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
  <script type="text/javascript" src="js/bootstrap-fileupload.js"></script>
  <script type="text/javascript" language="javascript" src="js/jquery.dataTables.js"></script>
  <script type="text/javascript" src="js/DT_bootstrap.js"></script>
  <script src="js/dynamic_table_init.js"></script>
  </body>
</html>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">
    <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Slide 7</title>
   <?php include("metalinks.php");?>
   <link href="css/table-responsive.css" rel="stylesheet" />
	   <!--  summernote -->
   <link href="css/yamm.css" rel="stylesheet">
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
                  <aside class="profile-info col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                             My Page> 내 프로필>프로필 상세
                          </header>
                          <div class="panel-body ">
                               <h3 class="form-group">
									프로필 상세
								</h3>
							<div class="col-md-12">
                              <div class="row">
								  <div class="col-md-6">
									  <div class="col-md-12">
										  <p><span>이름 </span>: 강용오</p>
									  </div>
									  <div class="col-md-12">
										  <p><span>회사 이메일 </span>: 0000@kycg.co.kr</p>
									  </div>
									  <div class="col-md-12">
										  <p><span>개인 이메일 </span>: 0000@naver.com</p>
									  </div>
									  <div class="col-md-12">
										  <p><span>생년월일</span>: 1969****</p>
									  </div>
									  <div class="col-md-12">
										  <p><span>연락처 </span>: 01048686088</p>
									  </div>
									  <div class="col-md-12">
										  <p><span>성별 </span>: 남자</p>
									  </div>
									  <div class="col-md-12">
										  <p><span>직급 </span>: 상무</p>
									  </div>
								  </div>
								  <div class="col-md-4 profile-nav pull-right">
									<section class="panel">
									  <div class="user-heading round" style="background:none !important; color:#000;padding:0px;">
										  <a href="#">
											  <img src="images/profile-avatar.jpg" alt="">
										  </a>
										  <h1>강용오</h1>
										  <p>0000@kycg.co.kr</p>
									  </div>
								  </section>
								</div>
							 </div>
                          </div>
                      </section>
                      <section>
                           <div class="row">
							  <div class="col-lg-12">
								  <section class="panel">
									  <header class="panel-heading">
										  2. 학력사항
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
												  </tr>
												  <tr>
													  <td data-title="Code">국내</td>
													  <td data-title="Company">고등학교</td>
													  <td data-title="Price">문영여자고등학교</td>
													  <td data-title="Change"></td>
													  <td data-title="Change %"></td>
													  <td data-title="Open"><input type="radio"></td>
												  </tr>
												  </tbody>
											  </table>
										  </section>
									  </div>
								  </section>
							  </div>
						  </div>
                      </section>
					  <section>
                           <div class="row">
							  <div class="col-lg-12">
								  <section class="panel">
									  <header class="panel-heading">
										  3. 경력사항
									  </header>
									  <div class="panel-body">
										  <section id="no-more-tables">
											  <table class="table table-bordered table-striped table-condensed cf">
												  <thead class="cf">
												  <tr>
													  <th>재직기업</th>
													  <th>이상네트웍스</th>
													  <th class="numeric">이상글로벌</th>
													  <th class="numeric">시스코시스템즈</th>
													  <th class="numeric">황금에스티</th>
													  <th class="numeric"></th>
												  </tr>
												  </thead>
												  <tbody>
												  <tr>
													  <td data-title="Code">전문분야</td>
													  <td data-title="Company" colspan="5">마케팅, 기획, 교육, 네트워킹 </td>
												  </tr>
												  <tr>
													  <td data-title="Code">상세경력</td>
													  <td data-title="Company" colspan="5"></td>
												  </tr>
												   <tr>
													  <td data-title="Code">자기소개</td>
													  <td data-title="Company" colspan="5"></td>
												  </tr>
												  </tbody>
											  </table>
										  </section>
									  </div>
								  </section>
							  </div>
						  </div>
                      </section>
					  <div class="form-group col-sm-12">
						  <div class="pull-right">
							  <a class="btn btn-info" data-toggle="modal" href="#enroll">수정</a>
							  <button class="btn btn-default" type="button">닫기</button>
						  </div>
					  </div>
                  </aside>
              </div>
			  <!-- MODAL Start -->
				<div class="modal fade modal-dialog-center " id="enroll" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				  <div class="modal-dialog ">
					  <div class="modal-content-wrap">
						  <div class="modal-content">
							  <div class="modal-header">
								  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
								  <h4 class="modal-title">프로필 등록 확인</h4>
							  </div>
							  <div class="modal-body">내 프로필을 수정하시겠습니까?.</div>
							  <div class="modal-footer">
								  <button data-dismiss="modal" class="btn btn-default" type="button">확인</button>
								  <button class="btn btn-warning" type="button"> 취소</button>
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

      <!-- Right Slidebar start -->
      <div class="sb-slidebar sb-right sb-style-overlay">
          <h5 class="side-title">Online Customers</h5>
          <ul class="quick-chat-list">
              <li class="online">
                  <div class="media">
                      <a href="#" class="pull-left media-thumb">
                          <img alt="" src="img/chat-avatar2.jpg" class="media-object">
                      </a>
                      <div class="media-body">
                          <strong>John Doe</strong>
                          <small>Dream Land, AU</small>
                      </div>
                  </div><!-- media -->
              </li>
              <li class="online">
                  <div class="media">
                      <a href="#" class="pull-left media-thumb">
                          <img alt="" src="img/chat-avatar.jpg" class="media-object">
                      </a>
                      <div class="media-body">
                          <div class="media-status">
                              <span class=" badge bg-important">3</span>
                          </div>
                          <strong>Jonathan Smith</strong>
                          <small>United States</small>
                      </div>
                  </div><!-- media -->
              </li>

              <li class="online">
                  <div class="media">
                      <a href="#" class="pull-left media-thumb">
                          <img alt="" src="img/pro-ac-1.png" class="media-object">
                      </a>
                      <div class="media-body">
                          <div class="media-status">
                              <span class=" badge bg-success">5</span>
                          </div>
                          <strong>Jane Doe</strong>
                          <small>ABC, USA</small>
                      </div>
                  </div><!-- media -->
              </li>
              <li class="online">
                  <div class="media">
                      <a href="#" class="pull-left media-thumb">
                          <img alt="" src="img/avatar1.jpg" class="media-object">
                      </a>
                      <div class="media-body">
                          <strong>Anjelina Joli</strong>
                          <small>Fockland, UK</small>
                      </div>
                  </div><!-- media -->
              </li>
              <li class="online">
                  <div class="media">
                      <a href="#" class="pull-left media-thumb">
                          <img alt="" src="img/mail-avatar.jpg" class="media-object">
                      </a>
                      <div class="media-body">
                          <div class="media-status">
                              <span class=" badge bg-warning">7</span>
                          </div>
                          <strong>Mr Tasi</strong>
                          <small>Dream Land, USA</small>
                      </div>
                  </div><!-- media -->
              </li>
          </ul>
          <h5 class="side-title"> pending Task</h5>
          <ul class="p-task tasks-bar">
              <li>
                  <a href="#">
                      <div class="task-info">
                          <div class="desc">Dashboard v1.3</div>
                          <div class="percent">40%</div>
                      </div>
                      <div class="progress progress-striped">
                          <div style="width: 40%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="40" role="progressbar" class="progress-bar progress-bar-success">
                              <span class="sr-only">40% Complete (success)</span>
                          </div>
                      </div>
                  </a>
              </li>
              <li>
                  <a href="#">
                      <div class="task-info">
                          <div class="desc">Database Update</div>
                          <div class="percent">60%</div>
                      </div>
                      <div class="progress progress-striped">
                          <div style="width: 60%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="60" role="progressbar" class="progress-bar progress-bar-warning">
                              <span class="sr-only">60% Complete (warning)</span>
                          </div>
                      </div>
                  </a>
              </li>
              <li>
                  <a href="#">
                      <div class="task-info">
                          <div class="desc">Iphone Development</div>
                          <div class="percent">87%</div>
                      </div>
                      <div class="progress progress-striped">
                          <div style="width: 87%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="20" role="progressbar" class="progress-bar progress-bar-info">
                              <span class="sr-only">87% Complete</span>
                          </div>
                      </div>
                  </a>
              </li>
              <li>
                  <a href="#">
                      <div class="task-info">
                          <div class="desc">Mobile App</div>
                          <div class="percent">33%</div>
                      </div>
                      <div class="progress progress-striped">
                          <div style="width: 33%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="80" role="progressbar" class="progress-bar progress-bar-danger">
                              <span class="sr-only">33% Complete (danger)</span>
                          </div>
                      </div>
                  </a>
              </li>
              <li>
                  <a href="#">
                      <div class="task-info">
                          <div class="desc">Dashboard v1.3</div>
                          <div class="percent">45%</div>
                      </div>
                      <div class="progress progress-striped active">
                          <div style="width: 45%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="45" role="progressbar" class="progress-bar">
                              <span class="sr-only">45% Complete</span>
                          </div>
                      </div>

                  </a>
              </li>
              <li class="external">
                  <a href="#">See All Tasks</a>
              </li>
          </ul>
      </div>
      <!-- Right Slidebar end -->

      <!--footer start-->
      <?php include("footer.php");?>
	    <script src="js/jquery.js"></script>

      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
  <script>

      //knob
      $(".knob").knob();

  </script>


  </body>
</html>

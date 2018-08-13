
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keyword" content="">

    <title>채용공고 신규등록 화면</title>
	<?php include("metalinks.php");?>
    <!--bootstrap switcher-->
    <link rel="stylesheet" type="text/css" href="css/bootstrap-switch.css" />
    <link rel="stylesheet" type="text/css" href="css/datepicker.css" />
    <link rel="stylesheet" type="text/css" href="css/datetimepicker.css" />
	<link href="css/yamm.css" rel="stylesheet">
	<link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="css/font-awesome.css" rel="stylesheet" />
      <!--right slidebar-->
    <link href="css/slidebars.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />
	<!-- Multiple File Upload -->
	 <!-- blueimp Gallery styles -->
      <link rel="stylesheet" href="http://blueimp.github.io/Gallery/css/blueimp-gallery.min.css">
      <!-- CSS to style the file input field as button and adjust the Bootstrap progress bars -->
      <link rel="stylesheet" href="css/jquery.fileupload.css">
      <link rel="stylesheet" href="css/jquery.fileupload-ui.css">
      <!-- CSS adjustments for browsers with JavaScript disabled -->
      <noscript>
          <link rel="stylesheet" href="css/jquery.fileupload-noscript.css">
      </noscript>
      <noscript>
          <link rel="stylesheet" href="css/jquery.fileupload-ui-noscript.css">
      </noscript>
	<!-- Ends -->
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
                             채용공고>채용공고목록>공고 신규등록
                          </header>
                          <div class="panel-body">
						    <h3 class="form-group">
								공고 신규등록
							</h3>
							<form class="form-horizontal tasi-form" method="POST">
							<header class="form-group bottom_border" style="font-size:1.5em;padding:15px;"> 1. 기본정보 </header>
							  <div class="col-sm-12">
								<div class="row">
									<div class="col-sm-6">
										 <div class="form-group bottom_border">
										  <label class="col-sm-2 control-label">*고객사</label>
										  <div class="col-sm-6 control-label">
											  <div class="input-group m-bot15">
												  <input type="text" class="form-control" value="고객사명 입력">
												  <span class="input-group-btn">
													<button type="button" class="btn btn-white"><i class="fa fa-search"></i></button>
												  </span>
											  </div>
										  </div>
									  </div>
									</div>
									<div class="col-sm-6">
										 <div class="form-group bottom_border">
										  <label class="col-sm-2 control-label">모집사유</label>
										  <div class="col-sm-10 control-label">
											  <input type="text" class="form-control">
										  </div>
									     </div>
									</div>
								</div>
							   <div class="row">
									<div class="col-sm-12">
										<div class="form-group bottom_border" style="margin-bottom:15px;padding-bottom:15px;">
										  <label class="col-sm-1 control-label">*채용제목</label>
										  <div class="col-sm-11 control-label">
											   <input type="text" class="form-control">
										  </div>
									  </div>
									</div>
							   </div>

							   <div class="row">
							    <div class="col-sm-6">
								  <div class="form-group bottom_border">
                                      <label class="col-sm-2 control-label">*경력사항</label>
                                      <div class="col-sm-2 control-label" style="padding-right:0px;">
										  <input type="text" class="form-control" value="신입">
									  </div>
									  <div class="col-sm-2 control-label" style="padding-right:0px;padding-left:0px;">
										  <input type="text" class="form-control" value="경력" readonly>
									  </div>
									  <div class="col-sm-2 control-label" style="padding-right:0px;padding-left:0px;">
										  <input type="text" class="form-control" placeholder="숫자입력">
									  </div>
									  <div class="col-sm-1 control-label">
										  <span style="font-size: 17px;">~</span>
									  </div>
									  <div class="col-sm-2 control-label" style="padding-right:0px;padding-left:0px;">
										  <input type="text" class="form-control" placeholder="숫자입력">
									  </div>
									  <div class="col-sm-1 control-label" style="padding-left:0px;">
										  <span>년</span>
									  </div>
                                  </div>

                                  <div class="form-group bottom_border">
                                      <label class="col-sm-2 control-label">직책</label>
                                      <div class="col-sm-10 control-label">
										  <select class="form-control m-bot15">
												<option value="" selected></option>
										  </select>
									  </div>
                                  </div>
                                   <div class="form-group bottom_border">
                                       <label class="col-sm-2 control-label">고용형태</label>
                                      <div class="col-sm-10 control-label">
										   <select class="form-control m-bot15">
												<option value="정규직" selected>정규직</option>
										  </select>
									  </div>
                                  </div>
                                 
								</div>

								<div class="col-sm-6">
									 <div class="form-group bottom_border">
										  <label class="col-sm-2 control-label">연봉</label>
										  <div class="col-sm-10 control-label">
											  <input type="text" class="form-control">
										  </div>
									  </div>

									  <div class="form-group bottom_border">
										  <label class="col-sm-2 control-label">직급</label>
										  <div class="col-sm-10 control-label">
											  <select class="form-control m-bot15">
												<option value="" selected></option>
											  </select>
										  </div>
									  </div>
									   <div class="form-group bottom_border">
										  <label class="col-sm-2 control-label">근무부서</label>
										  <div class="col-sm-10 control-label">
											  <input type="text" class="form-control">
										  </div>
									  </div>
									</div>
								</div>

								 <div class="row">
									<div class="col-sm-12">
										<div class="form-group bottom_border">
											  <label class="col-sm-1 control-label">직종</label>
											  <div class="col-sm-1 control-label">
												  <button class="btn btn-info" type="submit">찾아보기</button>
											  </div>
											  <div class="col-sm-10 control-label">
												  <input type="text" id="tagsinput" class="tagsinput">
											  </div>
										</div>
									</div>
							   </div>

							   <div class="row">
							    <div class="col-sm-6">
								  <div class="form-group bottom_border" style="margin-top:15px;">
                                      <label class="col-sm-2 control-label">성별</label>
                                      <div class="col-sm-3 control-label" style="padding-right:0px;">
										  <input type="text" class="form-control" value="무관">
									  </div>
									  <div class="col-sm-3 control-label" style="padding-right:0px;">
										  <input type="text" class="form-control" value="남자">
									  </div>
									  <div class="col-sm-3 control-label" style="padding-right:0px;">
										  <input type="text" class="form-control" value="여자" readonly>
									  </div>
                                  </div>

                                  <div class="form-group bottom_border">
                                      <label class="col-sm-2 control-label">나이</label>
                                      <div class="col-sm-2 control-label" style="padding-right:0px;">
										  <input type="text" class="form-control" value="무관">
									  </div>
									  <div class="col-sm-2 control-label" style="padding-right:0px;padding-left:0px;">
										  <input type="text" class="form-control" value="제한" readonly>
									  </div>
									  <div class="col-sm-2 control-label" style="padding-right:0px;padding-left:0px;">
										  <input type="text" class="form-control" placeholder="숫자입력">
									  </div>
									  <div class="col-sm-1 control-label">
										  <span style="font-size: 17px;">~</span>
									  </div>
									  <div class="col-sm-2 control-label" style="padding-right:0px;padding-left:0px;">
										  <input type="text" class="form-control" placeholder="숫자입력">
									  </div>
                                  </div>
								</div>

								<div class="col-sm-6">
									 <div class="form-group bottom_border"  style="margin-top:15px;">
										  <label class="col-sm-2 control-label">근무지</label>
										  <div class="col-sm-3 control-label"  style="padding-right:0px;">
											  <select class="form-control m-bot15">
												<option value="국내" selected>국내</option>
											  </select>
										  </div>
										  <div class="col-sm-3 control-label"  style="padding-right:0px;padding-left:0px;">
											  <input type="text" class="form-control">
										  </div>
										  <div class="col-sm-3 control-label" style="padding-left:0px;">
											  <input type="text" class="form-control">
										  </div>
									  </div>
									  <div class="form-group bottom_border">
										  <label class="col-sm-2 control-label">학력사항</label>
										  <div class="col-sm-3 control-label"  style="padding-right:0px;">
											  <input type="text" class="form-control" value="무관">
										  </div>
										  <div class="col-sm-3 control-label"  style="padding-right:0px;padding-left:0px;">
											  <input type="text" class="form-control" value="제한" readonly>
										  </div>
										  <div class="col-sm-3 control-label" style="padding-left:0px;">
											  <select class="form-control m-bot15">
												<option value="대학교졸업(4년)이상" selected>대학교졸업(4년)이상</option>
											  </select>
										  </div>
									  </div>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-12">
										<div class="form-group bottom_border">
											  <label class="col-sm-1 control-label">외국어</label>
											  <div class="col-sm-2 control-label">
												   <div class="input-group m-bot15">
													  <input type="text" class="form-control">
													  <span class="input-group-btn">
														<button type="button" class="btn btn-white"><i class="fa fa-search"></i></button>
													  </span>
												   </div>
											  </div>
											  <div class="col-sm-2 control-label">
												  <select class="form-control m-bot15">
														<option value="수준선택" selected>수준선택</option>
												  </select>
											  </div>
											  <div class="col-sm-1 control-label">
												  <button class="btn btn-info" type="submit">추가</button>
											  </div>
											  <div class="col-sm-6 control-label">
												  <input type="text" class="form-control">
											  </div>
										</div>
									</div>
							   </div>
							   <div class="row">
									<div class="col-sm-12">
										<div class="form-group bottom_border">
											  <label class="col-sm-1 control-label">접수기간</label>
											  <div class="col-sm-2 control-label">
												  <div data-date-viewmode="years" data-date-format="dd-mm-yyyy" data-date="12-02-2012"  class="input-append date dpYears">
													  <input type="text" readonly="" value="2018-07-01" size="16" class="form-control">
													  <span class="input-group-btn add-on">
														<button class="btn btn-danger" type="button"><i class="fa fa-calendar"></i></button>
													  </span>
												  </div>
											  </div>
											  <div class="col-sm-2 control-label">
												  <div data-date-viewmode="years" data-date-format="dd-mm-yyyy" data-date="12-02-2012"  class="input-append date dpYears">
													  <input type="text" readonly="" value="2018-07-31" size="16" class="form-control">
													  <span class="input-group-btn add-on">
														<button class="btn btn-danger" type="button"><i class="fa fa-calendar"></i></button>
													  </span>
												  </div>
											  </div>
											  <label class="col-sm-1 control-label" style="margin-left:20px;">채용시</label>
											  <div class="col-sm-4 control-label">
													<input value="1" type="radio" style="width:5%;height:1.5em;"/>
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
												  <input type="text" class="form-control" placeholder="강용오">
												  <span class="input-group-btn">
													<button type="button" class="btn btn-white"><i class="fa fa-search"></i></button>
												  </span>
											   </div>
										   </div>
										</div>
									</div>
							   </div>
							   <div class="row">
									<div class="col-sm-12">
										<div class="form-group bottom_border">
											  <label class="col-sm-1 control-label">파트너</label>
											  <div class="col-sm-2 control-label">
												  <select class="form-control m-bot15">
														<option value="비공개" selected>비공개</option>
												  </select>
											  </div>
											  <div class="col-sm-2 control-label">
												  <div class="input-group m-bot15">
													  <input type="text" class="form-control">
													  <span class="input-group-btn">
														<button type="button" class="btn btn-white"><i class="fa fa-search"></i></button>
													  </span>
												   </div>
											  </div>
											  <div class="col-sm-1 control-label">
												  <button class="btn btn-info" type="submit">추가</button>
											  </div>
											  <div class="col-sm-6 control-label">
												  <input type="text" id="tagsinput" class="tagsinput" value="김영민,김미영,조철수,이회림">
											  </div>
										</div>
									</div>
							   </div>
							   <div class="row">
									<div class="col-sm-12">
										<div class="form-group bottom_border">
										  <label class="col-sm-1 control-label">진행상태</label>
										  <div class="col-sm-2 control-label">
											  <select class="form-control m-bot15">
													<option value="진행중" selected>진행중</option>
											  </select>
										  </div>
										  <div class="col-sm-2 control-label">
											  <select class="form-control m-bot15">
													<option value="추천가능" selected>추천가능</option>
											  </select>
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
							<header class="form-group bottom_border" style="font-size:1.5em;padding:15px;"> 2. 채용정보 상세 </header>
							  <div class="col-sm-12">
							   <div class="row">
							    <div class="col-sm-12">
                                  <div class="form-group bottom_border">
                                      <label class="col-sm-3 control-label">담당직무</label>
                                      <div class="col-sm-9">
                                         <textarea class="form-control" placeholder="Position Summary"></textarea>
                                      </div>
                                  </div>
								  <div class="form-group bottom_border">
                                      <label class="col-sm-3 control-label">R&R</label>
                                      <div class="col-sm-9">
                                           <textarea class="form-control" placeholder="Role & Responsibilty"></textarea>
                                      </div>
                                  </div>
								  <div class="form-group bottom_border">
                                      <label class="col-sm-3 control-label">자격조건</label>
                                      <div class="col-sm-9">
										<textarea class="form-control" placeholder="Detailed Skills & Experience & Preference"></textarea>
                                      </div>
                                  </div>
								  <div class="form-group bottom_border">
                                      <label class="col-sm-3 control-label">보고라인</label>
                                      <div class="col-sm-9">
										<textarea class="form-control" placeholder="Reporting Line"></textarea>
                                      </div>
                                  </div>
								  <div class="form-group bottom_border">
								  	<label class="col-sm-3 control-label">진행절차</label>
									<div class="col-sm-9">
										<textarea class="form-control" placeholder="이력서 접수-서류전형-1차면접-2차면접-건강검진-연봉협상-입사"></textarea>
                                    </div>
                                  </div>

								  <div class="form-group bottom_border">
								    <label class="col-sm-3 control-label">제출서류</label>
                                      <div class="col-sm-9">
										<textarea class="form-control" placeholder="이력서, 자기소개서 (국영문) "></textarea>
                                    </div>
                                  </div>

								  <div class="form-group bottom_border">
								      <label class="col-sm-3 control-label">참고자료</label>
									  <div class="col-sm-9">

											  <div class="row fileupload-buttonbar">
												  <div class="col-lg-7">
													<span class="btn btn-success fileinput-button">
														<i class="glyphicon glyphicon-plus"></i>
														<span> 문서찾기 </span>
														<input type="file" name="files[]" multiple>
													</span>
													<p>*채용관련 참고 자료: 회사자료, 보상자료, 복리 후생 등 </p>
												  </div>
												  
												  
											  </div>
											  <!-- The table listing the files available for upload/download -->
											  <table role="presentation" class="table table-striped">
												  <tbody class="files">
												  </tbody>
											  </table>
										  </form>
										  <div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls" data-filter=":even">
											  <div class="slides">
											  </div>
											  <h3 class="title"></h3>
											  <a class="prev">‹</a>
											  <a class="next">›</a>
											  <a class="close">×</a>
											  <a class="play-pause"></a>
											  <ol class="indicator">
											  </ol>
										  </div>
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
							<header class="form-group bottom_border" style="font-size:1.5em;padding:15px;"> 3. 채용관련 외부 비공개 내용 </header>
							  <div class="col-sm-12">
							   <div class="row">
							    <div class="col-sm-12">
                                 <div class="col-sm-12">
									<textarea class="form-control" placeholder=" "></textarea>
								</div>
								<div class="col-sm-12 text-center" style="padding-top:15px;">
									<button type="button" class="btn btn-info"> 등록 </button>
									<button type="button" class="btn btn-default"> 채용공고목록 </button>
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
  <script type="text/javascript" src="js/bootstrap-datepicker.js"></script>
  <script type="text/javascript" src="js/bootstrap-datetimepicker.js"></script>

  <script type="text/javascript" src="js/ckeditor.js"></script>
  <script src="js/jquery.tagsinput.js"></script>
  <!-- script for this page -->
  <!--bootstrap swither-->
  <script src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/bootstrap-inputmask.min.js"></script>

  <script type="text/javascript" src="js/wysihtml5-0.3.0.js"></script>
  <script type="text/javascript" src="js/bootstrap-wysihtml5.js"></script>

  <!--select2-->
  <script src="js/advanced-form-components.js"></script>
  
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

  <!--Multiuple File Uploader-->
  <!-- The jQuery UI widget factory, can be omitted if jQuery UI is already included -->
  <script src="js/jquery.ui.widget.js"></script>
  <!-- The Templates plugin is included to render the upload/download listings -->
  <script src="//blueimp.github.io/JavaScript-Templates/js/tmpl.min.js"></script>
  <!-- The Load Image plugin is included for the preview images and image resizing functionality -->
  <script src="//blueimp.github.io/JavaScript-Load-Image/js/load-image.min.js"></script>
  <!-- The Canvas to Blob plugin is included for image resizing functionality -->
  <script src="//blueimp.github.io/JavaScript-Canvas-to-Blob/js/canvas-to-blob.min.js"></script>

  <!-- blueimp Gallery script -->
  <script src="//blueimp.github.io/Gallery/js/jquery.blueimp-gallery.min.js"></script>
  <!-- The Iframe Transport is required for browsers without support for XHR file uploads -->
  <script src="js/jquery.iframe-transport.js"></script>
  <!-- The basic File Upload plugin -->
  <script src="js/jquery.fileupload.js"></script>
  <!-- The File Upload processing plugin -->
  <script src="js/jquery.fileupload-process.js"></script>
  <!-- The File Upload image preview & resize plugin -->
  <script src="js/jquery.fileupload-image.js"></script>
  <!-- The File Upload audio preview plugin -->
  <script src="js/jquery.fileupload-audio.js"></script>
  <!-- The File Upload video preview plugin -->
  <script src="js/jquery.fileupload-video.js"></script>
  <!-- The File Upload validation plugin -->
  <script src="js/jquery.fileupload-validate.js"></script>
  <!-- The File Upload user interface plugin -->
  <script src="js/jquery.fileupload-ui.js"></script>
  <!-- The main application script -->
  <script src="js/main.js"></script>
  <!-- The XDomainRequest Transport is included for cross-domain file deletion for IE 8 and IE 9 -->
  <!--[if (gte IE 8)&(lt IE 10)]>
  <script src="assets/file-uploader/js/cors/jquery.xdr-transport.js"></script>
  <![endif]-->

  <!-- The template to display files available for upload -->
  <script id="template-upload" type="text/x-tmpl">
      {% for (var i=0, file; file=o.files[i]; i++) { %}
      <tr class="template-upload fade">
          <td>
              <span class="preview"></span>
          </td>
          <td>
              <p class="name">{%=file.name%}</p>
              <strong class="error text-danger"></strong>
          </td>
          <td>
              <p class="size">Processing...</p>
              <div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0"><div class="progress-bar progress-bar-success" style="width:0%;"></div></div>
          </td>
          <td>
              {% if (!i && !o.options.autoUpload) { %}
              <button class="btn btn-primary start" disabled>
                  <i class="glyphicon glyphicon-upload"></i>
                  <span>Start</span>
              </button>
              {% } %}
              {% if (!i) { %}
              <button class="btn btn-warning cancel">
                  <i class="glyphicon glyphicon-ban-circle"></i>
                  <span>Cancel</span>
              </button>
              {% } %}
          </td>
      </tr>
      {% } %}
  </script>
  <!-- The template to display files available for download -->
  <script id="template-download" type="text/x-tmpl">
      {% for (var i=0, file; file=o.files[i]; i++) { %}
      <tr class="template-download fade">
          <td>
            <span class="preview">
                {% if (file.thumbnail_url) { %}
                    <a href="{%=file.url%}" title="{%=file.name%}" download="{%=file.name%}" data-gallery><img src="{%=file.thumbnail_url%}"></a>
                {% } %}
            </span>
          </td>
          <td>
              <p class="name">
                  {% if (file.url) { %}
                  <a href="{%=file.url%}" title="{%=file.name%}" download="{%=file.name%}" {%=file.thumbnail_url?'data-gallery':''%}>{%=file.name%}</a>
                  {% } else { %}
                  <span>{%=file.name%}</span>
                  {% } %}
              </p>
              {% if (file.error) { %}
              <div><span class="label label-danger">Error</span> {%=file.error%}</div>
              {% } %}
          </td>
          <td>
              <span class="size">{%=o.formatFileSize(file.size)%}</span>
          </td>
          <td>
              {% if (file.deleteUrl) { %}
              <button class="btn btn-danger delete" data-type="{%=file.deleteType%}" data-url="{%=file.deleteUrl%}"{% if (file.deleteWithCredentials) { %} data-xhr-fields='{"withCredentials":true}'{% } %}>
              <i class="glyphicon glyphicon-trash"></i>
              <span>Delete</span>
              </button>
              <input type="checkbox" name="delete" value="1" class="toggle">
              {% } else { %}
              <button class="btn btn-warning cancel">
                  <i class="glyphicon glyphicon-ban-circle"></i>
                  <span>Cancel</span>
              </button>
              {% } %}
          </td>
      </tr>
      {% } %}
  </script>
  </body>
</html>

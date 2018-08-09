<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keyword" content="">

    <title>Slide 16</title>
	<?php include("metalinks.php");?>
    <!--  summernote -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap-switch.css" />
	<!-- Bootstrap core CSS -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap-wysihtml5.css" />
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
                          <div class="panel-body">
							<form class="form-horizontal tasi-form" method="POST">
							<header class="form-group bottom_border" style="font-size:1.5em;padding:15px;"> 2. 채용정보 상세 </header>
							  <div class="col-sm-12">
							   <div class="row">
							    <div class="col-sm-12">
                                  <div class="form-group bottom_border">
                                      <label class="col-sm-3 control-label">*핵심 키워드</label>
                                      <div class="col-sm-2">
                                          <input type="text" class="form-control" placeholder="입력후 엔터">
                                      </div>
									  <div class="col-sm-7">
                                          <input type="text" id="tagsinput" class="tagsinput" value="해외경력    , 중국어 실력,">
                                      </div>
                                  </div>
								  <div class="form-group bottom_border">
                                      <label class="col-sm-3 control-label">현재해외근무</label>
                                      <div class="col-sm-1">
                                          <div class="make-switch">
											  <input type="checkbox" checked>
										  </div>
                                      </div>
									  <div class="col-sm-4">
                                          <div class="input-group m-bot15">
											  <input type="text" class="form-control" placeholder="국가">
											  <span class="input-group-btn">
												<button type="button" class="btn btn-white"><i class="fa fa-search"></i></button>
											  </span>
										  </div>
                                      </div>
                                  </div>
								  <div class="form-group bottom_border">
                                      <label class="col-sm-3 control-label">해외경력</label>
                                      <div class="col-sm-1">
                                          <div class="make-switch">
											  <input type="checkbox" checked>
										  </div>
                                      </div>
									  <div class="col-sm-3">
                                          <div class="input-group m-bot15">
											  <input type="text" class="form-control" placeholder="국가">
											  <span class="input-group-btn">
												<button type="button" class="btn btn-white"><i class="fa fa-search"></i></button>
											  </span>
										  </div>
                                      </div>
									  <div class="col-sm-1">
                                          <input type="text" class="form-control">
                                      </div>
									  <div class="col-sm-1">
									    <div class="row">
											<label class="col-sm-2 control-label">년</label>
											<div class="col-sm-6">
												<button class="btn btn-info" type="submit">추가</button>
											</div>
										</div>
                                      </div>
									  <div class="col-sm-3">
                                           <input type="text" id="tagsinput" class="tagsinput" value="중국 3년">
                                      </div>
                                  </div>
								  <div class="form-group bottom_border">
                                      <label class="col-sm-3 control-label">*직종</label>
                                      <div class="col-sm-2">
                                          <button class="btn btn-info" type="submit">찾아보기</button>
                                      </div>
									  <div class="col-sm-7">
                                          <input type="text" id="tagsinput" class="tagsinput" value="IT인터넷 >웹개발    ,   웹IT인터넷>기획·PM">
                                      </div>
                                  </div>
								  <div class="form-group bottom_border">
								  	<label class="col-sm-3 control-label">경력기간</label>
									<div class="col-sm-6">
										<div class="row">
											<div class="col-sm-2">
											  <input type="text" class="form-control" placeholder="숫자">
										    </div>
										    <label class="col-sm-1 control-label">년</label>
											<div class="col-sm-2">
												 <input type="text" class="form-control" placeholder="숫자">
										    </div>
										    <label class="col-sm-2 control-label">개월</label>
										</div>
									</div>
									<div class="col-sm-3">
										<div class="row">
											<label class="col-sm-6 control-label">이직횟수</label>
											<div class="col-sm-6">
											  <input type="text" class="form-control">
										    </div>
										</div>
									</div>
                                  </div>
								  <div class="form-group bottom_border">
								    <label class="col-sm-3 control-label">재직기업</label>
                                      <div class="col-sm-3">
                                          <input type="text" class="form-control" placeholder="입력후 엔터">
										  <p class="help-block">최*근 재직기업 순으로 입력해 주세요</p>
                                      </div>
									  <div class="col-sm-6">
                                          <input type="text" id="tagsinput" class="tagsinput" value="삼성전자,삼성SDS">
                                      </div>
                                  </div>
								  <div class="form-group bottom_border">
								      <label class="col-sm-3 control-label">핵심역량</label>
                                      <div class="col-sm-3">
                                          <input type="text" class="form-control" placeholder="입력 후 엔터">
                                      </div>
									  <div class="col-sm-9" style="margin-left:322px;">
                                          <textarea class="form-control"></textarea>
                                      </div>
                                  </div>
								   <div class="form-group bottom_border">
								      <label class="col-sm-3 control-label">*상세경력</label>
                                      <div class="col-sm-9">
                                          <textarea class="wysihtml5 form-control" rows="10"></textarea>
                                      </div>
                                  </div>
								  <div class="form-group bottom_border">
								      <label class="col-sm-3 control-label">경력기술서</label>
									  <div class="col-sm-9">
                                          <textarea class="form-control"></textarea>
                                      </div>
                                  </div>
								  <div class="form-group bottom_border">
								      <label class="col-sm-3 control-label">경력사항외</label>
									  <div class="col-sm-9">
                                          <textarea class="form-control"></textarea>
                                      </div>
                                  </div>
								  <div class="form-group bottom_border">
								      <label class="col-sm-3 control-label">이력서</label>
									  <div class="col-sm-9">
                                          <form id="fileupload" action="//jquery-file-upload.appspot.com/" method="POST" enctype="multipart/form-data">
											  <!-- Redirect browsers with JavaScript disabled to the origin page -->
											  <noscript>
												  <input type="hidden" name="redirect" value="http://blueimp.github.io/jQuery-File-Upload/">
											  </noscript>
											  <!-- The fileupload-buttonbar contains buttons to add/delete files and start/cancel the upload -->
											  <div class="row fileupload-buttonbar">
												  <div class="col-lg-7">
													  <!-- The fileinput-button span is used to style the file input field as button -->
													<span class="btn btn-success fileinput-button">
													<i class="glyphicon glyphicon-plus"></i>
													<span>Add files...</span>
													<input type="file" name="files[]" multiple>
													</span>
													  <button type="submit" class="btn btn-primary start">
														  <i class="glyphicon glyphicon-upload"></i>
														  <span>Start upload</span>
													  </button>
													  <button type="reset" class="btn btn-warning cancel">
														  <i class="glyphicon glyphicon-ban-circle"></i>
														  <span>Cancel upload</span>
													  </button>
													  <button type="button" class="btn btn-danger delete">
														  <i class="glyphicon glyphicon-trash"></i>
														  <span>Delete</span>
													  </button>
													  <input type="checkbox" class="toggle">
													  <!-- The global file processing state -->
													  <span class="fileupload-process"></span>
												  </div>
												  <!-- The global progress state -->
												  <div class="col-lg-5 fileupload-progress fade">
													  <!-- The global progress bar -->
													  <div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100">
														  <div class="progress-bar progress-bar-success" style="width:0%;">
														  </div>
													  </div>
													  <!-- The extended global progress state -->
													  <div class="progress-extended">
														  &nbsp;
													  </div>
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
  <!--custom tagsinput-->
  <script type="text/javascript" src="js/ckeditor.js"></script>
  <script src="js/jquery.tagsinput.js"></script>
  <!-- script for this page -->
  <script src="js/form-component.js"></script>
  <!--bootstrap swither-->
  <script src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/bootstrap-inputmask.min.js"></script>
  <!-- Script in pages -->
  <script src="js/bootstrap-switch.js"></script>

  <script type="text/javascript" src="js/wysihtml5-0.3.0.js"></script>
  <script type="text/javascript" src="js/bootstrap-wysihtml5.js"></script>
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

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
													<p>*Word, Excel, PDF, PowerPoint, Image</p>
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
								  
								  <div class="form-group bottom_border">
								    <label class="col-sm-3 control-label">3. 채용관련 외부 비공개 내용</label>
                                      <div class="col-sm-9">
										<textarea class="form-control" placeholder=" "></textarea>
                                    </div>
                                  </div>
									
						
									<div class="col-sm-12 control-label center">
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

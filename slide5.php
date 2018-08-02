
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keyword" content="">

    <title>Slide 5</title>
	<?php include("metalinks.php");?>
    <link href="css/table-responsive.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap-fileupload.css" />
    <!--bootstrap switcher-->
    <link rel="stylesheet" type="text/css" href="css/bootstrap-switch.css" />
    <!-- switchery-->
    <link rel="stylesheet" type="text/css" href="css/switchery.css" />
    <!--select 2-->
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
                             My Page >
                          </header>
                          <div class="panel-body">
                              <form class="form-horizontal tasi-form" method="POST">
							  <div class="col-sm-12">
							   <div class="row">
							    <div class="col-sm-6">
								  <div class="form-group bottom_border">
                                      <label class="col-sm-2 col-sm-2 control-label">Default</label>
                                      <div class="col-sm-10">
                                          <input type="text" class="form-control" readonly>
                                      </div>
                                  </div>
								  <div class="form-group bottom_border">
                                      <label class="col-sm-2 col-sm-2 control-label">Default</label>
                                      <div class="col-sm-10">
                                          <input type="text" class="form-control" readonly>
                                      </div>
                                  </div>

                                  <div class="form-group bottom_border">
                                      <label class="col-sm-2 col-sm-2 control-label">Default</label>
                                      <div class="col-sm-10">
                                          <input type="text" class="form-control">
                                      </div>
                                  </div>
                                   <div class="form-group bottom_border">
                                      <label class="col-sm-2 col-sm-2 control-label">Default</label>
                                      <div class="col-sm-10">
                                          <input type="text" class="form-control">
                                      </div>
                                  </div>
                                   <div class="form-group bottom_border">
                                      <label class="col-sm-2 col-sm-2 control-label">Default</label>
                                      <div class="col-sm-10">
                                          <input type="text" class="form-control">
                                      </div>
                                  </div>

								  <div class="form-group bottom_border">
                                      <label class="col-sm-2 col-sm-2 control-label">Default</label>
                                      <div class="col-sm-10">
                                          <div class="make-switch">
											  <input type="checkbox" checked>
										  </div>
                                      </div>
                                  </div>

								</div>

								<div class="col-sm-6">
									
										<div class="form-group last bottom_border">
                                          <label class="control-label col-md-3">Image Upload</label>
                                          <div class="col-md-9">
                                              <div class="fileupload fileupload-new" data-provides="fileupload">
                                                  <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                                      <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt="" />
                                                  </div>
                                                  <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                                  <div>
                                                   <span class="btn btn-white btn-file">
                                                   <span class="fileupload-new"><i class="fa fa-paper-clip"></i> Select image</span>
                                                   <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                                                   <input type="file" class="default" />
                                                   </span>
                                                      <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload"><i class="fa fa-trash"></i> Remove</a>
                                                  </div>
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

			  <!-- page start-->
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                              No More Tables
                          </header>
                          <div class="panel-body">
                              <section id="no-more-tables">
                                  <table class="table table-bordered table-striped table-condensed cf">
                                      <thead class="cf">
                                      <tr>
                                          <th>Code</th>
                                          <th>Company</th>
                                          <th class="numeric">Price</th>
                                          <th class="numeric">Change</th>
                                          <th class="numeric">Change %</th>
                                          <th class="numeric">Open</th>
                                          <th class="numeric">High</th>
                                          <th class="numeric">Low</th>
                                          <th class="numeric">Volume</th>
                                      </tr>
                                      </thead>
                                      <tbody>
                                      <tr>
                                          <td data-title="Code">AAC</td>
                                          <td data-title="Company">AUSTRALIAN AGRICULTURAL COMPANY LIMITED.</td>
                                          <td class="numeric" data-title="Price">$1.38</td>
                                          <td class="numeric" data-title="Change">-0.01</td>
                                          <td class="numeric" data-title="Change %">-0.36%</td>
                                          <td class="numeric" data-title="Open">$1.39</td>
                                          <td class="numeric" data-title="High">$1.39</td>
                                          <td class="numeric" data-title="Low">$1.38</td>
                                          <td class="numeric" data-title="Volume">9,395</td>
                                      </tr>
                                      <tr>
                                          <td data-title="Code">AAD</td>
                                          <td data-title="Company">ARDENT LEISURE GROUP</td>
                                          <td class="numeric" data-title="Price">$1.15</td>
                                          <td class="numeric" data-title="Change">  +0.02</td>
                                          <td class="numeric" data-title="Change %">1.32%</td>
                                          <td class="numeric" data-title="Open">$1.14</td>
                                          <td class="numeric" data-title="High">$1.15</td>
                                          <td class="numeric" data-title="Low">$1.13</td>
                                          <td class="numeric" data-title="Volume">56,431</td>
                                      </tr>
                                      <tr>
                                          <td data-title="Code">AAX</td>
                                          <td data-title="Company">AUSENCO LIMITED</td>
                                          <td class="numeric" data-title="Price">$4.00</td>
                                          <td class="numeric" data-title="Change">-0.04</td>
                                          <td class="numeric" data-title="Change %">-0.99%</td>
                                          <td class="numeric" data-title="Open">$4.01</td>
                                          <td class="numeric" data-title="High">$4.05</td>
                                          <td class="numeric" data-title="Low">$4.00</td>
                                          <td class="numeric" data-title="Volume">90,641</td>
                                      </tr>
                                      <tr>
                                          <td data-title="Code">ABC</td>
                                          <td data-title="Company">ADELAIDE BRIGHTON LIMITED</td>
                                          <td class="numeric" data-title="Price">$3.00</td>
                                          <td class="numeric" data-title="Change">  +0.06</td>
                                          <td class="numeric" data-title="Change %">2.04%</td>
                                          <td class="numeric" data-title="Open">$2.98</td>
                                          <td class="numeric" data-title="High">$3.00</td>
                                          <td class="numeric" data-title="Low">$2.96</td>
                                          <td class="numeric" data-title="Volume">862,518</td>
                                      </tr>
                                      <tr>
                                          <td data-title="Code">ABP</td>
                                          <td data-title="Company">ABACUS PROPERTY GROUP</td>
                                          <td class="numeric" data-title="Price">$1.91</td>
                                          <td class="numeric" data-title="Change">0.00</td>
                                          <td class="numeric" data-title="Change %">0.00%</td>
                                          <td class="numeric" data-title="Open">$1.92</td>
                                          <td class="numeric" data-title="High">$1.93</td>
                                          <td class="numeric" data-title="Low">$1.90</td>
                                          <td class="numeric" data-title="Volume">595,701</td>
                                      </tr>
                                      <tr>
                                          <td data-title="Code">ABY</td>
                                          <td data-title="Company">ADITYA BIRLA MINERALS LIMITED</td>
                                          <td class="numeric" data-title="Price">$0.77</td>
                                          <td class="numeric" data-title="Change">  +0.02</td>
                                          <td class="numeric" data-title="Change %">2.00%</td>
                                          <td class="numeric" data-title="Open">$0.76</td>
                                          <td class="numeric" data-title="High">$0.77</td>
                                          <td class="numeric" data-title="Low">$0.76</td>
                                          <td class="numeric" data-title="Volume">54,567</td>
                                      </tr>
                                      <tr>
                                          <td data-title="Code">ACR</td>
                                          <td data-title="Company">ACRUX LIMITED</td>
                                          <td class="numeric" data-title="Price">$3.71</td>
                                          <td class="numeric" data-title="Change">  +0.01</td>
                                          <td class="numeric" data-title="Change %">0.14%</td>
                                          <td class="numeric" data-title="Open">$3.70</td>
                                          <td class="numeric" data-title="High">$3.72</td>
                                          <td class="numeric" data-title="Low">$3.68</td>
                                          <td class="numeric" data-title="Volume">191,373</td>
                                      </tr>
                                      <tr>
                                          <td data-title="Code">ADU</td>
                                          <td data-title="Company">ADAMUS RESOURCES LIMITED</td>
                                          <td class="numeric" data-title="Price">$0.72</td>
                                          <td class="numeric" data-title="Change">0.00</td>
                                          <td class="numeric" data-title="Change %">0.00%</td>
                                          <td class="numeric" data-title="Open">$0.73</td>
                                          <td class="numeric" data-title="High">$0.74</td>
                                          <td class="numeric" data-title="Low">$0.72</td>
                                          <td class="numeric" data-title="Volume">8,602,291</td>
                                      </tr>
                                      <tr>
                                          <td data-title="Code">AGG</td>
                                          <td data-title="Company">ANGLOGOLD ASHANTI LIMITED</td>
                                          <td class="numeric" data-title="Price">$7.81</td>
                                          <td class="numeric" data-title="Change">-0.22</td>
                                          <td class="numeric" data-title="Change %">-2.74%</td>
                                          <td class="numeric" data-title="Open">$7.82</td>
                                          <td class="numeric" data-title="High">$7.82</td>
                                          <td class="numeric" data-title="Low">$7.81</td>
                                          <td class="numeric" data-title="Volume">148</td>
                                      </tr>
                                      <tr>
                                          <td data-title="Code">AGK</td>
                                          <td data-title="Company">AGL ENERGY LIMITED</td>
                                          <td class="numeric" data-title="Price">$13.82</td>
                                          <td class="numeric" data-title="Change">  +0.02</td>
                                          <td class="numeric" data-title="Change %">0.14%</td>
                                          <td class="numeric" data-title="Open">$13.83</td>
                                          <td class="numeric" data-title="High">$13.83</td>
                                          <td class="numeric" data-title="Low">$13.67</td>
                                          <td class="numeric" data-title="Volume">846,403</td>
                                      </tr>
                                      <tr>
                                          <td data-title="Code">AGO</td>
                                          <td data-title="Company">ATLAS IRON LIMITED</td>
                                          <td class="numeric" data-title="Price">$3.17</td>
                                          <td class="numeric" data-title="Change">-0.02</td>
                                          <td class="numeric" data-title="Change %">-0.47%</td>
                                          <td class="numeric" data-title="Open">$3.11</td>
                                          <td class="numeric" data-title="High">$3.22</td>
                                          <td class="numeric" data-title="Low">$3.10</td>
                                          <td class="numeric" data-title="Volume">5,416,303</td>
                                      </tr>
                                      </tbody>
                                  </table>
                              </section>
                          </div>
                      </section>
                  </div>
              </div>
              <!-- page end-->

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
  
    <!--this page plugins-->

  <script type="text/javascript" src="js/bootstrap-fileupload.js"></script>
  <!--bootstrap-switch-->
  <script src="js/bootstrap-switch.js"></script>
  <!--bootstrap-switch-->
  <!--bootstrap swither-->
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

  </body>
</html>

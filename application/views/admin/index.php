<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="Mosaddek">
        <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
        <link rel="shortcut icon" href="img/favicon.png">

        <title>FlatLab - Flat & Responsive Bootstrap Admin Template</title>

        <!-- Bootstrap core CSS -->
        <link href="<?php echo base_url() . 'assets/admin/' ?>css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo base_url() . 'assets/admin/' ?>css/bootstrap-reset.css" rel="stylesheet">
        <!--external css-->
        <link href="<?php echo base_url() . 'assets/admin/' ?>assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/admin/' ?>assets/nestable/jquery.nestable.css" />
        <link href="<?php echo base_url() . 'assets/admin/' ?>assets/advanced-datatable/css/demo_page.css" rel="stylesheet" />
        <link href="<?php echo base_url() . 'assets/admin/' ?>assets/advanced-datatable/css/demo_table.css" rel="stylesheet" />
        <link rel="stylesheet" href="<?php echo base_url() . 'assets/admin/' ?>css/owl.carousel.css" type="text/css">
        <!-- Custom styles for this template -->
        <link href="<?php echo base_url() . 'assets/admin/' ?>css/style.css" rel="stylesheet">
        <link href="<?php echo base_url() . 'assets/admin/' ?>css/style-responsive.css" rel="stylesheet" />

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
        <!--[if lt IE 9]>
          <script src="js/html5shiv.js"></script>
          <script src="js/respond.min.js"></script>
        <![endif]-->
    </head>

    <body>

        <section id="container" >
            <!--header start-->
            <?php $this->load->view('admin/tile/header') ?>
            <!--header end-->
            <!--sidebar start-->
            <aside>
                <div id="sidebar"  class="nav-collapse ">
                    <!-- sidebar menu start-->
                    <?php $this->load->view('admin/tile/sidebar') ?>
                    <!-- sidebar menu end-->
                </div>
            </aside>
            <!--sidebar end-->
            <!--main content start-->
            <section id="main-content">
                <section class="wrapper">
                    <?php
                    if (!empty($page_content)) {
                        $this->load->view($page_content);
                    }
                    ?>
                </section>
            </section>
            <!--main content end-->
            <!--footer start-->
            <?php $this->load->view('admin/tile/footer') ?>
            <!--footer end-->
        </section>

        <!-- js placed at the end of the document so the pages load faster -->
        <script src="<?php echo base_url() . 'assets/admin/' ?>js/jquery.js"></script>
        <script src="<?php echo base_url() . 'assets/admin/' ?>js/jquery-1.8.3.min.js"></script>
        <script src="<?php echo base_url() . 'assets/admin/' ?>js/bootstrap.min.js"></script>

        <script src="<?php echo base_url() . 'assets/admin/' ?>js/jquery.scrollTo.min.js"></script>
        <script src="<?php echo base_url() . 'assets/admin/' ?>js/jquery.nicescroll.js" type="text/javascript"></script>
        <script src="<?php echo base_url() . 'assets/admin/' ?>js/jquery.sparkline.js" type="text/javascript"></script>

        <script src="<?php echo base_url() . 'assets/admin/' ?>assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
        <script src="<?php echo base_url() . 'assets/admin/' ?>assets/advanced-datatable/js/jquery.dataTables.js"></script>
        <script src="<?php echo base_url() . 'assets/admin/' ?>assets/nestable/jquery.nestable.js"></script>
        <script type="text/javascript" src="<?php echo base_url() . 'assets/admin/' ?>assets/ckeditor/ckeditor.js"></script>

        <script src="<?php echo base_url() . 'assets/admin/' ?>js/owl.carousel.js" ></script>
        <script src="<?php echo base_url() . 'assets/admin/' ?>js/jquery.customSelect.min.js" ></script>
        <script src="<?php echo base_url() . 'assets/admin/' ?>js/respond.min.js" ></script>

        <script class="include" type="text/javascript" src="<?php echo base_url() . 'assets/admin/' ?>js/jquery.dcjqaccordion.2.7.js"></script>

        <!--common script for all pages-->
        <script src="<?php echo base_url() . 'assets/admin/' ?>js/common-scripts.js"></script>

        <!--script for this page-->
        <script src="<?php echo base_url() . 'assets/admin/' ?>js/sparkline-chart.js"></script>
        <script src="<?php echo base_url() . 'assets/admin/' ?>js/easy-pie-chart.js"></script>
        <script src="<?php echo base_url() . 'assets/admin/' ?>js/count.js"></script>

        <script type="text/javascript" language="javascript" class="init">

            $(document).ready(function() {
                $("#owl-demo").owlCarousel({
                    navigation: true,
                    slideSpeed: 300,
                    paginationSpeed: 400,
                    singleItem: true,
                    autoPlay: true

                });

                $('#example').dataTable({
                });

                $('#select-all').click(function(event) {
                    $(':checkbox').each(function() {
                        this.checked = true;
                    });
                });
                $('#unselect-all').click(function(event) {
                    $(':checkbox').each(function() {
                        this.checked = false;
                    });
                });
            });

            //custom select box

            $(function() {
                $('select.styled').customSelect();
            });

        </script>
        
        <script type="text/javascript">
            $(document).ready(function() {
                $('.form-horizontal select[name="inpTingkat"]').change(function() {
                    $('.form-horizontal select[name="inpTingkat"] option:selected').each(function() {
                        if ($(this).val() == "propinsi") {
                            $(".bx").hide();
                            $(".prm_1").show();
                        }
                        if ($(this).val() == "kabupaten / kota") {
                            $(".bx").hide();
                            $(".prm_2").show();
                        }
                        if ($(this).val() == "kecamatan") {
                            $(".bx").hide();
                            $(".prm_3").show();
                        }
                        if ($(this).val() == "kelurahan") {
                            $(".bx").hide();
                            $(".prm_4").show();
                        }
                        if ($(this).val() == "desa") {
                            $(".bx").hide();
                            $(".prm_5").show();
                        }
                    });
                }).change();
            });
        </script>

        <script type="text/javascript">
            /* Formating function for row details */
            function fnFormatDetails(oTable, nTr)
            {
                var aData = oTable.fnGetData(nTr);
                var sOut = '<table cellpadding="5" cellspacing="0" border="0" style="padding-left:50px;">';
                sOut += '<tr><td>Rendering engine:</td><td>' + aData[1] + ' ' + aData[4] + '</td></tr>';
                sOut += '<tr><td>Link to source:</td><td>Could provide a link here</td></tr>';
                sOut += '<tr><td>Extra info:</td><td>And any further details here (images etc)</td></tr>';
                sOut += '</table>';

                return sOut;
            }

            $(document).ready(function() {
                /*
                 * Insert a 'details' column to the table
                 */
                var nCloneTh = document.createElement('th');
                var nCloneTd = document.createElement('td');
                nCloneTd.innerHTML = '<img src="<?php echo base_url() . 'assets/admin/' ?>assets/advanced-datatable/images/details_open.png">';
                nCloneTd.className = "center";

                $('#hidden-table-info thead tr').each(function() {
                    this.insertBefore(nCloneTh, this.childNodes[0]);
                });

                $('#hidden-table-info tbody tr').each(function() {
                    this.insertBefore(nCloneTd.cloneNode(true), this.childNodes[0]);
                });

                /*
                 * Initialse DataTables, with no sorting on the 'details' column
                 */
                var oTable = $('#hidden-table-info').dataTable({
                    "aoColumnDefs": [
                        {"bSortable": false, "aTargets": [0]}
                    ],
                    "aaSorting": [[1, 'asc']]
                });

                /* Add event listener for opening and closing details
                 * Note that the indicator for showing which row is open is not controlled by DataTables,
                 * rather it is done here
                 */
                $('#hidden-table-info tbody td img').live('click', function() {
                    var nTr = $(this).parents('tr')[0];
                    if (oTable.fnIsOpen(nTr))
                    {
                        /* This row is already open - close it */
                        this.src = "<?php echo base_url() . 'assets/admin/' ?>assets/advanced-datatable/images/details_open.png";
                        oTable.fnClose(nTr);
                    }
                    else
                    {
                        /* Open this row */
                        this.src = "<?php echo base_url() . 'assets/admin/' ?>assets/advanced-datatable/images/details_close.png";
                        oTable.fnOpen(nTr, fnFormatDetails(oTable, nTr), 'details');
                    }
                });
            });
        </script>

    </body>

</html>

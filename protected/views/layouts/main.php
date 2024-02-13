<!DOCTYPE html>
<style>
        
           #mainnemu ul li a    
           {
            color: black;
        }
        .nav > li > a {
            color: black;
            display: inline-block;
            padding: 10px;
            text-decoration: none;
        }
        .nav > li > a:hover {
            background-color: #f0f0f0;
        }
        .navbar-nav > li {
            float: left;
        }
        .navbar-nav {
            float: left;
        }
        .dropdown-menu > li > a {
            color: black;
            display: block;
        }
        .dropdown-menu > li > a:hover {
            background-color: #f0f0f0;
        }
             .navbar-nav > li > a {
            color: black !important; /* Set the text color to black */
        }
        .navbar-nav > li > a:hover {
            background-color: #f0f0f0;
        }
        .dropdown-menu > li > a {
            color: black !important; /* Set the text color to black */
        }
        
        
    </style>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="language" content="en" />
    <title><?php echo CHtml::encode($this->pageTitle); ?></title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- DataTables CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
    <!--[if lt IE 8]>
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
    <![endif]-->
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

    <!-- Bootstrap JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
    <!-- DataTables JS -->
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>

    <!-- Custom JavaScript -->
    <script src="<?php echo Yii::app()->baseUrl; ?>/AjaxFiles/customProperties.js"></script>
    <script src="<?php echo Yii::app()->baseUrl; ?>/AjaxFiles/texttypeproperties.js"></script>
<!--    <script src="<?php echo Yii::app()->baseUrl; ?>/AjaxFiles/effectScripts.js"></script>-->
    <script src="<?php echo Yii::app()->baseUrl; ?>/AjaxFiles/applyReportTheme.js"></script>
<!--    <script src="<?php echo Yii::app()->baseUrl; ?>/AjaxFiles/ApplythemeonformId.js"></script>
    <script src="<?php echo Yii::app()->baseUrl; ?>/AjaxFiles/applytheme.js"></script>
    <script src="<?php echo Yii::app()->baseUrl; ?>/AjaxFiles/ApplyCSStoElements.js"></script>-->
    <script src="<?php echo Yii::app()->baseUrl; ?>/AjaxFiles/themeingReport.js"></script>
             <script src="<?php echo Yii::app()->baseUrl; ?>/AjaxFiles/applyStyleToFormElement.js"></script>

    <script src="<?php echo Yii::app()->baseUrl; ?>/AjaxFiles/datatable.js"></script>
    <script src="<?php echo Yii::app()->baseUrl; ?>/AjaxFiles/reportScript.js"></script>
</head>
    
<body>
    <div class="container" id="page">
        <div id="header">
            <div id="logo"><?php echo CHtml::encode(Yii::app()->name); ?></div>
        </div><!-- header -->

        <!-- Main Menu -->
        <div id="mainmenu">
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <ul class="nav navbar-nav">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Test <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="index.php?r=departments/create">Departments</a></li>
                                <li><a href="index.php?r=courses/create">Courses</a></li>
                                <li><a href="index.php?r=courseType/create">Course Type</a></li>
                                <li><a href="index.php?r=studentInformation/create">Student Information</a></li>
                                <li><a href="index.php?r=faculty/create">Faculty</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Report <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="index.php?r=report/index">Report</a></li>
                                <li><a href="index.php?r=themeForReport/reportTheme">Create Theme for Report</a></li>
                                <li><a href="index.php?r=reportThemeMapping/create">Apply Theme to Report</a></li>
                                <li><a href="index.php?r=reportFunctionMapping/create">Report Function Map</a></li>
                                <li><a href="index.php?r=report/testReport">Testing</a></li>
                                <li><a href="index.php?r=studentinformation/reportTest">Student Report</a></li>
                                <li><a href="index.php?r=courses/reportTest">Course Report</a></li>
                            </ul>
                        </li>
                        <li><a href="index.php?r=themes/cssinput">Create Theme</a></li>
                        <li><a href="index.php?r=currenttheme/update&id=1">Apply Theme</a></li>
                        <li><a href="index.php?r=formthememapping/create">Specific Page Theme</a></li>
                        <li><a href="index.php?r=formFieldCsspropertyValueMapping/create">Element CSS Properties</a></li>
                        <li><a href="index.php?r=effects/create">Apply Effect</a></li>
                        <li><a href="index.php?r=scriptCode/index">Effect Script</a></li>
                    </ul>
                </div>
            </nav>
        </div><!-- mainmenu -->

        <?php if(isset($this->breadcrumbs)):?>
            <?php $this->widget('zii.widgets.CBreadcrumbs', array(
                'links'=>$this->breadcrumbs,
            )); ?><!-- breadcrumbs -->
        <?php endif?>

        <?php echo $content; ?>

        <div class="clear"></div>

        <div id="footer">
            Copyright &copy; <?php echo date('Y'); ?> by My Company.<br/>
            All Rights Reserved.<br/>
            <?php echo Yii::powered(); ?>
        </div><!-- footer -->
    </div><!-- page -->
</body>
</html>

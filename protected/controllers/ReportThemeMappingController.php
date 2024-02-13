<?php

class ReportThemeMappingController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update', 'applyThemeReport','testReport'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new ReportThemeMapping;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['ReportThemeMapping']))
		{
			$model->attributes=$_POST['ReportThemeMapping'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['ReportThemeMapping']))
		{
			$model->attributes=$_POST['ReportThemeMapping'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('ReportThemeMapping');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new ReportThemeMapping('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['ReportThemeMapping']))
			$model->attributes=$_GET['ReportThemeMapping'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return ReportThemeMapping the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=ReportThemeMapping::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param ReportThemeMapping $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='report-theme-mapping-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
        
    public function actionApplyThemeReport()
{
//    $controllerId = "report";
//    $actionId = "testReport";
//    
        $controllerId = isset($_GET['controller']) ? $_GET['controller'] : null;
            $actionId = isset($_GET['action']) ? $_GET['action'] : null;
        
    $applicationForm = ApplicationForms::model()->findByAttributes(['controller' => $controllerId, 'action' => $actionId]);
    
    if ($applicationForm != null) {
        $mappedReportTheme = ReportThemeMapping::model()->findByAttributes(['application_forms_id' => $applicationForm->id]);
        
        if ($mappedReportTheme != null) {
            $reportId = $mappedReportTheme->report_id;
            $mappedTheme = $mappedReportTheme->theme_ID;
            
            $criteria = new CDbCriteria;
            $criteria->addCondition('reference_id = :reference_id');
            $criteria->params[':reference_id'] = $mappedTheme;
            
            $themeOfThemes = ThemeForReport::model()->findAll($criteria);
            
            if (!empty($themeOfThemes)) {
                foreach ($themeOfThemes as $themeOfTheme) {
                    $elementId = $themeOfTheme->element_id;
                    $cssPropertiesId = $themeOfTheme->css_property_id;
                    $value = $themeOfTheme->value;

                    $elementTable = Elements::model()->findByPk(['id' => $elementId]);
                    $element = $elementTable->element;

                    $cssPropertyTable = CssProperties::model()->findByPk(['id' => $cssPropertiesId]);
                    $cssProperty = $cssPropertyTable->property_name;

                    // Check if the element is "report-container" or "report-table" and add the dot accordingly
                    $elementSelector = in_array($element, ['report-container', 'report-table']) ? ".$element" : $element;

                    // Apply the CSS rule to your report
                    echo "$elementSelector { $cssProperty: $value !important; }\n";
                }
            } else {
                echo "Theme Not Found";
            }
        } else {
            echo "No Theme Mapped with Page and Reports";
        }
    } else {
        echo "ApplicationForms not found for controller: $controllerId, action: $actionId";
    }
}

public function actiontestReport(){
    
    $this->render("testreport");
}
}

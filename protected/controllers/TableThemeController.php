<?php

class TableThemeController extends Controller
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
				'actions'=>array('create','update','applyThemeToReport','manage'),
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
		$model=new TableTheme;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['TableTheme']))
		{
			$model->attributes=$_POST['TableTheme'];
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

		if(isset($_POST['TableTheme']))
		{
			$model->attributes=$_POST['TableTheme'];
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
		$dataProvider=new CActiveDataProvider('TableTheme');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new TableTheme('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['TableTheme']))
			$model->attributes=$_GET['TableTheme'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return TableTheme the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=TableTheme::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param TableTheme $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='table-theme-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
        public function actionApplyThemeToReport(){
            
            $controllerId = isset($_GET['controller']) ? $_GET['controller'] : null;
            $actionId = isset($_GET['action']) ? $_GET['action'] : null;

//             $controllerId = "faculty";
//            $actionId = "create";
            // Find the ApplicationForms model that matches the current controller and action
            $applicationForm = ApplicationForms::model()->findByAttributes(['controller' => $controllerId, 'action' => $actionId]);
           
            
            if (!$applicationForm) {
                // Handle the case where ApplicationForms model is not found
                echo "ApplicationForms not found for controller: $controllerId, action: $actionId";
                return;
    }
    $pageId = $applicationForm->id;
//    print_r($pageId);
//            die();
if ($pageId) {
    $mappedReportTheme = ReportTheme::model()->findByAttributes(['application_forms_id' => $pageId]);

    if ($mappedReportTheme) {
        $report_id = $mappedReportTheme->report_name;

        // Fetch corresponding records from table_theme based on report_id
        $tableThemes = TableTheme::model()->findAllByAttributes(['report_id' => $report_id]);

        if ($tableThemes) {
            $cssString = array(); // Initialize an array to store CSS rules
            
            foreach ($tableThemes as $tableTheme) {
                $report_element = $tableTheme->report_element;
                $css_property = $tableTheme->css_property;
                $value = $tableTheme->value;

                // Add the CSS rule to the array
    $cssString[] = "$report_element { $css_property: $value !important; }";
            }

            // Output the CSS string
            echo implode("\n", $cssString);
        } else {
            echo "No records found in TableTheme for report_id: $report_id";
        }
    } else {
        echo "No matching ReportTheme found for application_forms_id: $pageId";
    }
}

            
            
        }
        
   public function actionManage() {
    $reportData = TableTheme::model()->findAll();

    $this->render('manage', array('tableThemes' => $reportData));
}
 

}

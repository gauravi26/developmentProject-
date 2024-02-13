<?php

class ReportFunctionParameterValueMappingController extends Controller
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
				'actions'=>array('create','update','reportFunctionParameterCalling'),
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
		$model=new ReportFunctionParameterValueMapping;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['ReportFunctionParameterValueMapping']))
		{
			$model->attributes=$_POST['ReportFunctionParameterValueMapping'];
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

		if(isset($_POST['ReportFunctionParameterValueMapping']))
		{
			$model->attributes=$_POST['ReportFunctionParameterValueMapping'];
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
		$dataProvider=new CActiveDataProvider('ReportFunctionParameterValueMapping');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new ReportFunctionParameterValueMapping('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['ReportFunctionParameterValueMapping']))
			$model->attributes=$_GET['ReportFunctionParameterValueMapping'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return ReportFunctionParameterValueMapping the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=ReportFunctionParameterValueMapping::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param ReportFunctionParameterValueMapping $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='report-function-parameter-value-mapping-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
        
        
        //*********Function to call Report Script Function with Parameter Value *********//
        //Pass report_function_mapping_id to fetch values mapped for each PARAMETERS
        
        //pass id  and function
        public function actionReportFunctionParameterCalling() {
//    $reportFunctionMappingId = 3;
    
    // Fetch function to call based on report_function_mapping_id
    $reportFunctionModel = ReportFunctionMapping::model()->findByPk($reportFunctionMappingId);
    
    // Check if the mapping exists
    if ($reportFunctionModel !== null) {
        $functionToCall = $reportFunctionModel->fetched_function_to_call;
        $functionId = $reportFunctionModel->function_library_id;
        
        // Fetch function name to call from function_library
        $functionLibraryModel = FunctionLibrary::model()->findByPk($functionId);
        
        // Check if the function library model exists
        if ($functionLibraryModel !== null) {
            $functionName = $functionLibraryModel->function_name;
            
            // Fetch parameters and values 
            // Fetch parameters name for the given function 
            $functionArgumentMapModels = FunctionArgumentMap::model()->findAllByAttributes(array('function_library_id' => $functionId));
            
            // Prepare an array to hold parameter values
            $functionParameterValueArray = array();
            
          // Populate the parameter values array
            foreach ($functionArgumentMapModels as $argumentMapModel) {
                // Assuming 'argument' is the attribute name for parameter names
                $parameterName = $argumentMapModel->argument;

                // Fetch corresponding value from ReportFunctionParameterValueMapping
                $functionParameterValue = ReportFunctionParameterValueMapping::model()->findByAttributes(array(
                    'report_function_mapping_id' => $reportFunctionMappingId,
                    'function_argument_map_id' => $argumentMapModel->id
                ));

                if ($functionParameterValue !== null) {
                    // Assuming 'value' is the attribute name for parameter values
                    // Add quotes around each parameter value
                    $functionParameterValueArray[] = "'" . $functionParameterValue->value . "'";
                } else {
                    // Handle case when parameter value is not found
                    // You may choose to skip the parameter or throw an error
                }
            }

            
            // Construct the function calling line
            $functionCallingLine = "$functionName(" . implode(",", $functionParameterValueArray) . ");";
            
            // Append the function calling line to the existing function
            $functionToCall .= $functionCallingLine;
            
            // Now you have the complete function call string
            // You can execute it using eval(), but be cautious with this approach
            print_r($functionToCall);
            die();
        } else {
            // Handle case when function library model is not found
            // Maybe log an error or handle it according to your application logic
        }
    } else {
        // Handle case when report function mapping model is not found
        // Maybe log an error or handle it according to your application logic
    }
}


}

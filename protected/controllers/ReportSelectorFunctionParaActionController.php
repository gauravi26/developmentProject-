<?php

class ReportSelectorFunctionParaActionController extends Controller
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
				'actions'=>array('create','update','applyfunctionAction','query'),
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
		$model=new ReportSelectorFunctionParaAction;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['ReportSelectorFunctionParaAction']))
		{
			$model->attributes=$_POST['ReportSelectorFunctionParaAction'];
//                       $scriptToCall =  $this->scriptToCall($model);
                       $model->script_to_call = $this->scriptToCall($model);
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}
        //***************************Building Script to Call Function********************//
        
        private function fetchFunctionAction($model){
            
    $reportColumn = $model ->report_column;
    $functionId   = $model -> function_library_id;
//   Handling multiple parameters of function
    $functionPara = explode(',', $model->function_library_parameter);
    $formattedParams = [];

    foreach ($functionPara as $param) {
        // Check if it's numeric
        if (is_numeric($param)) {
            $formattedParams[] = $param;
        } else {
            // If it's a string, wrap it in single quotes
            $formattedParams[] = "'" . $param . "'";
        }
    }

    $functionPara = '[' . implode(',', $formattedParams) . ']';

    $actionId     = $model-> action_id;
    $functionName = FunctionLibrary::model()->findByPk($functionId)->function_name;
    $functionSyntax = FunctionLibrary::model()->findByPk($functionId)->syntax;
    $actionName = ActionLibrary::model()->findByPk($actionId)->action_name;
    $actionSyntax   = ActionLibrary::model()->findByPk($actionId)->syntax;
   
    $functionActionSyntax = $functionSyntax. "\n" .$actionSyntax;
    
    return [
        'reportColumn'=>$reportColumn,
        'functionPara'=>$functionPara,
        'functionName' => $functionName,
        'functionActionSyntax' => $functionActionSyntax,
        'actionName' => $actionName,
    ];
            
        }
        private function scriptToCall($model) {
   
   // Call fetchFunctionAction
    $functionActionDetails = $this->fetchFunctionAction($model);
   
    // Extract values from the returned array
    $reportColumn = $functionActionDetails['reportColumn'];
    $functionPara = $functionActionDetails['functionPara'];
    $functionName = $functionActionDetails['functionName'];
    $functionActionSyntax = $functionActionDetails['functionActionSyntax'];
    $actionName = $functionActionDetails['actionName'];
    
   $actionParameter = []; // Initialize the array

// Append the string element to the array
$actionParameter[] = '$actionParameter';

foreach ($actionParameter as $param) {
    // Check if it's numeric
    if (is_numeric($param)) {
        $actionParameterStr[] = $param;
    } else {
        // If it's a string, wrap it in single quotes
        $actionParameterStr[] = "'" . $param . "'";
    }
}

$actionParameter = implode(',', $actionParameterStr) ; // Implode the array

       $selector = $this->fetchSelector($model);
       if($selector != null){
       
    
        
     $selector = str_replace('column_Name', $reportColumn, $selector);
     $selector = str_replace('functionParameterValue', $functionPara, $selector);
//     print_r($selector);
//
//    die();
     $selector = str_replace('function_Name', $functionName, $selector);

    $selector = $functionActionSyntax." ".$selector;
       
       
$executionCode = "targetColumnNames.forEach(function(columnName) {
    var data = fetchData({ selectorType: selectorType, selectorValue: columnName });
    if (data !== null) {
        data.values.forEach(function(value, index) {
            var functionResult = conditionFunction(value, functionParameter);
            if (functionResult == true) {
                console.log(functionResult);
                var element = data.elements[index];
                ".$actionName."(element, ".$actionParameter.");
            } else {
                var element = data.elements[index];
                applyColorStyle(element, 'red');
            }
        });
    } else {
        console.log(\"Unable to fetch values for the '\" + columnName + \"' column or no values in the column.\");
    }
});";

$executionCode = nl2br($executionCode);

$scriptToCall = $selector."  ".$executionCode;
//print_r($scriptToCall);
//
//die();
return $scriptToCall;

}else {
    
    echo "Selector not found";
}


   }
 
private function fetchSelector($model){
    
    // Check if report_column is not empty/null
if (!empty($model->report_column)) {
    // Fetch selector with id 1 from Selector model
    $selectorModel = Selector::model()->findByPk(1);
    $syntaxFromDB = $selectorModel -> syntax;
    $selector = nl2br($syntaxFromDB);
    
    return $selector;
    // Do something with the selector
} 
// Check if both report_column and report_row have values
elseif (!empty($model->report_column) && !empty($model->report_row)) {
    
    return false;
    
//    echo "selector not found selctor only available for column";
//    // Fetch selector with id 1 from Selector model
////    $selectorModel = Selector::model()->findByPk(2);
//    // Do something else with the selector
} 
    
    
}
//**************************************UI Functions**********************************//
public function actionQuery()
{
    if (Yii::app()->request->isAjaxRequest) {
        $selectedReportId = Yii::app()->request->getPost('reportId');

        $fetchQuery = Report::model()->findByPk($selectedReportId);
        $reportColumns = $fetchQuery->reportColumn;
        $db = Yii::app()->db;

        if ($fetchQuery !== null) {
            $sql = $fetchQuery->query;
            // Execute the query
            $command = $db->createCommand($sql);
            $result = $command->queryAll();
            $columnNames = array_keys($result[0]);

            // Print column names
            echo $reportColumns;
        } else {
            echo "Report not found";
            echo "Error in running the query";
            return; // Exit the function if the report is not found
        }
    } else {
        echo "Error in Getting POST From Form ";
    }
}

public function actionFetchParametersForFunction()
{
 // Extracting the value of selectedFunctionId from POST data
     $selectedFunctionId = Yii::app()->request->getPost('selectedFunctionId');
//    $selectedFunctionId = 2; // Assuming 2 is the function_library_id

    // Find all records with the given function_library_id
    $functionModels = FunctionArgumentMap::model()->findAllByAttributes(array('function_library_id' => $selectedFunctionId));
    
    // Initialize arrays to store parameter IDs and names
    $functionParameterIds = array();
    $functionParameterNames = array();
    
    // Iterate over each record to collect IDs and names
    foreach ($functionModels as $functionModel) {
                $functionParameters[$functionModel->id] = $functionModel->argument_name; // Assuming "argument_name" is the correct attribute name

        }
    
    echo json_encode($functionParameters); 

    // Now you can use the $selectedFunctionId variable for further processing
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

		if(isset($_POST['ReportSelectorFunctionParaAction']))
		{
			$model->attributes=$_POST['ReportSelectorFunctionParaAction'];
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
		$dataProvider=new CActiveDataProvider('ReportSelectorFunctionParaAction');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new ReportSelectorFunctionParaAction('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['ReportSelectorFunctionParaAction']))
			$model->attributes=$_GET['ReportSelectorFunctionParaAction'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return ReportSelectorFunctionParaAction the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=ReportSelectorFunctionParaAction::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param ReportSelectorFunctionParaAction $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='report-selector-function-para-action-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
        
       function actionApplyfunctionAction($reportId) {
    // Fetch function action models for the given report ID
    $functionActionModels = ReportSelectorFunctionParaAction::model()->findAllByAttributes(['report_id' => $reportId]);
    $modelCount = count($functionActionModels);
//    print_r($modelCount);
    
    $appliedScripts = []; // Initialize array to store modified scriptToCall values
    
    foreach ($functionActionModels as $model) {
        $scriptToCall = $model->script_to_call;
        
        $mappingId = $model->id; 
        $actionParaModel = ReportFunctionMappingActionValue::model()->findByAttributes(['report_function_mapping_id' => $mappingId]);
        
        if ($actionParaModel !== null) {
            // Replace the action parameter in the script with its value
            $actionParaValue = $actionParaModel->action_parameter_value;
            $scriptToCall = str_replace('$actionParameter', $actionParaValue, $scriptToCall);
            
            // Add the modified scriptToCall to the array
            $appliedScripts[] = $scriptToCall;
        } else {
            // Handle the case where the action parameter model is not found
            // For example, you could log an error, skip this iteration, or take other appropriate action.
            // Here, we'll simply continue to the next iteration.
            continue;
        }
    }
     $jsonResponse = json_encode($appliedScripts);
    
    // Output the JSON response
    echo $jsonResponse;
//    var_dump($appliedScripts);
//    die();
}
        
}

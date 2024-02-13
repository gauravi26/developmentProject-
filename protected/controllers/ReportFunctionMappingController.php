<?php

class ReportFunctionMappingController extends Controller
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
//			'postOnly + delete', // we only allow deletion via POST request
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
				'actions'=>array('create','update', 'query','columnQuery','getScriptDetail','reportScriptMapping','selectReport','successPage','saveParameterValue','fetchParametersForFunction','selectReportForDelete','customDelete','delete'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin',),
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
      
        
   //**************SaveScriptForReport : fetch the syntax and replace column_Name and Row Word with actual value of Report Columnn and words********************
    private function SaveScriptForReport($column, $rowWord, $functionLibraryId)
{
    // Fetch Script using $functionLibraryId. Replace columnName with $column and word $rowWord.
    // Save Script in Applied Script Column with $pageId
    // Check if any of the variables is null
    $functionLibraryModel = FunctionLibrary::model()->findByPk($functionLibraryId);

    if ($functionLibraryModel !== null) {
        $script = $functionLibraryModel->syntax;

        // Check if 'column_Name' is present in the script
        if (strpos($script, "column_Name") !== false) {
            // Split the column names
            $columnArray = explode(',', $column);
            $columnArray = array_map('trim', $columnArray); // Remove leading/trailing whitespaces

            // Replace 'column_Name' with the value of $column in the script
            if (count($columnArray) === 1) {
                // Single word case
                $script = str_replace('column_Name', $columnArray[0], $script);
            } else {
                // Comma-separated words case
                $replacementArray = "['" . implode("','", $columnArray) . "']";
                $script = str_replace("['column_Name']", $replacementArray, $script);
            }
        }

        // Check if 'word' is present in the script
        if (strpos($script, "word") !== false) {
            // Replace 'word' with the value of $rowWord
            $wordArray = explode(',', $rowWord);
            $wordArray = array_map('trim', $wordArray);

            // Replace 'word' with the value of $rowWord
            if (count($wordArray) === 1) {
                // Single word case
                $script = str_replace('word', $wordArray[0], $script);
            } else {
                // Comma-separated words case
                $replacementArray = "['" . implode("','", $wordArray) . "']";
                $script = str_replace("['word']", $replacementArray, $script);
            }
        } else {
            // Check if $rowWord is empty or null and set it to 'NA'
            $rowWord = ($rowWord !== '' && $rowWord !== null) ? $rowWord : 'NA';
        }

        // Return the modified script
        return $script;
    } else {
        return 'NA';
    }
}
 
public function actionCreate()
{
    $model = new ReportFunctionMapping;

    if (isset($_POST['ReportFunctionMapping'])) {
        $model->attributes = $_POST['ReportFunctionMapping'];
        $functionLibraryId = $model->function_library_id;
        $columns = $model->report_columns;
        $rowWord = $model->report_row;
        $pageId = $model->application_forms_id;

        $columnArray = explode(',', $columns);
        $columnArray = array_map('trim', $columnArray);

        foreach ($columnArray as $singleColumn) {
            $newModel = new ReportFunctionMapping;
            $newModel->attributes = $model->attributes;

            if (isset($model->function_library_id[$singleColumn])) {
                $newModel->report_columns = $singleColumn;
                $newModel->function_library_id = $model->function_library_id[$singleColumn];

                // Save the script for the current column
                $jsonScript = $this->SaveScriptForReport(trim($singleColumn), $rowWord, $model->function_library_id[$singleColumn]);
                $newModel->fetched_function_to_call = $jsonScript;
            } else {
                // Check if the current column is associated with 'course_name' or 'course_link'
                $newModel->report_columns = $singleColumn;
            }

            if ($newModel->save()) {
                
            // Iterate over function argument IDs and values
                   // Iterate over function argument IDs and values
            foreach ($_POST as $key => $value) {
                
//                print_r($_POST);
//                die();
                // Check if the key contains 'function_argument_id__'
                if (strpos($key, 'function_argument_id_') !== false) {
                    // Extract the function argument ID from the key
                    $functionArgumentId = substr($key, strlen('function_argument_id_'));
                  
                    // Get the value from the corresponding value array
                    $value = $_POST[$key];
                  
                    // Call actionSaveParameterValue for each function argument ID and value
                    $this->actionSaveParameterValue($newModel->id, $functionArgumentId, $value);
                }
            }

        }
         else {
                Yii::log("Error saving model for column: $singleColumn", CLogger::LEVEL_ERROR);
            }
        }

        $this->redirect(array('index')); // Redirect to index or any other action
    }

    $this->render('create', array(
        'model' => $model,
    ));
}

public function actionSaveParameterValue($reportFunctionMapId, $functionArgumentId, $value)
{
    $model = new ReportFunctionParameterValueMapping;
    $model->report_function_mapping_id = $reportFunctionMapId;
    $model->function_argument_map_id = $functionArgumentId;
    $model->value = $value;
    
//    die();

    if (!$model->save()) {
        Yii::log("Error saving parameter value for report function mapping ID: $reportFunctionMapId and argument ID: $functionArgumentId", CLogger::LEVEL_ERROR);
    }
}


public function actionUpdate($report_id) {
    // Load models associated with the given report ID
    $models = $this->loadModelsByReportId($report_id);

    if (empty($models)) {
        Yii::app()->user->setFlash('error', 'Report Trigger Mappings not found for the report.');
        $this->redirect(array('selectReport'));
    }

    // Check if the form is submitted (POST request)
   if (isset($_POST['ReportFunctionMapping'])) {
    foreach ($_POST['ReportFunctionMapping'] as $model_id => $attributes) {
        // Find the model with the provided ID
        $model = ReportFunctionMapping::model()->findByPk($model_id);

        if ($model !== null) {
            // Load the POST data into the model
            $model->attributes = $attributes;

            // Call the function for each column
            $functionLibraryId = $model->function_library_id;
            $columns = $model->report_columns;
            $rowWord = $model->report_row;
            $pageId = $model->application_forms_id;
            $reportFunctionMapId = $model->id;
            $parameterValueModel = ReportFunctionParameterValueMapping::model()->findByAttributes(array('report_function_mapping_id' => $reportFunctionMapId));
//             print_r($parameterValueModel);
//             die();
            $parameterId = $parameterValueModel->function_argument_map_id;

            // Split the column names
            $columnArray = explode(',', $columns);
            $columnArray = array_map('trim', $columnArray); // Remove leading/trailing whitespaces

            foreach ($columnArray as $singleColumn) {
                $jsonScript = $this->SaveScriptForReport(trim($singleColumn), $rowWord, $functionLibraryId);
                // Update fetched_function_to_call for the current column
                $model->fetched_function_to_call  = $jsonScript;
            }

            // Save the updated model
            if ($model->save()) {
                
//                 print_r($_POST);
//                    die();
                    
//                 print_r($attributes['function_argument_id']);
//                    die();
                // Save parameter values
                foreach ($attributes['function_argument_id'] as $parameterValues => $parameterValue) {
//                    print_r($attributes['function_argument_id']);
//                    die();
                    $this->UpdateParameterValue($reportFunctionMapId, $parameterId, $parameterValue);
                }
            } else {
                // Handle validation errors or other save errors
            }
        } else {
            // Handle the case where the model with the provided ID is not found
        }
    }

    // Redirect to success page or render success message
    $this->redirect(array('/ReportFunctionMapping/successPage'));
}


    // Render the update page with the models
    $this->render('update', array(
        'models' => $models,
        'report_id' => $report_id, // Pass report_id to the view
    ));
}
private function UpdateParameterValue($reportFunctionMapId, $functionArgumentId, $value)
{
    // Find the existing record for the given report function mapping ID and argument ID
    $model = ReportFunctionParameterValueMapping::model()->findByAttributes(array(
        'report_function_mapping_id' => $reportFunctionMapId,
        'function_argument_map_id' => $functionArgumentId,
    ));
    
    if ($model !== null) {
        // Update the value
        $model->value = $value;

        // Save the record
        if (!$model->save()) {
            Yii::log("Error updating parameter value for report function mapping ID: $reportFunctionMapId and argument ID: $functionArgumentId", CLogger::LEVEL_ERROR);
            return false; // Indicate failure
        }
    } else {
        // Create a new record if no existing record is found
        $model = new ReportFunctionParameterValueMapping;
        $model->report_function_mapping_id = $reportFunctionMapId;
        $model->function_argument_map_id = $functionArgumentId;
        $model->value = $value;

        // Save the new record
        if (!$model->save()) {
            Yii::log("Error creating new parameter value for report function mapping ID: $reportFunctionMapId and argument ID: $functionArgumentId", CLogger::LEVEL_ERROR);
            return false; // Indicate failure
        }
    }

    return true; // Indicate success
}



public function actionSuccessPage() {
    $this->render('success'); // Renders the 'success.php' view
}







protected function loadModelsByReportId($report_id){
    $models = ReportFunctionMapping::model()->findAllByAttributes(array('report_id' => $report_id));
    
    if(empty($models)){
        // Handle case where no models are found for the given report_id
        echo "No Report Trigger Mappings found for the report.";
    }
    
    return $models;
}



public function actionSelectReport() {
    
       $report = Report::model()->findAll(array('order' => 'report_name'));
    $reportList = CHtml::listData($report, 'id', 'report_name');

   
    // Check if a report_id is submitted in the POST request
    $report_id = Yii::app()->request->getPost('selectedReportId');
    
    // If a report_id is present, redirect to the update action
    if ($report_id !== null) {
        $this->redirect(['update', 'report_id' => $report_id]);
    }
    else {
        
        echo "No Script Mapping with Selcted Report Found";
    }

    // Render the selectUpdate view with the reportList
    $this->render('selectUpdate', array(
        'reportList' => $reportList,
    ));
}
public function actionSelectReportForDelete(){
    
    $this->render('deleteReportFunctions');
}

public function actionCustomDelete()
{
    $reportId = Yii::app()->request->getPost('reportId');
    if ($reportId != null) {
        $reportFunctionMappingModels = ReportFunctionMapping::model()->findAllByAttributes(array('report_id' => $reportId));

        $ids = array();
        foreach ($reportFunctionMappingModels as $model) {
            $ids[] = $model->id;
        }

        if (!empty($ids)) {
            $idsList = implode(',', $ids);
            $deleteForeignKey = "DELETE FROM report_function_parameter_value_mapping WHERE report_function_mapping_id IN ($idsList)";
            
            $command = Yii::app()->db->createCommand($deleteForeignKey);
            $command->execute();
            
            $deleteRecordQuery = "DELETE FROM report_function_mapping WHERE report_id = :reportId";
            $command = Yii::app()->db->createCommand($deleteRecordQuery);
            $command->bindParam(":reportId", $reportId, PDO::PARAM_INT);
            $command->execute();
            
            echo "Records deleted successfully.";
        } else {
            echo "No records found to delete.";
        }
    } else {
        echo "No report ID submitted.";
    }
}



public function actionDelete($report_id)
{
    // Load models associated with the given report ID
    $models = $this->loadModelsByReportId($report_id);

    if (empty($models)) {
        Yii::app()->user->setFlash('error', 'Report Trigger Mappings not found for the report.');
    } else {
        // Additional logic for deleting the models associated with the report ID
        foreach ($models as $model) {
            // Delete the model
            $model->delete();
        }

        // Set flash message for successful deletion
        Yii::app()->user->setFlash('success', 'Report Trigger Mappings deleted successfully.');
    }

    // Redirect back to the deleteReportFunctions page with the report_id parameter
    $this->redirect(array('reportFunctionMapping/deleteReportFunctions', 'report_id' => $report_id));
}


	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('ReportFunctionMapping');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new ReportFunctionMapping('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['ReportFunctionMapping']))
			$model->attributes=$_GET['ReportFunctionMapping'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return ReportFunctionMapping the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=ReportFunctionMapping::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param ReportFunctionMapping $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='report-trigger-mapping-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}

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



public function actionGetScriptDetail()
{
    if (Yii::app()->request->isAjaxRequest) {
        $functionLibraryId = Yii::app()->request->getPost('function_library_id'); // Use getParam() instead of getPost()
        
        // Fetch script details based on the $functionLibraryId
        $functionLibraryModel = FunctionLibrary::model()->findByPk($functionLibraryId);
        $detail = $functionLibraryModel ? $functionLibraryModel->function_description : 'No description available.';

        // Render the details as a response
        echo $detail;
        Yii::app()->end();
    } else {
        throw new CHttpException(400, 'Invalid request.');
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


public function actionReportScriptMapping() {
    $controllerId = isset($_GET['controller']) ? $_GET['controller'] : null;
    $actionId = isset($_GET['action']) ? $_GET['action'] : null;

    $applicationForm = ApplicationForms::model()->findByAttributes(['controller' => $controllerId, 'action' => $actionId]);

    $appliedScripts = array(); // Array to store applied scripts

    if ($applicationForm) {
        $pageId = $applicationForm->id;

        $reportScriptModels = ReportFunctionMapping::model()->findAllByAttributes(['application_forms_id' => $pageId]);

        if ($reportScriptModels) {
            foreach ($reportScriptModels as $reportScriptModel) {
                $reportFunctionMappingId = $reportScriptModel->id;
                // Call the actionReportFunctionParameterCalling function
                $response = $this->actionReportFunctionParameterCalling($reportFunctionMappingId);
                
                // Check if response is not empty
                if (!empty($response)) {
                    // Store the response in the array
                    $appliedScripts[] = $response;
                }
            }
        }
    }

    // Encode the array into JSON format
    $jsonResponse = json_encode($appliedScripts);
    // Send the JSON response
    echo $jsonResponse;
}


public function actionReportFunctionParameterCalling($reportFunctionMappingId) {
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
//print_r($functionParameterValue);
//                    die();
                if ($functionParameterValue !== null) {
                    // Assuming 'value' is the attribute name for parameter values
                    // Add quotes around each parameter value
                    $functionParameterValueArray[] = "'" . $functionParameterValue->value . "'";
                    
                } else {
//                    print_r("NA");
                }
            }

            
            // Construct the function calling line
            $functionCallingLine = "$functionName(" . implode(",", $functionParameterValueArray) . ");";
            
            // Append the function calling line to the existing function
            $functionToCall .= $functionCallingLine;
            
            // Now you have the complete function call string
            // You can execute it using eval(), but be cautious with this approach
            return $functionToCall;
            
//            die();
        } else {
//                                print_r("NA");

        }
    } else {
        
//        print_r("NA");
    }
}



private function SaveReportEffect()
{
    
    
   
}


}







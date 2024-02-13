<?php

class ReportTriggerMappingController extends Controller
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
				'actions'=>array('create','update', 'query','columnQuery','getScriptDetail','reportScriptMapping','selectReport','successPage'),
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
    $model = new ReportTriggerMapping;

    // Uncomment the following line if AJAX validation is needed
    // $this->performAjaxValidation($model);

    if (isset($_POST['ReportTriggerMapping'])) {
        $model->attributes = $_POST['ReportTriggerMapping'];
        $functionLibraryId = $model->function_library_id;
        $columns = $model->report_columns;
        $rowWord = $model->report_row;
        $pageId = $model->application_forms_id;

        // Split the column names
        $columnArray = explode(',', $columns);
        $columnArray = array_map('trim', $columnArray); // Remove leading/trailing whitespaces

        // Iterate over each column and save a new model for each
        foreach ($columnArray as $singleColumn) {
            $newModel = new ReportTriggerMapping;
            $newModel->attributes = $model->attributes; // Copy common attributes

            // Check if the current column is associated with 'function_library_id'
            if (isset($model->function_library_id[$singleColumn])) {
                $newModel->report_columns = $singleColumn;
                $newModel->function_library_id = $model->function_library_id[$singleColumn];
                // Save the script for the current column
            $jsonScript = $this->SaveScriptForReport(trim($singleColumn), $rowWord, $model->function_library_id[$singleColumn]);
            $newModel->applied_script = $jsonScript;
            } else {
                // Check if the current column is associated with 'course_name' or 'course_link'
                $newModel->report_columns = $singleColumn;
            }

//            print_r($newModel);
//            die();

            // Save the new model
            if (!$newModel->save()) {
                // Handle validation or save errors
                Yii::log("Error saving model for column: $singleColumn", CLogger::LEVEL_ERROR);
            }
        }

        $this->redirect(array('index')); // Redirect to index or any other action
    }

    $this->render('create', array(
        'model' => $model,
    ));
}

//public function actionUpdate($report_id)
//{
//    // Load models associated with the given report ID
//    $models = $this->loadModelsByReportId($report_id);
//    
//    // Check if the form is submitted (POST request)
//    if(isset($_POST['model_id'], $_POST['ReportTriggerMapping'])) {
//        // Get the model ID from the form submission
//        $model_id = $_POST['model_id'];
//        
//        // Find the model with the provided ID
//        $model = ReportTriggerMapping::model()->findByPk($model_id);
//        
//        if($model !== null) {
//            // Load the POST data into the model
//            $model->attributes = $_POST['ReportTriggerMapping'];
//            
//            // Save the model
//            if($model->save()) {
//                // Call the function for each column
//                $functionLibraryId = $model->function_library_id;
//                $columns = $model->report_columns;
//                $rowWord = $model->report_row;
//                $pageId = $model->application_forms_id;
//
//                // Split the column names
//                $columnArray = explode(',', $columns);
//                $columnArray = array_map('trim', $columnArray); // Remove leading/trailing whitespaces
//                
//                foreach ($columnArray as $singleColumn) {
//                    $jsonScript = $this->SaveScriptForReport(trim($singleColumn), $rowWord, $functionLibraryId);
//                    // Update applied_script for the current column
//                    $model->applied_script = $jsonScript;
//                    $model->save(); // Save the updated model
//                }
//
//                // Redirect to success page or render success message
//                $this->redirect(['success']);
//            } else {
//                // Handle validation errors or other save errors
//                // You can render the update page again with error messages if needed
//            }
//        } else {
//            // Handle the case where the model with the provided ID is not found
//            // This could be due to invalid ID or other issues
//        }
//    }
//
//    // Render the update page with the models
//    $this->render('update', [
//        'models' => $models,
//    ]);
//}
//
//
//
public function actionUpdate($report_id) {
    // Load models associated with the given report ID
    $models = $this->loadModelsByReportId($report_id);

    if (empty($models)) {
        Yii::app()->user->setFlash('error', 'Report Trigger Mappings not found for the report.');
        $this->redirect(array('selectReport'));
    }

    // Check if the form is submitted (POST request)
    if (isset($_POST['ReportTriggerMapping'])) {
        foreach ($_POST['ReportTriggerMapping'] as $model_id => $attributes) {
            // Find the model with the provided ID
            $model = ReportTriggerMapping::model()->findByPk($model_id);

            if ($model !== null) {
                // Load the POST data into the model
                $model->attributes = $attributes;

                // Save the model
                if ($model->save()) {
                    // Call the function for each column
                    $functionLibraryId = $model->function_library_id;
                    $columns = $model->report_columns;
                    $rowWord = $model->report_row;
                    $pageId = $model->application_forms_id;

                    // Split the column names
                    $columnArray = explode(',', $columns);
                    $columnArray = array_map('trim', $columnArray); // Remove leading/trailing whitespaces

                    foreach ($columnArray as $singleColumn) {
                        $jsonScript = $this->SaveScriptForReport(trim($singleColumn), $rowWord, $functionLibraryId);
                        // Update applied_script for the current column
                        $model->applied_script = $jsonScript;
                        $model->save(); // Save the updated model
                    }
                } else {
                    // Handle validation errors or other save errors
                    // You can render the update page again with error messages if needed
                }
            } else {
                // Handle the case where the model with the provided ID is not found
                // This could be due to invalid ID or other issues
            }
        }

        // Redirect to success page or render success message
$this->redirect(array('/reportTriggerMapping/successPage'));
    }

    // Render the update page with the models
    $this->render('update', array(
        'models' => $models,
        'report_id' => $report_id, // Pass report_id to the view
    ));
}
public function actionSuccessPage() {
    $this->render('success'); // Renders the 'success.php' view
}



protected function loadModelsByReportId($report_id){
    $models = ReportTriggerMapping::model()->findAllByAttributes(array('report_id' => $report_id));
    
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
		$dataProvider=new CActiveDataProvider('ReportTriggerMapping');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new ReportTriggerMapping('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['ReportTriggerMapping']))
			$model->attributes=$_GET['ReportTriggerMapping'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return ReportTriggerMapping the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=ReportTriggerMapping::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param ReportTriggerMapping $model the model to be validated
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



public function actionGetScriptDetail(){
    if (Yii::app()->request->isAjaxRequest) {
            $functionLibraryId = Yii::app()->request->getPost('scriptId');
            
            // Fetch script details based on the $functionLibraryId
            $functionLibraryModel = ScriptCode::model()->findByPk($functionLibraryId);
            $detail = $functionLibraryModel ? $functionLibraryModel->Description : 'No description available.';

            // Render the details as a response
            echo $detail;
               Yii::app()->end();
        } else {
            throw new CHttpException(400, 'Invalid request.');
        }
       
}

public function actionReportScriptMapping() {
   
    $controllerId = isset($_GET['controller']) ? $_GET['controller'] : null;
    $actionId = isset($_GET['action']) ? $_GET['action'] : null;
        
    $applicationForm = ApplicationForms::model()->findByAttributes(['controller' => $controllerId, 'action' => $actionId]);

    $appliedScripts = array(); // Array to store applied scripts

    if ($applicationForm) {
        // Finding Form Based on the combination of Controller and Action
        $pageId = $applicationForm->id;
      
        $reportScriptModels = ReportTriggerMapping::model()->findAllByAttributes(['application_forms_id' => $pageId]);

        if ($reportScriptModels) {
            // Use a loop to iterate through the array of script models
            foreach ($reportScriptModels as $reportScriptModel) {
                $scriptCode = $reportScriptModel->applied_script;
                
                // Store $scriptCode in the array
                $appliedScripts[] = $scriptCode;
            }
        }
    }

    // Encode the array into JSON format
    $jsonResponse = json_encode($appliedScripts);
     print_r($jsonResponse);
     die();
    // Send the JSON response
    echo $jsonResponse;
}



private function SaveReportEffect()
{
    
    
   
}


}







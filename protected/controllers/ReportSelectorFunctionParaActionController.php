<?php

class ReportSelectorFunctionParaActionController extends Controller {

    /**
     * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
     * using two-column layout. See 'protected/views/layouts/column2.php'.
     */
    public $layout = '//layouts/column2';

    /**
     * @return array action filters
     */
    public function filters() {
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
    public function accessRules() {
        return array(
            array('allow', // allow all users to perform 'index' and 'view' actions
                'actions' => array('index', 'view'),
                'users' => array('*'),
            ),
            array('allow', // allow authenticated user to perform 'create' and 'update' actions
                'actions' => array('create', 'update', 'applyfunctionAction', 'query', 'fetchParametersForFunction', 
                    'fetchParametersForAction','customCreate','save'),
                'users' => array('@'),
            ),
            array('allow', // allow admin user to perform 'admin' and 'delete' actions
                'actions' => array('admin', 'delete'),
                'users' => array('admin'),
            ),
            array('deny', // deny all users
                'users' => array('*'),
            ),
        );
    }

    /**
     * Displays a particular model.
     * @param integer $id the ID of the model to be displayed
     */
    public function actionView($id) {
        $this->render('view', array(
            'model' => $this->loadModel($id),
        ));
    }

    /**
     * Creates a new model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     */
//*********************Creat functions to multiple records using UI**************//
    public function actionCreate() {
        $postFields = $_POST;
//                print_r($postFields);
//
//        die();

// Now $postFields contains an array of all the fields from the POST request

// You can loop through $postFields to access each field and its value
foreach ($postFields as $fieldName => $fieldValue) {
    if (is_array($fieldValue)) {
        // If $fieldValue is an array, print it using print_r or var_dump
        echo "Field Name: $fieldName, Field Value: <br>";
        echo "<pre>";
        print_r($fieldValue);
        echo "</pre>";
    } else {
        // If $fieldValue is not an array, print it normally
        echo "Field Name: $fieldName, Field Value: $fieldValue <br>";
    }
}

//die();

        $model = new ReportSelectorFunctionParaAction;

        if (isset($_POST['yt0'])) {
            $dynamicallyGeneratedFields = $model->getAttributes();

                    print_r($dynamicallyGeneratedFields);

            $model->attributes = $_POST['ReportSelectorFunctionParaAction'];
        die();
            // $scriptToCall =  $this->scriptToCall($model);
            $model->script_to_call = $this->scriptToCall($model);
            if ($model->save())
                $this->redirect(array('view', 'id' => $model->id));
        }

        $this->render('create', array(
            'model' => $model,
        ));
    }
   public function actionSave() {
    $post = $_POST;
    $data = [];

    // Iterate through $_POST to extract the relevant data
    foreach ($post as $key => $value) {
        // Check if the key contains 'function_argument_id_'
        if (strpos($key, 'function_argument_id_') !== false) {
            // Extract the indices from the key
            preg_match('/function_argument_id_(\d+)_(\d+)_(\d+)/', $key, $matches);
            $report_id_index = $matches[1];
            $function_select_index = $matches[2];

            // Build the corresponding column names
            $report_id = isset($post['report_id']) ? $post['report_id'] : null;
            $report_column = isset($post["report_column_{$report_id_index}"]) ? $post["report_column_{$report_id_index}"] : null;
            $report_row = isset($post["report_row_{$report_id_index}"]) ? $post["report_row_{$report_id_index}"] : null;
//            $function_library_id = isset($post["function_select_{$function_select_index}_{$report_id_index}"]) ? $post["function_select_{$function_select_index}_{$report_id_index}"] : null;
            $function_library_id = isset($post["function_select_{$report_id_index}_{$function_select_index}"]) ? $post["function_select_{$report_id_index}_{$function_select_index}"] : null;

            $function_library_parameter = $value;

            // Add the data to the array
            $data[] = [
                'report_id' => $report_id,
                'report_column' => $report_column,
                'report_row' => $report_row,
                'function_library_id' => $function_library_id,
                'function_library_parameter' => $function_library_parameter
            ];
        }
    }

    // Check the count of arrays
    $count = count($data);
    echo "Count of arrays: $count<br>";

    // Print the arrays
    foreach ($data as $key => $array) {
        echo "Array $key: ";
        print_r($array);
        echo "<br>";
    }
     die();

    // Now you can save the data using your model attributes
    foreach ($data as $row) {
        $model = new ReportSelectorFunctionParaActionController(); // Replace YourModel with your actual model class name
        $model->attributes = $row;
       
        if ($model->save()) {
            echo "Data saved successfully.<br>";
        } else {
            echo "Error saving data.<br>";
            print_r($model->getErrors());
        }
    }
}
 
//  public function actionSave() {
//    $post = $_POST;
//    $data = [];
//
//    // Iterate through $_POST to extract the relevant data
//    foreach ($post as $key => $value) {
//        // Check if the key contains 'function_argument_id_'
//        if (strpos($key, 'function_argument_id_') !== false) {
//            // Extract the indices from the key
//            preg_match('/function_argument_id_(\d+)_(\d+)_(\d+)/', $key, $matches);
//            $report_id_index = $matches[1];
//            $function_select_index = $matches[2];
//
//            // Build the corresponding column names
//            $report_id = isset($post['report_id']) ? $post['report_id'] : null;
//            $report_column = isset($post["report_column_{$report_id_index}"]) ? $post["report_column_{$report_id_index}"] : null;
//            $report_row = isset($post["report_row_{$report_id_index}"]) ? $post["report_row_{$report_id_index}"] : null;
//            $function_select = isset($post["function_select_{$function_select_index}_{$report_id_index}"]) ? $post["function_select_{$function_select_index}_{$report_id_index}"] : null;
//            $function_argument_id = $value;
//
//            // Add the data to the array
//            $data[] = [
//                'report_id' => $report_id,
//                'report_column' => $report_column,
//                'report_row' => $report_row,
//                'function_select' => $function_select,
//                'function_argument_id' => $function_argument_id
//            ];
//        }
//    }
//
//    // Check the count of arrays
//    $count = count($data);
//    echo "Count of arrays: $count<br>";
//
//    // Print the arrays
//    foreach ($data as $key => $array) {
//        echo "Array $key: ";
//        print_r($array);
//        echo "<br>";
//    }
//}
 
//
//  public function actionSave() {
//    $post = $_POST;
//    $count = 0;
//
//    // Count keys containing 'function_argument_id_'
//    foreach ($post as $key => $value) {
//        if (strpos($key, 'function_argument_id_') !== false) {
//            $count++;
//        }
//    }
//
//    echo "Count of keys containing 'function_argument_id_': $count";
//}


    //***************************Building Script to Call Function********************//

    private function fetchFunctionAction($model) {

        $reportColumn = $model->report_column;
        $functionId = $model->function_library_id;
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

        $actionId = $model->action_id;
         
        $functionName = FunctionLibrary::model()->findByPk($functionId)->function_name;
        $functionSyntax = FunctionLibrary::model()->findByPk($functionId)->syntax;
        $actionName = ActionLibrary::model()->findByPk($actionId)->action_name;
        $actionSyntax = ActionLibrary::model()->findByPk($actionId)->syntax;

        $functionActionSyntax = $functionSyntax . "\n" . $actionSyntax;

        return [
            'reportColumn' => $reportColumn,
            'functionPara' => $functionPara,
            'functionName' => $functionName,
            'functionActionSyntax' => $functionActionSyntax,
            'actionName' => $actionName,
            'actionId' => $actionId,
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

        $actionParameter = implode(',', $actionParameterStr); // Implode the array

        $selector = $this->fetchSelector($model);
        if ($selector != null) {



            $selector = str_replace('column_Name', $reportColumn, $selector);
            $selector = str_replace('functionParameterValue', $functionPara, $selector);
//     print_r($selector);
//
//    die();
            $selector = str_replace('function_Name', $functionName, $selector);

            $selector = $functionActionSyntax . " " . $selector;

            $executionCode = "targetColumnNames.forEach(function(columnName) {
    var data = fetchData({ selectorType: selectorType, selectorValue: columnName });
    if (data !== null) {
        data.values.forEach(function(value, index) {
            var functionResult = conditionFunction(value, functionParameter);
            if (functionResult == true) {
                console.log(functionResult);
                var element = data.elements[index];
                " . $actionName . "(element, " . $actionParameter . ");
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

            $scriptToCall = $selector . "  " . $executionCode;
//print_r($scriptToCall);
//
//die();
            return $scriptToCall;
        } else {

            echo "Selector not found";
        }
    }

    private function fetchSelector($model) {

        // Check if report_column is not empty/null
        if (!empty($model->report_column)) {
            // Fetch selector with id 1 from Selector model
            $selectorModel = Selector::model()->findByPk(1);
            $syntaxFromDB = $selectorModel->syntax;
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

//**************************************UI Functions**************************************************//
    
    public function actionCustomCreate() {
     
        $this->render('customCreate');
   
}


    public function actionQuery() {
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
    
    

    public function actionFetchParametersForFunction() {
        // Extracting the value of selectedFunctionId from POST data
        $selectedFunctionId = Yii::app()->request->getPost('selectedFunctionId');
        // Find all records with the given function_library_id
        $functionModels = FunctionArgumentMap::model()->findAllByAttributes(array('function_library_id' => $selectedFunctionId));
        $functionParameters = array();

        // Initialize arrays to store parameter IDs and names
        $functionParameterIds = array();
        $functionParameterNames = array();

        // Iterate over each record to collect IDs and names
        foreach ($functionModels as $functionModel) {
            $functionParameters[$functionModel->id] = $functionModel->argument_name; // Assuming "argument_name" is the correct attribute name
        }
       
        echo json_encode($functionParameters);
        

    }

    public function actionFetchParametersForAction() {
    $actionId = Yii::app()->request->getPost('selectActionId');
    
    $actionParameters = ActionArgumentMap::model()->findAll('id=:actionId', array(':actionId' => $actionId));
    $actionParameterDisplayNames = array(); // Create an array to store display names

    foreach ($actionParameters as $actionParameter) {
        $actionParameterDisplayName = $actionParameter->argument_display_name;
        // Do something with $actionParameterDisplayName
        $actionParameterDisplayNames[] = $actionParameterDisplayName; // Store display names in the new array
    }
    echo json_encode($actionParameterDisplayNames); // Return the array of display names
}
//***************************************************************************************************

    /**
     * Updates a particular model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id the ID of the model to be updated
     */
    public function actionUpdate($id) {
        $model = $this->loadModel($id);

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['ReportSelectorFunctionParaAction'])) {
            $model->attributes = $_POST['ReportSelectorFunctionParaAction'];
            if ($model->save())
                $this->redirect(array('view', 'id' => $model->id));
        }

        $this->render('update', array(
            'model' => $model,
        ));
    }

    /**
     * Deletes a particular model.
     * If deletion is successful, the browser will be redirected to the 'admin' page.
     * @param integer $id the ID of the model to be deleted
     */
    public function actionDelete($id) {
        $this->loadModel($id)->delete();

        // if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
        if (!isset($_GET['ajax']))
            $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
    }

    /**
     * Lists all models.
     */
    public function actionIndex() {
        $dataProvider = new CActiveDataProvider('ReportSelectorFunctionParaAction');
        $this->render('index', array(
            'dataProvider' => $dataProvider,
        ));
    }

    /**
     * Manages all models.
     */
    public function actionAdmin() {
        $model = new ReportSelectorFunctionParaAction('search');
        $model->unsetAttributes();  // clear any default values
        if (isset($_GET['ReportSelectorFunctionParaAction']))
            $model->attributes = $_GET['ReportSelectorFunctionParaAction'];

        $this->render('admin', array(
            'model' => $model,
        ));
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer $id the ID of the model to be loaded
     * @return ReportSelectorFunctionParaAction the loaded model
     * @throws CHttpException
     */
    public function loadModel($id) {
        $model = ReportSelectorFunctionParaAction::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param ReportSelectorFunctionParaAction $model the model to be validated
     */
    protected function performAjaxValidation($model) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'report-selector-function-para-action-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

    //****************Applying Script to report ************//

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

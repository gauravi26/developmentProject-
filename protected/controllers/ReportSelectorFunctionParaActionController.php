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
                    'fetchParametersForAction', 'customCreate', 'save','fetchReportColumns','customDelete','mapping'),
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

//********************************Saving Using Custom UI**************************
    public function actionCustomCreate() {

        $this->render('customCreate');
    }
private function fetchActionIds($post, $report_column_index, $function_select_index){
    $action_ids = []; // Initialize an array to store unique action IDs
    foreach ($post as $action_key => $action_value) {
        if (strpos($action_key, "action_id_{$report_column_index}_{$function_select_index}_") === 0) {
            preg_match('/action_id_' . $report_column_index . '_' . $function_select_index . '_(\d+)/', $action_key, $action_matches);
            $action_count = $action_matches[1];
            $action_ids[] = isset($post["action_id_{$report_column_index}_{$function_select_index}_{$action_count}"]) ? $post["action_id_{$report_column_index}_{$function_select_index}_{$action_count}"] : null;
        }
    }
    return $action_ids;
}


public function actionSave() {
        $post = $_POST;
        print_r($post);
        echo '<br>';
//        die();
        $data = [];

        // Iterate through $_POST to extract the relevant data
        foreach ($post as $key => $value) {

            // Check if the key contains 'function_argument_id_'
            if (strpos($key, 'function_argument_id_') !== false) {
                // Extract the indices from the key
                preg_match('/function_argument_id_(\d+)_(\d+)_(\d+)/', $key, $matches);
                $report_column_index = $matches[1];
                $function_select_index = $matches[2];

                // Build the corresponding column names
                $report_id = isset($post['report_id']) ? $post['report_id'] : null;
                $report_column = isset($post["report_column_{$report_column_index}"]) ? $post["report_column_{$report_column_index}"] : null;
                $report_row = isset($post["report_row_{$report_column_index}"]) ? $post["report_row_{$report_column_index}"] : null;
                $function_library_id = isset($post["function_select_{$report_column_index}_{$function_select_index}"]) ? $post["function_select_{$report_column_index}_{$function_select_index}"] : null;

                $action_ids = $this->fetchActionIds($post, $report_column_index, $function_select_index);
//                print_r($action_ids);
//                die();

                $function_library_parameter = $value;
                 foreach ($action_ids as $action_id) {
                $data[] = [
                    'report_id' => $report_id,
                    'report_column' => $report_column,
                    'report_row' => $report_row,
                    'function_library_id' => $function_library_id,
                    'function_library_parameter' => $function_library_parameter,
                    'action_id' => $action_id
                ];
            }
               
            }
        }
//    print_r($data);
        $actionArgRecord = $this->formActionArgumentArr($post);
        $targetColumnData = $this->formTargetColumns($post);
        foreach ($data as $row) {
            $newModel = new ReportSelectorFunctionParaAction; // Create a new model instance
            // Assign attributes from the current row to the model
            $newModel->attributes = $row;

            // Attempt to save the model
            if ($newModel->save()) {


                echo "Report Function Mapping saved successfully.<br>";
            } else {
                echo "Error saving data.<br>";
                print_r($newModel->getErrors()); // Print any validation errors if save fails
            }
        }
        $actionSaveOut = $this->saveActionParaValues($actionArgRecord);
        $targetColumnSaveout = $this->saveTargetColumn($targetColumnData);
//        print_r($actionSaveOut);

    }

    private function formActionArgumentArr($post) {
       
        foreach ($post as $key => $value) {
            if (strpos($key, 'action_parameter_') !== false) {

                preg_match('/action_parameter_(\d+)_(\d+)_(\d+)_(\d+)/', $key, $matches);
                $report_column_index = $matches[1];
                $function_select_index = $matches[2];
                $action_argument_id_match = $matches[3];
                $action_id_count= $matches[4];
                

                $function_library_id = isset($post["function_select_{$report_column_index}_{$function_select_index}"]) ? $post["function_select_{$report_column_index}_{$function_select_index}"] : null;
                $action_id = isset($post["action_id_{$report_column_index}_{$function_select_index}_{$action_id_count}"]) ? $post["action_id_{$report_column_index}_{$function_select_index}_{$action_id_count}"] : null;
                $action_argument_id = $action_argument_id_match;
                $action_parameter_value = isset($post["action_parameter_{$report_column_index}_{$function_select_index}_{$action_argument_id_match}_{$action_id_count}"]) ? $post["action_parameter_{$report_column_index}_{$function_select_index}_{$action_argument_id_match}_{$action_id_count}"] : null;
                $report_id = isset($post['report_id']) ? $post['report_id'] : null;
                $report_column = isset($post["report_column_{$report_column_index}"]) ? $post["report_column_{$report_column_index}"] : null;
                $rcfam = "{$report_id}_{$report_column}_{$function_library_id}_{$action_id}";

                $actionParaValue[] = [
                    $rcfam => [
                        'action_id' => $action_id,
                        'action_argument_id' => $action_argument_id,
                        'action_parameter_value' => $action_parameter_value
                    ]
                ];
            }
        }
//        print_r($actionParaValue);
        return [$actionParaValue];
    }

    private function saveActionParaValues($actionArgRecord) {
        $count=0;
        
        foreach ($actionArgRecord as $key => $innerArray) {
            foreach ($innerArray as $rcfam => $value) {
//                print_r($value);
//        die();
                foreach ($value as $key =>$record)
//                 echo'<br>';
//                print_r($key);
                
                  

                preg_match('/(\d+)_(\w+)_(\d+)_(\d+)/', $key, $matches);
//                 
               
                $report_id = $matches[1];
              
                                
                $report_column = $matches[2];
                
                $function_library_id = $matches[3];
           
                $action_id = $matches[4];

                
//                die();
                // Fetch the ID from the ReportSelectorFunctionParaAction model based on the key
                $reportFunctionMapModel = ReportSelectorFunctionParaAction::model()->findByAttributes([
                    'report_id' => $report_id,
                    'report_column' => $report_column,
                    'function_library_id' => $function_library_id,
                    'action_id' => $action_id
                ]);
//                print_r($reportFunctionMapModel);
//                die();
                if ($reportFunctionMapModel !== null) {
                    $report_function_mapping_id = $reportFunctionMapModel->id;
                     $count++; 
                    $this->saveActionParameters($value, $report_function_mapping_id,$count);
                } else {
                    echo "Function ID not found in Report Function Mapping.";
                }
            }
        }
    }

    private function saveActionParameters($value, $report_function_mapping_id,$count) {
          
//          die();
//        print_r($report_function_mapping_id);
        
        foreach ($value as $key => $row) {

      
         
            $newModel = new ReportFunctionMappingActionValue; // Create a new model instance
            // Assign attributes from the current row to the model
            $newModel->action_id = $row['action_id'];
            $newModel->action_argument_id = $row['action_argument_id'];
            $newModel->action_parameter_value = $row['action_parameter_value'];
            $newModel->report_function_mapping_id = $report_function_mapping_id;

              
//        die();
            // Attempt to save the model
            if ($newModel->save()) {
                echo "Action Values saved successfully.<br>";
            } else {
                echo "Error saving Action Values.<br>";
                print_r($row); // Print the row causing the error
                print_r($newModel->getErrors()); // Print any validation errors if save fails
            }
        
    }}
    
private function formTargetColumns($post){
    $targetColumsPost = []; // Initialize the array
    foreach($post as $key => $value) {
        if(strpos($key, 'target_column_') !== false) {
            preg_match('/target_column_(\d+)_(\d+)_(\d+)_(\d+)/', $key, $matches);
            $report_column_index = $matches[1];
            $function_select_index = $matches[2];
            $target_column_count = $matches[3];
            $action_id_count = $matches[4];
//            echo "<br>";
//            print_r($report_column_index); 
//                 echo "<br>";
//            print_r($function_select_index);
//                      echo "<br>";
//                               print_r($target_column_count);
//   
//            echo "<br>";
//            print_r($action_id_count);
////                echo "<br>";
//                die();
            $report_id = isset($post['report_id']) ? $post['report_id'] : null;
            $report_column = isset($post["report_column_{$report_column_index}"]) ? $post["report_column_{$report_column_index}"] : null;
            $function_library_id = isset($post["function_select_{$report_column_index}_{$function_select_index}"]) ? $post["function_select_{$report_column_index}_{$function_select_index}"] : null;
            $action_id = isset($post["action_id_{$report_column_index}_{$function_select_index}_{$action_id_count}"]) ? $post["action_id_{$report_column_index}_{$function_select_index}_{$action_id_count}"] : null;
            $targetColumnInput = isset($post["target_column_{$report_column_index}_{$function_select_index}_{$target_column_count}_{$action_id_count}"]) ? $post["target_column_{$report_column_index}_{$function_select_index}_{$target_column_count}_{$action_id_count}"] : null;
//             print_r($targetColumnInput);
//             die();
            
            $rcfma = "{$report_id}_{$report_column}_{$function_library_id}_{$action_id}";

            $targetColumsPost[] = [
                $rcfma => [
                    'target_column' => $targetColumnInput
                ]
            ];
        }
    }
    return $targetColumsPost;
    
}
    
    private function saveTargetColumn($targetColumnData){
        
//        echo "<br>";
//        print_r("Passing Target Column :");
//                echo "<br>";
//
//                print_r($targetColumnData);
//
//        die();
        foreach ($targetColumnData as $key =>$innerArray ){
            
            foreach($innerArray as $rcfm => $value ){
                
                preg_match('/(\d+)_(\w+)_(\d+)_(\d+)/', $rcfm, $matches);
                $report_id = $matches[1];
                $report_column = $matches[2];
                $function_library_id = $matches[3];
                $action_id = $matches[4];
                $reportFunctionMapModel = ReportSelectorFunctionParaAction::model()->findByAttributes([
                    'report_id' => $report_id,
                    'report_column' => $report_column,
                    'function_library_id' => $function_library_id,
                    'action_id' => $action_id

                ]);
               
                if ($reportFunctionMapModel !== null) {
                    $report_function_mapping_id = $reportFunctionMapModel->id;

                    $this->saveTargetColumnModel($innerArray, $report_function_mapping_id);
                } else {
                    echo "Function ID not found in Report Function Mapping.";
                }
            }
        }
        
        
    }
    
    
    private function saveTargetColumnModel($innerArray, $report_function_mapping_id){
        
        print_r($innerArray);
        echo '<br>';
//                print_r($report_function_mapping_id);
//                die();

        
        foreach ($innerArray as $key => $row) {

//        print_r($row);
//        echo '<br>';
//        die();
            $newModel = new TargetColumn(); // Create a new model instance
            // Assign attributes from the current row to the model
            $newModel->target_column = $row['target_column'];
             
            $newModel->report_function_mapping_id = $report_function_mapping_id;
//           print_r($newModel);
//            die();
            // Attempt to save the model
            if ($newModel->save()) {
                echo "Target Column saved successfully.<br>";
            } else {
                echo "Error saving Target Column Values.<br>";
                print_r($row); // Print the row causing the error
                print_r($newModel->getErrors()); // Print any validation errors if save fails
            }
        }
        
        
        
    }

//***************************************************************************************************************************************************************
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

//    private function scriptToCall($newModel) {
//
//        // Call fetchFunctionAction
//        $functionActionDetails = $this->fetchFunctionAction($newModel);
//
//        // Extract values from the returned array
//        $reportColumn = $functionActionDetails['reportColumn'];
//        $functionPara = $functionActionDetails['functionPara'];
//        $functionName = $functionActionDetails['functionName'];
//        $functionActionSyntax = $functionActionDetails['functionActionSyntax'];
//        $actionName = $functionActionDetails['actionName'];
//
//        $actionParameter = []; // Initialize the array
//// Append the string element to the array
//        $actionParameter[] = '$actionParameter';
//
//        foreach ($actionParameter as $param) {
//            // Check if it's numeric
//            if (is_numeric($param)) {
//                $actionParameterStr[] = $param;
//            } else {
//                // If it's a string, wrap it in single quotes
//                $actionParameterStr[] = "'" . $param . "'";
//            }
//        }
//
//        $actionParameter = implode(',', $actionParameterStr); // Implode the array
//
//        $selector = $this->fetchSelector($newModel);
//        if ($selector != null) {
//
//
//
//            $selector = str_replace('column_Name', $reportColumn, $selector);
//            $selector = str_replace('functionParameterValue', $functionPara, $selector);
////     print_r($selector);
////
////    die();
//            $selector = str_replace('function_Name', $functionName, $selector);
//
//            $selector = $functionActionSyntax . " " . $selector;
//
//            $executionCode = "targetColumnNames.forEach(function(columnName) {
//    var data = fetchData({ selectorType: selectorType, selectorValue: columnName });
//    if (data !== null) {
//        data.values.forEach(function(value, index) {
//            var functionResult = conditionFunction(value, functionParameter);
//            if (functionResult == true) {
//                console.log(functionResult);
//                var element = data.elements[index];
//                " . $actionName . "(element, " . $actionParameter . ");
//            } else {
//               
//            }
//        });
//    } else {
//        console.log(\"Unable to fetch values for the '\" + columnName + \"' column or no values in the column.\");
//    }
//});";
//
//            $executionCode = nl2br($executionCode);
//
//            $scriptToCall = $selector . "  " . $executionCode;
//
//            return $scriptToCall;
//        } else {
//
//            echo "Selector not found";
//        }
//    }

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
        }
    }

    //***************
    private function fetchTargetColumn($mappingId) {
        $targetParaModels = TargetColumn::model()->findAllByAttributes(['report_function_mapping_id' => $mappingId]);
        $targetColumns = [];

        foreach ($targetParaModels as $targetParaModel) {
            $targeColumn = $targetParaModel->target_column;
            $targetColumns[] = is_numeric($targeColumn) ? $targeColumn : "'" . $targeColumn . "'";
        }
        if (!empty($targetColumns)) {
            return implode(',', $targetColumns); // Implode the array
            print_r($targetColumns);
            die();
        } else {
//            echo "action parameters not found";
            return null; 
        }
    }

    private function fetchActionArg($mappingId) {
        $actionParaModels = ReportFunctionMappingActionValue::model()->findAllByAttributes(['report_function_mapping_id' => $mappingId]);
        $actionParameter = []; // Initialize the array
       
        foreach ($actionParaModels as $actionParaModel) {
            $actionParaValue = $actionParaModel->action_parameter_value;

            // Append the parameter value to the array
            $actionParameter[] = is_numeric($actionParaValue) ? $actionParaValue : "'" . $actionParaValue . "'";
//       print_r($actionParameter);
//               die();
            }

        if (!empty($actionParameter)) {
            return implode(',', $actionParameter); // Implode the array
               
        } else {
            echo "action parameters not found for ".$mappingId;
            return null; 
        }
    }

    private function getUniqueModels($objectsArray) {
        $uniqueObjects = [];
        foreach ($objectsArray as $object) {
            $key = $object->function_library_id . '_' . $object->report_column. '_' . $object->action_id;
            if (!isset($uniqueObjects[$key])) {
                $uniqueObjects[$key] = $object;
            }
        }
        return array_values($uniqueObjects);
    }
//**********************************************************************************************
    function actionApplyfunctionAction($reportId) {
    $fetchReportModels = ReportSelectorFunctionParaAction::model()->findAllByAttributes(['report_id' => $reportId]);
    $uniqueModels = $this->getUniqueModels($fetchReportModels);
//   print_r($uniqueModels);
//   die();
   
    $appliedScripts = []; // Initialize an empty array to hold the JavaScript scripts

    foreach ($uniqueModels as $uniqueModel) {
        $mappingId = $uniqueModel->id;
        $functionActionDetails = $this->fetchFunctionAction($uniqueModel);
        $reportColumn = $functionActionDetails['reportColumn'];
        $functionPara = $functionActionDetails['functionPara'];
        $functionName = $functionActionDetails['functionName'];
        $functionActionSyntax = $functionActionDetails['functionActionSyntax'];
        $actionName = $functionActionDetails['actionName'];
        $actionParameter = $this->fetchActionArg($mappingId);
        
        $target_Column = $this->fetchTargetColumn($mappingId);

        $selector = $this->fetchSelector($uniqueModel);

        $staticCode = $this->executionCode();

        $dynamicCode = <<<SCRIPT
var selectorType = 'reportColumn';
var reportColumnName = ['$reportColumn'];
var targetColumnNames = [$target_Column];
var conditionfunction = $functionName;
var functionPara = $functionPara;
var actionStyle = $actionName;
var actionPara = [$actionParameter];
SCRIPT;
       
        $dynamicCode = trim($dynamicCode);

        $scriptToApply = <<<SCRIPT
$functionActionSyntax
$selector
$dynamicCode
$staticCode
SCRIPT;
        

        $scriptToApply = trim($scriptToApply);

        $appliedScripts[] = $scriptToApply; // Add the script to the array
  
    }

// Encode the array into JSON format
$jsonResponse = json_encode($appliedScripts, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);

echo $jsonResponse;
// print_r($jsonResponse);
// die();


    
}


    private function executionCode() {
        $static_code = <<<SCRIPT
var reportColumnData = fetchData({selectorType: selectorType, selectorValue: reportColumnName});

function functionArg(reportElementIndex) {
    const functionValues = [];
    let functionValue;
    if (functionPara.every(element => typeof element === 'number')) {
        return functionPara;
    } else if (functionPara.some(element => element.includes('@'))) {
        var foundElements = functionPara.filter(element => element.includes('@'));
        var remainingStrings = foundElements.map(element => element.replace('@', ''));
        remainingStrings.forEach(functionParaColumn => {
            var ColumnForFunctionPara = fetchData({selectorType: selectorType, selectorValue: functionParaColumn});
            functionValue = ColumnForFunctionPara[0].values[reportElementIndex];
            functionValues.splice(0);
            functionValues.push(functionValue);
        });
        return [functionValue];
    } else { 
        
return [functionPara];
    }

}

reportColumnData[0].values.forEach((value, i) => {
    const element = reportColumnData[0].elements[i];
    var reportElementIndex = i;
    var functionParaValues = functionArg(reportElementIndex);
   
    console.log(functionParaValues);
    var functionResult = conditionfunction(value, ...functionParaValues);
    if (functionResult === true) {
        applyActionOnTargetColumns(reportElementIndex);
    }
});


function applyActionOnTargetColumns(reportElementIndex) {
    if (targetColumnNames.length === 0) {
        const element = reportColumnData[0].elements[reportElementIndex];
        actionStyle(element, ...actionPara);
    } else {
        targetColumnNames.forEach(targetColumnName => {
            var targetColumnData = fetchData({selectorType: selectorType, selectorValue: targetColumnName});
            targetColumnData.forEach(function (columnData, columnIndex) {
                const element = targetColumnData[0].elements[reportElementIndex];
                actionStyle(element, ...actionPara);
            });
        });
    }
}
SCRIPT;
        $static_code = trim($static_code); // Remove leading/trailing whitespace
//        $static_code = str_replace(["\r\n", "\r"], "\n", $static_code); // Normalize line endings
        return $static_code;
    }

//    function actionApplyfunctionAction($reportId) {
//        // Fetch function action models for the given report ID
//        $functionActionModels = ReportSelectorFunctionParaAction::model()->findAllByAttributes(['report_id' => $reportId]);
//        $modelCount = count($functionActionModels);
// 
//
//        $appliedScripts = []; // Initialize array to store modified scriptToCall values
//
//        foreach ($functionActionModels as $model) {
//            
//            $scriptToCall = $model->script_to_call;
//
//            $mappingId = $model->id;
////            print_r($mappingId);
//            $actionParaModel = ReportFunctionMappingActionValue::model()->findByAttributes(['report_function_mapping_id' => $mappingId]);
//
//            if ($actionParaModel !== null) {
//                // Replace the action parameter in the script with its value
//                $actionParaValue = $actionParaModel->action_parameter_value;
//                $scriptToCall = str_replace('$actionParameter', $actionParaValue, $scriptToCall);
//
//                // Add the modified scriptToCall to the array
//                $appliedScripts[] = $scriptToCall;
//            } else {
//                // Handle the case where the action parameter model is not found
//                // For example, you could log an error, skip this iteration, or take other appropriate action.
//                // Here, we'll simply continue to the next iteration.
//                continue;
//            }
//        }
////           print_r($appliedScripts);
////    die();
//        $jsonResponse = json_encode($appliedScripts);
//
//        // Output the JSON response
//        echo $jsonResponse;
////    var_dump($appliedScripts);
////    die();
//    }
//**************************************UI Functions**************************************************//




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
//    $actionId = 15;

        $actionParameters = ActionArgumentMap::model()->findAllByAttributes(array('action_library_id' => $actionId));
//  
        $actionParameterDisplayNames = array(); // Create an array to store display names


        foreach ($actionParameters as $actionParameter) {
            $actionParameterDisplayName = $actionParameter->argument_display_name;
            $actionId = $actionParameter->id;
            // Do something with $actionParameterDisplayName
            $actionParameterDisplayNames[$actionId] = $actionParameterDisplayName; // Store display names in the new array
        }
        echo json_encode($actionParameterDisplayNames); // Return the array of display names
    }
    
    public function actionFetchReportColumns() {
        
     $selectedReportId = Yii::app()->request->getPost('selectReportId');
//     $selectedReportId = 6;
     $reportModel = Report::model()->findByPk($selectedReportId);
     $reportColumnStr = $reportModel->reportColumn;
     $elements = explode(",",$reportColumnStr);
     $reportColumn[$selectedReportId] = $elements;
//     print_r($reportColumn);
     echo json_encode($reportColumn);

       
    }

//***************************************************************************************************
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

    public function actionCustomDelete(){
        
        $this->render('customDelete');
        
    }
    public function actionMapping(){
        
            $reportId = Yii::app()->request->getPost('reportId');
             if($reportId!=null){
        
        $reportFAMappingModel = ReportSelectorFunctionParaAction::model()->findAllByAttributes(array('report_id'=>$reportId));
        
        $id = array();
        foreach($reportFAMappingModel as $model){
            $ids[]=$model->id;
            
        }
//        print_r($ids);
//        die();
        if(!empty($ids)){
            
            $idList = implode(',', $ids);
            $delete = "
DELETE FROM target_column
WHERE report_function_mapping_id IN ($idList);

DELETE FROM report_function_mapping_action_value
WHERE report_function_mapping_id IN ($idList);

DELETE FROM report_selector_function_para_action
WHERE id IN ($idList);
";
            $command = Yii::app()->db->createCommand($delete);
            $command->execute();
                        echo "Records deleted successfully.";

            
        }
        else{
           echo  "No Script for Report Found";
        }
    }
    else{
        echo "Report Id not found ";
    }


        
    }
    //****************Applying Script to report ************//
}

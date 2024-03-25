<?php

class ReportSelectorFunctionMappingController extends Controller {

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
                    'fetchParametersForAction', 'customCreate', 'save', 'fetchReportColumns', 'customDelete', 'mapping'),
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
//                echo "<pre>";
//                print_r($fieldValue);
//                echo "</pre>";
            } else {
                // If $fieldValue is not an array, print it normally
                echo "Field Name: $fieldName, Field Value: $fieldValue <br>";
            }
        }


        $model = new ReportSelectorFunctionMapping;

        if (isset($_POST['yt0'])) {
            $dynamicallyGeneratedFields = $model->getAttributes();

//            print_r($dynamicallyGeneratedFields);

            $model->attributes = $_POST['ReportSelectorFunctionMapping'];
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

    private function fetchActionIds($post, $report_column_index, $function_select_index) {
        $action_ids = []; // Initialize an array to store unique action IDs
        foreach ($post as $action_key => $action_value) {
            if (strpos($action_key, "action_id_{$report_column_index}_{$function_select_index}_") === 0) {

                preg_match('/action_id_' . $report_column_index . '_' . $function_select_index . '_(\d+)/', $action_key, $action_matches);
                $arrKey = explode("_", $action_key);
                $action_count = $arrKey[4];

                $action_ids[] = isset($post["action_id_{$report_column_index}_{$function_select_index}_{$action_count}"]) ? $post["action_id_{$report_column_index}_{$function_select_index}_{$action_count}"] : null;
            }
        }
//    echo '<br>';
//           echo 'Check : ';
//            print_r($action_ids);
//            echo '<br>';
//            die();
        return $action_ids;
    }

    public function actionSave() {
         $post = $_POST;
    echo "<ul>";
    foreach ($post as $key => $value) {
        echo "<li><strong>$key:</strong> $value</li>";
    }
    echo "</ul>";
    die();
        echo '<br>';
//        die();
        $data = [];

        foreach ($post as $key => $value) {

            // Check if the key contains 'function_argument_id_'
            if (strpos($key, 'function_argument_id_') !== false) {
                // Extract the indices from the key
//                preg_match('/function_argument_id_(\d+)_(\d+)_(\d+)/', $key, $matches);
               
                
                $arrKey = explode("_", $key);
                
                $report_column_index = $arrKey[3];
                $function_select_index = $arrKey[4];
//                print_r($report_column_index );
//                echo "<br>";
//                
//                print_r($function_select_index );
//echo "<br>";
//die();
                // Build the corresponding column names
                $report_id = isset($post['report_id']) ? $post['report_id'] : null;
                $report_column = isset($post["report_column_{$report_column_index}"]) ? trim($post["report_column_{$report_column_index}"]) : null;
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
            $newModel = new ReportSelectorFunctionMapping; // Create a new model instance
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
 $actionParaValue = [];
        foreach ($post as $key => $value) {
            if (strpos($key, 'action_parameter_') !== false) {

                $arrKey = explode("_", $key);
                $report_column_index = $arrKey[2];

                $function_select_index = $arrKey[3];
                $action_argument_id_match = $arrKey[4];
                $action_id_count = $arrKey[5];

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
        return [$actionParaValue];
//        print_r($actionParaValue);
//        die();
        
    }

private function saveActionParaValues($actionArgRecord) {
    $count = 0;
    $matches = [];

    foreach ($actionArgRecord as $record => $innerArray) {
        foreach ($innerArray as $rcfam => $value) {
           foreach($value as $key=>$dataValues){
            
            
            preg_match('/(\d+)_(\w+)_(\d+)_(\d+)/', $key, $matches);
            $report_id = $matches[1];
                $report_column = $matches[2];
                $function_library_id = $matches[3];
                $action_id = $matches[4];

            // Fetch the ID from the ReportSelectorFunctionMapping model based on the key
            $reportFunctionMapModel = ReportSelectorFunctionMapping::model()->findByAttributes([
                'report_id' => $report_id,
                'report_column' => $report_column,
                'function_library_id' => $function_library_id,
                'action_id' => $action_id
            ]);

            if ($reportFunctionMapModel !== null) {
                $report_function_mapping_id = $reportFunctionMapModel->id;
                $count++;
                $this->saveActionParameters($value, $report_function_mapping_id, $count);
            } else {
                echo "Function ID not found in Report Function Action Mapping.";
            }
    }}
    }
}

    private function saveActionParameters($value, $report_function_mapping_id, $count) {

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
        }
    }

    private function formTargetColumns($post) {
        $targetColumsPost = []; // Initialize the array
        foreach ($post as $key => $value) {
            if (strpos($key, 'target_column_') !== false) {


                $arrKey = explode("_", $key);
                $report_column_index = $arrKey[2];
                $function_select_index = $arrKey[3];
                $target_column_count = $arrKey[4];
                $action_id_count = $arrKey[5];


                $report_id = isset($post['report_id']) ? $post['report_id'] : null;
                $report_column = isset($post["report_column_{$report_column_index}"]) ? $post["report_column_{$report_column_index}"] : null;
                $function_library_id = isset($post["function_select_{$report_column_index}_{$function_select_index}"]) ? $post["function_select_{$report_column_index}_{$function_select_index}"] : null;
                $action_id = isset($post["action_id_{$report_column_index}_{$function_select_index}_{$action_id_count}"]) ? $post["action_id_{$report_column_index}_{$function_select_index}_{$action_id_count}"] : null;
                $targetColumnInput = isset($post["target_column_{$report_column_index}_{$function_select_index}_{$target_column_count}_{$action_id_count}"]) ? $post["target_column_{$report_column_index}_{$function_select_index}_{$target_column_count}_{$action_id_count}"] : null;


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

    private function saveTargetColumn($targetColumnData) {


        foreach ($targetColumnData as $key => $innerArray) {
            $matches = [];
            foreach ($innerArray as $rcfm => $value) {

                preg_match('/(\d+)_(\w+)_(\d+)_(\d+)/', $rcfm, $matches);
                $report_id = $matches[1];
                $report_column = $matches[2];
                $function_library_id = $matches[3];
                $action_id = $matches[4];

                $reportFunctionMapModel = ReportSelectorFunctionMapping::model()->findByAttributes([
                    'report_id' => $report_id,
                    'report_column' => $report_column,
                    'function_library_id' => $function_library_id,
                    'action_id' => $action_id
                ]);
//print_r($reportFunctionMapModel);
//           die();
                if ($reportFunctionMapModel !== null) {
                    $report_function_mapping_id = $reportFunctionMapModel->id;

                    $this->saveTargetColumnModel($innerArray, $report_function_mapping_id);
                } else {
                    echo "Function ID not found in Report Function Mapping.";
                }
            }
        }
    }

    private function saveTargetColumnModel($innerArray, $report_function_mapping_id) {

//        print_r($innerArray);
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

    

    private function getUniqueModels($objectsArray) {
        $uniqueObjects = [];
        foreach ($objectsArray as $object) {
            $key = $object->function_library_id . '_' . $object->report_column;
            if (!isset($uniqueObjects[$key])) {
                $uniqueObjects[$key] = $object;
            }
        }
        return array_values($uniqueObjects);
    }

//********************************************************Applying**************************************
    function actionApplyfunctionAction($reportId) {
        $fetchReportModels = ReportSelectorFunctionMapping::model()->findAllByAttributes(['report_id' => $reportId]);
        $uniqueModels = $this->getUniqueModels($fetchReportModels);
//   print_r($uniqueModels);
//   die();

        $appliedScripts = []; // Initialize an empty array to hold the JavaScript scripts

        foreach ($uniqueModels as $uniqueModel) {
            $mappingId = $uniqueModel->id;
            $functionDetails = $this->fetchFunction_1($uniqueModel);
            
            $reportColumn = $functionDetails['reportColumn'];
            $functionName = $functionDetails['functionName'];
            $functionPara = $functionDetails['functionPara'];
            
            $functionSyntax = $functionDetails['functionSyntax'];
//********************************************Action**************************************************************
            $functionMappedActions = $this->fetchReportFunMappedActions($mappingId);
                
                foreach($functionMappedActions as $functionMappedAction){
                      
             $actionName = $functionMappedAction['actionName'];        
             $actionSyntax = $functionMappedAction['actionSyntax'];
             $actionParameter = $functionMappedAction['actionPara'];
              $target_Column =$functionMappedAction['targetColumn'];
                      
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
$functionSyntax
$actionSyntax
$selector
$dynamicCode
$staticCode
SCRIPT;

            $scriptToApply = trim($scriptToApply);

            $appliedScripts[] = $scriptToApply; // Add the script to the array
       
            }
            }
//            print_r($appliedScripts);
//            die();
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
            if (ColumnForFunctionPara && ColumnForFunctionPara.length > 0) {
                functionValue = ColumnForFunctionPara[0].values[reportElementIndex];
                functionValues.splice(0);
                functionValues.push(functionValue);
            } else {
                console.error("@Values not found for function parameter:", functionParaColumn);
            }
        });
        return [functionValue];
    } else { 
        return [functionPara];
    }
}

if (reportColumnData.length === 0) {
    console.error("@Report column not found:", reportColumnName);
} else {
    reportColumnData[0].values.forEach((value, i) => {
        const element = reportColumnData[0].elements[i];
        var reportElementIndex = i;
        var functionParaValues = functionArg(reportElementIndex);

        var functionResult = conditionfunction(value, ...functionParaValues);
        

        if (functionResult === true) {
            applyActionOnTargetColumns(reportElementIndex);
        }
    });
}

function applyActionOnTargetColumns(reportElementIndex) {
    if (targetColumnNames.length === 0) {
        const element = reportColumnData[0].elements[reportElementIndex];
        actionStyle(element, ...actionPara);
    } else {
        targetColumnNames.forEach(targetColumnName => {
            var targetColumnData = fetchData({selectorType: selectorType, selectorValue: targetColumnName});
            if (targetColumnData && targetColumnData.length > 0) {
                targetColumnData.forEach(function (columnData, columnIndex) {
                    const element = targetColumnData[0].elements[reportElementIndex];
                    actionStyle(element, ...actionPara);
                });
            } else {
                console.error("@Values not found for target column:", targetColumnName);
            }
        });
    }
}
SCRIPT;
        $static_code = trim($static_code); // Remove leading/trailing whitespace
//        $static_code = str_replace(["\r\n", "\r"], "\n", $static_code); // Normalize line endings
        return $static_code;
    }

private function fetchFunction_1($model) {

        $reportColumn = $model->report_column;
        $functionId = $model->function_library_id;
        $reportFunctionMapId = $model->id;
        $functionName = FunctionLibrary::model()->findByPk($functionId)->function_name;
        $functionSyntax = FunctionLibrary::model()->findByPk($functionId)->syntax;
        $functionPara = $this->fetchfunctionArgs($reportFunctionMapId);
        

        return [
            'reportColumn' => $reportColumn,
            'functionName' => $functionName,
            'functionSyntax'=>$functionSyntax,
            'functionPara' => $functionPara,
            
        ];
    }
    
  private function fetchfunctionArgs($reportFunctionMapId) {
    $functionArgs = array();

    $functionArgModels = ReportFunctionArgValueMapping::model()->findAllByAttributes(array('report_function_mapping_id' => $reportFunctionMapId));
//    return $functionArgModels;
//    die();
    foreach ($functionArgModels as $functionArgModel) {
        $functionArgs[] = $functionArgModel->value;
    }

    $formattedParams = [];

    foreach ($functionArgs as $param) {
        // Check if it's numeric
        if (is_numeric($param)) {
            $formattedParams[] = $param;
        } else {
            // If it's a string, wrap it in single quotes
            $formattedParams[] = "'" . $param . "'";
        }
    }

    // Return the formatted parameters
     
   $functionPara = '[' . implode(',', $formattedParams) . ']';
    
    return $functionPara;
}

private function fetchReportFunMappedActions($reportFunctionMapId) {
    $actionDetails = array();

    $mappedActionModels = ReportFunctionActionMapping::model()->findAllByAttributes(array('report_function_mapping_id' => $reportFunctionMapId));

    if (empty($mappedActionModels)) {
        Yii::trace("No mapped actions found for report function mapping ID: $reportFunctionMapId", 'application.controllers');
        return "NO MAPPED ACTION FOUND";
    }

    foreach ($mappedActionModels as $mappedActionModel) {
        $mappedActionModelId = $mappedActionModel->id;
        $actionId = $mappedActionModel->action_library_id;
        $actionName = ActionLibrary::model()->findByPk($actionId)->action_name;
        $actionSyntax = ActionLibrary::model()->findByPk($actionId)->syntax;
        $actionPara = $this->fetchActionArg($mappedActionModelId);
        $targetColumn = $this->fetchTargetColumn($mappedActionModelId);
        $actionDetails[] = array(
            'actionName' => $actionName,
            'actionSyntax' => $actionSyntax,
            'actionPara' => $actionPara,
            'targetColumn' =>$targetColumn,
        );
    }

    return $actionDetails;
}

    private function fetchActionArg($mappedActionModelId) {
        $actionParaModels = ReportFunctionMappingActionValue::model()->findAllByAttributes(['report_function_action_mapping_id' => $mappedActionModelId]);
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
            echo "action parameters not found for " . $mappedActionModelId;
            return null;
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
        }
    }

    //***************
    private function fetchTargetColumn($mappedActionModelId) {
        $targetParaModels = TargetColumn::model()->findAllByAttributes(['report_function_action_mapping_id' => $mappedActionModelId]);
        $targetColumns = [];

        foreach ($targetParaModels as $targetParaModel) {
            $targeColumn = $targetParaModel->target_column;
            $targetColumns[] = is_numeric($targeColumn) ? $targeColumn : "'" . $targeColumn . "'";
        }
        if (!empty($targetColumns)) {
            return implode(',', $targetColumns); // Implode the array
//            print_r($targetColumns);
//            die();
        } else {
//            echo "action parameters not found";
            return null;
        }
    }

//**************************************UI Functions**************************************************//




    public function actionQuery() {

        $selectedReportId = Yii::app()->request->getPost('reportId');

        if ($selectedReportId != null) {
            $fetchQuery = Report::model()->findByPk($selectedReportId);
//             print_r($selectedReportId);
//            die();
            $reportColumns = $fetchQuery->reportColumn;

            if ($fetchQuery !== null) {
                echo $reportColumns;
            } else {
                echo "Report not found";
                echo "Error in running the query";
                return; // Exit the function if the report is not found
            }
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
        $elements = explode(",", $reportColumnStr);
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

        if (isset($_POST['ReportSelectorFunctionMapping'])) {
            $model->attributes = $_POST['ReportSelectorFunctionMapping'];
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
        $dataProvider = new CActiveDataProvider('ReportSelectorFunctionMapping');
        $this->render('index', array(
            'dataProvider' => $dataProvider,
        ));
    }

    /**
     * Manages all models.
     */
    public function actionAdmin() {
        $model = new ReportSelectorFunctionMapping('search');
        $model->unsetAttributes();  // clear any default values
        if (isset($_GET['ReportSelectorFunctionMapping']))
            $model->attributes = $_GET['ReportSelectorFunctionMapping'];

        $this->render('admin', array(
            'model' => $model,
        ));
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer $id the ID of the model to be loaded
     * @return ReportSelectorFunctionMapping the loaded model
     * @throws CHttpException
     */
    public function loadModel($id) {
        $model = ReportSelectorFunctionMapping::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param ReportSelectorFunctionMapping $model the model to be validated
     */
    protected function performAjaxValidation($model) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'report-selector-function-para-action-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

    public function actionCustomDelete() {

        $this->render('customDelete');
    }

    public function actionMapping() {

        $reportId = Yii::app()->request->getPost('reportId');
        if ($reportId != null) {

            $reportFAMappingModel = ReportSelectorFunctionMapping::model()->findAllByAttributes(array('report_id' => $reportId));

            $id = array();
            foreach ($reportFAMappingModel as $model) {
                $ids[] = $model->id;
            }
//        print_r($ids);
//        die();
            if (!empty($ids)) {

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
            } else {
                echo "No Script for Report Found";
            }
        } else {
            echo "Report Id not found ";
        }
    }

    //****************Applying Script to report ************//
}
private function savingActionID($action_ids) {
    
    print_r($action_ids);
    
    echo '<br>';
    
    $action_ids = [
    '8_PremiumMember_8_1' => 15,
    '8_PremiumMember_8_2' => 1,
    '8_Balance_12_1' => 15
];
    
     print_r($action_ids);
     die();
    foreach ($action_ids as $key => $value) {
        // Use preg_match to extract components from the key
        if (preg_match('/(\d+)_(\w+)_(\d+)_(\d+)/', $key, $matches)) {
            $report_id = $matches[1];
            print_r($matches);
            die();
            
            $report_column = $matches[2];
            $function_library_id = $matches[3];
            $action_id_count = $matches[4];

            // Proceed with further processing...
            echo "Report ID: $report_id, Report Column: $report_column, Function Library ID: $function_library_id, Action ID Count: $action_id_count\n";

            // Save action model
            $this->saveActionModel($report_id, $report_column, $function_library_id, $action_id_count, $value);
        }
    }
}
     
 
<?php
$queue = [];
class EffectsController extends Controller
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
				'actions'=>array('index','view', 'applyScript'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
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
function addToQueue($formId, $fieldId, $effectId, $triggerId) {
    // Define the filename where the queue data is stored
    $queueFilename = 'C:\xampp\htdocs\themebuilder\AjaxFiles\effectScriptsQueue.json';

    // Load the existing queue data
    $queue = json_decode(file_get_contents($queueFilename), true);

    $combination = "$formId*$fieldId*$effectId*$triggerId";

    // Check if the combination already exists in the queue
    if (in_array($combination, $queue)) {
        echo 'This effect is already applied to an element';
        return true;
    } else {
        // Combination does not exist in the queue, add it
        $queue[] = $combination;
        file_put_contents($queueFilename, json_encode($queue, JSON_PRETTY_PRINT));
        return false;
    }
}



public function actionCreate() {
    $model = new Effects;

    if (isset($_POST['Effects'])) {
        $model->attributes = $_POST['Effects'];
        if ($model->save()) {
            // Get the form_id, FIELD_ID, effect_code_id, and trigger_id from the Effects model
            $formId = $model->form_id;
            $fieldId = $model->FIELD_ID;
            $effectCodeId = $model->effect_code_id;
            $triggerId = $model->trigger_id;

            // Call addToQueue to check if the combination exists in the queue
            $queueCheck = $this->addToQueue($formId, $fieldId, $effectCodeId, $triggerId);

            if (!$queueCheck) {
                // Combination does not exist in the queue, proceed to add to JSON

                // Fetch the titles from the FormFields table for the given form_id and FIELD_ID
                $formFieldTitles = FormFields::model()->findAllByAttributes(
                    array('FORM_ID' => $formId, 'FIELD_ID' => $fieldId)
                );

                // Fetch the script code based on the effect_code_id from the ScriptCode model
                $scriptCodeModel = ScriptCode::model()->findByPk($effectCodeId);
                $scriptCode = json_decode($scriptCodeModel->code, true);

                // Fetch the trigger name from the EffectTrigger model
                $triggerModel = EffectTrigger::model()->findByPk($triggerId);
                $triggerName = $triggerModel->effect_trigger;
//                $jsCode = str_replace('triggerValue', $triggerName, $jsCode);

                // Define the filename where the JSON data is stored
                $filename = 'C:\xampp\htdocs\testproject\AjaxFiles\effectScripts.json';

                // Load the existing data from the JSON file
                $jsonContent = file_get_contents($filename);
                $existingData = json_decode($jsonContent, true);

                // Create an array to store the generated JavaScript code for each title
                $generatedScripts = array();

                // Loop through the formFieldTitles and generate JavaScript code
                foreach ($formFieldTitles as $formFieldTitle) {
                    $id = $formFieldTitle->FIELD_ID;
                    $title = $formFieldTitle->TITLE;
                    // Replace "elementId" with the "id" from the title in the JavaScript code
                     $jsCode = str_replace('elementId', $title, $scriptCode['js']);
                $jsCode = str_replace('triggerValue', $triggerName, $jsCode);

                    // Create an array for the effect data
                    $effectData = array(
                        'form_id' => $formId,
                        'field_id' => $fieldId,
                        'effect_id' => $effectCodeId,
                        'trigger' => $triggerName,
                        'title' => $title,
                        'code' => array(
                                    'css' => $scriptCode['css'],
                                    'js' => $jsCode,
                                ),                    );

                    // Add the effect data to the generatedScripts array using form_id as the key
                    if (!isset($generatedScripts[$formId])) {
                        $generatedScripts[$formId] = [];
                    }

                    $generatedScripts[$formId][] = $effectData; // Store the effect data

                }

                // Merge the new data with the existing data
                if (isset($existingData[$formId])) {
                    $existingData[$formId] = array_merge($existingData[$formId], $generatedScripts[$formId]);
                } else {
                    $existingData[$formId] = $generatedScripts[$formId];
                }

                // Encode the merged data back to JSON
                $newContent = json_encode($existingData, JSON_PRETTY_PRINT);

                // Write the new content to the file, overwriting the existing content
                file_put_contents($filename, $newContent);
                            $this->redirect(array('view', 'id' => $model->id));

                // Return the JSON data as the response
                Yii::app()->end(json_encode($existingData, JSON_PRETTY_PRINT));
            } else {
                echo 'This effect combination is already in the queue';
            }
        }
    }

    $this->render('create', array(
        'model' => $model,
    ));
}

   


//     public function actionCreate()
//{
//    $model = new Effects;
//
//    if (isset($_POST['Effects'])) {
//        $model->attributes = $_POST['Effects'];
//        if ($model->save()) {
//            // Get the form_id, FIELD_ID, and effect_code_id from the Effects model
//            $formId = $model->form_id;
//            $fieldId = $model->FIELD_ID;
//            $effectCodeId = $model->effect_code_id;
//
//            // Fetch the titles from the FormFields table for the given form_id and FIELD_ID
//            $formFieldTitles = FormFields::model()->findAllByAttributes(
//                array('FORM_ID' => $formId, 'FIELD_ID' => $fieldId)
//            );
//
//            // Fetch the script code based on the effect_code_id from the ScriptCode model
//            $scriptCodeModel = ScriptCode::model()->findByPk($effectCodeId);
//            $scriptCode = json_decode($scriptCodeModel->code, true);
//
//            // Create an array to store the generated JavaScript code for each title
//            $generatedScripts = array();
//
//            // Loop through the formFieldTitles and generate JavaScript code
//            foreach ($formFieldTitles as $formFieldTitle) {
//                $id = $formFieldTitle->FIELD_ID;
//                $title = $formFieldTitle->TITLE;
//
//                // Create an array for the effect data
//                $effectData = array(
//                    'form_id' => $formId,
//                    'field_id' => $fieldId,
//                    'effect_id' => $effectCodeId,
//                    'title' => $title,
//                    'code' => $scriptCode,
//                );
//
//                // Add the effect data to the generatedScripts array using form_id as the key
//                $generatedScripts[$formId] = array($effectData);
//            }
//
//            // Define the filename where the JSON data is stored
//            $filename = 'C:\xampp\htdocs\testproject\AjaxFiles\effectScripts.json';
//
//            // Read the current content from the file (if the file already exists)
//            $currentContent = file_get_contents($filename);
//
//            // Convert the existing content to a PHP array
//            $existingData = json_decode($currentContent, true);
//
//            // Merge the new data with the existing data
//            if (isset($existingData[$formId])) {
//                // If data for this form_id already exists, merge it
//                $existingData[$formId] = array_merge($existingData[$formId], $generatedScripts[$formId]);
//            } else {
//                // If this is the first entry for this form_id, just assign it
//                $existingData[$formId] = $generatedScripts[$formId];
//            }
//
//            // Encode the merged data back to JSON
//            $newContent = json_encode($existingData, JSON_PRETTY_PRINT);
//
//            // Write the new content to the file, overwriting the existing content
//            file_put_contents($filename, $newContent);
//
//            // Optionally, you can also append a newline character to separate the new content from the existing content
//            file_put_contents($filename, "\n", FILE_APPEND);
//
//            // Optionally, you can store the generatedScripts array in your database for future reference.
//
//            $this->redirect(array('view', 'id' => $model->id));
//        }
//    }
//
//    $this->render('create', array(
//        'model' => $model,
//    ));
//}
public function actionApplyScript()
{
    $controllerId = isset($_GET['controller']) ? $_GET['controller'] : null;
    $actionId = isset($_GET['action']) ? $_GET['action'] : null;

    $applicationForm = ApplicationForms::model()->findByAttributes(['controller' => $controllerId, 'action' => $actionId]);

    if ($applicationForm) {
        // Finding Form Based on the combination of Controller and Action
        $formId = $applicationForm->id;

        // Define the filename where the JSON data is stored
        $filename = 'C:\xampp\htdocs\testproject\AjaxFiles\effectScripts.json';

        // Read the current content from the file
        $currentContent = file_get_contents($filename);

        // Convert the existing content to a PHP array
        $existingData = json_decode($currentContent, true);

        if ($existingData === null) {
            // If the file is empty or not properly formatted as JSON, initialize an empty array
            $existingData = [];
        }

        // Check if the $formId exists in the JSON data
        if (isset($existingData[$formId])) {
            // Fetch the script and CSS data for the specified form_id
            $scriptData = $existingData[$formId];

            // You can return the data as JSON to the client
            $this->renderJson($scriptData);
        } else {
            // Return an empty response or an error message if the form_id is not found
            $this->renderJson([]);
        }
    } else {
        // Handle the case where the application form is not found
        // You can return an error message or redirect to an error page.
        // For example: $this->render('error', ['message' => 'Application form not found.']);
    }
}

private function renderJson($data)
{
    header('Content-Type: application/json');
    echo json_encode($data);
    Yii::app()->end();
}

//	public function actionCreate()
//	{
//		$model=new Effects;
//
//		// Uncomment the following line if AJAX validation is needed
//		// $this->performAjaxValidation($model);
//
//		if(isset($_POST['Effects']))
//		{
//			$model->attributes=$_POST['Effects'];
//			if($model->save())
//				$this->redirect(array('view','id'=>$model->id));
//		}
//
//		$this->render('create',array(
//			'model'=>$model,
//		));
//	}

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

		if(isset($_POST['Effects']))
		{
			$model->attributes=$_POST['Effects'];
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
		$dataProvider=new CActiveDataProvider('Effects');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Effects('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Effects']))
			$model->attributes=$_GET['Effects'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Effects the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Effects::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Effects $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='effects-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
        
        // In your controller (e.g., EffectsController.php)
public function actionGetFieldIds()
{
    if (Yii::app()->request->isAjaxRequest) {
        $formId = Yii::app()->request->getParam('formId');

        // Query the database to retrieve field IDs based on the selected form ID.
        $fieldIds = FormFields::model()->findAllByAttributes(array('FORM_ID' => $formId));

        $fieldIdList = CHtml::listData($fieldIds, 'FIELD_ID', 'TITLE');
        echo CJSON::encode($fieldIdList);
        Yii::app()->end();
    }
}

}

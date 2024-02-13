<?php

class ScriptCodeController extends Controller
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
        private function SaveJsonJquery($css, $js)
{


}
  private function SaveJsonScript($css, $js)
{
    // Remove whitespace from CSS and JS
    $css = preg_replace('/\s+/', '', $css);
//    $js = preg_replace('/\s+/', '', $js);
    $css = str_replace(["\r", "\n", "\t"], '', $css);
    $js = str_replace(["\r", "\t"], '', $js);
//    print_r($css);
////    die();
    // Check if 'getElementById' is present in the JS code and replace it
  if (preg_match('/document\.getElementById\([\'"]([^\'"]+)[\'"]\)/', $js)) {
      $js = preg_replace('/document\.getElementById\([\'"]([^\'"]+)[\'"]\)/', 'document.getElementById(\'#elementId\')', $js);
  }

  // Check if 'getElementsByClassName' is present in the JS code and replace it
  if (preg_match('/document\.getElementsByClassName\([\'"]([^\'"]+)[\'"]\)/', $js)) {
      $js = preg_replace('/document\.getElementsByClassName\([\'"]([^\'"]+)[\'"]\)/', 'document.getElementsByClassName(\'#elementId\')', $js);
  }

  // Check if 'document.querySelector' is present in the JS code and replace it 
  if (preg_match('/document.querySelector\([\'"]([^\'"]+)[\'"]\)/', $js)) {
      $js = preg_replace('/document.querySelector\([\'"]([^\'"]+)[\'"]\)/', 'document.querySelector(\'#elementId\')', $js);
  }

  // Check if 'document.querySelectorAll' is present in the JS code and replace it
  if (preg_match('/document.querySelectorAll\([\'"]([^\'"]+)[\'"]\)/', $js)) {
      $js = preg_replace('/document.querySelectorAll\([\'"]([^\'"]+)[\'"]\)/', 'document.querySelector(\'#elementId\')', $js);
  }

  // Check if 'document.getElementsByTagName' is present in the JS code and replace it
  if (preg_match('/document.getElementsByTagName\([\'"]([^\'"]+)[\'"]\)/', $js)) {
      $js = preg_replace('/document.getElementsByTagName\([\'"]([^\'"]+)[\'"]\)/', 'document.getElementById(\'#elementId\')', $js);
  }

    // Find 'addEventListener' and extract the 'triggerValue' in the JS code
    $addEventListenerPattern = '/\.addEventListener\(\'(.*?)\',/';

    if (preg_match($addEventListenerPattern, $js, $matches)) {
        $triggerValue = $matches[1];

        // Replace 'addEventListener' with 'addEventListener' and the 'triggerValue' placeholder
        $js = str_replace(".addEventListener('$triggerValue',", ".addEventListener('triggerValue',", $js);
    }

    // Encode the associative array as a JSON string
//    $jsonString = json_encode($js, JSON_PRETTY_PRINT);

    

    $jsonScript = array(
        "css" => $css,
        "js" => $js,
    );

//    $jsonScript = str_replace(["\""], '', $jsonScript);
    
    // Print the final $js and die to see the result
    print_r($jsonScript);
//    die();
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    return $jsonScript;
}

public function actionCreate()
{
    $model = new ScriptCode;

    // Uncomment the following line if AJAX validation is needed
    // $this->performAjaxValidation($model);

    if (isset($_POST['ScriptCode'])) {
        $model->attributes = $_POST['ScriptCode'];
        $css = $model->css;
        $code = $model->code;

        // Check if the script contains "$(document).ready(function()"
        if (strpos($code, '$(document).ready(function()') !== false) {
            $jsonScript = $this->SaveJsonJquery($css, $code);
        } else {
            $jsonScript = $this->SaveJsonScript($css, $code);
        }

        // Set the 'code' attribute to the JSON script
        $model->code = json_encode($jsonScript, JSON_PRETTY_PRINT);

        if ($model->save()) {
            $this->redirect(['view', 'id' => $model->id]);
        }
    }

    $this->render('create', [
        'model' => $model,
    ]);
}



//	public function actionCreate()
//	{
//		$model=new ScriptCode;
//
//		// Uncomment the following line if AJAX validation is needed
//		// $this->performAjaxValidation($model);
//
//		if(isset($_POST['ScriptCode']))
//		{
//			$model->attributes=$_POST['ScriptCode'];
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

		if(isset($_POST['ScriptCode']))
		{
			$model->attributes=$_POST['ScriptCode'];
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
		$dataProvider=new CActiveDataProvider('ScriptCode');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new ScriptCode('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['ScriptCode']))
			$model->attributes=$_GET['ScriptCode'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return ScriptCode the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=ScriptCode::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param ScriptCode $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='script-code-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}

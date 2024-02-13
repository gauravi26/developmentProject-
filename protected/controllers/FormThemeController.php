$themeData = [];

<?php
//$scriptData=[];
class FormThemeController extends Controller
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
				'actions'=>array('index','view' , 'applyTheme', 'getThemes', 'apply_theme','inspectTheme', 'applyThemeForms','elementCssProperties','applyThemeToForms',
                                    'textCSSProperties', 'customProperties','applyEffect', 'applyScript', 'generateScript', 'reportTheme','applyReportTheme'),
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
	public function actionCreate()
	{
		$model=new FormTheme;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['FormTheme']))
		{
			$model->attributes=$_POST['FormTheme'];
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

		if(isset($_POST['FormTheme']))
		{
			$model->attributes=$_POST['FormTheme'];
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
		$dataProvider=new CActiveDataProvider('FormTheme');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new FormTheme('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['FormTheme']))
			$model->attributes=$_GET['FormTheme'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return FormTheme the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=FormTheme::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param FormTheme $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='form-theme-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}

   function saveScriptToRAM($effectkey, $code){
    global $scriptData;
    $scriptData[$effectkey] = $code;//Saving Script id 
    return $code;
    
}

function getScriptFromRAM($effectkey)
{
    global $scriptData;
    return isset($scriptData[$effectkey])? $scriptData[$effectkey] : null;//Returning Script 
    
}

function actionGenerateScript(){
    
  $controllerId = isset($_GET['controller']) ? $_GET['controller'] : null;
$actionId = isset($_GET['action']) ? $_GET['action'] : null;

// Find the Page Based on Controller Action
$applicationForm = ApplicationForms::model()->findByAttributes(['controller' => $controllerId, 'action' => $actionId]);

if ($applicationForm) {
    // Finding Form Based on the combination of Controller and Action
    $formId = $applicationForm->id;


    // Find Effect Key in the 'Effects' table based on form_id
    $effectKey = Effects::model()->findByAttributes(['form_id' => $formId]);
     $formID = Effects::model()->findByAttributes(['form_id' => $formId]);


    if ($effectKey) {
        $effects = $effectKey->effects;
        $formId = $formID->
//        print_r($effects);
        // Find the 'ScriptCode' based on 'code' (previously named 'effectkey') from 'Effects' table
        $effectScript = ScriptCode::model()->findByAttributes(['field_id' => $formId]);
        $effectScript = ScriptCode::model()->findByAttributes(['effects' => $effects]);
      

//        echo $effectKey;
            if ($effectScript) {
                           $codeData = json_decode($effectScript->code, true);
                           echo CJSON::encode($codeData);
                       }
    }
}

        
    
    
}
function saveThemeToRAM($themeId, $themeStyles) {
    global $themeData;
    $themeData[$themeId] = $themeStyles;
    return $themeStyles;  // Return the styles here
}

// Function to fetch theme data from the PHP array
// Function to fetch theme data from the PHP array
function getThemeFromRAM($themeId) {
    global $themeData;
    
    // Print theme data for debugging
    echo "Theme data:<br>";
    print_r($themeData);
    echo "<br>";

    // Check if theme ID exists in theme data
    if (isset($themeData[$themeId])) {
        return $themeData[$themeId];
    } else {
        echo "Theme with ID $themeId not found.";
        return null;
    }
}

public function actionApplyThemeToForms()
{
            global $themeData;

    $currentTheme = CurrentTheme::model()->find();

    if ($currentTheme !== null) {
        $themeId = $currentTheme->theme_ID;

        // Get the theme styles from RAM
        $themeStyles = $this->getThemeFromRAM($themeId);
//        
//        print_r($themeStyles);
//        die();

        if ($themeStyles === null) {
            // If styles not found in RAM, fetch from database and save to RAM
            $theme = Themes::model()->findByPk($themeId);
            if ($theme !== null) {
                $themeStyles = $this->generateThemeStyles($theme);
                $this->saveThemeToRAM($themeId, $themeStyles);
                 print_r($themeStyles);
        die();

            } else {
                echo "Theme not found for the given theme_ID.";
                return;
            }
        }else{
            
            echo  json_encode(['css' => $themeStyles]);
        }

        // Send the theme styles as JSON response
//print_r($themeData);
//        die();
//        echo json_encode(['css' => $themeStyles]);
    } else {
        echo "Mapping not found for the specified controller and action!";
    }
}

// Function to generate theme styles based on the theme model
private function generateThemeStyles($theme) {
    $elementCssProperties = ElementCssProperties::model()->findAll();
    $themesColumnName = [];
    foreach ($elementCssProperties as $elementCssProperty) {
        $themesColumnName[] = $elementCssProperty->theme_columns;
    }
    $themesColumnName = array_unique($themesColumnName);

    $cssStyles = [];
    foreach ($themesColumnName as $columnName) {
        if ($columnName === 'background_image') {
            // Handle background image separately by adding the URL
            if (isset($theme->$columnName)) {
                $cssStyles[] = "background-image: url('" . $theme->$columnName . "')";
            }
        }
        if ($columnName === 'link_color') {
            if (isset($theme->$columnName)) {
                $cssStyles[] = ":link { color: " . $theme->$columnName . " }";
            }
        } else {
            if (isset($theme->$columnName)) {
                $cssStyle = str_replace('_', '-', $columnName);
                $cssValue = $theme->$columnName;
                $cssStyles[] = "$cssStyle: $cssValue";
            }
        }
    }

    return implode('; ', $cssStyles);
}

function customFormatCss($cssStyles)
{
    $result = '';

    foreach ($cssStyles as $textType => $styles) {
        $result .= $textType . ' {';

        foreach ($styles as $property => $value) {
            if ($property === 'font-size') {
                $result .= 'font-size: ' . $value . 'px; ';
            } else if ($property === 'text_decoration') {
                $result .= 'text-decoration: ' . $value . '; ';
            } else {
                $result .= $property . ': ' . $value . '; ';
            }
        }

        $result = rtrim($result, '; ');  // Remove the last semicolon and space
        $result .= '} ';
    }

    return $result;
}


public function actionTextCSSProperties()
{
    // Retrieve the current theme ID
    $currentTheme = CurrentTheme::model()->find();

    if ($currentTheme !== null) {
        $themeId = $currentTheme->theme_ID;
//        print_r($themeId);
        
        // Retrieve text type CSS properties for the specified theme_ID
        $textCssProperties = ThemeTextCssPropertiesValue::model()->findAll(
            'theme_id = :themeId',
            array(':themeId' => $themeId)
        );

        // Fetch text types from the TextType model
        $textTypes = TextType::model()->findAll(array('select' => 'id, text_type'));

        // Create an associative array of text types for easy access
        $textTypesMap = array();
        foreach ($textTypes as $textType) {
            $textTypesMap[$textType->id] = $textType->text_type;
        }

        // Group CSS properties by text type using the text type names
        $cssStyles = array();

        foreach ($textCssProperties as $cssProperty) {
            $textTypeId = $cssProperty->text_type_id;
            $textTypeName = isset($textTypesMap[$textTypeId]) ? $textTypesMap[$textTypeId] : "Unknown";

            // Replace underscores with dashes in the CSS property name
            $cssStyle = str_replace('_', '-', $cssProperty->text_CSS_Property);
            $cssValue = $cssProperty->value;

            // Add CSS property for the text type
            if (!isset($cssStyles[$textTypeName])) {
                $cssStyles[$textTypeName] = array();
            }

            $cssStyles[$textTypeName][$cssStyle] = $cssValue;
        }

        // Convert CSS styles to a custom string format
        $customCssString = $this->customFormatCss($cssStyles);

        // Convert the custom CSS string to JSON and echo it
        echo $customCssString;
    } else {
        echo "Current theme not found.";
    }
}
 public function actionCustomProperties($controllerId, $actionId)
    {
        $form = ApplicationForms::model()->findByAttributes(array(
            'controller' => $controllerId,
            'action' => $actionId
        ));

        if ($form) {
            $formId = $form->id;

            $properties = CustomPageProperties::model()->findAllByAttributes(array('application_forms_id' => $formId));
            
            $cssStyle = "<style>\n";
            foreach ($properties as $property) {
                
               
                $cssStyle .= "{$property->element} {\n";
                $cssStyle .= "    {$property->css_properties}: {$property->value};\n";
                $cssStyle .= "}\n";
            }
            $cssStyle .= "</style>";
              print_r($cssStyle);
//                die();
            return $cssStyle;
        }

        return '';
    }
public function actionApplyEffect()
{
    $controllerId = isset($_GET['controller']) ? $_GET['controller'] : null;
    $actionId = isset($_GET['action']) ? $_GET['action'] : null;

    // Find the ApplicationForms model that matches the current controller and action
    $applicationForm = ApplicationForms::model()->findByAttributes(['controller' => $controllerId, 'action' => $actionId]);
    
    if ($applicationForm) {
        // Retrieve the form_id for the matched ApplicationForms model
        $formId = $applicationForm->id;

        // Find the matching effect in the Effects model
        $effectModel = Effects::model()->findByAttributes(['form_id' => $formId]);

        if ($effectModel) {
            // Get the selected effect key from the "effects" property
            $selectedEffectKey = $effectModel->effects_code_id;

            // Read the content of effects.js
            $effectContent = file_get_contents('AjaxFiles/effectScript.json');

            // Check if the selected effect key exists in the effectsConfig
            if (strpos($effectContent, "\"$selectedEffectKey\":") !== false) {
                // Find the position of the selected effect key
                $pos = strpos($effectContent, "\"$selectedEffectKey\":");
                $substring = substr($effectContent, $pos);
                // Extract the JavaScript code for the selected effect
                $selectedEffectJS = substr($substring, strlen("\"$selectedEffectKey\":"), strpos($substring, '},') + 1);
                // Send the JavaScript code for the selected effect
                echo $selectedEffectJS;
            } else {
                // Effect not found in the effectsConfig
                echo CJSON::encode(['error' => 'Effect not found']);
            }
        } else {
            // Effect not found for the specified controller and action
            echo CJSON::encode(['error' => 'Effect not found']);
        }
    } else {
        // ApplicationForms entry not found for the specified controller and action
        echo CJSON::encode(['error' => 'ApplicationForms entry not found']);
    }
}





}



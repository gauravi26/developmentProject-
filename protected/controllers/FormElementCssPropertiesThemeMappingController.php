<?php

class FormElementCssPropertiesThemeMappingController extends Controller
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
				'actions'=>array('create','update','elementCssCustomUpdate','getThemeDropBox'),
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
		$model=new FormElementCssPropertiesThemeMapping;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['FormElementCssPropertiesThemeMapping']))
		{
			$model->attributes=$_POST['FormElementCssPropertiesThemeMapping'];
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

		if(isset($_POST['FormElementCssPropertiesThemeMapping']))
		{
			$model->attributes=$_POST['FormElementCssPropertiesThemeMapping'];
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
		$dataProvider=new CActiveDataProvider('FormElementCssPropertiesThemeMapping');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new FormElementCssPropertiesThemeMapping('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['FormElementCssPropertiesThemeMapping']))
			$model->attributes=$_GET['FormElementCssPropertiesThemeMapping'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return FormElementCssPropertiesThemeMapping the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=FormElementCssPropertiesThemeMapping::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param FormElementCssPropertiesThemeMapping $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='form-element-css-properties-theme-mapping-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
         public function actionGetThemeDropBox()
{
    $elementModel = new FormElementCssPropertiesThemeMapping (); // Replace 'YourElementModel' with the actual model class for the form element

     $form = new CActiveForm(); // Add this line to define the $form variable

    $this->render('Get_Theme_DropBox', array(
        'elementModel' => $elementModel,
        'form' => $form, // Pass the $form variable to the view
    ));
}
//public function actionElementCssCustomUpdate()
//{
//    $this->render('tab-view-updatetheme_element_value');
//}
//        public function actionElementCssCustomUpdate($id)
//{
//    $model = Formthememapping::model()->findByPk($id);
//
//    if ($model === null) {
//        // Handle the case when the model is not found, e.g., show an error message or redirect
//    }
//
//    // Save the ID in a variable
//    $selectedId = $model->theme_ID;
//
//    // Assuming you have defined the $form variable or widget earlier in your action
//    $form = new CActiveForm();
//
//    $this->render('tab-view-updatetheme_element_value', array(
//        'model' => $model,
//        'form' => $form,
//        'selectedId' => $selectedId, // Pass the selected ID to the view
//    ));
//}
//public function actionElementCssCustomUpdate($id)
//{
//         $form = new CActiveForm(); // Add this line to define the $form variable
//
//    // Fetch the FormElementCssPropertiesThemeMapping model based on the provided ID
//    $elementModel = FormElementCssPropertiesThemeMapping::model()->findByPk($id);
//    print_r($elementModel);
//    die();
// $themeId = $id;
//        //  print_r($themeId);
//           
//    if ($elementModel === null) {
//        // Handle the case when the model is not found, e.g., show an error message or redirect
//    }
//    if (isset($_POST['save'])){
//               // $themeId = $_POST['theme_ID'];
//           //   $themeId = $_POST['theme_ID'];
////    $form_size_height = $_POST['Form_Size_height'];
////    $form_size_width = $_POST['Form_Size_width'];
////    $form_element_css_properties_id = $_POST['form_element_css_properties_id'];
//
//               
//        
//    }
//
//
//    $this->render('tab-view-updatetheme_element_value', array(
//        'elementModel' => $elementModel,
//        'form' => $form,
//    ));
//}


//public function actionElementCssCustomUpdate($id)
//{
//    // Retrieve the selected theme_ID from the GET parameters
//    $themeID = Yii::app()->request->getParam('themeID');
//
//    // Fetch the FormElementCssPropertiesThemeMapping model based on the provided ID and theme_ID
//    $elementModel = FormElementCssPropertiesThemeMapping::model()->findByPk(array('id' => $id, 'theme_ID' => $themeID));
//
//    // Rest of your code...
//
//    // Render the view and pass the updated elementModel and themeModel
//    $this->render('tab-view-updatetheme_element_value', array(
//        'elementModel' => $elementModel,
//        'themeModel' => $themeModel,
//        'form' => $form,
//    ));
//}
//public function actionElementCssCustomUpdate($themeId)
//{
//    $form = new CActiveForm();
//
//    // Fetch all the FormElementCssPropertiesThemeMapping models with the provided theme_ID
//    $elementModels = FormElementCssPropertiesThemeMapping::model()->findAllByAttributes(array('theme_ID' => $themeId));
////    print_r($elementModels);
////    die();
////        print_r($themeId);
//    $themeId = $themeId;
//    if (empty($elementModels)) {
//        // Handle the case when no models are found, e.g., show an error message or redirect
//       
//        print_r("Theme Not Found");
//      
//        // Handle the case when no models are found, e.g., show an error message or redirect
//        $this->redirect(array('getThemeDropBox'));
//    }
//
//    if (isset($_POST['save'])) {
//        // Process the form submission for each model
//        // Process the form submission for each model
//        foreach ($elementModels as $elementModel) {
//            if ($elementModel->form_element_css_properties_id == 118) {
//                // Update the attributes of each model with the submitted form data
//                $elementModel->form_element_css_properties_id = $_POST['Form_Size_height'];
//                // Save each model individually
//                $elementModel->save();
//            }
//        }
//    }
//
//    $this->render('tab-view-updatetheme_element_value', array(
//        'elementModels' => $elementModels,
//        'form' => $form,
//    ));
//}
///////////////////////////////////////////////////Working ///////////////////////////////////////////////
//public function actionElementCssCustomUpdate($themeId)
//{
//    $form = new CActiveForm();
//    // Fetch all the FormElementCssPropertiesThemeMapping models with the provided theme_ID
//    $elementModels = FormElementCssPropertiesThemeMapping::model()->findAllByAttributes(array(
//        'theme_ID' => $themeId,
//       //'form_element_css_properties_id' => 118
//        
//    ));
////     print_r($elementModels);
////        die();
//    if (empty($elementModels)) {
//        Yii::app()->user->setFlash('error', 'Theme not found.');
//        $this->redirect(array('getThemeDropBox'));
//    }
//
//    if (isset($_POST['save'])) {
//    // Update the value for the specific record
//    $elementModel = FormElementCssPropertiesThemeMapping::model()->findByAttributes(array(
//        'theme_ID' => $themeId,
//        'form_element_css_properties_id' => 118
//    ));
//    if ($elementModel) {
//        $elementModel->value = $_POST['Form_Size_height'];
//        $elementModel->save();
//    }
//
//    // Redirect or show a success message after saving the model
//}
//
//    $this->render('tab-view-updatetheme_element_value', array(
//        'elementModels' => $elementModels,
//        'form' => $form,
//    ));
//}

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////Current /////////////////////////////////////////////////////////////////////////////////////

public function actionElementCssCustomUpdate($themeId)
{
    $form = new CActiveForm();
    // Fetch all the FormElementCssPropertiesThemeMapping models with the provided theme_ID
    $elementModels = FormElementCssPropertiesThemeMapping::model()->findAllByAttributes(array(
        'theme_ID' => $themeId,
       //'form_element_css_properties_id' => 118
        
    ));
//     print_r($elementModels);
//        die();
    if (empty($elementModels)) {
        Yii::app()->user->setFlash('error', 'Theme not found.');
        $this->redirect(array('getThemeDropBox'));
    }
    function getValueByPropertyId($elementModels, $propertyId) {
    foreach ($elementModels as $elementModel) {
        if ($elementModel->form_element_css_properties_id == $propertyId) {
            return $elementModel->value;
        }
    }
    return '';
}


  if (isset($_POST['save'])) {
    //die();
    // Define the mapping of input field names to form_element_css_properties_id values
    $inputFieldMapping = array(

//////////////////////////////////////FORM////////////////////////////////////////////////////////////      
        'Form_Size_width' => 102,
        'Form_Size_padding'=>103,
        'Form_Size_border' => 104,
        'Form_Size_border-radius'=>105,
        'Form_Size_box-size' => 106,
        'Form_Element_Css_Property_position' => 117,
        'Form_Size_height' => 118,
        'Form_Size_margin' => 110,
        'Form_Size_display' => 112,
        'Form_Size_clear' => 116,
        /////////////////////////////
        'Form_Color_font-color'=>109,
        'Form_Color_background-color' => 108,
        'Form_Color_border-color' => 114,
        ///////////////////////////////////////////////////////////////////
        'Form_Font_font-weight'=>111,
        'Form_Font_font-style'=>113,
        'Form_Font_font-size'=>107,
         'Form_Text_text-align'=>115,
         'Form_Text_text-decoration'=>119,
        ///////////////////////////////////////////
         'Form_Transition_box-shadow'=>120,
         'Form_Transition_opacity'=>121,
         'Form_Transition_transition-property'=>122,
         'Form_Transition_transition-duration'=>123,
         'Form_Transition_transition-timing-function'=>124,
         'Form_Transition_resize'=>125,
 ///////////////////////////////////////////////////////////////////////////////Input////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
         'Input_Size_height'=>17,
         'Input_Size_width'=>1,
         'Input_Size_padding'=>2,
          'Input_Size_border'=>3,
          'Input_Size_border-radius'=>4,
          'Input_Size_box-size'=>5,
          'Input_Size_position'=>16,
          'Input_Size_margin'=>9,
         'Input_Size_display'=>11,
         'Input_Size_clear'=>15,
         'Input_Color_font-color'=>8,
         'Input_Color_background-color'=>7,
         'Input_Color_border-color'=>13,
         'Input_Font_font-size'=>6,
         'Input_Font_font-weight'=>10,
         'Input_Font_font-style'=>12,
         'Input_Text_text-align'=>14,
         'Input_Text_text-decoration'=>18,
         'Input_Transition_box-shadow'=>19,
         'Input_Transition_opacity'=>20,
         'Input_Transition_transition-property'=>21,
         'Input_Transition_transition-duration'=>22,
        'Input_Transition_resize'=>24,
        'Input_Transition_transition-timing-function'=>23,
////////////////////////////////////////////////////////////////////////////////////Label///////////////////////////////////////////////////////////////////////////////////////
        'Label_Size_height'=>42,
        'Label_Size_width'=>26,
        'Label_Size_border'=>27,
        'Label_Size_border-radius'=>29,
        'Label_Size_box-size'=>30,
        
        'Label_Size_position'=>41,
        'Label_Size_margin'=>34,
        'Label_Size_display'=>36,
        'Label_Size_clear'=>40,
        'Label_Color_font-color'=>33,
        'Label_Color_background-color'=>32,
        'Label_Color_border-color'=>38,
        'Label_Font_font-size'=>31,
        'Label_Font_font-weight'=>35,
        'Label_Font_font-style'=>37,
        'Label_Text_text-align'=>39,
        'Label_Text_text-decoration'=>43,
         'Label_Transition_box-shadow'=>44,
         'Label_Transition_opacity'=>45,
         'Label_Transition_transition-property'=>46, 
         'Label_Transition_transition-duration'=>47, 
         'Label_Transition_transition-timing-function'=>48,
         'Label_Transition_resize'=>49,
 ///////////////////////////////////////////////////////////////////Select Input///////////////////////////////////////////////////////
//        ''=>1,
//        ''=>1,
//        ''=>1,
//        ''=>1,
//        ''=>1, 
//        ''=>1,
//        ''=>1,
        'SelectInputSize_height'=>67,
        'SelectInputSize_width'=>51,
        'SelectInputSize_padding'=>52,
        'SelectInputSize_border'=>53,
        'SelectInputSize_border-radius'=>54,
        'SelectInputSize_box-size'=>55,
        
        'SelectInputSize_position'=>66,
        'SelectInputSize_margin'=>59,
        'SelectInputSize_display'=>61,
        'SelectInputSize_clear'=>65,
        'SelectInput_Color_font-color'=>58,
        'SelectInput_Color_background-color'=>75,
        'SelectInput_Color_border-color'=>63,
        'SelectInput_Font_font-size'=>56,
        'SelectInput_Font_font-weight'=>60,
        'SelectInput_Font_font-style'=>62,
        'SelectInput_Text_text-align'=>64,
        'SelectInput_Text_text-decoration'=>68,
         'SelectInput_Transition_box-shadow'=>69,
         'SelectInput_Transition_opacity'=>70,
         'SelectInput_Transition_transition-property'=>71, 
         'SelectInput_Transition_transition-duration'=>72, 
         'SelectInput_Transition_transition-timing-function'=>73,
         'SelectInput_Transition_resize'=>74,
        
        
        /////////////////////////////////////////////////
        
        'Radio_ButtonSize_height'=>143,
        'Radio_ButtonSize_width'=>142,
        'Radio_ButtonSize_padding'=>148,
        'Radio_ButtonSize_border'=>144,
        'Radio_ButtonSize_border-radius'=>145,
        //'Radio_ButtonSize_box-size'=>55, -->
        
        'Radio_ButtonSize_position'=>151,
        'Radio_ButtonSize_margin'=>149,
        'Radio_ButtonSize_display'=>150,
        // 'Radio_ButtonSize_clear'=>65, -->
        'Radio_Button_Color_font-color'=>147,
        'Radio_Button_Color_background-color'=>146,
        'Radio_Button_Color_border-color'=>157,
        'Radio_Button_Font_font-size'=>158,
        'Radio_Button_Font_font-weight'=>159,
        'Radio_Button_Font_font-style'=>160,
        'Radio_Button_Text_text-align'=>152,
        //'Radio_Button_Text_text-decoration'=>68, -->
         'Radio_Button_Transition_outline'=>155,
         'Radio_Button_Transition_opacity'=>156,
         'Radio_Button_Transition_cursor'=>154, 
//          'Radio_Button_Transition_transition-duration'=>72, 
//         'Radio_Button_Transition_transition-timing-function'=>73,
//         'Radio_Button_Transition_resize'=>74,
    
        
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        'Check_BoxSize_height'=>128,
        'Check_BoxSize_width'=>127,
       // 'Check_BoxSize_padding'=>129,
        'Check_BoxSize_border'=>128,
        'Check_BoxSize_border-radius'=>130,
       // 'Check_BoxSize_box-size'=>80,
        
        'Check_BoxSize_position'=>136,
        'Check_BoxSize_margin'=>134,
        'Check_BoxSize_display'=>135,
        'Check_BoxSize_clear'=>139,
          'Check_Box_Text_text-align'=>137,
         'Check_Box_Font_font-size'=>146,
        'Check_Box_Color_font-color'=>138,
        
//        'Check_Box_Color_background-color'=>82,
//        'Check_Box_Color_border-color'=>88,
//        'Check_Box_Font_font-size'=>81,
//        'Check_Box_Font_font-weight'=>85,
//        'Check_Box_Font_font-style'=>87,
//        'Check_Box_Text_text-decoration'=>93,
//         'Check_Box_Transition_box-shadow'=>94,
//         'Check_Box_Transition_opacity'=>95,
//         'Check_Box_Transition_transition-property'=>96, 
//         'Check_Box_Transition_transition-duration'=>97, 
//         'Check_Box_Transition_transition-timing-function'=>98,
//         'Check_Box_Transition_resize'=>99,

/////////////////////////////////////////////////Button/////////////////////////////////////
        'ButtonSize_height'=>92,
        'ButtonSize_width'=>76,
        'ButtonSize_padding'=>77,
        'ButtonSize_border'=>78,
        'ButtonSize_border-radius'=>79,
        'ButtonSize_box-size'=>80,
        
        'ButtonSize_position'=>91,
        'ButtonSize_margin'=>84,
        'ButtonSize_display'=>86,
        'ButtonSize_clear'=>90,
        'Button_Color_font-color'=>83,
        'Button_Color_background-color'=>82,
        'Button_Color_border-color'=>88,
        'Button_Font_font-size'=>81,
        'Button_Font_font-weight'=>85,
        'Button_Font_font-style'=>87,
        'Button_Text_text-align'=>89,
        'Button_Text_text-decoration'=>93,
         'Button_Transition_box-shadow'=>94,
         'Button_Transition_opacity'=>95,
         'Button_Transition_transition-property'=>96, 
         'Button_Transition_transition-duration'=>97, 
         'Button_Transition_transition-timing-function'=>98,
         'Button_Transition_resize'=>99,
        ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        
        

        
        // Add more input fields and their corresponding form_element_css_properties_id values here
    );
  

    // Loop through the input field mapping and update the values accordingly
    foreach ($inputFieldMapping as $inputField => $formElementCssPropertiesId) {
            if (isset($_POST[$inputField])) {
                $inputValue = $_POST[$inputField];

                // Check if the input is empty and set the value accordingly
                if (empty($inputValue)) {
                    $inputValue = null; // Set empty values to NULL
                }

                // Update the value for the specific record
                $elementModel = FormElementCssPropertiesThemeMapping::model()->findByAttributes(array(
                    'theme_ID' => $themeId,
                    'form_element_css_properties_id' => $formElementCssPropertiesId
                ));

                if ($elementModel) {
                    $elementModel->value = $inputValue;
                    $elementModel->save();
                }
            }
    }
        echo '<script>alert("Data saved successfully!");</script>';

}

 $this->render('tab-view-updatetheme_element_value', array(
        'elementModels' => $elementModels,
        'form' => $form,
    ));
}
/////////////////////////////////////////////////////////////////Current /////////////////////////////////////////////////////////////////////////////////////
//public function actionElementCssCustomUpdate($themeId)
//{
//    $form = new CActiveForm();
//    // Fetch all the FormElementCssPropertiesThemeMapping models with the provided theme_ID
//    $elementModels = FormElementCssPropertiesThemeMapping::model()->findAllByAttributes(array(
//        'theme_ID' => $themeId,
//    ));
//
//    if (empty($elementModels)) {
//        Yii::app()->user->setFlash('error', 'Theme not found.');
//        $this->redirect(array('getThemeDropBox'));
//    }
//
//    // Define the mapping of input field names to form_element_css_properties_id values
//    $inputFieldMapping = array(
//        'Form_Size_height' => 118,
//        'Form_Size_width' => 102,
//        // Add more input fields and their corresponding form_element_css_properties_id values here
//    );
//
//    // Loop through the input field mapping and populate the values from the database
//    foreach ($inputFieldMapping as $inputField => $formElementCssPropertiesId) {
//        $elementModel = FormElementCssPropertiesThemeMapping::model()->findByAttributes(array(
//            'theme_ID' => $themeId,
//            'form_element_css_properties_id' => $formElementCssPropertiesId
//        ));
//
//        if ($elementModel) {
//            $value = $elementModel->value;
//        } else {
//            // If no record is found for the specific form_element_css_properties_id, set the value to an empty string
//            $value = '';
//        }
//
//        // Set the value attribute of the input field
//        $_POST[$inputField] = $value;
//    }
//
//    if (isset($_POST['save'])) {
//        // Loop through the input field mapping and update the values accordingly
//        foreach ($inputFieldMapping as $inputField => $formElementCssPropertiesId) {
//            if (isset($_POST[$inputField])) {
//                // Update the value for the specific record
//                $elementModel = FormElementCssPropertiesThemeMapping::model()->findByAttributes(array(
//                    'theme_ID' => $themeId,
//                    'form_element_css_properties_id' => $formElementCssPropertiesId
//                ));
//
//                if ($elementModel) {
//                    $elementModel->value = $_POST[$inputField];
//                    $elementModel->save();
//                }
//            }
//        }
//        echo '<script>alert("Data saved successfully!");</script>';
//    }
//
//    $this->render('tab-view-updatetheme_element_value', array(
//        'elementModels' => $elementModels,
//        'form' => $form,
//    ));
//}

}

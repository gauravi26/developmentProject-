<?php
/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */
class GetCurrentTimeController extends Controller
{
    
    public function accessRules()
    {
        return array(
            array('allow', 'actions' => array('index'), 'users' => array('@')),
            array('deny', 'users' => array('*')),
        );
    }
    
        private $internalClock; // Define the internalClock property

        
     public function actionIndex()
    {
         
//        echo "jo";
//    
//        $currentTime = date('Y-m-d H:i:s'); // Get the current time in the desired format
//        $this->render('currentTime', array('currentTime' => $currentTime));
            date_default_timezone_set('Asia/Kolkata');
          $currentTime = date('Y-m-d H:i:s');
        
        // Save the current time in the internal variable
        $this->internalClock = $currentTime;
            $nightTimeRange = $this->getNightTimeRange();

        // Render the view and pass the current time to it
       $response = array(
        'currentTime' => $currentTime,
        'nightStart' => date('H:i:s', $nightTimeRange['start']),
        'nightEnd' => date('H:i:s', $nightTimeRange['end'])
    );
    
    // Return the response as JSON
    echo json_encode($response);

    
    }
    public function actionNightTimeSettings()
{
    $model = new nightTimeSettings(); // Create an instance of the form model

    // Load the current night time settings from the database
    $nightTimeSettings = NightTimeSettings::model()->find();

    if (isset($_POST['nightTimeSettings'])) {
        $model->attributes = $_POST['nightTimeSettings'];
        if ($model->validate()) {
            // Update the night time settings in the database
            if (!$nightTimeSettings) {
                $nightTimeSettings = new NightTimeSettings();
            }
            $nightTimeSettings->attributes = $model->attributes;
            $nightTimeSettings->save();
        }
    }

    $this->render('nightTimeSettings', array(
        'model' => $model,
    ));
}
public function getNightTimeRange()
{
    // Get the current night time range from the database or any other source
    $nightTimeSettings = NightTimeSettings::model()->find();

    if ($nightTimeSettings) {
        // If night time settings are found in the database, use them
        $nightTimeRange = array(
            'start' => strtotime($nightTimeSettings->nightStart),
            'end' => strtotime($nightTimeSettings->nightEnd)
        );
    } else {
        // If no settings are found, use default values
        $nightTimeRange = array(
            'start' => strtotime('23:00:00'),
            'end' => strtotime('06:00:00')
        );
    }

    // Store the updated night time range in the session
    Yii::app()->session['nightTimeRange'] = $nightTimeRange;

    return $nightTimeRange;
}

public function setNightTimeRange($start, $end)
{
    Yii::app()->session['nightTimeRange'] = array(
        'start' => $start,
        'end' => $end
    );
}

    
//     public function actionGetServerTime()
//    {
//             header("Access-Control-Allow-Origin: *");
//header("Content-Type: text/plain;charset=UTF-8");
//$timezone = "Asia/Kolkata"; // Set the timezone to Indian Standard Time
//
//date_default_timezone_set($timezone);
//
//$currentTime = date("Y-m-d H:i:s");
//echo $currentTime;

        // Set the timezone
//        date_default_timezone_set('Asia/Kolkata'); //'Asia/Kolkata'
//
//        // Get the current time in server timezone
//        $currentTime = time();
//
//        // Convert current time to milliseconds for JavaScript
//        $currentMillis = $currentTime * 1000;
//
//        // Return the current time as a JavaScript variable
//        header('Content-Type: application/javascript');
//        echo "var serverTime = {$currentMillis};";
//    }
     public function getInternalClock()
    {
        return $this->internalClock;
    }

}
?>

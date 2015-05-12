<?php
namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use app\models\Source;
use devgroup\ace\AceHelper

class SourceController extends Controller
{
	public function actionIndex()
    {
    	AceHelper::setAceScript(controller, theme);

        $source = new Source;
        $data = $source->find()->all();
        echo $this->render('sources', array(
            'data' => $data
        ));

    }

}


?>
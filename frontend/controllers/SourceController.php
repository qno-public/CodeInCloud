<?php
namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use app\models\Source;

class SourceController extends Controller
{
	public function actionIndex()
    {
        $source = new Source;
        $data = $source->find()->all();
        echo $this->render('sources', array(
            'data' => $data
        ));

    }

}


?>
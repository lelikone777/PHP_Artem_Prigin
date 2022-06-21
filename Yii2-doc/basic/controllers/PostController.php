<?php


namespace app\controllers;
use yii;
use app\models\TestForm;
class PostController extends AppController
{
    public $layout = 'basic';

//    public function beforeAction($action)
//    {
//        if ($action->id == 'index') {
//            $this->enableCsrfValidation = false;
//        }
//        return parent::beforeAction($action);
//    }

    public function actionIndex() {
        if(Yii::$app->request->isAjax) {
           debug($_POST);
//           debug(Yii::$app->request->post());
            return 'test';
        }

        $model = new TestForm();


      return  $this->render('index', compact('model'));
    }
    public function actionShow() {
//        $this->layout = 'basic';
        $this->view->title = 'Одна статья';
        $this->view->registerMetaTag(['name' => 'keywords', 'content' => 'ключевые слова']);
        $this->view->registerMetaTag(['name' => 'description', 'content' => 'описание страницы']);
       return $this->render('show');
    }
}
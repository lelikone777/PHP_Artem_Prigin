<?php


namespace app\controllers;

class MyController extends AppController
{
    public function actionIndex($id = null) {
        $hi = 'Hello World(hi)';
        $names = ['Ivanov', 'Petrov', 'Sidorov'];

        if (!$id) {
            $id = 'test2';
        }
//        return $this->render('index', ['hi' => $hi, 'names' => $names]);
        return $this->render('index',compact('hi', 'names', 'id'));
    }



}
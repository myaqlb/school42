<?php

namespace app\controllers;

use app\models\Events;
use yii\data\Pagination;
use yii\web\Controller;

class EventsController extends Controller
{
    public function actionIndex()
    {
//        $events = Events::find()->all();

        $query = Events::find()->orderBy('id ASC');
        $pages = new Pagination(['totalCount' => $query->count(), 'pageSize' => 2, 'pageSizeParam' => false, 'forcePageParam' => false]);
        $events = $query->offset($pages->offset)->limit($pages->limit)->all();

        return $this->render('index', compact('events', 'pages'));
    }
    public function actionView()
    {
        $id = \Yii::$app->request->get('id');
        $event = Events::findOne($id);
        return $this->render('view', compact('id'));
    }
}
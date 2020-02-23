<?php

namespace app\controllers\api;

use Yii;
use yii\rest\ActiveController;
use \app\models\Book;
use yii\data\ActiveDataProvider;

class BookController extends ActiveController
{
    public $modelClass = 'app\models\Book';

    public function behaviors()
    {
        return array_merge(parent::behaviors(), [
            'corsFilter' => [
                'class' => \yii\filters\Cors::className(),
                'cors' => [
                    // restrict access to
                    //'Origin' => ['http://www.myserver.com', 'https://www.myserver.com'],
                    'Origin' => ['*'],
                    // Allow only POST and PUT methods
                    'Access-Control-Request-Method' => ['POST', 'PUT', 'GET'],
                    // Allow only headers 'X-Wsse'
                    //'Access-Control-Request-Headers' => ['X-Wsse'],
                    // Allow credentials (cookies, authorization headers, etc.) to be exposed to the browser
                    //'Access-Control-Allow-Credentials' => true,
                    // Allow OPTIONS caching
                    'Access-Control-Max-Age' => 3600,
                    // Allow the X-Pagination-Current-Page header to be exposed to the browser.
                    'Access-Control-Expose-Headers' => ['X-Pagination-Current-Page'],
                ],
    
            ],
        ]);
    }    

    public function actions()
    {
        $actions = parent::actions();
    
        // disable some actions
        unset($actions['delete'], $actions['create'], $actions['update']);

        return $actions;
    }      

    /**
     * Search book by title
     *
     * @param string $title
     * @return void
     */
    public function actionSearch($title)
    {
        $this->checkAccess('search');

        return new ActiveDataProvider([
            'query' => Book::find()->where(['like', 'title', $title])
        ]);
        /*
        // more complex search with related and sort on 'name' column
        return new ActiveDataProvider([
            'query' => Contact::find()
                ->where(['like', 'name', $name])
                ->andWhere(['is_natural_person' => true])
                ->with('address'),
            'sort'=> [
                'defaultOrder' => [
                    'name' => SORT_DESC
                ]
            ]
        ]);
        */
    }    
}
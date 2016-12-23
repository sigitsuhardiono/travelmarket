<?php
namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use yii\web\View;
use yii\data\ActiveDataProvider;
use common\models\User;
use common\models\UserForm;

/**
 * User controller
 */
class UserController extends Controller
{

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

	public function actionUpdate($id) {
        $model = new UserForm();
		
		/*$model->fill($id);
		return $this->render('_formUser',[
                        'model' => $model
            ]);*/
		if ($model->load(Yii::$app->request->post()) && $model->save()) {
            //return $this->redirect(['view', 'id' => (string) $model->_id]);
        }
		else {
			/*if(Yii::$app->request->isAjax)*/
			$model->fill($id);
            return $this->renderAjax('_formUser', [
                        'model' => $model
            ]);
        }
    }

}

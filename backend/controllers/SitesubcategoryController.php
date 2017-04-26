<?php

namespace backend\controllers;

use Yii;
use common\models\SitesubCategory;
use common\models\SitesubcategorySearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * SitesubcategoryController implements the CRUD actions for SitesubCategory model.
 */
class SitesubcategoryController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all SitesubCategory models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new SitesubcategorySearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single SitesubCategory model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new SitesubCategory model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new SitesubCategory();

        if ($model->load(Yii::$app->request->post()) ) {
			
			$model->modified_at=date('Y-m-d H:i:s');
			$model->created_by=Yii::$app->user->identity->id;
			if ($model->save()) {
				  \Yii::$app->getSession()->setFlash('page', 'Created successfully');
		
            return $this->redirect(['view', 'id' => $model->category_id]);
			}else{
				   return $this->render('create', [
                'model' => $model,
            ]);
			}
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing SitesubCategory model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) ) {
          	
			$model->modified_at=date('Y-m-d H:i:s');
			$model->modified_by=Yii::$app->user->identity->id;
	
			  if ($model->save()) {
				return $this->redirect(['view', 'id' => $model->category_id]);
			  }else{
				return $this->render('update', [
                'model' => $model,
            ]);
				  
			  }
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing SitesubCategory model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the SitesubCategory model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return SitesubCategory the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = SitesubCategory::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}

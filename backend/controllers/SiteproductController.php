<?php

namespace backend\controllers;

use Yii;
use common\models\SiteProduct;
use common\models\SiteProductSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use common\models\UploadForm;
use yii\web\UploadedFile;
/**
 * SiteProductController implements the CRUD actions for SiteProduct model.
 */
class SiteproductController extends Controller
{
	public $file;
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
     * Lists all SiteProduct models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new SiteProductSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
	

    /**
     * Displays a single SiteProduct model.
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
     * Creates a new SiteProduct model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new SiteProduct();
	
        if ($model->load(Yii::$app->request->post()) ) {
		
			$model->modified_at=date('Y-m-d H:i:s');
			$model->created_by=Yii::$app->user->identity->id;
			$model->file = UploadedFile::getInstance($model, 'product_image');
			$model->product_image = $model->file->name;

				
			if($model->save() && $model->validate() ){
		
				 $model->file->saveAs('uploads/' . $model->file->baseName . '.' . $model->file->extension);
				return $this->redirect(['view', 'id' => $model->product_id]);
			}else{
							
				print_r($model->getErrors());

				
	//die;
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
     * Updates an existing SiteProduct model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
		$old_model=$this->findModel($id);
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) ) {
			
			$model->modified_at=date('Y-m-d H:i:s');
			$model->modified_by=Yii::$app->user->identity->id;
			
			$model->file = UploadedFile::getInstance($model, 'product_image');
			if($model->file!=""){
				$model->product_image = $model->file->name;
			}else{
				$model->product_image = $old_model->product_image;
			}
			if($model->save() && $model->validate() ){
				if($model->file!=""){
				 $model->file->saveAs('uploads/' . $model->file->baseName . '.' . $model->file->extension);
				}
				return $this->redirect(['view', 'id' => $model->product_id]);
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
     * Deletes an existing SiteProduct model.
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
     * Finds the SiteProduct model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return SiteProduct the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = SiteProduct::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}

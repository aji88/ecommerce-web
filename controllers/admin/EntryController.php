<?php
namespace  app\controllers\admin;
use Yii;
use yii\web\Controller;
use app\models\entry\EntryForm;

class EntryController extends Controller{
	public function actionIndex(){
		$model = new EntryForm;
		
		if ($model->load(Yii::$app->request->post()) && $model->validate()) {
			// ��֤ $model �յ�������
		
			// ��Щ��������� ...
		
			return $this->render('result', ['model' => $model]);
		} else {
			// �����ǳ�ʼ����ʾ����������֤����
			return $this->render('index', ['model' => $model]);
		}
	}
}
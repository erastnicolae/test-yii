<?php

namespace app\models;

use yii\components\MyBehavior;
use yii\db\ActiveRecord;

class Test extends ActiveRecord
{
	public function behaviors()
	{
		return [
			'myBehavior4' => [
				'class' => MyBehaviour::className(),
				'prop1' => 'value1',
				'prop2' => 'value2'
				]
		];
	}
}
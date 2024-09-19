<?php

	namespace app\models;

	use yii\db\ActiveRecord;

	class Posts extends ActiveRecord   //database table name :posts
	{
		private $titletitle; // match col name
		private $description;
		private $category;


		public function rules()
		{
			return [
				[['titletitle','description','category'],'required'] // match col name



			];
		}
	}







?>
<?php
use yii\helpers\html;
use yii\widgets\ActiveForm;


 

$this->title='Create';
?>



 <div class="site-index">

 	<h1>create info</h1>

 	<div class="body-content">


 		<?php $form=ActiveForm::begin()?> <!---this code would generate /yii/web/index.php?r=site%2Fcreate to call sitecontroller ----->
 		<div class='row'>

 			<div class='form-group'>
 				
 				<div class='col-lg-6'>   
 				 	<?=$form->field($p,'titletitle'); //the second parad should match the database col name ?>

 				</div>

 			</div>


 		</div>

 		 		<div class='row'>

 			<div class='form-group'>
 				
 				<div class='col-lg-6'>
 				 	
 				 	<?=$form->field($p,'description')->textarea(['row'=>'6']);?>

 				</div>

 			</div>


 		</div>

 		 		<div class='row'>

 			<div class='form-group'>
 				
 				<div class='col-lg-6'>
 				 	<?php $items=['1'=>'e-commerce','2'=>'MVC','3'=>'OOP'];?>
 				 	<?=$form->field($p,'category')->dropDownList($items,['promt'=>'Select']);?>

 				</div>

 			</div>


 		</div>



 		 		 		<div class='row'>

 			<div class='form-group'>
 				
 				<div class='col-lg-6'>
 			 <div class='col-lg-2'>
 			 	<?=Html::submitButton('Create',['class'=>'btn btn-primary']);?>
 			 </div>

 			 <div class='col-lg-2'>
 			 	<a href=<?php echo yii::$app->homeUrl;?> class="btn btn-primary">Go back</a>
 			 </div>
 				</div>

 			</div>


 		</div>

	<?php $form=ActiveForm::end()?>

 	</div>
 </div>
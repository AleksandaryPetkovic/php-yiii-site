<?php
use yii\helpers\html;
use yii\widgets\ActiveForm;

 
 

$this->title='Update';
$this->params['breadcrumbs'][] = $this->title;
?>



 <div class="site-index">

 	<h1>Update info</h1>

 	<div class="body-content">

<!---following code would generate /yii/web/index.php?r=site%2Fupdate to call sitecontroller, the function would match this file title ----->
 		<?php $form=ActiveForm::begin()?> 
 		<div class='row'>

 			<div class='form-group'>
 				
 				<div class='col-lg-6'>   
 				 	<?=$form->field($aView,'titletitle'); 
 				 	// first is model object the second parad should match the database col name, this function would auto match the data with colum name  ?>

 				</div>

 			</div>


 		</div>

 		 		<div class='row'>

 			<div class='form-group'>
 				
 				<div class='col-lg-6'>
 				 	
 				 	<?=$form->field($aView,'description')->textarea(['row'=>'6']);?>

 				</div>

 			</div>


 		</div>

 		 		<div class='row'>

 			<div class='form-group'>
 				
 				<div class='col-lg-6'>
 				 	<?php $items=['1'=>'e-commerce','2'=>'MVC','3'=>'OOP'];?>
 				 	<?=$form->field($aView,'category')->dropDownList($items,['promt'=>'Select']);?>

 				</div>

 			</div>


 		</div>



 		 		 		<div class='row'>

 			<div class='form-group'>
 				
 				<div class='col-lg-6'>
 			 <div class='col-lg-2'>
 			 	<?=Html::submitButton('update',['class'=>'btn btn-primary']);?>
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
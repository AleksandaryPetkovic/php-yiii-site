<?php

/* @var $this yii\web\View */
use yii\helpers\Html;

$this->title = 'Yii';
 
 
 
?>

<?php

if(yii::$app->session->hasFlash('message'))
{
	?>


<div class="alert alert-dismissible alert-success">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <strong><?=yii::$app->session->getFlash('message');?></strong>  
</div>


<?php }?>


<div class="site-index">
 

    <div class="jumbotron">
        <h1>Yii Application</h1>
        <h5><?=$time ?></h5>


 
    </div>
     	<div class='row'>
 		<span><?=Html::a('Create',['/site/create'],['class'=>'btn btn-primary'])?></span>
 	</div>

    <div class="body-content">
 	<?php
 	if(count($data)>0)
 	{
 		echo '<div class="row" ><h3>There are <span class="alert alert-success" role="alert">'.count($data).' </span> data</h3></div>';
		 
 		 
  
 	?>

        <div class="row">
            

            <table class="table table-striped">
				  <thead>
				    <tr>
				      <th scope="col">Id</th>
				      <th scope="col">Title</th>
				      <th scope="col">Description</th>
				      <th scope="col">Category</th>
				      <th scope="col">Action</th>
				    </tr>
				  </thead>

				  <tbody>

<?php 

			foreach ($data as $value) {


?>


				    <tr>
				      <td><?=$value->id?></td>
				      <td><?=$value->titletitle?></td>
				      <td><?=$value->description?></td>
				      <td><?=$value->category?></td>
				      <td>
				      		<span><?=Html::a('view',['view','id'=>$value->id],['class'=>'label label-primary'] ) ?></span>
				      		<span><?=Html::a('update',['update','id'=>$value->id],['class'=>'label label-success']) ?></span>
				      		<span><?=Html::a('delete' ,['delete','id'=>$value->id],['class'=>'label label-danger']) ?></span>
				      		<!-------second param: [SiteController FUNCION NAME, PARAMETERS]----------------->

				      </td>
				    </tr>

				<?php }?>
				  </tbody>


				</table>


            </div>


        <?php 
   		 }

        else
        {
        	echo '<p class="row text-center alert alert-warning col-lg-4" role="alert">No data found!</p>';
        }

        ?>

        </div>

    </div>
</div>



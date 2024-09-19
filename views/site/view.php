 <?php
use yii\helpers\html;
 

 
 

$this->title='View';
$this->params['breadcrumbs'][] = $this->title;
?>

 
<h1>View  </h1>
 
 
 <hr>

<div class=' row col-lg-6  '>
<ul class="list-group">
  <li class="list-group-item d-flex justify-content-between align-items-center">
<h4><span class="label label-primary">id: </span></h4><?=$aView->id?>
 	
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-center">
  	<h4><span class="label label-primary">Title: </span></h4>
   <?=$aView->titletitle?>
 
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-center">
  	<h4><span class="label label-primary">Description: </span></h4>
 <?=$aView->description?>
 
  </li>
    <li class="list-group-item d-flex justify-content-between align-items-center">
    	<h4><span class="label label-primary">Category: </span></h4>
 <?=$aView->category?>
 
  </li>
</ul>

 


 <div class='row'>

 	<a href='<?php echo yii::$app->homeUrl;?>' class='btn btn-primary' >Back </a>
 </div>



</div>
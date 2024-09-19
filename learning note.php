updating  and insert  :$aView->load(yii::$app->request->post())&&$aView->save())


yii::$app->getSession()->setFlash('message','Updated Successfully');


return $this->redirect(['index']);
return $this->redirect(['index','id'=>$aView->id]);
return $this->render('home',['p'=>$posts] ); 

return $this->render('home',['data'=>$posts,'time'=>$time->format('Y-m-d H:i:s')]); 



  yii::$app->getSession()->setFlash('message',"$id Updated Successfully");//  "" can recognize variable 

  yii::$app->session->hasFlash('message')


 delete:   $aView=Posts::findOne($id)->delete();
<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\Posts;

class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        $posts=Posts::find()->all();
        $time= new \DateTime();
        
    // in home page , using $data, $time to get the data. 
        return $this->render('home',['data'=>$posts,'time'=>$time->format('Y-m-d H:i:s')]); 
    }


    public function actionCreate()
    {
        $posts=new Posts(); // create a new one, so $posts->save() would insert new row in database
        $formData=Yii::$app->request->post();

        if($posts->load($formData))
        {
            if($posts->save())
            {
                Yii::$app->getSession()->setFlash('message','Created Successfully');// set session: $_SESSION['message']

                return $this->redirect(['index']);
            }
            else
            {
                Yii::$app->getSession()->setFlash('message','Failed');
            }
         
        }

        return $this->render('create',['p'=>$posts] ); 
    }

    public function actionView($id)
    {
        $aView=Posts::findOne($id);


        return $this->render('view', ['aView'=>$aView]  ); 
    }

    public function actionUpdate($id)
    {
    
        $aView=Posts::findOne($id); // find a exsiting one, so $aView->save() would update the exsiting row. 

        if($aView->load(yii::$app->request->post())&&$aView->save())// model should call load()
        {
           
           yii::$app->getSession()->setFlash('message',"ID:$id is Updated Successfully");
           return $this->redirect(['index','id'=>$aView->id]);

            
        }
        return $this->render('update',['aView'=>$aView]  ); 
    }
    



    public function actionDelete($id)
    {
       

        $aView=Posts::findOne($id)->delete();

        if($aView)
        {
            yii::$app->getSession()->setFlash('message',"ID:$id is already deleted");
            return $this->redirect(['index']);
        }



    }


    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        $model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }
}

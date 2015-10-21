<?php
namespace frontend\controllers;

use common\models\Answers;
use common\models\AnswersUsers;
use common\models\Parts;
use common\models\ResultsPage;
use Yii;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;
use yii\base\InvalidParamException;
use yii\helpers\ArrayHelper;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use yii\web\HttpException;

/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'signup'],
                'rules' => [
                    [
                        'actions' => ['signup'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
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
     * @inheritdoc
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

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionLogin()
    {
        if (!\Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail(Yii::$app->params['adminEmail'])) {
                Yii::$app->session->setFlash('success', 'Thank you for contacting us. We will respond to you as soon as possible.');
            } else {
                Yii::$app->session->setFlash('error', 'There was an error sending email.');
            }

            return $this->refresh();
        } else {
            return $this->render('contact', [
                'model' => $model,
            ]);
        }
    }

    public function actionAbout()
    {
        return $this->render('about');
    }

    public function actionSignup()
    {
        $model = new SignupForm();
        if ($model->load(Yii::$app->request->post())) {
            if ($user = $model->signup()) {
                if (Yii::$app->getUser()->login($user)) {
                    return $this->goHome();
                }
            }
        }

        return $this->render('signup', [
            'model' => $model,
        ]);
    }

    public function actionRequestPasswordReset()
    {
        $model = new PasswordResetRequestForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                Yii::$app->getSession()->setFlash('success', 'Check your email for further instructions.');

                return $this->goHome();
            } else {
                Yii::$app->getSession()->setFlash('error', 'Sorry, we are unable to reset password for email provided.');
            }
        }

        return $this->render('requestPasswordResetToken', [
            'model' => $model,
        ]);
    }

    public function actionResetPassword($token)
    {
        try {
            $model = new ResetPasswordForm($token);
        } catch (InvalidParamException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }

        if ($model->load(Yii::$app->request->post()) && $model->validate() && $model->resetPassword()) {
            Yii::$app->getSession()->setFlash('success', 'New password was saved.');

            return $this->goHome();
        }

        return $this->render('resetPassword', [
            'model' => $model,
        ]);
    }



    /**
     * Displays a single Parts model.
     * @param integer $id
     *
     * @return mixed
     */
    public function actionPart($id)
    {
        $part = $this->findPartModel($id);
        $questions = $part->getQuestions()->all();
        $answers = [];
        $answerIds = [];
        foreach($questions as $question) {
            $answers[] = ArrayHelper::map($question->getAnswers()->all(), 'id', 'answer');
            foreach ($question->getAnswers()->all() as $answer)
            $answerIds[] = $answer->id;
        }

        $answersUsers = ArrayHelper::map(AnswersUsers::find(['created_by' => Yii::$app->getUser()->id, 'answer' => $answerIds])->select('answer')->all(), 'answer', 'answer');

        $pass = true;

        if (Yii::$app->request->getIsPost()) {
            $answersUsers = Yii::$app->request->post()['AnswersUsers'];
            foreach($answersUsers as $answer) {
                if ($answer === '') {
                    $pass = false;
                }
            }
            if ($pass) {
                AnswersUsers::deleteAll(['created_by' => Yii::$app->getUser()->id, 'answer' => $answerIds]);
                foreach ($answersUsers as $answer) {
                    $model = new AnswersUsers();
                    $model->answer = $answer;
                    $model->save();
                }
                $lastPart = Parts::find()->orderBy('id DESC')->limit(1)->one();
                if ($id < $lastPart->id) {
                    return $this->redirect(['part/' . ($id+1)]);
                }
                return $this->redirect(['results/1']);
            }
        }
        return $this->render('part', [
            'questions' => $questions,
            'answers' => $answers,
            'part' => $part,
            'pass' => $pass,
            'answersUsers' => $answersUsers
        ]);
    }

    /**
     * Displays a single Results model.
     * @param integer $id
     *
     * @return mixed
     */
    public function actionResults($id)
    {
        $resultsPage = $this->findResultsPageModel($id);
        $resultsFrom = $resultsPage->getResultFroms()->all();
        $results = $resultsPage->getResults()->all();

        // Get all the Answer IDs from which we can retrieve results
        $answerIds = [];
        foreach ($resultsFrom as $fromPart) {
            $questions = $fromPart->getPart0()->one()->getQuestions()->all();
            foreach ($questions as $question) {
                $answers = $question->getAnswers()->all();
                foreach ($answers as $answer) {
                    $answerIds[] = $answer->id;
                }
            }
        }

        // Get all the answers provided by the user for this result
        $answersUsers = AnswersUsers::find()->where([
            'answer' => $answerIds,
            'created_by' => Yii::$app->getUser()->id
        ])->select('answer')->all();

        // Provide the mostly A's, B's etc. or just the selected answer
        switch ($id) {
            case 1:
                $options = [0, 0, 0, 0];
                foreach ($answersUsers as $answerUser) {
                    switch (Answers::findOne($answerUser->answer)->answer_num) {
                        case 1:
                            $options[0]++;
                            break;
                        case 2:
                            $options[1]++;
                            break;
                        case 3:
                            $options[2]++;
                            break;
                        case 4:
                            $options[3]++;
                            break;
                    }
                }
                $selected = array_search(max($options), $options, null);
                break;
            // Get the first answer of the 3rd Part !!HARDCODED!! (bad)
            case 2:
                $selected = Answers::findOne($answersUsers[0]->answer)->answer_num;
                break;
            // Get the second answer of the 3rd Part !!HARDCODED!! (bad)
            case 3:
                $selectedName = Answers::findOne($answersUsers[1]->answer)->answer;
                foreach ($results as $key => $result) {
                    if ($result->name === $selectedName) {
                        $selected = $key;
                    }
                }
                break;
        }

        return $this->render('results'.$id, [
            'resultsPage' => $resultsPage,
            'resultsFrom' => $resultsFrom,
            'results' => $results,
            'selected' => $selected,
            'id' => $id
        ]);
    }

    /**
     * Displays the more page
     *
     * @return mixed
     */
    public function actionMore()
    {
        $resultsPage = $this->findResultsPageModel(4);
        $resultsFrom = $resultsPage->getResultFroms()->all();
        $results = $resultsPage->getResults()->all();
        return $this->render('more', []);
    }

    /**
     * Finds the Parts model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Parts the loaded model
     * @throws HttpException if the model cannot be found
     */
    protected function findPartModel($id)
    {
        if (($model = Parts::findOne($id)) !== null) {
            return $model;
        } else {
            throw new HttpException(404, 'The requested page does not exist.');
        }
    }

    /**
     * Finds the ResultsPage model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Parts the loaded model
     * @throws HttpException if the model cannot be found
     */
    protected function findResultsPageModel($id)
    {
        if (($model = ResultsPage::findOne($id)) !== null) {
            return $model;
        } else {
            throw new HttpException(404, 'The requested page does not exist.');
        }
    }
}

<?php
namespace frontend\controllers;

use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use yii\filters\Cors;
use yii\data\Pagination;
use yii\helpers\Url;
//---model
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;
use frontend\models\WisataForm;
use frontend\models\UmrohForm;
use frontend\models\SimpanWisataForm;
//---active record
use common\models\PwKategori;
use common\models\PwPaket;
use common\models\Kota;
use common\models\TrPaketwisata;

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
            'corsFilter' => [
                'class' => Cors::className(),
                'cors' => [
                    // restrict access to
                    'Origin' => ['*'],
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

    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex()
    {
        $model = new WisataForm();
        $kategori = PwKategori::find()->all();
        $kota = Kota::find()->all();
        if ($model->load(Yii::$app->request->post())) {
           return $this->redirect(Url::to(['list-paket-wisata', 'kategori' => $model->id_kategori]));
        }
        else{
            return $this->render('index' ,[
                    'kategori' => $kategori,'kota' => $kota,'model'=>$model
            ]);
        }
    }

    /**
     * Logs in a user.
     *
     * @return mixed
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
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

    /**
     * Logs out the current user.
     *
     * @return mixed
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return mixed
     */
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

    /**
     * Displays about page.
     *
     * @return mixed
     */
    public function actionAbout()
    {
        return $this->render('about');
    }

    /**
     * Signs user up.
     *
     * @return mixed
     */
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

    /**
     * Requests password reset.
     *
     * @return mixed
     */
    public function actionRequestPasswordReset()
    {
        $model = new PasswordResetRequestForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                Yii::$app->session->setFlash('success', 'Check your email for further instructions.');

                return $this->goHome();
            } else {
                Yii::$app->session->setFlash('error', 'Sorry, we are unable to reset password for email provided.');
            }
        }

        return $this->render('requestPasswordResetToken', [
            'model' => $model,
        ]);
    }

    /**
     * Resets password.
     *
     * @param string $token
     * @return mixed
     * @throws BadRequestHttpException
     */
    public function actionResetPassword($token)
    {
        try {
            $model = new ResetPasswordForm($token);
        } catch (InvalidParamException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }

        if ($model->load(Yii::$app->request->post()) && $model->validate() && $model->resetPassword()) {
            Yii::$app->session->setFlash('success', 'New password was saved.');

            return $this->goHome();
        }

        return $this->render('resetPassword', [
            'model' => $model,
        ]);
    }


    /**
     * Displays daftar paket wisata.
     *
     * @return mixed
    */
    public function actionListPaketWisata($kategori)
    {
        $model = new WisataForm();
        $dtkategori = PwKategori::find()->all();
        $kota = Kota::find()->all();
        $PwPaket = new PwPaket();
        $query =  $PwPaket->GetListPaket($kategori);
        $countQuery = clone $query;
        $pages = new Pagination(['totalCount' => $countQuery->count()]);
        $pages->params = (['kategori'=>$kategori,'page'=>$pages->offset,'per-page'=>$pages->limit]);
        $pages->route = 'site/list-paket-wisata/';
        $pages->setPageSize(2);
        $DataPaket = $query->offset($pages->offset)
            ->limit($pages->limit)
            ->all();
        return $this->render('list-paket',['pages' => $pages,'model'=>$model,'DataPaket'=>$DataPaket,'kategori' => $dtkategori,'kota' => $kota]);              
    }


    /**
     * Displays detail paket wisata.
     *
     * @return mixed
    */
    public function actionDetailPaketWisata($id)
    {
        $PwPaket = new PwPaket();
        $DataPaket =  $PwPaket->GetPaketById($id);
        return $this->render('detail-paket',['DataPaket'=>$DataPaket]);              
    }

    /**
     * Displays detail paket wisata.
     *
     * @return mixed
    */
    public function actionPesanPaketWisata($id)
    {
        $model = new SimpanWisataForm();
        $PwPaket = new PwPaket();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            $TrPaketwisata = new TrPaketwisata();
            $TrPaketwisata->kode = "PW-".time();
            $TrPaketwisata->nama_pemesan = $model->nama_pemesan;
            $TrPaketwisata->telp1 = $model->telp1;
            $TrPaketwisata->telp2 = $model->telp2;
            $TrPaketwisata->alamat_jemput = $model->alamat_jemput;
            $TrPaketwisata->detail_jemput = $model->detail_jemput;
            $TrPaketwisata->harga = $model->harga;
            $TrPaketwisata->metode_bayar = $model->metode_bayar;
            $TrPaketwisata->paket_id = $model->paket_id;
            $TrPaketwisata->keterangan = $model->keterangan;
            $TrPaketwisata->created_at = time();
            $TrPaketwisata->save();
            Yii::$app->getSession()->setFlash('no_order', $TrPaketwisata->kode);
            $this->redirect(array("/site/pemesanan-paket-sukses?by=".$TrPaketwisata->metode_bayar));
        }
        else{
            $DataPaket =  $PwPaket->GetPaketById($id);
            return $this->render('pesan-paket-1',['DataPaket'=>$DataPaket,'model'=>$model]);              
        }
    }

    /**
     * Displays pemesanan paket wista sukses.
     *
     * @return mixed
    */
    public function actionPemesananPaketSukses($by)
    {
        return $this->render('pemesanan-paket-sukses',['by'=>$by]);              
    }

        /**
     * Displays umroh.
     *
     * @return mixed
     */
    public function actionUmroh()
    {
        $model = new UmrohForm();
        $kota = Kota::find()->all();
        if ($model->load(Yii::$app->request->post())) {
           return $this->redirect(Url::to(['list-paket-umroh', 'kota' => $model->id_kota]));
        }
        else{
            return $this->render('umroh' ,[
                'kota' => $kota,'model'=>$model
            ]);
        }
    }


    /**
     * Displays daftar layanan umroh.
     *
     * @return mixed
    */
    public function actionListPaketUmroh($kota)
    {
        $model = new UmrohForm();
        $dtkategori = PwKategori::find()->all();
        $listkota = Kota::find()->all();
        $PwPaket = new PwPaket();
        $query =  $PwPaket->GetListUmroh($kota);
        $countQuery = clone $query;
        $pages = new Pagination(['totalCount' => $countQuery->count()]);
        $pages->params = (['kota'=>$listkota,'page'=>$pages->offset,'per-page'=>$pages->limit]);
        $pages->route = 'site/list-paket-umroh/';
        $pages->setPageSize(2);
        $DataPaket = $query->offset($pages->offset)
            ->limit($pages->limit)
            ->all();
        return $this->render('list-umroh',['pages' => $pages,'model'=>$model,'DataPaket'=>$DataPaket,'kota' => $listkota]);              
    }


    /**
     * Displays detail paket umroh.
     *
     * @return mixed
    */
    public function actionDetailPaketUmroh($id)
    {
        $PwPaket = new PwPaket();
        $DataPaket =  $PwPaket->GetPaketById($id);
        return $this->render('detail-umroh',['DataPaket'=>$DataPaket]);              
    }

   /**
     * Displays detail paket umroh.
     *
     * @return mixed
    */
    public function actionPesanPaketUmroh($id)
    {
        $model = new SimpanWisataForm();
        $PwPaket = new PwPaket();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            $TrPaketwisata = new TrPaketwisata();
            $TrPaketwisata->kode = "Pu-".time();
            $TrPaketwisata->nama_pemesan = $model->nama_pemesan;
            $TrPaketwisata->telp1 = $model->telp1;
            $TrPaketwisata->telp2 = $model->telp2;
            $TrPaketwisata->alamat_jemput = $model->alamat_jemput;
            $TrPaketwisata->detail_jemput = $model->detail_jemput;
            $TrPaketwisata->harga = $model->harga;
            $TrPaketwisata->metode_bayar = $model->metode_bayar;
            $TrPaketwisata->paket_id = $model->paket_id;
            $TrPaketwisata->keterangan = $model->keterangan;
            $TrPaketwisata->created_at = time();
            $TrPaketwisata->save();
            Yii::$app->getSession()->setFlash('no_order', $TrPaketwisata->kode);
            $this->redirect(array("/site/pemesanan-umroh-sukses?by=".$TrPaketwisata->metode_bayar));
        }
        else{
            $DataPaket =  $PwPaket->GetPaketById($id);
            return $this->render('pesan-umroh-1',['DataPaket'=>$DataPaket,'model'=>$model]);              
        }
    }

    /**
     * Displays pemesanan paket umroh sukses.
     *
     * @return mixed
    */
    public function actionPemesananUmrohSukses($by)
    {
        return $this->render('pemesanan-umroh-sukses',['by'=>$by]);              
    }


}

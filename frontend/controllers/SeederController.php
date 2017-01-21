<?php
namespace frontend\controllers;

use Yii;
use Faker;
use yii\web\Controller;

/**
 * Seeder controller
 */
class SeederController extends Controller
{
	/**
	 * Banyak data yang ingin di-generate.
	 * Note: batchInsert() dapat men-generate maksimal ~9000 data sekaligus.
	 *
	 * @var integer
	 */
	private $countMobil      = 10;
	private $countKota       = 30;
	private $countCompany    = 50;
	private $countOverarea   = 200;
	private $countPwKategori = 6;
	private $countPwPaket    = 100;
	private $countTrTravel   = 300;

	/**
	 * Generate all seeders.
	 *
	 * @return void
	 */
	public function actionGenerate()
	{
		$start = microtime(true);

		$this->seederMobil();
		$this->seederKota();
		$this->seederCompany();
		$this->seederOverarea();

		$this->seederPwKategori();
		$this->seederPwPaket();
		$this->seederTrTravel();

		$elapsed = microtime(true) - $start;
		echo 'Done. Elapsed time = '.$elapsed;
	}



	/**
	 * Seeder tabel Mobil.
	 *
	 * @return void
	 */
	private function seederMobil()
	{
		$faker = Faker\Factory::create($this->locale);
		$data  = [];

		for ($a = 0; $a < $this->countMobil; $a++)
		{
			$data[$a] = [
				'Mobil '.$faker->word,
				$faker->word,
				time(),
				time(),
			];
		}

		Yii::$app->db->createCommand()->batchInsert('mobil', [
			'nama',
			'gambar',
			'created_at',
			'updated_at',
		], $data)->execute();
	}

	/**
	 * Seeder tabel Kota.
	 *
	 * @return void
	 */
	private function seederKota()
	{
		$faker = Faker\Factory::create($this->locale);
		$data  = [];

		for ($a = 0; $a < $this->countKota; $a++)
		{
			$data[$a] = [
				$faker->city,
				time(),
				time(),
			];
		}

		Yii::$app->db->createCommand()->batchInsert('kota', [
			'nama',
			'created_at',
			'updated_at',
		], $data)->execute();
	}

	/**
	 * Seeder tabel Company.
	 *
	 * @return void
	 */
	private function seederCompany()
	{
		$faker = Faker\Factory::create($this->locale);
		$data  = [];

		for ($a = 0; $a < $this->countCompany; $a++)
		{
			$data[$a] = [
				$faker->company,
				$faker->address,
				mt_rand(1, $this->countKota),
				$faker->phoneNumber,
				$faker->name,
				$faker->userName,
				$faker->uuid,
				$faker->md5,
				$faker->md5,
				$faker->email,
				time(),
				time(),
			];
		}

		Yii::$app->db->createCommand()->batchInsert('company', [
			'nama',
			'alamat',
			'id_kota',
			'telp',
			'pimpinan',
			'username',
			'auth_key',
			'password_hash',
			'password_reset_token',
			'email',
			'created_at',
			'updated_at',
		], $data)->execute();
	}

	/**
	 * Seeder tabel Overarea.
	 *
	 * @return void
	 */
	private function seederOverarea()
	{
		$faker = Faker\Factory::create($this->locale);
		$data  = [];

		for ($a = 0; $a < $this->countOverarea; $a++)
		{
			$data[$a] = [
				$faker->state,
				mt_rand(1, $this->countKota),
				mt_rand(1, $this->countCompany),
				time(),
				time(),
			];
		}

		Yii::$app->db->createCommand()->batchInsert('overarea', [
			'kelurahan',
			'kota_id',
			'company_id',
			'created_at',
			'updated_at',
		], $data)->execute();
	}

	/**
	 * Seeder tabel PwKategori.
	 *
	 * @return void
	 */
	private function seederPwKategori()
	{
		$faker = Faker\Factory::create($this->locale);
		$data  = [];

		for ($a = 0; $a < $this->countPwKategori; $a++)
		{
			$data[$a] = [
				$faker->word,
				time(),
				time(),
			];
		}

		Yii::$app->db->createCommand()->batchInsert('pw_kategori', [
			'nama',
			'created_at',
			'updated_at',
		], $data)->execute();
	}

	/**
	 * Seeder tabel PwPaket.
	 *
	 * @return void
	 */
	private function seederPwPaket()
	{
		$faker = Faker\Factory::create($this->locale);
		$data  = [];

		for ($a = 0; $a < $this->countPwPaket; $a++)
		{
			$data[$a] = [
				'Paket '.$faker->words(2, true),
				$faker->text(),
				mt_rand(1, 10) * 1000,
				mt_rand(1, $this->countPwKategori),
				mt_rand(1, $this->countCompany),
				time(),
				time(),
			];
		}

		Yii::$app->db->createCommand()->batchInsert('pw_paket', [
			'nama',
			'deskripsi',
			'harga',
			'kategori_id',
			'company_id',
			'created_at',
			'updated_at',
		], $data)->execute();
	}

	/**
	 * Seeder tabel TrTravel.
	 *
	 * @return void
	 */
	private function seederTrTravel()
	{
		$faker = Faker\Factory::create($this->locale);
		$data  = [];

		for ($a = 0; $a < $this->countTrTravel; $a++)
		{
			$data[$a] = [
				mt_rand(1, $this->countKota),
				mt_rand(1, $this->countKota),
				mt_rand(1, $this->countCompany),
				mt_rand(1, 10) * 1000,
				time(),
				time(),
			];
		}

		Yii::$app->db->createCommand()->batchInsert('tr_travel', [
			'kota_asal',
			'kota_tujuan',
			'company_id',
			'harga',
			'created_at',
			'updated_at',
		], $data)->execute();
	}

	/**
	 * Localization (Indonesia).
	 *
	 * @var string
	 */
	private $locale = 'id_ID';

}

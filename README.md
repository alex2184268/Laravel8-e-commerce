<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

##使用Laradock建立環境

##學習筆記

將測試資料注入Database [Seed|資料庫: 資料填充](https://laravel.tw/docs/5.2/seeding)


利用Laravel Artisan指令生成一個Seeder
假設現在要再Users的Table中新增一筆使用者
```sh
 php artisan make:seeder UserSeeder
Seeder created successfully.
```
然後移至Database/seeders底下找到UserSeeder.php編輯自己想要新增的資料
這邊因為需要insert所以要多引用DB這個類別，還有密碼的Hash也需要額外引入，這要注意!
```sh
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            'name' => 'hiroma',
            'email' => 'hiroma@test.com',
            'password' => Hash::make('12345'),
        ]);
    }
}
```
然後回到終端機再輸入Artisan指令將資料建入DB
```sh
 php artisan make:seeder 123Seeder
Seeder created successfully.
```



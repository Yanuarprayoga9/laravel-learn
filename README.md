<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

### npm instal
### php artisan migrate // php artisan migrate::fresh
### npm run dev
### php artisan serve

# CATATAN PENAMAAN FILE

# Belajar Laravel

## Routes

### php artisan migrate:fresh
### php artisan migrate:fresh --seed
## Migrate database
create table php = artisan make:migration create_flights
add column php = artisan make:migration add_column_to_students_table 
The migrate:fresh command will drop all tables from the database and then execute the migrate command:

## RELASI DB
php artisan make:migration add_class_id_colum_to_students_table (membuat relasi id class ke tabel students )
### $table->unsignedBigInteger('class_id')->required();
membuat column class id  
### $table->foreign('class_id')->references('id')->on('class'); 
mengisi user id dengan referensi id dari table class

## memberi aturan unique
function up = $table->string('name')->unique->change();
         down = $table->dropUnique('class_name_unique');
# MVC
## MODEL
### Membuat Model = php artisan make:model Student

## CONTROLLER
### php artisan make:controller StudentContoller

### Membuat Route Controller


## DB SEEDER
### Tambah class
php artisan make:seeder ClassSeeder
 ClassRoom::insert([
            'name'=>'yanuar prayoga'
        ]);
### truncate db
 Schema::disableForeignKeyConstraints();
        Student::truncate();
        Schema::enableForeignKeyConstraints();

### Mengisi data denga factory
php artisan make:factory ClassFactory --model=ClassRoom

### Eloquent 

<!-- // Retrieve all users
$users = User::all();

// Find a user by ID
$user = User::find(1);

// Create a new user
$newUser = User::create([
    'name' => 'John Doe',
    'email' => 'john@example.com',
]);

 Update a user's email
$user->update(['email' => 'newemail@example.com']);

Delete a user
$user->delete(); --> -->

### query builder
<!-- Retrieve all users using Query Builder
$users = DB::table('users')->get();

Find a user by ID
$user = DB::table('users')->find(1);

Insert a new user into the 'users' table
DB::table('users')->insert([
    'name' => 'John Doe',
    'email' => 'john@example.com',
]);

Update a user's email
DB::table('users')->where('id', 1)->update(['email' => 'newemail@example.com']);

Delete a user
DB::table('users')->where('id', 1)->delete();

 -->
## search method 
        $student = Student::where('name','LIKE','%'.$keyword.'%')->paginate(10);
# upload foto 
1. kita harus mengganti file systems 
2.   if ($request->file('photo')) {
            $extension  = $request->file('photo')->getClientOriginalExtension();
            $newName = $request->name . '-' . now()->timestamp . '.' . $extension;
            $request->file('photo')->storeAs('photo', $newName);
        }
3. public disk = php artisan storage:link
4. to show         <img sc="{{ asset('storage/photo/'.$studentList->image) }}" alt="" style="width: 100px; height:100px;" class="mx-auto d-block">
5. 


## middleware
php artisan make:model Role
$ php artisan make:migration add_role_id_column_to_users_table;

### akun admin

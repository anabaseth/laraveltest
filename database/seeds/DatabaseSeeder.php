<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		// $this->call('UserTableSeeder');
                
                $users=array(
                    ['id' => 1,'name' => 'name', 'email' =>'name@mail.com','password' =>'','created_at' => new DateTime, 'updated_at' => new DateTime],
                    ['id' => 2,'name' => 'machin', 'email' =>'machin@mail.com','password' =>'','created_at' => new DateTime, 'updated_at' => new DateTime]
                );
                DB::table('users')->insert($users);
                
                $comments=array(
                    [ 'text' => 'comment1', 'created_at' => new DateTime, 'updated_at' => new DateTime,'user_id'=>1],
                    [ 'text' => 'comment2', 'created_at' => new DateTime, 'updated_at' => new DateTime,'user_id'=>2],
                    [ 'text' => 'comment3', 'created_at' => new DateTime, 'updated_at' => new DateTime,'user_id'=>1],
                    [ 'text' => 'comment4', 'created_at' => new DateTime, 'updated_at' => new DateTime,'user_id'=>2],
                    [ 'text' => 'comment5', 'created_at' => new DateTime, 'updated_at' => new DateTime,'user_id'=>1],
                    [ 'text' => 'comment6', 'created_at' => new DateTime, 'updated_at' => new DateTime,'user_id'=>2]
                );
                
                DB::table('comments')->insert($comments);
	}

}

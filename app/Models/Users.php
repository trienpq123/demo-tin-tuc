<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Users extends Model
{
    use HasFactory;
    private $table;
    function __construct()
    {   
        $this->table = 'users';
    }
    public function getAllUsers($filter = null, $keyword = null, $sortByArr = null){
        // return DB::select('SELECT * FROM'.$this->table);
        $users = DB::table($this->table)
        ->select('users.*', 'groups.name as group_name')
        ->join('groups','users.group_id','=','groups.id')
        ->orderBy('create_at','DESC')
        ->get();

        if(!empty($sortByArr) & is_array($sortByArr)){
            if(!empty($sortByArr['sortBy'])){
                
            };
        };
        return $users;
    }

    public function insertUser(){
        
    }

    
    // public function learnQueryBuilder(){
    //     // Lấy dữ liệu của một talbe
    //     // DB::talbe($this->table)
    //     // ->where('id',19)
    //     // -? where('id','=',19)
    //     // -> where('id','<>',19)
    //     // ->orWhere('id',20)
    //     // ->where(function($query){
    //     //     $query->where('id','<','20')->orWhere('id','>','20');
    //     // })
    //     // ->whereBetween('id',[18,20])
    //     // ->whereDate('update_at','2022-01-21')
    //     // ->get();
    //     // Lấy 1 dữ liệu của table
    //     // DB::table($this->table)->first();

    //     // INSERT
    //     DB::table($this->table)->insert([
    //         'fullname' => 'NGUYỄN VĂN A',
    //         'email' => 'anhtrienpq123@gmail.com',
    //         'create_at' => date('Y-m-d H:i:s')
    //     ]);

    //     // INSERT LAST ID
    //     $lastid = DB::getPdo()->lastInsertId();

    //     // UPDATE
    //     DB::table($this->table)->where('id','18')->update([
    //         'fullname' => 'Nguyuen minh trien',
    //         'Email' => 'trienpq123@gmail.com',
    //         'update_at' => date('Y-m-d H:i:s')
    //     ]);

    //     // DELETE

    //     DB::table($this->table)->where('id',28)->delete();

    //     // ĐẾM BẢN GHI

    //     $count = DB::table($this->table)->where('id',18)->count();

    //     // DB Row Query
    //     DB::table($this->table)
    //     ->select(DB::raw('count(id) as email_count'))
    //     ->groupBy('email')
    //     ->get();
    // }
}

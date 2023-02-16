<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;

class Content extends BaseController
{
    public function view(){
        return view('admin/Content_Add');
    }
    public function status(){
        $data = DB::table('content')->get();
        $data['result'] = json_decode(json_encode($data),true);
        return view('admin/Content_Status',$data);
    }
    public function contentinsert(){
        $status = '0';
        if($_POST['status'] == 'ACTIVE'){
            $status = '1';
        }
        $data = array(
            'page_title' => $_POST['pagetitle'],
            'page_content' => $_POST['content'],
            'title' => $_POST['title'],
            'description' => $_POST['desc'],
            'keywords' => $_POST['keywords'],
            'status' => $status,
        );
        if($_POST['autoid'] == ''){
            DB::table('content')->insert($data);
        }else{
            DB::table('content')->where('id',$_POST['autoid'])->update($data);
        }
        $result['status'] = '200';
        return $result;
    }
    public function delete_content($id){
        $data = array(
            'id' => $id,

        );
        DB::table('content')->delete($data);
        return $data;
    }
    public function content_edit($id){
        $data['result'] = DB::table('content')->where('id',$id)->first();
        return view('admin/Content_Add',$data);
    }
}
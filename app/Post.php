<?php

namespace App;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

	/**
     * Get all articles from DB
     *
     * @return
     */
    public static function get_all()
    {
     
     	// sample array
     	$result = array(
            'test1' => array(    
                'headline' => 'みかん',
                'thumnail' => 'eyecatch_s.jpg',
                'link' => '2',
                'date' => '2018.02.07',
            ),
            'test2' => array(    
                'headline' => 'りんごの食べ方',
                'thumnail' => 'eyecatch_s.jpg',
                'link' => '2',
                'date' => '2018.02.07',
            ),
        );

        //$posts = Post::orderBy('id', 'desc')->paginate(8);
    	//$result = DB::table('posts')
    	//			->select('*');

    	return $result;
    }

    /**
     * Find specified article from DB
     *
     * @return
     */
    public static function find($id)
    {
        $result = DB::table('posts')
            		->select('*')
           			->where('id', '=', $id)
            		->first();

        return $result;
    }
}

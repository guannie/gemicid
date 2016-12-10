<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Model\Amino;
use App\Model\Gene;
use JasperPHP\JasperPHP;
use Illuminate\Support\Facades\Input;

Route::get('/', function () {
    return view('preloader.preloaderIndex');
});

/*need to resolve page redirect after login*/
Route::get('/index', 'IndexController@index');

Route::get('/lg', function () {
    return view('preloader.preloaderLogin');
});

Route::get('/rg', function () {
    return view('preloader.preloaderRegister');
});


Route::Auth();




Route::get('home', 'HomeController@index');


Route::get('protected', ['middleware' =>['auth'], function(){
	return view('home');
}]);

Route::get('protected', ['middleware' => ['auth', 'admin'], function() {
    return view('admin.home');
}]);



Route::get('gene-expression', ['middleware' => ['auth'], function() {
    return view('pages.gene-expression');
}]);

Route::get('gene-comparison', ['middleware' => ['auth'], function() {
    return view('pages.gene-comparison');
}]);

Route::get('amino-acid', ['middleware' => ['auth'], function() {
    return view('pages.amino-acid');
}]);

Route::get('amino-view/{symbol}', [
	'as'   => 'amino-view',
	'uses' => function($symbol){
		
		//$amino = Amino::All()->first();

		$amino = Amino::where('symbol', $symbol)->first();   /*sme mcm select all*/
		return view('pages.amino-view', array('amino'=>$amino));
},
	'middleware' => ['auth']
	]);

Route::get('user_geneshow/{id}', [
	'as'   => 'user_geneshow',
	'uses' => 'GeneController@user_geneshow',
	'middleware' => ['auth']
	]);


Route::get('/test', function() {
	return view('test');
});



Route::group(['middleware' => 'App\Http\Middleware\Admin'], function () {
        
    });


/*need to resolve authentication prob*/
Route::get('/homeAdmin', ['as' =>'admin.page', 'uses' => 'AdminController@index', 'middleware' => ['auth', 'admin']]);

Route::get('amino_create', [  /*student link, unique*/
	'as' => 'amino_create', /*name shortform, nak pggl gne niyh*/
	'uses' => 'AminoController@amino_create',  /*name controller, ikut ape yg kita nak@name function*/
	]); /*return form*/

Route::post('amino_create_process', [  /*student link, unique*/
	'as' => 'amino_create_process', /*name shortform, nak pggl gne niyh*/
	'uses' => 'AminoController@amino_create_process',  /*name controller, ikut ape yg kita nak@name function*/
	'middleware' => ['auth', 'admin']
	]); /*return form*/


Route::get('amino_index', [
	'as'   => 'amino_index',
	'uses' => 'AminoController@amino_index',
	'middleware' => ['auth', 'admin']
	]);

// Route::get ('/admin', function (){
// 	return view('admin.amino_index')
// 	->with('amino', Amino::paginate(5));
// });

//Route::get('amino_index', 'AminoController@amino_index');

Route::get('showAll', [
	'as'   => 'showAll',
	'uses' => 'AminoController@showAll',
	'middleware' => ['auth', 'admin']
	]);

Route::get('amino_show/{id}', [ /*nak paparkan stu data based id*/
	'as'  => 'amino_show',
	'uses'=> 'AminoController@amino_show',
	'middleware' => ['auth', 'admin']
	]);


Route::get('amino_edit/{id}', [
	'as'   => 'amino_edit',
	'uses' => 'AminoController@amino_edit',
	'middleware' => ['auth', 'admin']
	]);

Route::post('amino_edit_process', [
	'as'   => 'amino_edit_process',
	'uses' => 'AminoController@amino_edit_process',
	'middleware' => ['auth', 'admin']
	]);

Route::get('amino_delete/{id}', [
	'as'   => 'amino_delete',
	'uses' => 'AminoController@amino_delete',
	'middleware' => ['auth', 'admin']
	]);



Route::get('gene-alignment', [
	'as'   => 'gene_align',
	function(){
	return view('pages.gene-alignment');
},
	'middleware' => ['auth']
	]);


Route::get('image-upload','ImageController@imageUpload');
Route::post('image-upload','ImageController@imageUploadPost');


//gene Admin

Route::get('gene_create', [  /*student link, unique*/
	'as' => 'gene_create', /*name shortform, nak pggl gne niyh*/
	'uses' => 'GeneController@gene_create',  /*name controller, ikut ape yg kita nak@name function*/
	]); /*return form*/

Route::post('gene_create_process', [  /*student link, unique*/
	'as' => 'gene_create_process', /*name shortform, nak pggl gne niyh*/
	'uses' => 'GeneController@gene_create_process',  /*name controller, ikut ape yg kita nak@name function*/
	'middleware' => ['auth', 'admin']
	]); /*return form*/

Route::get('gene_index', [
	'as'   => 'gene_index',
	'uses' => 'GeneController@gene_index',
	'middleware' => ['auth', 'admin']
	]);

Route::get('gene_show/{id}', [ /*nak paparkan stu data based id*/
	'as'  => 'gene_show',
	'uses'=> 'GeneController@gene_show',
	'middleware' => ['auth', 'admin']
	]);

Route::get('gene_showAll', [
	'as'   => 'gene_showAll',
	'uses' => 'GeneController@gene_showAll',
	]);

Route::get('gene_edit/{id}', [
	'as'   => 'gene_edit',
	'uses' => 'GeneController@gene_edit',
	'middleware' => ['auth', 'admin']
	]);

Route::post('gene_edit_process/{id}', [
	'as'   => 'gene_edit_process',
	'uses' => 'GeneController@gene_edit_process',
	'middleware' => ['auth', 'admin']
	]);

Route::get('gene_delete/{id}', [
	'as'   => 'gene_delete',
	'uses' => 'GeneController@gene_delete',
	'middleware' => ['auth', 'admin']
	]);

//user view						

Route::get('user_index', [
	'as'   => 'user_index',
	'uses' => 'GeneController@user_index',
	'middleware' => ['auth', 'admin']
	]);

Route::get('user_show/{id}', [ /*nak paparkan stu data based id*/
	'as'  => 'user_show',
	'uses'=> 'UserController@user_show',
	'middleware' => ['auth', 'admin']
	]);

// Gene-expression searching gene
Route::get('gene-expression', [
	'as'   => 'gene-expression',
	'uses' => 'GeneController@geneExpression',
	'middleware' => ['auth']
	]);

Route::get('gene-list', 'GeneController@searchGeneList');

/*Route::get('protected', ['middleware' =>['auth'], function(){
	return view('gene-list');
}]);*/

// End gene-expression searching

Route::get('user_showAll', [
	'as'   => 'user_showAll',
	'uses' => 'UserController@user_showAll',
	]);

//users
Route::get('user_index', [
	'as'   => 'user_index',
	'uses' => 'UserController@user_index',
	'middleware' => ['auth', 'admin']
	]);

//added for jreport
Route::get('cetak_surat_amino', [
    'as' => 'cetak_surat_amino',
    'uses' => 'AminoController@cetak_surat_amino',
    ]);

Route::get('cetak_surat_genes', [
    'as' => 'cetak_surat_genes',
    'uses' => 'GeneController@cetak_surat_genes',
    ]);

Route::get('amino_print/{id}', [
    'as' => 'amino_print',
    'uses' => 'AminoController@amino_print',
    ]);


//gene Comparison
Route::post('gene-result', ['middleware' => ['auth'], function() {
    $a = Input::get('gene1'); 
    $b = Input::get('gene2');

    $gene1 = serialize($a);
    $gene1 = unserialize($gene1);

    $gene2 = serialize($b);
    $gene2 = unserialize($gene2);

    $count = 0;
    $match = "";
    $matchPercent = 0.00;
    $code = [];
    for ($i = 0; $i < strlen($gene2); $i++)
    {
    	$code[] = " "; 
    } 

     for ($i = 0; $i < strlen($gene1); $i++)
                if ($gene1[$i] == $gene2[$i])
                {
                	$count++;
                  switch ($gene2[$i])
                  {
                    case 'A':
                        $code[$i] = "highlightA";
                        break;
                 	case 'T':
                        $code[$i] = "highlightT";
                        break;
                    case 'G':
                        $code[$i] = "highlightG";
                        break;
                    case 'C':
                        $code[$i] = "highlightC";    
                        break;
                    default:
                        $code[$i] = " ";
                  }
                } 
                else
                	$code[$i] = " ";
    
    if($gene1 == null) 
   	{ 
   		$match = 0;
   		$matchPercent = 0; 
   	}
    else {
    	$match = $count."/".strlen($gene1);
		$matchPercent =  number_format((float) ($match / strlen($gene1) * 100) , 2, '.', '');
	}

            	      
    return View::make('pages.gene-result', array('gene1'=>$gene1, 'gene2'=>$gene2, 'code' => $code, 'match' => $match, 'matchPercent' => $matchPercent));
}]);
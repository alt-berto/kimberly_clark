<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Mail;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected $data;

    public function __construct(  ) {
        //Public Variables
        
        $this->data = array(  );

        /** default title */
        $this->data['title'] = '';
        /** default language */
        $this->data['language'] = 'EN';

        /** meta tag and information */
        $this->data['metas'] = array(  );
        /** queued css files */
        $this->data['css'] = array(
            'internals'  => array(  ),
            'externals'  => array(  )
        );
    
        /** queued css files */
        $this->data['icons'] = array(
            'internals'  => array(
            //'size' => array(  ),
            //'url' => array(  )
            ),
            'externals'  => array(
            //'size' => array(  ),
            //'url' => array(  )
            )
        );
    
        /** queued js files */
        $this->data['js'] = array(
            'internals'  => array(  ),
            'externals'  => array(  )
        );
        /** Staffs */
        $this->data['staffs'] = array(  );
        /** global javascript var */
        $this->data['global'] = array(  );

        $this->data['page'] = 0;

    }

    // Load Home Index View
    public function home(  ) {
        // Title
        $this->data['title'] = 'CCC TRAINING';
        // Load Metas
        $this->data['metas'][] = ['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, minimum-scale=1'];        
        $this->data['metas'][] = ['name' => 'author', 'content' => 'albert'];
        $this->data['metas'][] = ['name' => 'Description', 'content' => ''];
        //$this->data['metas'][] = ['name' => 'csrf-token', 'content' => '{{ csrf_token() }}'];
        // Load External CSS Files
        $this->data['css']['externals'][] = 'https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap';
        // Load Internals CSS Files.
        $this->data['css']['internals'][] = 'all.min.css';
        $this->data['css']['internals'][] = 'dataTables.bootstrap4.css';
        $this->data['css']['internals'][] = 'sb-admin.css';
        $this->data['css']['internals'][] = 'main.css';
        $this->data['css']['internals'][] = 'app.css';

        // Load Internal Icons Files.
        $this->data['icons']['internals'][] = ['rel' => 'icon', 'size' => '', 'url' => 'logo-128x128-1.png'];
        $this->data['icons']['internals'][] = ['rel' => 'apple-touch-icon', 'size' => '310x310', 'url' => 'logo-128x128-1.png'];
        $this->data['icons']['internals'][] = ['rel' => 'apple-touch-icon', 'size' => '150x150', 'url' => 'logo-128x128-1.png'];
        $this->data['icons']['internals'][] = ['rel' => 'apple-touch-icon', 'size' => '144x144', 'url' => 'logo-128x128-1.png'];
        $this->data['icons']['internals'][] = ['rel' => 'apple-touch-icon', 'size' => '96x96', 'url' => 'logo-128x128-1.png'];
        $this->data['icons']['internals'][] = ['rel' => 'apple-touch-icon', 'size' => '70x70', 'url' => 'logo-128x128-1.png'];
        $this->data['icons']['internals'][] = ['rel' => 'apple-touch-icon', 'size' => '32x32', 'url' => 'logo-128x128-1.png'];
        $this->data['icons']['internals'][] = ['rel' => 'apple-touch-icon', 'size' => '16x16', 'url' => 'logo-128x128-1.png'];
        // Load Externals JS Files.
        // Load Internal JS Files.
        $this->data['js']['internals'][] = 'jquery.min.js';
        $this->data['js']['internals'][] = 'bootstrap.bundle.min.js';
        $this->data['js']['internals'][] = 'jquery.easing.min.js';    
        $this->data['js']['internals'][] = 'Chart.min.js';
        $this->data['js']['internals'][] = 'jquery.dataTables.js';
        $this->data['js']['internals'][] = 'dataTables.bootstrap4.js';
        $this->data['js']['internals'][] = 'sb-admin.min.js';
        $this->data['js']['internals'][] = 'demo/datatables-demo.js';
        $this->data['js']['internals'][] = 'demo/chart-area-demo.js';
        $this->data['js']['internals'][] = 'app.js';
        $this->data['js']['internals'][] = 'main.js';
        //
        // Load View
        return view( 'index' )->with( $this->data );
    }

     // Load Home Index View
     public function page( $page ) {
        // Title
        $this->data['title'] = 'CCC TRAINING - Page '.$page;
        // Load Metas
        $this->data['metas'][] = ['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, minimum-scale=1'];        
        $this->data['metas'][] = ['name' => 'author', 'content' => 'albert'];
        $this->data['metas'][] = ['name' => 'Description', 'content' => ''];
        //$this->data['metas'][] = ['name' => 'csrf-token', 'content' => '{{ csrf_token() }}'];
        // Load External CSS Files
        $this->data['css']['externals'][] = 'https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap';
        // Load Internals CSS Files.
        $this->data['css']['internals'][] = 'all.min.css';
        $this->data['css']['internals'][] = 'animate.min.css';
        $this->data['css']['internals'][] = 'dataTables.bootstrap4.css';
        $this->data['css']['internals'][] = 'sb-admin.css';
        $this->data['css']['internals'][] = 'main.css';
        $this->data['css']['internals'][] = 'app.css';

        // Load Internal Icons Files.
        $this->data['icons']['internals'][] = ['rel' => 'icon', 'size' => '', 'url' => 'logo-128x128-1.png'];
        $this->data['icons']['internals'][] = ['rel' => 'apple-touch-icon', 'size' => '310x310', 'url' => 'logo-128x128-1.png'];
        $this->data['icons']['internals'][] = ['rel' => 'apple-touch-icon', 'size' => '150x150', 'url' => 'logo-128x128-1.png'];
        $this->data['icons']['internals'][] = ['rel' => 'apple-touch-icon', 'size' => '144x144', 'url' => 'logo-128x128-1.png'];
        $this->data['icons']['internals'][] = ['rel' => 'apple-touch-icon', 'size' => '96x96', 'url' => 'logo-128x128-1.png'];
        $this->data['icons']['internals'][] = ['rel' => 'apple-touch-icon', 'size' => '70x70', 'url' => 'logo-128x128-1.png'];
        $this->data['icons']['internals'][] = ['rel' => 'apple-touch-icon', 'size' => '32x32', 'url' => 'logo-128x128-1.png'];
        $this->data['icons']['internals'][] = ['rel' => 'apple-touch-icon', 'size' => '16x16', 'url' => 'logo-128x128-1.png'];
        // Load Externals JS Files.
        // Load Internal JS Files.
        $this->data['js']['internals'][] = 'jquery.min.js';
        $this->data['js']['internals'][] = 'bootstrap.bundle.min.js';
        $this->data['js']['internals'][] = 'jquery.easing.min.js';    
        $this->data['js']['internals'][] = 'Chart.min.js';
        $this->data['js']['internals'][] = 'jquery.dataTables.js';
        $this->data['js']['internals'][] = 'dataTables.bootstrap4.js';
        $this->data['js']['internals'][] = 'sb-admin.min.js';
        $this->data['js']['internals'][] = 'demo/datatables-demo.js';
        $this->data['js']['internals'][] = 'demo/chart-area-demo.js';
        $this->data['js']['internals'][] = 'app.js';
        $this->data['js']['internals'][] = 'main.js';
        $this->data['js']['internals'][] = 'page/page_'.$page.'.js';
        //
        $this->data['page'] = intval( $page );        

        // Load View
        return view( 'page_'.$page )->with( $this->data );
    }


}

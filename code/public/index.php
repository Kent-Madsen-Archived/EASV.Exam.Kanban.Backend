<?php
    use Illuminate\Contracts\Http\Kernel;
    use Illuminate\Http\Request;


    define( 'LARAVEL_START', microtime( true ) );

    if ( file_exists( $maintenance = __DIR__.'/../storage/framework/maintenance.php' ) )
    {
        require $maintenance;
    }

    require __DIR__.'/../vendor/autoload.php';
    $app = require_once __DIR__.'/../bootstrap/app.php';


    $kernel = $app->make( Kernel::class );

    $response = $kernel->handle(
        $request = Request::capture()
    )->send();

    $kernel->terminate( $request, $response );
?>
<script async src="https://www.googletagmanager.com/gtag/js?id=G-7YKLR7Y3GH">
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-7YKLR7Y3GH');
</script>

<a href="http://icyber-corp.gabriel-cassano.be/" style="display:none;">ICYBER-CORP.</a>
<a href="http://homesweethomedesign.gabriel-cassano.be/" style="display:none;">Home Sweet Home Design</a>
<a href="http://invokingdemons.gabriel-cassano.be/" style="display:none;">invoking demons</a>

<?php
ini_set('display_errors', '1');
use Symfony\Component\ClassLoader\ApcClassLoader;
use Symfony\Component\HttpFoundation\Request;

$loader = require_once __DIR__.'/../app/bootstrap.php.cache';

// Use APC for autoloading to improve performance.
// Change 'sf2' to a unique prefix in order to prevent cache key conflicts
// with other applications also using APC.
/*
$loader = new ApcClassLoader('sf2', $loader);
$loader->register(true);
*/

require_once __DIR__.'/../app/AppKernel.php';
//require_once __DIR__.'/../app/AppCache.php';

// désactiver le debugger en production 
// $kernel = new AppKernel('prod', false);

$kernel = new AppKernel('prod', true);

$kernel->loadClassCache();
//$kernel = new AppCache($kernel);
$request = Request::createFromGlobals();
$response = $kernel->handle($request);
$response->send();
$kernel->terminate($request, $response);

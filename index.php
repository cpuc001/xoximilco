<?php
/**
 * Created by PhpStorm.
 * User: frontend
 * Date: 8/25/16
 * Time: 4:33 PM
 */

use Phalcon\Loader;
use Phalcon\Tag;
use Phalcon\Mvc\Url;
use Phalcon\Mvc\View;
use Phalcon\Mvc\View\Engine\Volt;
use Phalcon\Mvc\Application;
use Phalcon\DI\FactoryDefault;
use Phalcon\Db\Adapter\Pdo\Mysql as DbAdapter;
use Phalcon\Session\Adapter\Files as Session;
try {

    // Register an autoloader
    $loader = new Loader();

    $loader->registerDirs(
        array(
            'app/controllers/',
            'app/models/',
            "app/controllers/ControllerBase.php",
        )
    )->register();

    $loader->registerClasses(
        array(
            "ExxCache" => "app/library/exxcache.php",
            "Sivex" => "app/library/precioSivex.php",
            "MobileDetect" => "app/library/mobileDetect.php",
            "Urls" => "app/library/urls.php",
            "Booking" => "app/library/booking.php",
            "MCAPI" => "app/library/MCAPI.php",
            "Funciones" => "app/library/funciones.php",
        )
    )->register();

    // Create a DI
    $di = new FactoryDefault();

    // Setting up the view component
    $di['view'] = function() {
        $view = new View();
        $view->setViewsDir('app/views/');

        $view->registerEngines(
            array(
                ".volt" => function ($view, $di) {
                    $volt = new Volt($view, $di);

                    $volt->setOptions(
                        array(
                            //"compiledPath"      => "../app/views/cache/",
                            "compileAlways"      => true,
                            //"stat"      => false,
                        )
                    );

                    //load function php
                    $compiler = $volt->getCompiler();
                    //define variable translate
                    $compiler->addFunction('file_exists', 'file_exists');

                    return $volt;
                }
            )
        );

        return $view;
    };

    // Setup a base URI so that all generated URIs include the "tutorial" folder
    $di['url'] = function() {
        $url = new Url();
        $url->setBaseUri('/');
        return $url;
    };

    /**
     * Add routing capabilities
     */
    $di->set(
        'router',
        function () {
            require __DIR__ . '/app/routes.php';

            return $router;
        }
    );

    // Setup the tag helpers
    $di['tag'] = function() {
        return new Tag();
    };

    // Start the session the first time when some component request the session service
    $di->setShared('session', function () {
        $session = new Session();
        $session->start();
        return $session;
    });

    //Inicalizacion del objeto para cache 
    $di->setShared('cache', function () {
            $cache = new ExxCache();
            return $cache;
        });


    // Handle the request
    $application = new Application($di);

    echo sanitize_output( $application->handle()->getContent());

} catch (Exception $e) {
    echo "Exception: ", $e->getMessage();
}
function sanitize_output($buffer) {

    $search = array(
        '/\>[^\S ]+/s',  // strip whitespaces after tags, except space
        '/[^\S ]+\</s',  // strip whitespaces before tags, except space
        '/(\s)+/s'       // shorten multiple whitespace sequences
    );

    $replace = array(
        '>',
        '<',
        '\\1'
    );

    $buffer = preg_replace($search, $replace, $buffer);

    return $buffer;
}

<?php
/**
 * @author        Jesse Boyer <contact@jream.com>
 * @copyright    Copyright (C), 2011-12 Jesse Boyer
 * @license        GNU General Public License 3 (http://www.gnu.org/licenses/)
 *                Refer to the LICENSE file distributed within the package.
 *
 * @link        http://jream.com
 *
 * @internal    Inspired by Klein @ https://github.com/chriso/klein.php
 */

class Route
{
    /**
     * submit - Looks for a match for the URI and runs the related function
     */
    public function submit()
    {

        $uri = isset($_REQUEST['uri']) ? $_REQUEST['uri'] : '/';
        $routerFragments = explode("/",$uri);
        $controllerName = $routerFragments[0];
        $routerFragments[0] = ucfirst($routerFragments[0]) . "Controller";
        $namespace = "\Controller\\" . $routerFragments[0];
        if(class_exists($namespace)){
            $controller = new $namespace;
            $controller->controllerName = $controllerName;

            //UserController->index();
            $function = $routerFragments[1];
            // array( $obj, 'method' )
            // [$obj, 'method']
            // TODO MODIFIED
            $controller->viewTemplate = $function . ".php";
            @call_user_func_array([$controller, $function],array_slice($routerFragments,2));
        }else{
            throw new Error("Page not found", 404);
        }

    }

}











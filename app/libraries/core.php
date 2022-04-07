<?php
/*
 * App Core Class
 * Creates URL & Loads core controller
 * URL FORMAT - /controller/method/params 
*/

class Core {
    protected $currentController = 'Pages';
    protected $currentMethod = 'index';
    protected $params = [];

    public function __construct() {
        // print_r($this->getURL());

        $url = $this->getURL();

        // Look in controllers for first value

        if (isset($url[0]) && file_exists('../app/controllers/' . ucwords($url[0]) . '.php')) {
            // If exists, set as controller
            $this->currentController = ucwords($url[0]);
            unset($url[0]);
        };

        require_once '../app/controllers/' . $this->currentController . '.php';

        // Instantiate controller class

        $this->currentController = new $this->currentController;

        // Check for second part of URL

        if (isset($url[1])) {
            if (method_exists($this->currentController, $url[1])) {
                $this->currentMethod = $url[1];
                unset($url[1]);
            }
        }

        $this->params = $url ? array_values($url) : [];

        /* Example:
        * for the url /pages/about/me
        * it would call $pages->about(me)
        */
        call_user_func_array([$this->currentController, $this->currentMethod], $this->params);
    }

    public function getURL() {
        if (isset($_GET['url'])) {
            $url = rtrim($_GET['url'], '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);
            return $url;
        }
    }
}

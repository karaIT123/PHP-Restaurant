<?php

abstract class Controller
{
    /**
     * @var array An array which indexes will be accessible as variables in template
     */
    protected $data = array();
    /**
     * @var string A template name without the extension
     */
    protected $view = "";
    /**
     * @var array The HTML head
     */
    protected $head = array('title' => '', 'description' => '');



    /**
     * Renders the view
     */
    public function renderView()
    {
        if ($this->view) {
            extract($this->data);
            require("Views/" . $this->view . ".phtml");
        }
    }



    /**
     * @param string $url Redirects to a given URL
     */
    public function redirect($url)
    {
        header("Location: /$url");
        header("Connection: close");
        exit;
    }



    /**
     * The main controller method
     * @param array $params URL parameters
     */
    abstract function process($params);
}

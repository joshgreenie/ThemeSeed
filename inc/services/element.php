<?php

class Element {

    function __construct($e = null, $content = '') {
        $this->elem = $e;
        $this->content = $content;
        $this->classes = array();
        $this->attributes = (object)null;
        $this->attr = array();
        $this->self_close = false;
    }

    public function addClass($class){
        $this->classes[] = $class;
        return $this;
    }

    public function attr($key, $val){
        $this->attributes->{$key} = $val;

        return $this;
    }

    public function setElement($elem){
        $this->elem = $elem;

        return $this;
    }

    public function text($content){
        $this->content .= $content;

        return $this;
    }

    public function renderAttributes(){
        $arr = [];
        foreach($this->attributes as $key => $val){
            $arr[] = $key.'='.$val;
        }
        $this->attr = join(' ', $arr);
    }

    public function renderClasses(){
        $this->classes = join(' ', $this->classes);
    }

    public function render($type = NULL){
        echo $this->get($type);
    }

    public function renderConditional($type = NULL , $cond = NULL) {
        if(($this->content || $this->content != '') || !$cond):
            $this->render($type);
        endif;
    }


    public function get($type = NULL){

        switch ($type){
            case 'close':

                $element = <<<CONTENT
	            </$this->elem>
CONTENT;
                break;

            case 'open':
                $this->renderClasses();
                $this->renderAttributes();
                $element = <<<CONTENT
	            <$this->elem class="$this->classes" $this->attr>$this->content
CONTENT;
                break;


            case 'void':
                $this->renderClasses();
                $this->renderAttributes();
                $element = <<<CONTENT
	            <$this->elem class="$this->classes" $this->attr />
CONTENT;
                break;


            default:
                $this->renderClasses();
                $this->renderAttributes();
                $element = <<<CONTENT
	            <$this->elem class="$this->classes" $this->attr>$this->content</$this->elem>
CONTENT;
                break;

        }

        return $element;
    }

}


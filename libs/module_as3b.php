<?php
if (!class_exists('module_as3b')) {
    class module_as3b {    
        
        public $params = array();
        public function __construct($params)
        {
            $this->result = new result();
            $this->params = $params;
        }
        
        public function setError($error) 
        {
            $this->result->setError($error)->setResult(RESULT_ERROR);
        }
        public function setResult($data = array(), $size = '') 
        {
            $this->result->setResult(RESULT_SUCCESS)->setSize($size)->setData($data);
        }
    }
}
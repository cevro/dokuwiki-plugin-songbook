<?php

if(!defined('DOKU_INC')){
    die();
}

class syntax_plugin_songbook extends DokuWiki_Syntax_Plugin {

    public function __construct() {
        
    }

    public function getType() {
        return 'substition';
    }

    public function getPType() {
        return 'block';
    }

    public function getAllowedTypes() {
        return array();
    }

    public function getSort() {
        return 226;
    }

    public function connectTo($mode) {
        $this->Lexer->addSpecialPattern('~~SONGBOOK~~',$mode,'plugin_songbook');
    }

    /**
     * Handle the match
     */
    public function handle($match,$state,$pos,Doku_Handler &$handler) {






        return array($state,$params);
    }

    public function render($mode,Doku_Renderer &$renderer,$data) {
        // $data is what the function handle return'ed.
        global $ID;
        if($mode == 'xhtml'){

            $fs = glob(DOKU_INC.'data/media/songbook/*.xml');
            var_dump($fs);
            foreach ($fs as $f) {
                $renderer->doc.= io_readfile($f);
            }
        }
        return false;
    }

}

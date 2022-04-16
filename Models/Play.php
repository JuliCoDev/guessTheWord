<?php
    class Play extends Model{
        public function __construct(){
            parent::__construct();
        }


        public function listWords(){
            try {
                $words = $this->db->query("SELECT * FROM words");
                return $words;
            } catch (\Exception $e) {
                die($e->message());
            }
            
        }//end listWords

        public function getWord($word_id){
            try {
                $word = $this->db->query("SELECT * FROM words where idWord  = ({$word_id})");                      
                return $word;
            } catch (\Exception $e) {
                die($e->message());
            }
        }//end getWord

    }
?>
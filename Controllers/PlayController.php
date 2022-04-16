<?php
    class PlayController extends Controller{
        public function __construct(){
            parent::__construct();
        }


        public function play(){
            $words = $this->model->listWords();

            $wordsRandom = [];
            while($word = $words->fetchArray()){
                array_push($wordsRandom ,["idWord" => $word['idWord'], "word" => str_shuffle($word['word']) ]);     
            }
            $this->view->getView($this, "Play", $wordsRandom);

        }//end play

        /**
         * This method get the answers send for the user.
         */
        public function feedback(){   
            $wordsUser = $_POST;  

            $score = [];

            foreach ($wordsUser as $key => $value) {

                $word = $this->model->getWord($key)->fetchArray();
                $value = strtoupper($value);
                
                //We verify if the answer is correct
                if($word['word'] === $value){     
                    $dataCorrect = array_merge($word ,['correct' => true , 'answer' => $value]);
                    array_push($score , $dataCorrect);
                }else{
                    $dataCorrect = array_merge($word ,['correct' => false, 'answer' => $value]);
                    array_push($score , $dataCorrect);
                }          

            }//End foreach
           
            return $this->view->getView($this, 'Score', $score);                   
        
        }//end answers

        

    }

?>
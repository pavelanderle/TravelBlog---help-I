<?php
    class Article {
        private $title;
        private $content;
        private $profileImg;
        private $author;
        private $datePublic;

        public function getTitle(){
            return $this->title;
        }

        public function getContent(){
            return $this->content;
        }

        //todo get methods

        public function setTitle($title){
            if (!empty($title)) {
                $this->title = $title;
            }
        }

        public function setContent($content){
            if (!empty($content)) {
                $this->content = $content;
            }
        }

        //todo set methods

        public function loadDataFromDB($id){
            $conn = new mysqli("localhost", "root", "root", "travelblog");
            if ($conn->connect_error) {
                $output = false;
            } 
            else{
                $sql = "SET CHARACTER SET UTF8";
                $conn->query($sql);
                $sql = "SELECT * FROM articles WHERE idArticles=$id";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    $articleData = $result->fetch_assoc();
                    $this->setTitle($articleData["Title"]);
                    $this->setContent($articleData["Content"]);
                    $output = true; 
                } else {
                    $output = false;
                }
            }      
            $conn->close();

            return $output;
        }
    }
?>
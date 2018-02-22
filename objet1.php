<?php
    class car
    {
        public $size;

        public $mileage;

        public $color='red';

        public function drive()
        {
            return $this->color;
        }
    }

    $ferrari=new car;
    $ferrari->size=50;
    $ferrari->mileage=100;
   


    
    echo 'je suis une ferrari avec une taille de'.$ferrari->size.'j\'ai'.$ferrari->mileage.' ma couleur est'.$ferrari->color.'est jai de capacite est quand je conduit je fait'.$ferrari->drive();
    
    echo '<br>';
  
   class livre {
    public $author;
    public $title;
    public $content;

    public function searchWord($word)
    {
        if(strpos($this->content,$word)&& strpos($this->content,$word)!=0)
       
        {
            $position=strpos($this->content,$word);
            return "Le Livre contient le mot".$word."a la position".$position;
        }
        else
        {
            return 'le livre ne contient pas le mot rechercher';
        }
    }

   }

   $livre=new Livre();

   $livre->author='Dahl';
   $livre->title='hello';
   $livre->content='hello my name is dahl and i am such a cool author';
   echo $livre->searchWord('name');

   






?>


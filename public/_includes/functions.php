<?php include('themeclass.php');
  function draw_nav()
  {
    global $dtm;

    $class="container2 navbar";
    $item_arr=array(
                    array('class2'=>'navcom col-xs-3 col-sm-3 col-md-3 col-lg-3','text'=>'About','url'=>'underconstruct.php'),
                    array('class2'=>'navcom col-xs-3 col-sm-3 col-md-4 col-lg-3','text'=>'Education','url'=>'underconstruct.php'),
                    array('class2'=>'navcom col-xs-3 col-sm-3 col-md-3 col-lg-3','text'=>'Projects','url'=>'underconstruct.php'),
                    array('class2'=>'navcom col-xs-3 col-sm-3 col-md-3 col-lg-3','text'=>'Hobbies','url'=>'underconstruct.php')
            );
    return $dtm->navigation($item_arr,$class);
  }
  function theTitle($thisPageTitle)
  {
    $title=$thisPageTitle.' ';

    return $title;
  }
?>

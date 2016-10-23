<?php include('themeclass.php');
  function draw_nav()
  {
    global $dtm;
  

    $dt="collapse";
    $class="container2";
    $item_arr=array(
                    array('class2'=>'navcom col-xs-3 col-sm-3 col-md-3 col-lg-3','text'=>'About','id'=>'abt','url'=>'about','content'=>$conabout),
                    array('class2'=>'navcom col-xs-3 col-sm-3 col-md-4 col-lg-3','text'=>'Education','id'=>'edu','url'=>'education','content'=>$coneducation),
                    array('class2'=>'navcom col-xs-3 col-sm-3 col-md-3 col-lg-3','text'=>'Projects','id'=>'pro','url'=>'projects','content'=>$conprojects),
                    array('class2'=>'navcom col-xs-3 col-sm-3 col-md-3 col-lg-3','text'=>'Hobbies','id'=>'hob','url'=>'hobbies','content'=>$conhobbies)
            );
    return $dtm->navigation($item_arr,$class,$dt);
  }
  function theTitle($thisPageTitle)
  {
    $title=$thisPageTitle.' ';

    return $title;
  }
?>
<button data-toggle="collapse" data-target="#demo">Collapsible</button>
<div id="demo" class="collapse">
Lorem ipsum dolor text....
</div>

<?php
  class themeMethods {
	   public function navigation($items_array,$class,$dt) {
				$nav = '';

				foreach ( $items_array as $item ) {
					$nav .= '<button class="'. $item['class2'] .'" id="'.$item['id'].'" data-toggle="'.$dt.'" data-target="'.$item['url'].'">' . $item['text'] . '</button>';
				}

				return $nav;
			}
		}
  $dtm = new themeMethods;
?>

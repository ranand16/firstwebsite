<?php
  class themeMethods {
	   public function navigation($items_array,$class) {
				$nav = '<nav class="' . $class . '">';

				foreach ( $items_array as $item ) {
					$nav .= '<div class="'. $item['class2'] .'" onClick="location.href=\''. $item['url']. '\'" >' . $item['text'] . '</div>';
				}
        $nav .= '</nav>';
				return $nav;
			}
		}
  $dtm = new themeMethods;
?>

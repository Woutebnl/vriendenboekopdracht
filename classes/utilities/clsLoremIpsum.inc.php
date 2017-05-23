<?php
	
	/**
	 * clsLoremIpsum class.
	 * Lorem Ipsum generator
	 * Author: Erik Steens
	 */
	class clsLoremIpsum {
		public function getHtml($count=1) {
			
			$output = "";
			
			for($i=0; $i<$count;$i++) {
				
				$output .= <<<OUTPUT
			
					Lorem ipsum dolor sit amet, augue dissentiunt ut quo, 
					id quo wisi etiam. An mea agam pericula signiferumque, 
					nam oblique apeirian voluptaria ea, fuisset splendide 
					at nec. Ullum integre eam ex. Ad eam natum scribentur 
					mediocritatem.<br />
OUTPUT;

				$output .= $this->getStockPhoto("stock1");

				$output .= <<<OUTPUT

					Cu regione reprimique est, ut quo oporteat forensibus. 
					Per tota consetetur an, et eum persius persecuti, doming 
					verear aliquando cu nec. Augue definitiones no eam. Pri 
					labores euripidis in, an vis tation cotidieque. Pri movet 
					noluisse pericula at, ut iisque disputando pro, ne numquam 
					consequat usu.<br />
 
					Vel ex duis sonet. Eos no consul eruditi, nec nibh lorem eu. 
					Ea vix decore sapientem posidonium, at mei inermis intellegebat. 
					Tation erroribus eu cum, feugiat luptatum vim et. Et audire indoctum 
					eam, timeam euismod ad vim.<br /><br />
OUTPUT;

				$output .= $this->getStockPhoto("stock2");

				$output .= <<<OUTPUT

					Sensibus salutatus mea te, mollis regione eos in. Est quas verear 
					tractatos ex. In homero dissentias definitionem usu. Id nam quis 
					suscipit, in equidem vituperata sit. Est everti utamur nostrum ex, 
					vel ea exerci dictas impedit. Fugit elitr timeam sed no.<br /><br />
			
OUTPUT;
			} //end for
			return $output;
		}
		
		
		/**
		 * getStockPhoto function.
		 * 
		 * @access public
		 * @param string $class (default: "")
		 * @return image string
		 */
		public function getStockPhoto($class="") {
			$aList = array("girl", "car", "waterfall","train","table","skating","lion","crowd","boats","bike");
			$rand = mt_rand(0, count($aList)-1);
			$src = STOCKPHOTO_PATH . $aList[$rand] . ".jpg";
			return "<img class='$class' src='$src' />";
		}
	}
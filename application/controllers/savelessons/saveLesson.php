<?php 
class FileHandler{
	public $valid_files=array("");
	public $max_size=0;
	public $count=0;
	public $name='';
	public $column='';
	public $sql='';
	public $url='';

	
	public function do_upload($id,$typ) {
		
          
            if ( !empty( $_FILES )) {
            	
                //$userFolder="C:/xampp/htdocs/series/ucsc_video_bay/uploaded_lessons/";
<<<<<<< HEAD
              $userFolder='../../../data/uploaded_lessons/';
=======
              $userFolder="C:/xampp/htdocs/series/VideoBay/application/controllers/savelessons/uploaded_lessons/";
>>>>>>> master
				
				foreach($_FILES['files']['name'] as $f=>$name){
					   
                $tmpFldr  = $_FILES['files']['tmp_name'][$f];
                $fileDest = $userFolder.$id.'/'.$typ.'/'.$name;
				
				$this->name=$name;
				if ($_FILES['files']['error'][$f] > 0) {
	        		continue;
				}
				
				if ($_FILES['files']['error'][$f] == 0) {
					            
	        		if ($_FILES['files']['size'][$f] > $this->max_size) {
	            		echo "$name ". "file is too large!.";
	            		continue; // Skip large files
	        			}
					else if( ! in_array(pathinfo($name, PATHINFO_EXTENSION),$this->valid_files) ){
						echo "$name "."is not a  valid format";
						continue; // Skip invalid file formats
		
				}
					else{
                		if ( move_uploaded_file( $tmpFldr, $fileDest ) ) {
<<<<<<< HEAD
                    		#echo 'file '.$f,' uploaded successfully<br>';
=======
                    		echo 'file '.$f,' uploaded successfully<br>';
>>>>>>> master
					
                		} 
               		 }
               		 
               	 
<<<<<<< HEAD
				#echo $fileDest;
=======
				echo $fileDest;
>>>>>>> master
               
				}
            } 
            
			}

		}


}

?> 


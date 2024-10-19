<?php print( '<?xml version = "1.0" encoding = "utf-8"?>' ) ?>
	<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
	

	<!-- Array manipulation. -->
	<html xmlns = "http://www.w3.org/1999/xhtml">
	<head>
	<title>Array manipulation</title>
	</head>
	<body>
	<?php
	
// create array first
	print( "<strong>Creating the first array</strong><br />" );
	$first[ 0 ] = "zero";
	$first[ 1 ] = "one";
	$first[ 2 ] = "two";
	$first[] = "three";  
	
      // print each element’s index and value
	 for ( $i = 0; $i < count( $first ); $i++ ) 
	 print( "Element $i is $first[$i] <br />" );
	

	   print( "<br /><strong>Creating the second array
	   </strong><br />" );
	
	  // call function array to create array second 
	 $second = array( "zero", "one", "two", "three" );
		         for ( $i = 0; $i < count( $second ); $i++ ) 
	            print( "Element $i is $second[$i] <br />" );
	   
	         print( "<br /><strong>Creating the third array
	            </strong><br />" );
	
	       // assign values to entries using nonnumeric indices 
	         $third[ "Amy" ] = 21;
	 	   $third[ "Bob" ] = 18;
		         $third[ "Carol" ] = 23;
		
		         // iterate through the array elements and print each 
		         // element’s name and value
		         for ( reset( $third ); $element = key( $third ); next( $third ) )
		            print( "$element is $third[$element] <br />" );  //prints the index
                                                                                                                        // and value
	   

	         print( "<br /><strong>Creating the second array
	            </strong><br />" );
	
	         // call function array to create array second 
	         $second = array( "zero", "one", "two", "three" );
	
		         for ( $i = 0; $i < count( $second ); $i++ ) 
		            print( "Element $i is $second[$i] <br />" );
	   
		         print( "<br /><strong>Creating the third array
		            </strong><br />" );
	
	         // assign values to entries using nonnumeric indices 
	         $third[ "Amy" ] = 21;
	         $third[ "Bob" ] = 18;
	         $third[ "Carol" ] = 23;
	
	         // iterate through the array elements and print each 
	         // element’s name and value(associative array)
	         for ( reset( $third ); $element = key( $third ); next( $third ) )
	            print( "$element is $third[$element] <br />" );  //prints the index
                                                                                                                        // and value
		         print( "<br /><strong>Creating the fourth array
	            </strong><br />" );
	
	         // call function array to create array fourth using
	         // string indices
	         $fourth = array(  
	            "January"   => "first",   "February" => "second",
	            "March"     => "third",   "April"    => "fourth",
	            "May"       => "fifth",   "June"     => "sixth",
	            "July"      => "seventh", "August"   => "eighth",
	            "September" => "ninth",   "October"  => "tenth",
	            "November"  => "eleventh","December" => "twelfth"
	            );
	
	         // print each element’s name and value
	         foreach ( $fourth as $element => $value )
	            print( "$element is the $value month <br />" );
	      ?><!-- end PHP script -->
	   </body>
		</html>

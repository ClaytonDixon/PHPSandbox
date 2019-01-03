<?php
    #substr()
    #Returns a portion of a string

   // $output = substr('Hello', 1, 3);
    //$output = substr('Hello', -2);
    //echo $output;

    #strlen()
    #Returns the length of a string
    
   // $output = strlen('Hello World');
   // echo $output;

   #strpos()
   # Finds the position of the first occurrence of a sub string

   //$output= strpos('Hello World', 'o');
   //echo $output;

   #strrpos()
   # Finds the position of the last occurrence of a sub string

   //$output= strrpos('Hello World', 'o');
   //echo $output;

   # trim()
   # Trims whitespace

   /*
   $text = 'Hello World                   ';
   //var_dump($text);

   $trimmed = trim($text);
   var_dump($trimmed);
   */

   # strtoupper
   # Makes everything uppercased

  // $output = strtoupper('Hello World');
  // echo $output;

  #strtolower
  # Makes everything lower case

  // $output = strtolower('Hello World');
  // echo $output;

  # ucwords()
  # Capitalize every word
   //$output = ucwords('hello world');
   //echo $output;

   #str_replace()
   # replace all occurrences of a search string with a replacement
    # 3 parameters first is what you are replacing, second is what you are replacing it with and third is what you are searching

   //$text = 'Hello World';
  // $output = str_replace('World', 'Everyone', $text);
   //echo $output;

   # is_string()
   # check if a string
   # if returns 1 then it is a string

   //$val = 'Hello';
   //$output = is_string($val);

   //echo $output;
    /*
   $values = array(true, false, null, 'abc', 33, '33', 22.4, '22.4', '', ' ', 0, '0');
   foreach($values as $value){
       if(is_string($value)){
           echo "{$value} is a string<br>";
       }
   }
   */

   #gzcompress()
   # compress a string


   $string =
   "Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum nam corrupti hic reprehenderit fugit facilis unde aliquam dolorum ullam nihil beatae nesciunt possimus praesentium quibusdam aliquid, odit esse. Aliquam qui impedit ratione laboriosam laudantium officiis animi, excepturi rem optio, commodi deleniti unde, quam officia doloribus! Quisquam, possimus voluptatibus officiis atque numquam iure veniam, porro nostrum, odio consequuntur alias accusamus distinctio illum suscipit. Mollitia hic velit id dolore impedit voluptatibus inventore tenetur distinctio animi, quia aliquid voluptates deleniti tempore omnis ex!";

  $compressed = gzcompress($string);

   //echo $compressed;

   $original = gzuncompress($compressed);

   echo $original;
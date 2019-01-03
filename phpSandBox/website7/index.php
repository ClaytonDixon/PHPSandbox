<?php
    $path = '/dir1/myfile.php';
    $file = 'file1.txt';
    /*
    // Return filename
    //echo basename($path);

    // Return filename without ext
    echo basename($path, '.php');
    
    //Return the dir name from path
    echo dirname($path);
    

    // Check if a file exiss
    echo file_exists($file);

    // Gets absolute path

    echo realpath($file);
    

    // Checks to see if file
    echo is_file($file);
    

    // Check if writeable
    echo is_writable($file);

    //Check if readable
    echo is_readable($file);
    

    //Get file size
    echo filesize($file);
    

    // Create a directory or folder

    mkdir('testing');
    

    // Delete a directory as long as there is no files in it

    rmdir('testing');
    

    // Copy a file and create a new one

    echo copy('file1.txt', 'file2.txt');

    //Rename a file

    rename('file2.txt', 'myfile.txt');

    // Delete a file

    unlink('myfile.txt');
    

    // Write from file to string onto page

    echo file_get_contents($file);
    

    // Write a string to file

    echo file_put_contents($file, 'Goodbye World');

    // Write string to file but append it not replace text
    $current = file_get_contents($file);

    $current .= ' Goodbye World';
    file_put_contents($file, $current);
    

    // Open File for Reading

    $handle = fopen($file, 'r');
    $data = fread($handle, filesize($file));
    echo $data;
    fclose($handle);
    */

    // Open file for writing

    $handle = fopen('file2.txt', 'w');
    $txt = "John Doe\n";
    fwrite($handle, $txt);
    $txt = "Steve Smith\n";
    fwrite($handle, $txt);
    fclose($handle);
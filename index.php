<html>
 <head>
  <title>PHP/Python Test</title>
 </head>
 <body>
 <?php
    echo "<h1>THIS PAGE HAS BEEN VIEWED ";
   
    $thing = "python ~/html/cgi-bin/counter.py";
    $pid = popen($thing,"r");

   while( !feof( $pid ) )
   {
    echo fread($pid, 256);
    flush();
    ob_flush();
    usleep(100000);
    }
    pclose($pid);


    // store everyone's information
    $file = 'logfile.txt';
    
    $ipaddress = $_SERVER['REMOTE_ADDR'];
    $date = date('d/F/Y h:i:s');
    $browser = $_SERVER['HTTP_USER_AGENT'];

    $file = 'logfile.txt';
    $fp = fopen($file, 'a');
    fwrite($fp, $ipaddress.' [ '.$date.' ] '.$browser."\r\n");
    fclose($fp);

    
    echo " TIMES</h1>";
?>
 </body>
</html>

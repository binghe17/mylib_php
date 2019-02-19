<?php
//本函数将字符串以 MIME BASE64 编码。此编码方式可以让中文字或者图片也能在网络上顺利传输。
//在 BASE64 编码后的字符串只包含英文字母大小写、阿拉伯数字、加号与反斜线，
//共 64 个基本字符，不包含其它特殊的字符，因而才取名 BASE64。编码后的字符串比原来的字符串
//长度再加 1/3 左右。更多的 BASE64 编码信息可以参考 RFC2045 文件之 6.8 节。

// $a=file_get_contents('1.gif');
// $b=base64_encode($a);
// echo '<img src="data:image/gif;base64,'.$b.'">';

// $str = 'VGhpcyBpcyBhbiBlbmNvZGVkIHN0cmluZw==';
// echo base64_decode($str);

//-----------------------------------------

function base64_to_jpeg( $inputfile, $outputfile ) { 
  /* read data (binary) */ 
  $ifp = fopen( $inputfile, "rb" ); 
  $imageData = fread( $ifp, filesize( $inputfile ) ); 
  fclose( $ifp ); 
  /* encode & write data (binary) */ 
  $ifp = fopen( $outputfile, "wb" ); 
  fwrite( $ifp, base64_decode( $imageData ) ); 
  fclose( $ifp ); 
  /* return output filename */ 
  return( $outputfile ); 
} 



//------------------------------------------

if (isset($_POST['text_pass'])){
   $but=$_POST['button'];
   process_form();
}else{
   print_form();
}

function process_form(){

  switch ($_POST['button']){
   case "Get Encoded": 

       $text_pass = $_REQUEST['text_pass'];
       echo "<html>\n";
       echo "<head>\n";
       echo "<title>Password Encoding</title>\n";
       echo "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=iso-8859-1\">\n";
       echo "</head>\n";
       echo "<body>\n";
       echo "<table border=\"0\" cellspacing=\"0\" cellpadding=\"4\" width=\"100%\">\n";
       echo "<div align=\"center\">\n";
       echo "<h3 align=center>Password Encoding Page</h3>\n";
       echo "<table align=\"center\" border=\"0\">\n";
       echo "<tr>\n";
       echo "<td ><b>You Entered:  </b></td>\n";
       echo "<td>$text_pass</td>\n";
       echo "</tr>\n";
       $test = base64_encode(serialize($text_pass));
       echo "<tr>\n";
       echo "<td ><b>Your encoded password (base 64) is:  </b></td>\n";
       echo "<td>$test</td>\n";
       echo "</tr>\n";
       $untest = unserialize(base64_decode($test));
       echo "<tr>\n";
       echo "<td ><b>To double test, your UNencoded password (base 64) is:  </b></td>\n";
       echo "<td>$untest</td>\n";
       echo "</tr>\n";
       echo "</table>\n";
       break;
   case "Get UNEncoded":
       $text_pass = $_REQUEST['text_pass'];
       echo "<html>\n";
       echo "<head>\n";
       echo "<title>Password Encoding</title>\n";
       echo "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=iso-8859-1\">\n";
       echo "</head>\n";
       echo "<body>\n";
       echo "<table border=\"0\" cellspacing=\"0\" cellpadding=\"4\" width=\"100%\">\n";
       echo "<div align=\"center\">\n";
       echo "<h3 align=center>Password Encoding Page</h3>\n";
   
       echo "<table align=\"center\" border=\"0\">\n";
       echo "<tr>\n";
       echo "<td ><b>You Entered:  </b></td>\n";
       echo "<td>$text_pass</td>\n";
       echo "</tr>\n";
       $untest = unserialize(base64_decode($text_pass));
       echo "<tr>\n";
       echo "<td ><b>Your UNencoded password (base 64) is:  </b></td>\n";
       echo "<td>$untest</td>\n";
       echo "</tr>\n";
       echo "</table>\n";
   
   default:
   
       break;
  }
}

function print_form(){
   echo "<html>\n";
   echo "<head>\n";
   echo "<title>Password Encoding</title>\n";
   echo "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=iso-8859-1\">\n";
   echo "</head>\n";
   echo "<body>\n";
   echo "<table border=\"0\" cellspacing=\"0\" width=\"100%\">\n";
   echo "<div align=\"center\">\n";
   echo "<h3 align=center>Password Encoding Page</h3>\n";
   echo "<tr>\n";
   echo "<form action=\"$_SERVER[PHP_SELF]\" method=\"post\">\n";
   echo "<table align=\"center\" border=\"0\">\n";
   echo "<tr>\n";
   echo "<td align=\"right\"><b>Password to Encode/Decode:</b></td>\n";
   echo "<td align=\"right\">";
   echo "  <input type=\"text\" name=\"text_pass\" size=\"30\" >\n";
   echo "</td>\n";
   echo "</tr>\n";
   echo "</tr>\n";
   echo "<tr>\n";
   echo "<tr>\n";
   echo "&nbsp;\n";
   echo "</tr>\n";
   echo "<td >";
   echo "<input type=\"submit\" name=\"button\" value=\"Get Encoded\"><br>\n";
   echo "</td>";
   echo "<td >";
   echo "<input type=\"submit\" name=\"button\" value=\"Get UNEncoded\"><br>\n";
   echo "</td>";
   echo "</tr>\n";
   echo "</table>\n";
   echo "</form>\n";
   echo "<tr>\n";
   echo "</table>\n";
   echo "</body>\n";
   echo "</html>\n";
}


<?php 
//1. 截取整个屏幕 Screenshot
$im = imagegrabscreen();
imagepng($im, "myscreenshot.png");
imagedestroy($im);




//2. 截取一个窗口 Capture a window (IE for example)
$browser = new COM("InternetExplorer.Application"); 
$handle = $browser->HWND; 
$browser->Visible = true; 
$im = imagegrabwindow($handle); 
$browser->Quit(); 
imagepng($im, "iesnap.png"); 
$im = imagegrabscreen(); 




//3. 截取IE内容 Capture a window (IE for example) but with its content!
$browser = new COM("InternetExplorer.Application"); 
$handle = $browser->HWND; 
$browser->Visible = true; 
$browser->Navigate("http://www.abcd9.com/"); 

while ($browser->Busy) { 
com_message_pump(4000); 
} 
$im = imagegrabwindow($handle, 0); 
$browser->Quit(); 
imagepng($im, "iesnap.png"); 




//4. 截取IE的全屏模式 IE in fullscreen mode
$browser = new COM("InternetExplorer.Application"); 
$handle = $browser->HWND; 
  
$browser->Visible = true; 
$browser->FullScreen = true; 
$browser->Navigate("http://www.abcd9.com/"); 
  
/* Is it completely loaded? (be aware of frames!)*/
while ($browser->Busy) { 
com_message_pump(4000); 
} 
$im = imagegrabwindow($handle, 0); 
$browser->Quit(); 
imagepng($im, "iesnap.png"); 



// PHP5.2.2以上版本的GD库实现了两个截屏函数 imagegrabscreen 和 imagegrabwindow
// 分别用于截取整个屏幕和截取某个窗口（同ALT+PrintScreen）的屏幕。



//附加说明：
// 1、imagegrabscreen和imagegrabwindow只能在windows环境下工作
// 2、截图黑屏解决办法：web 服务器(iis或apache)做为windows服务时，必须打开”允许与桌面交互”的选项(点击服务属性->登录->勾选”允许与桌面交互”，设置后重启服务生效)。 




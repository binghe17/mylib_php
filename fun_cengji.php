<?php

function fun1($type=1){
	function fun2(){
		echo 'eeeee';
		//fun1();//出错
		//fun2();//自己调用自己，陷入无限循环。
		fun3(4);
		fun4();//fun3运行后可以执行fun4
	}//位置放到地下也不能运行。程序执行顺序是从上之下。（先定义后使用）

	if($type==1){	//[私用]
		//多态
		function fun1_1(){
			echo '1111111';
		}
		fun1_1();
		//fun2_1();//出错，他人方法

		fun2();//没有加锁的同辈方法

	}
	if($type==2){
		//多态
		function fun1_1(){
			echo '2222222';

			function fun5(){
				echo '5555555';

				function fun6(){
					echo '6666666';

					function fun7(){
						echo '777777777';
					}
					fun7();
					function fun8(){
						echo '88888888';
					}
					fun8();
				}
				fun6();
				//fun1_1();//不能往上跨级调用。
				//fun5();//自己调用自己是可以的，但小心无限循环
			}
			fun5();
			//fun6();//fun5调用过一次。所有fun5子方法fun6也可以使用,但还有孙子方法那就报错。
			fun7();//孙子有的时候可以用
		}
		fun1_1();

		function fun2_1(){
			echo '2222222---11';
		}
	}
}

fun1(2);


function fun3(){	//[公用]
	echo '333333';
		function fun4(){
			echo '44444';
		}
}

/*总结：
	1.私用方法，此层的方法，此层间使用。尽量不要跳层使用。（先定义，后使用原则）。（if下可同名）
	2.公用方法，在最外层设，没有层级关系的方法。大家一起使用。
*/

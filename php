---        phpの研修      ---------------

1.可変変数
	例:<?php
		$x = 'title';
		$title = 'PHP:Hypertext Preprocessor';
		print $$x;


2.定数の命名規則
	例:<?php
		const TAX = 1.05;
	注意点:
		●　先頭に[$]のような記号を付ける必要はない
		●　すべての大文字で命名するのが通例


3.シングルクォート文字列とダブルクオート文字列の違い


4.暗黙的型変換
  　	


5.while / do ~ while 命令
	$i = 6;
	while($i<6){
		任意の処理
	}-----前置判定
	　　条件次第で回もループが実行されない


	do{
		任意の処理
	}while($i<6);


6.forカンマ演算子
	例:
	--  for($i = 1; $i < 6; print "{$i}番目のループです。",$i++)
	--  for($i = 1,$j = 1; $result = $i * $j,$i < 6; $i++, $j++){
		print "{$i}x{$j}={result}";
	}


7.制御命令の別構文
	例:
	$x = 35;
	if($x > 20):
		print(変数$xは20より大きいです); 
	elseif($x > 10):
		print(変数$xは10より大きく、20以下です。);
	else:
		print(変数$xは10以下です);
endif;


8.foreachブロックの中で配列の要素を変更する（値変数の参照渡し）
	$data = ['高江','掛谷','日尾','薄井','和田'];
	foreach($data as &$value){
		$value = 'new'.$value;
	}	
	print_r($data);//[new高江,new掛谷,new日尾,new薄井,new和田];














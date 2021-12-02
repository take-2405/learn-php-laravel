# 基本構文  
メモ程度、他の言語と違うなと感じた部分をメモっておく
- 作法  
```
<?php 
処理を記載
?> 
```

- 変数の宣言  
```
$test_str = "test";
$test_array = [1,2,3,4,5];
```

- 関数の定義
```
function func_name(){

}
```

- クラスの定義
```
Class class_name{
    public function func_name(){
    }
}
$tc = new class_name();
$tc->func_name(); 
```

- while for forecd  
どうやらforとforecdなるものがあるらしい、、、
```
// forはいつも通り
$nums = [1,2,3];
for ($i = 0; $i < 3; $i++) {
    echo $nums[$i];
}

// foreachは配列の値を参照しループさせる
$nums = [1,2,3];
foreach ($nums as $num) {
    echo $num;
}

```
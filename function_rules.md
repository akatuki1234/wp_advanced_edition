# DocComment( Docコメント ) = PHPDoc
・以下のような内容を書きます。
1. 要約（処理の内容を一行で記述）
2. 説明（処理の内容をさらに詳しく説明）
3. タグ（名前・参考資料など）
4. タグ（引数・返り値）

・クラスやメソッドを書く場合は以下の様な内容になりやすい。
1. @var は変数、オブジェクトのプロパティ情報
2. @param が引数の情報
3. @return が返り値の情報

/**
* １行で処理の内容を記述
*
* @param int $example    第一引数の説明文をここに入れます。
* @param strng $example2 第二引数の説明
*/


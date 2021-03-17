<script type="text/javascript">
    
    
    //function toOneDimension( $currentValue, $previousValue ) { //currentValue 現在処理中の配列要素   previousValue 一つ前の処理までの累積結果。
    function toOneDimension( $previousValue, $currentValue ) {// toOneDimensionという関数を定義している。引数に$previousValueとpreviousValueを指定する。
    //console.table($previousValue);　//関数のブロックの中で引数に格納された$previousValueをコンソールに出力します。
    console.log($currentValue);  //関数のブロックの中で引数に格納された$currentValueをコンソールに出力します。
    return $currentValue.concat( $previousValue );  //呼び出し元$currentValueの配列の後ろに引数に指定した$previousValue配列を追加する
    }
    
    var $sampleArrayC = [ 
        [ 'A1', 'A2', 'A3' ],
        [ 'B1', 'B2', 'B3' ],
        [ 'C1', 'C2', 'C3' ]
    ];

    
    //console.table($sampleArrayA);
   
    
    
    
    
    
    
    
    
//    console.log($sampleArrayC);
//    var $sampleArrayB = $sampleArrayC.sort(function(a, b){
//        
//    a = a.toString();     
//    b = b.toString();
//    if(a > b){
//        return -1;
//    }
//    
//    });
//    console.log($sampleArrayC);

    
    
    
    
    
    //console.log($sampleArrayB); 
    var $sampleArrayB = $sampleArrayC.reduce( toOneDimension );
    //変数$sampleArrayBに$sampleArrayCを代入。$sampleArrayCの引数「toOneDimension」に指定されている引数$previousValueとpreviousValueの配列要素を左から右へ順に累積した結果を返す
    //console.log($sampleArrayB); 
    //console.table($sampleArrayB);
    
    for ( var $counterVar = 0; $counterVar < $sampleArrayB.length; $counterVar++ ) { //$counterVarの初期値は０で$counterVarが$sampleArrayB未満の場合、$counterVarが１ずつ増え続ける
    console.log($sampleArrayB.length);
    document.write( '$sampleArrayB[' +$counterVar+']:' );
    document.write( $sampleArrayB[$counterVar] );
    document.write( '<br />' );
    
    }
    
    
    
    
    
</script>

<br>





















<script type="text/javascript">
    
    
    
    
//    function toOneDimension( $previousValue, $currentValue ) {
//    return $previousValue.concat( $currentValue ); 
//    }
//    var $sampleArrayA = [ 
//        [ 'A1', 'A2', 'A3' ],
//        [ 'B1', 'B2', 'B3' ],
//        [ 'C1', 'C2', 'C3' ]
//    ];
//
//
//    console.table($sampleArrayA);
//
//    var $sampleArrayB = $sampleArrayA.reduceRight( toOneDimension );
//
//    console.table($sampleArrayB);
//    
//    for ( var $counterVar = 0; $counterVar < $sampleArrayB.length; $counterVar++ ) { 
//    document.write( '$sampleArrayB[' +$counterVar +']: ' );
//    document.write( $sampleArrayB[$counterVar] );
//    document.write( '<br />' );
//    }
//    
    
  
    
</script>

<br>






<script type="text/javascript">
//    var arr = ['pineapple','Orange','kiwi','Banana','apple'];
    
  
//    arr.sort(function(a, b){
//    a = a.toString().toLowerCase();
//    b = b.toString().toLowerCase();
//    console.table(a);
//    //console.table(b);
        
//    if(a < b){
//        return -1;
//    }else if(a > b){
//        return 1;
//    }
//    return 0;
//    });
    
    
</script>





 
<script type="text/javascript">
    
    
    
    
    function toOneDimension( $previousValue, $currentValue ) {
    return $previousValue.concat( $currentValue ); 
    }
    
    var $sampleArrayC = [ 
        [ 'A1', 'A2', 'A3' ],
        [ 'B1', 'B2', 'B3' ],
        [ 'C1', 'C2', 'C3' ]
    ];

    
    //console.table($sampleArrayA);
   
    
    
    
    
    
    
    
    
    console.log($sampleArrayC);
    var $sampleArrayB = $sampleArrayC.sort(function(a, b){
    console.log(a);    
    a = a.toString();
    console.log(a);     
    b = b.toString();
    if(a > b){
        return -1;
    }
    
    });
    console.log($sampleArrayC);

    
    
    
    
    
    //console.log($sampleArrayB); 
    var $sampleArrayB = $sampleArrayC.reduce( toOneDimension );
    //console.log($sampleArrayB); 
    //console.table($sampleArrayB);
    
    for ( var $counterVar = 0; $counterVar < $sampleArrayB.length; $counterVar++ ) { 
    document.write( '$sampleArrayB[' +$counterVar +']: ' );
    document.write( $sampleArrayB[$counterVar] );
    document.write( '<br />' );
    
    }
    
    
    
    
    
</script>

<br>





















<script type="text/javascript">
    
    
    
    
    function toOneDimension( $previousValue, $currentValue ) {
    return $previousValue.concat( $currentValue ); 
    }
    var $sampleArrayA = [ 
        [ 'A1', 'A2', 'A3' ],
        [ 'B1', 'B2', 'B3' ],
        [ 'C1', 'C2', 'C3' ]
    ];


    console.table($sampleArrayA);

    var $sampleArrayB = $sampleArrayA.reduceRight( toOneDimension );

    console.table($sampleArrayB);
    
    for ( var $counterVar = 0; $counterVar < $sampleArrayB.length; $counterVar++ ) { 
    document.write( '$sampleArrayB[' +$counterVar +']: ' );
    document.write( $sampleArrayB[$counterVar] );
    document.write( '<br />' );
    }
    
    
  
    
</script>
 
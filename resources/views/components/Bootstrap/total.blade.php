<script>
    er=0;
    function total() {
        let total= document.getElementById("y");
        let x=document.getElementById('x');
        let z=document.getElementById('z');
        if (x.value==2) {
            er =er+2000 ;
            document.getElementById("y").value = er;            
        }
        else if (x.value==4) {
            er =er+4000 ;
            document.getElementById("y").value = er;            
        }
        else if (x.value==8) {
            er =er+6000 ;
            document.getElementById("y").value = er;            
        } else if (x.value==16) {
            er =er+8000 ;
            document.getElementById("y").value = er;            
        }
        else{
            document.getElementById("y").value = total;            
        }              
    }
    function totall(){
        let total= document.getElementById("y");
        let x=document.getElementById('x');
        let z=document.getElementById('z');
        if (z.value==128) {
            document.getElementById("y").value = 1000;
            
        }
    }
    // var er=0;
    // function total(){
    //     let total= document.getElementById("y");
    //     let x=document.getElementById('x');
    //     let z=document.getElementById('z');
        
    //     if (x.value==2 && x.value!={{$details['ram']}}) {
    //         if (x.value<{{$details['ram']}}) {total.value={{$details['price']}}
                
    //         }else{
    //             er={{$details['price']}}+2000;
    //             var ee=et-er;
    //          total.value=er+ee;    
    //         }                          
    //     }
    //     else if(x.value==4 && x.value!={{$details['ram']}}){
    //         if (x.value<{{$details['ram']}}) {
    //             total.value={{$details['price']}};                
    //         }else{
    //             er={{$details['price']}}+4000;
    //             var ee=et-er;
    //          total.value=er+ee;
    //         }
            
        
    //     }
    //     else if(x.value==6 && x.value!={{$details['ram']}}){
    //         if (x.value<{{$details['ram']}}) {
    //             total.value={{$details['price']}};                
    //         }else{
    //             er={{$details['price']}}+6000;
    //             var ee=et-er;
    //          total.value=er+ee;
    //         }
        
    //     }
    //     else if(x.value==8 && x.value!={{$details['ram']}}){
    //         if (x.value<{{$details['ram']}}) {
    //             total.value={{$details['price']}};                
    //         }else{
    //             er={{$details['price']}}+8000;
    //             var ee=et-er;
    //          total.value=er+ee;
    //         }
        
    //     }
    //     else if(x.value==16 && x.value!={{$details['ram']}}){
    //         if (x.value<{{$details['ram']}}) {
    //             total.value={{$details['price']}};                
    //         }else{
    //             er={{$details['price']}}+10000;
    //             var ee=et-er;
    //          total.value=er+ee;
    //          totall();
    //         }
        
    //     }
    //     else{
    //         total.value=total.value;
    //     }      

    //     }
    //     function totall(){
    //         let total= document.getElementById("y");
    //     let x=document.getElementById('x');
    //     let z=document.getElementById('z');
    //         if(z.value==128 && z.value!={{$details['Hard']}}){
    //         if(z.value<{{$details['Hard']}})
    //         {
    //             total.value=er;
    //         }
    //         else{
    //             var et={{$details['price']}}+2000;
    //          var ee=et-er;
    //          total.value=er+ee;
    //         }
    //     }
    //     else if(z.value==256 && z.value!={{$details['Hard']}}){
    //         if(z.value<{{$details['Hard']}})
    //         {
    //             total.value=er;
    //         }
    //         else{
    //             var et={{$details['price']}}+4000;
    //          var ee=et-er;
    //          total.value=er+ee;
    //         }
    //     }
    //     else if(z.value==500 && z.value!={{$details['Hard']}}){
    //         if(z.value<{{$details['Hard']}})
    //         {
    //             total.value=er;
    //         }
    //         else{
    //             var et={{$details['price']}}+8000;
    //          var ee=et-er;
    //          total.value=er+ee;
    //          total();
    //         }
    //     }else if(z.value==1000 && z.value!={{$details['Hard']}}){
    //         if(z.value<{{$details['Hard']}})
    //         {
    //             total.value=er;
    //         }
    //         else{
    //             var et={{$details['price']}}+10000;
    //          var ee=et-er;
    //          total.value=er+ee;
    //          total();
    //         }
    //     }
    //     else{
    //         total.value=er;
    //     }
    
    //     }
    // var er=0;
    // function total() {
    //     let x=document.getElementById('x');
    //     let z=document.getElementById('z');
    //     let total=document.getElementById('y');
    //     if(x.value==2)
    //     {
    //         er={{$details['price']}}+2000;
    //         total.value=er;
    //     }
    //     if (z.value==128){
    //         var et={{$details['price']}}+1000;
    //         var ee=et-er;
    //         total.value=er+ee;            
    //     }
        
    // }
  
</script>

    $(document).ready(function(){
////////////////////////////////////





      ///////////////////    
        var canvas = document.getElementById("paint");
        var ctx = canvas.getContext("2d");
      
        var sketch = document.getElementById("sketch");
        var sketch_style = getComputedStyle(sketch);
        canvas.width = 500;
        canvas.height = 600;
        
        var mouse = { x: 0, y: 0 };
        
        /* Mouse Capturing Work */
        canvas.addEventListener(
          "mousemove",
          function(e) {

            mouse.x = e.pageX - this.offsetLeft-520;    
            mouse.y = e.pageY - this.offsetTop-25   ;
        
          },
          false
        );
        
        /* Drawing on Paint App */
        ctx.lineJoin = "round";
        ctx.lineCap = "round";
        
        ctx.strokeStyle = "black";
        function getColor(colour) {
          ctx.strokeStyle = colour;
        }
        
        function getSize(size) {
          ctx.lineWidth = size;
        }
        
        //ctx.strokeStyle =
        //ctx.strokeStyle = document.settings.colour[1].value;
        
        canvas.addEventListener(
          "mousedown",
          function(e) {
            ctx.beginPath();
            ctx.moveTo(mouse.x, mouse.y);
        
            canvas.addEventListener("mousemove", onPaint, false);
          },
          false
        );
        
        canvas.addEventListener(
          "mouseup",
          function() {
            canvas.removeEventListener("mousemove", onPaint, false);
          },
          false
        );
        
        var onPaint = function() {
          ctx.lineTo(mouse.x, mouse.y);
          ctx.stroke();
        };
        


        $("#sendout").on("click",function(){
            alert("asd");
        })

        //html2canvas

        $('#toPharmacy').on('click', function() {		
            html2canvas(document.querySelector("#paint")).then(canvas => {
              // document.body.appendChild(canvas)
              // alert(JSON.stringify(canvas));
              var image=canvas.toDataURL("image/png");
             //localStorage.setItem("IMAGE",image);

             document.write('<img src="'+image+'"/>');
            });
            });
        

          
    

           
    });



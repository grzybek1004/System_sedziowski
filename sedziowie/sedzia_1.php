<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>System sędziowski</title>
        <meta name="author" content="Jakub Grzybowski">
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link rel="stylesheet" href="main.css">
        
    </head>
    
    <body>
        
        <div id="head">
            
            <a href="sedzia_index.php" id="arrow"><div class="triangle-left"></div></a>
            <div id="title">
                Sędzia 1
            </div>
        </div>
        
       
        
        <section id="terminal">
            
            <div id="blok">
            <form action="add.php" method="POST">
                <div id="top">
                    <div id="name"  style="float: left;">
                        <?php
                            echo $Nr;
                        ?>
                    </div>
                    <div id="poomsae">Sipjin</div>
                </div>
            
                <div class="container-fluid">
                    <div id="top_2">
                    Technika
                    </div>
                    
                    <div class="row">
                        
                        <div class="col-xs-2"><button type="button" class="m3" id="m3t" onclick="tm3()">-0.3</button></div>
                        <div  class="col-xs-2"><button type="button" class="m1" id="m1t" onclick="tm1()">-0.1</button></div>
                        <div  class="col-xs-2"><input type="text" id="scoret" name="scoret" disabled></div>
                        <div  class="col-xs-2"><button type="button" class="p1" id="p1t" onclick="tp1()">+0.1</button></div>
                        <div  class="col-xs-2"><button type="button" class="p3" id="p3t" onclick="tp3()">+0.3</button></div>
                        </div>
                
                    <div id="top_2">
                        Prezentacja
                    </div>
                    
                    <div class="row">
                        <div class="col-xs-2"><button type="button" class="m3" id="m3p" onclick="pm3()">-0.3</button></div>
                        <div  class="col-xs-2"><button type="button" class="m1" id="m1p" onclick="pm1()">-0.1</button></div>
                        <div  class="col-xs-2"><input type="text" id="scorep" name="scorep" disabled></div>
                        <div  class="col-xs-2"><button type="button" class="p1" id="p1p" onclick="pp1()">+0.1</button></div>
                        <div  class="col-xs-2"><button type="button" class="p3" id="p3p" onclick="pp3()">+0.3</button></div>
                    </div>
                
                <div id="bottom">
                    <input type="hidden" name="id" value="<?php echo $Nr?>">
                    <input type="submit" name="submit" class="button" id="submit_btn" value="Wyślij" onclick="enable()">
                </div> 
            
            </div>
            </form>
            </div>
            
        </section>
        
        
        
        <script>
            $(function() {
                $(".button").click(function() {
                // validate and process form here
                });
            });
            function enable(){
                scorep.disabled = false;
                scoret.disabled = false;
            }
            //document.getElementById("scoret").innerHTML = "4";
           // document.getElementById("scorep").innerHTML = "3.5";
           scoret.value= 4;
           scorep.value= 3.5;
            function tm3(){
                var value = parseFloat(scoret.value);
                if(value>=0 && value<=0.3) value=0;    
                else{ 
                    value-= 0.3;
                    value = value.toPrecision(2);
                }
                //document.getElementById("scoret").value = value;
                scoret.value = value;
            }
            function tm1(){
                var value = parseFloat(scoret.value);
                if(value==0) return;
                else{ 
                    value-= 0.1;
                    value = value.toPrecision(2);
                    
                }
                scoret.value= value;
            }
            function tp1(){
                var value = parseFloat(scoret.value);
                if(value==4) return;
                else{ 
                    value+=0.1;
                    value = value.toPrecision(2);
                    
                }
                scoret.value= value;
            }
            function tp3(){
                var value = parseFloat(scoret.value);
                if(value>=3.7 && value<=4) value=4;
                else{ 
                    value+=0.1;
                    value = value.toPrecision(2);
                    
                }
                scoret.value= value;
            }
            function pm3(){
                var value = parseFloat(scorep.value);
                if(value>=0 && value<=0.3) value=0;    
                else{ 
                    value-=0.3;
                    value = value.toPrecision(2);
                }
                scorep.value = value;
            }
            function pm1(){
                var value = parseFloat(scorep.value);
                if(value==0) return;
                else{ 
                    value-=0.1;
                    value = value.toPrecision(2);
                    
                }
                scorep.value = value;
            }
            function pp1(){
                var value = parseFloat(scorep.value);
                if(value==6) return;
                else{ 
                    value+=0.1;
                    value = value.toPrecision(2);
                    
                }
                scorep.value = value;
            }
            function pp3(){
                var value = parseFloat(scorep.value);
                if(value>=5.7 && value<=6) value=6;
                else{ 
                    value+=0.3;
                    value = value.toPrecision(2);
                    
                }
                scorep.value = value;
            }
        </script>
        <script src="../js/jquery-3.3.1.slim.min.js"></script>
        <script src="../js/popper.min.js"></script>
        <script src="../js/bootstrap.min.js"></script>
    </body>
</html>

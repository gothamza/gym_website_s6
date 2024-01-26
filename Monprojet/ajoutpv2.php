
<html>
    <head>
       <meta charset="utf-8">
        <style type="text/css">
        
            body{

                background-size: 100%;
                background-image: url(img/sallsp1.jpg);
            }
            .ferm:hover{
                cursor: pointer; 

          }
            .carr{
                border: 10px groove #fff;
                 width:50% ;
                 height:90%;
                 margin-top: 50px;
                 margin-left:25%;
                 background-image:url(img/sport.jpg);
                  
                 

            }
            
            .entet{
             width:100%;
             height:30% ;
             
             background-size: 100%;
            
            }
            .sall{

                text-decoration:underline;
                 text-align:center;
                 color: red;
                 text-shadow:-1px 1px 1px orange;
                 margin-left:0%;
                 padding: 50px;
                 font-style: oblique;
         
          }
   
       .ferm{
        background-color: red;
        color:white;
        font-size:20px; 
        width:40px;
        height: 40px;
        margin-left:90%;
        margin-top:10px ;
        border-radius: 50%;
       }   
       
     
       .infopers:onclick{
              background-color:red;


       }
       .infopers:hover{
        background-color:green;
       }
     .not{
         
         display:block;
         border: none;
  border-bottom: 2px solid red;
   width: 80%;
  padding: 12px 20px;
  margin: 8px 0;
  margin-left:10%;
    box-sizing: border-box;


       }
       .ferm:hover{
                cursor: pointer; 

          }
       input[type=text]:focus {
       border: 3px solid #555;
            }
       label{
          margin-left:13%;
          font-size:15px;
          font-family:verdana;
          color: red;
          text-shadow: 1px 1px 0px orange; 

       }
       .dd{

        width: 100px; margin-left:40%; height: 25px;
       }

        </style>
    </head>
    <body>
     <form action="produitv2.php" method="post"> 
        <div class="carr">
            <!-- zone d'admin -->
            <a  style="    " href="admin_html.html"><button class="ferm">X</button></a>
            <div class="entet">
             <h1 class="sall"  ">ajouter produit

             </h1>
            </div>
            <label>Nom du Produit</label>
            <input class="not" type="txt" name="nom_produit" placeholder="nom de produit" >
          
           <label>Prix du Produit</label>
            <input class="not" type="txt" name="prix" placeholder="prix du produit" >

             <label>Quentiter du Produit</label>
            <input class="not" type="txt" name="Qte" placeholder="QTE" >

             <label>Qte vend</label>
            <input class="not" type="txt" name="QTE_VEND" placeholder="Qte vend" >

 <input  style="width: 100px; margin-left:40%; height: 25px;" classe="dd"  type='submit' name="add" value="Ajouter"/>
                                                   
         
        

        </div>
      </form>
    </body>
</html>
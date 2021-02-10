<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        
    
        <title>Cadastro de Imagem</title>
        
         <link rel="stylesheet" type="text/css" href="https://sistema.dgna.com.br/bootstrap.min.css">
	     <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />


        
    </head>
    <body>
         
        <div style="width:100%; height:100vh;">
                    
                    <div style="margin-left:35%; padding-top:5%"> 
                    
                        <?php
                        		if(isset($_SESSION['msg'])){
                        			echo $_SESSION['msg'];
                        			unset($_SESSION['msg']);
                        		}
                    		?>
                        <div style="width:50%"> 
                            
                             <div class="card">
                              <div class="card-header">
                               Cadastrar Imagem 
                              </div>
                              <div class="card-body">
                                  
                                        
                                <form method="POST" action="modelcad" enctype="multipart/form-data">
                                  
                                  
                                  <div class="form-group">
                                    <label >Seu nome:</label>
                                    <input type="text" class="form-control" required name="nome" placeholder="Ex. José Pedro">
                                  </div>
                                  <div class="form-group">
                                    <label for="telefone">Seu telefone:</label>
                                    <input type="text" class="form-control" required name="telefone" id="telefone" placeholder="(00) 00000-0000">
                                  </div>
                                  <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Sua mensagem:</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" name="mensagem" rows="3"></textarea>
                                  </div>
                                  <div class="form-group">
                                    <label for="imagem">Carregue sua imagem:</label>
                                    <input type="file" class="form-control-file" required name="imagem">
                                  </div>
                                  
                                 
                                  <input name="SendCadImg" style="float:right" class="btn btn-primary" type="submit"  value="Cadastrar">
                                    
                                </form>
                                
                              </div>
                            </div>
                            
                        </div>
                    </div>
            
        </div>
        
       
    
        
	    <style>
	    
	    
	    
    		#nome{
             width: 400px;
             height: 30px;
             margin: 0 auto;
             margin-left: 5px;
            }	
	
			
			
           #submit{
           
            margin: 10px;   
           
           }
           
           #alert{
           
            margin: -10px;   
      
           
           }   
       
			
	  </style>		       
            
    </body>
</html>

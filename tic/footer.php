<footer class="bg-secondary">


 
  
         
                     
<center>
                     <button  type="button" class="btn bg-info" data-dismiss="modal" >
                                 <span aria-hidden="true" class="text-light"><?php echo  "    " .$count ?></span>
                    </button>
                                
                      <button type="button" class="btn-close btn btn-danger" data-dismiss="modal" >
                                       <span aria-hidden="true" >© Division de Desarrollo VTV Canal 8 ©</span>
                      </button>

                     <button type="button" class="btn-close btn btn-info " data-dismiss="modal" >
                                             <span aria-hidden="true" >

                                             <?php 


                                                   echo  date("d-m-Y");

                                             ?>
                                             <?php 

                                                   date_default_timezone_set("America/Caracas");
                                                   $hora = date('h:i a',time() - 3600*date('I'));
                                                   print "&nbsp;$hora&nbsp;"; 

                                             ?>
                                       </span>
                </button>



                     
               






</footer>



<!--jumbotron -->

<div class="container-fluid jumboMain">

 <div class="row uiATM">

  
     <!--USER INTERFACE -->



<div class="col-lg-5 col-md-5 col-sm-9 col-xs-12 sections1">

      <!-- Example row of columns -->

       <hr class="section-heading-spacer">
       <h2 class="section-heading">Ultimate Machine UI for<br>ATM machines</h2>
            <p class="lead pp2">
            The User Interface of a self-service Machine is more then 90% responsible for the customer experience at the machine. 
              <br>
              <br>
            With the Ultimate Machine UI It is very simple. Customers will simply Select the desired Option at each Row. Some Rows have a pre-selected option.
              <br>
              <br>

              Notice each Account displays its Current Balance to the customer, this is a very neat feature. To view the latest activity of an Account just double tap that desired Account. 
              <br>
              <br>

              The <i>Linear-Number-Keypad</i> allows the customer to seamlessly specify the desired amount and makes obsolete the need of featuring <i>Quick Cash</i> options as it offers a more complete experience without sacrificing simplicity.
              <br>
              <br>
              In last-generation ATMs customers will be able to specifiy Desired Bills of their withdrawal. For example If the customer makes a $700 withdraw he will be able to request it to be dispatched in bills of $100, $50, $20.
              <br>
              <br>

              This functional design allows Customers to seamlessly make multiple transactions. With this minimalistic design authenticated customers will be submitting their orders in an average record time of 5 seconds or less.
              

            

              
              </p>
              <button class="btn btn-warning showB" id="Spp2" value='false'> Show Details</button>

              <button class=" btn btn-warning HideB" id="Hpp2" value='false'> Hide Details</button>
</div>












<!-- <div class="atmUI2"> -->


<div class="buttons">

<button id="priBlue" type="button"></button>

<button id="blue1" type="button"></button>

<button id="red" type="button"></button>

<button id="red2" type="button"></button>

<button id="lightBlue" type="button"></button>

<button id="navyBlue" type="button"></button>

<button id="navy2Blue" type="button"></button>

<button id="green" type="button"></button>

<button id="orange" type="button"></button>

<button id="banres" type="button"></button>

<button id="blue2" type="button"></button>

<button id="yellow" type="button"></button>

</div>








<div class="ui2">
 <!--LAN -->


 <!-- Conrfirm or Go back-->





 <!-- Conrfirm or Go back 24242442424-->
<div class='confBack24'>

<div class='confirm24'> 
  <h2><b> Confirm</b></h2>

</div>



<div class='back24'> 
  <h2><b>Go Back</b></h2>
  
</div>

</div>


<!-- Thank You please retrieve your cash withdrawal-->







<div class='retrieve'> 
  <br>
  <div class="btn-grou bills" data-toggle="buttons">
     <p id="bills"> I need bills of:</p>
    
       <button id='b10' class="btn btn-default btn-lg" value='10'>$10</button>

        <button id='b20' class="btn btn-default btn-lg" value='20'>$20</button>

         <button id='b50' class="btn btn-default btn-lg" value='50'>$50</button>

          <button id='b100' class="btn btn-default btn-lg" value='100'>$100</button>
        </div>
  
  
  <br>

  <h2 id="retr"><b> Please Retrieve your Cash Withdrawal</b></h2>
  <br>

  <p> </p>
  

 </div>




 <div class='wrongAmount'> 
  
  <h1 id="oops"><b> Oops</b></h1> 

  <h2 id="machine"><b> This Machine can only dispatch bills Of: </b></h2><br>
  <p id="limit"> <b>$10: limited to $200 <br>
      $20: limited to $1500 <br>
      $50: limited to  $1500 <br>
      $100:limited to  $1500
      </b>
  </p>
  <br>
  <p> </p>
  

 </div>





<!-- Thank You please insert your cash deposit-->


<div class='depositCash'> 
  <h2><b></b></h2>
  <br>
  <br>
  <br>
  <h2 id="casde"><b> Please Insert your Cash Deposit</b></h2>
  <br>
  <br>
  <p id="cancel"> ( Tap to cancel )</p>

 </div>


<!-- Thank You please insert your Check deposit-->

<div class='depositCheck'> 
  <h2><b></b></h2>
  <br>
  <br>
  <h2 id="chede"><b> Please Insert your Checks Deposit</b></h2>
  <br>
  <br>
  <p id="cancel2"> ( Tap to cancel )</p>

 </div>
<!-- //////////////////////////////////////////////// -->





<!-- /////////////////////////////////////////////// -->

 <div class='checkCashSent'> 
  <h2><b></b></h2>
  <br>
  
  <h2 id="sfca"><b>$<input id="inCheckSent"> <br> were sent from Checking Account</b></h2>
  <br>
  <p id="sfcaCancel"> ( Tap to Close)</p>

 </div>



  <div class='savCashSent'> 
  <h2><b></b></h2>
  <br>
  
  <p id="sfsa"><b>$<input id="inSavSent"> <br> were sent from Saving Account</b></p>
  <br>
  <p id="id=sfsaCancel"> ( Tap to Close)</p>

 </div>


 <div class='select'> 
  <h2><b> Oooops</b></h2>
  <br>
  <br>
  <h2><b> Please select a service and an Account <br> for your transaction</b></h2>
  <br>
  <p> ( Tap to close )</p>

 </div>



  <div class='goodbye'> 
  <h2 id="gby"><b> Good Bye</b></h2>
  <br>
  <br>
 
<div class="receiptPatm">

  <p id="nrep">Need a Receipt?</p>

   <div class="btn-group" data-toggle="buttons"> 

      <label id="receiptYes" value="true" class="btn btn-default btn-lg">
         <input  type="radio" name="receiptATM"> YES </label>

      <label id="receiptNo" value="true" class="btn btn-default btn-lg">
         <input  type="radio" name="receiptATM"> NO </label>
    </div>
</div>

  

  <div class="TapB">
  <p id="exBack"> <b>Go Back</b></p>
  </div>





 </div>


   <div class='tranToChecking'> 
  <h2><b></b></h2>
  
  <h2 id="stc"><b>$<input id="inCheck">  <br>Were Transfered from Saving to Checking</b></h2>
  <br>
  <p id="stcX"> ( Tap to Close)</p>

 </div>




  <div class='tranToSavings'> 
  <h2><b></b></h2>
  
  <h2 id="cts"><b> $<input id="inSav"> <br>Were Transfered from Checking to Savings</b></h2>
  <br>
  <p id="ctsX"> ( Tap to Close)</p>

 </div>












 










<div class=checkinginfo2>
<h3 style="color:navy;">CHECKING balance: -$2,200.00</h3>
<div class="table-responsive">
    <table class="table table-bordered table-striped"> 
       <thead> 
          <tr> 
            

                <th>Date</th> 
                <th>Source/Destination</th> 
                <th>Amount</th> 

           </tr> 

         </thead> 
         <tbody> 

         <tr> 

          <td> 03/15/2030</td> 

          <td> @HomeDepot#12345</td> 

          <td class="text-success"> -$800.00 </td> 

         </tr>

        <tr> 

         <td> 03/10/2030</td> 

         <td> @grocery store#68523</td> 

         <td class="text-success"> -$65.00 </td> 

        </tr>

        <tr> 

         <td> 03/08/2030</td> 

         <td> @grocery Store#14523</td> 

         <td class="text-success"> -$200.00 </td> 

        </tr>


        <tr>
         <td> 03/05/2030</td> 

         <td> @Direct Deposit received</td> 

         <td class="text-success"> +$1500.00 </td> 

        </tr>


        <tr>
        <td> 03/02/2030</td> 

         <td> @grocery Store#14523</td> 

         <td class="text-success"> -$80.00 </td> 

        </tr>


        <tr>
        <td> 02/28/2030</td> 

         <td> @grocery Store#14523</td> 

         <td class="text-success"> -$30.00 </td> 

        </tr>


         

         </tbody> 

         </table> 
         <b>(Tab to Close)</b>


         </div>

 </div>


 <div class=savinginfo2>
<h3 style="color:navy;">SAVING balance: $1,500.00</h3>
<div class="table-responsive">
    <table class="table table-bordered table-striped"> 
       <thead> 
          <tr> 
            

                <th>Date</th> 
                <th>Source/Destination</th> 
                <th>Amount</th> 

           </tr> 

         </thead> 
         <tbody> 

         <tr> 

          <td> 03/15/2030</td> 

          <td> @HomeDepot#12345</td> 

          <td class="text-success"> -$800.00 </td> 

         </tr>

        <tr> 

         <td> 03/10/2030</td> 

         <td> @grocery store#68523</td> 

         <td class="text-success"> -$65.00 </td> 

        </tr>

        <tr> 

         <td> 03/08/2030</td> 

         <td> @grocery Store#14523</td> 

         <td class="text-success"> -$200.00 </td> 

        </tr>


        <tr>
         <td> 03/05/2030</td> 

         <td> @Direct Deposit received</td> 

         <td class="text-success"> +$1500.00 </td> 

        </tr>


        <tr>
        <td> 03/02/2030</td> 

         <td> @grocery Store#14523</td> 

         <td class="text-success"> -$80.00 </td> 

        </tr>


        <tr>
        <td> 02/28/2030</td> 

         <td> @grocery Store#14523</td> 

         <td class="text-success"> -$30.00 </td> 

        </tr>


         

         </tbody> 

         </table> 
         <b>(Tab to Close)</b>

         </div>

 </div>

<!-- SEND MONEYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYY -->


 <div class="sendMoney2">
    <label id="labelATM" for="exampleFormControlSelect1"> Send Money to:</label> 
     <br>
 <input id="routing" class="send" type='text' placeholder="Routing Number">
 <br>
 <input id="account" class="send" type='text' placeholder="Account Number">
 <br>
 Use Submit to submit / Tap X to Close
  <button id='closeSend' type='button'> <b> X</b></button>

 </div>


 <!-- SEND MONEYYYYYYYYYYYYYYYYYYYYYYYYYYYYY-->


 <!-- SEND MONEYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYY -->


<div class="assistance">
     Hi, <br>How can I assist you today?
     
   
 <br>

  <button id='closeSendLive' type='button'> <b> X</b></button>

 </div>


 <!-- SEND MONEYYYYYYYYYYYYYYYYYYYYYYYYYYYYY-->

     <div class="lan2"> 
     
     <div class="btn-group" data-toggle="buttons">
        <label id="english2" class="btn btn-default btn-lg langB active">
         <input type="radio" name="lan"  checked> English</label>

         <label id="spanish2" class="btn btn-default btn-lg langB">
         <input type="radio" name="lan"> Español</label>

         <label id="chinesse2" class="btn btn-default btn-lg langB">
         <input type="radio" name="lan"> 中國 </label>

         <label id="russian2" class="btn btn-default btn-lg langB">
         <input type="radio" name="lan"> Русский</label>

           <div class="btn-group" role="group">

          <button name="itm" class="btn btn-default btn-lg dropdown-toggle langBother" data-toggle="dropdown" 
          aria-haspopup="true" aria-expanded="false"> Other <span class="caret"></span>
          </button> 
         
        <ul class="dropdown-menu" style='min-width:135px; transform:translate(-10px, 6px);'>

          <li> <button id='german2' class="btn btn-default btn-lg langB">German</button> </li>

          <li> <button id='hindi2' class="btn btn-default btn-lg langB">Hindi</button> </li>

          <li> <button id='french2' class="btn btn-default btn-lg langB">Francois</button> </li>

          <li> <button id='arabic2' class="btn btn-default btn-lg langB">Arabic</button> </li>
        </ul>
        </div>
     </div>
     </div>

    
 <!--IT -->
    
    
    <div class="ser2">
    I would like to:<br>
      <div class="btn-group" data-toggle="buttons"> 

      <label id="cash2" class="btn btn-default btn-lg cash2 serB" value='dcash'>
         <input type="radio" name="ser" > Deposit Cash </label>
       

       <label id="withdraw2" class="btn btn-default btn-lg withdraw2 serB" value='withdraw'>
         <input type="radio" name="ser"> Withdraw</label>

         <label id="checks2" class="btn btn-default btn-lg checks2 serB" value='dchecks'>
         <input type="radio" name="ser"> Deposit Check </label>




<div class="btn-group" role="group">

          <button  name="ser2" class="btn btn-default btn-lg dropdown-toggle serBother" data-toggle="dropdown" 
          aria-haspopup="true" aria-expanded="false" style="height: 61px; z-index: 5;"> <span class="caret"></span>
          </button> 
         
        <ul class="dropdown-menu" style='min-width:215px; transform:translate(-277px, 6px); opacity: 1;'>

        
          

            <li> <button id="sendFromCheckings" class="btn btn-default btn-lg sendFromCheckings serB" value='checkcashSent'>Send Money from Checking</button> </li>



            <li> <button id="transfer" class="btn btn-default btn-lg transfer serB" value='transfer'>Transfer to Checking / Savings</button> </li>

            <li> <button id="payTicket" class="btn btn-default btn-lg transfer serB" value='payBT'>Pay Bill / Ticket</button> </li>
            <li> <button id="Live" class="btn btn-default btn-lg serB" value='Live'>Live Assistance</button> </li>

      
        <!--
          <li> <button id="ttchecking" class="btn btn-default btn-lg" value='ttchecking'>Transfer to Checkings</button> </li>

          <li> <button id="ttsavings" class="btn btn-default btn-lg" value='ttsavings'>Transfer to Savings</button> </li>

        -->
        </ul>
        </div>







       

    </div>
    </div>

    <div class="tof2">
       <span> To / From:</span> <br>
      <div class="btn-group" data-toggle="buttons"> 

      <label id="checking2" class="btn btn-default btn-lg checking2 tofB" value="checking">
         <input type="radio" name="tof" > CHECKING <br><span>Balance: -$2, 200.00</span></label>


<i id="cheTsav" class="glyphicon glyphicon-arrow-right fa-5x"></i>

<i id="savTche" class="glyphicon glyphicon-arrow-left fa-5x"></i>


<i id="toChecking">Transfer To Checking</i>

<i id="toSaving">Transfer To Saving</i>




      <label id="saving2" class="btn btn-default btn-lg saving2 tofB" value="saving">
         <input type="radio" name="tof"> SAVINGS <br><span>Balance: $1, 500.00</span></label>   



         
      </div>
    </div>

    <form class="qty2" name="qty2">

      
         <button type="button" id="amount">Amount $:</button><input id="qtyvalue2" name="qtyvalue2" type="text" value="" disabled>

          <div class="btn-group" data-toggle="buttons">
       <button id='btn1' class="btn btn-primary btn-lg numV" value='1'>1</button>

        <button id='btn2' class="btn btn-primary btn-lg numV" value='2'> 2</button>

         <button id='btn3' class="btn btn-primary btn-lg numV" value='3'> 3</button>

          <button id='btn4' class="btn btn-primary btn-lg numV" value='4'> 4</button>

           <button id='btn5' class="btn btn-primary btn-lg numV" value='5'> 5</button>

            <button id='btn6' class="btn btn-primary btn-lg numV" value='6'> 6</button>

             <button id='btn7' class="btn btn-primary btn-lg numV" value='7'> 7</button>

              <button id='btn8' class="btn btn-primary btn-lg numV" value='8'> 8</button>

               <button id='btn9' class="btn btn-primary btn-lg numV" value='9'> 9</button>

                <button id='btn0' class="btn btn-primary btn-lg numV" value='0'> 0 </button>
                 <button id= 'backSpace' class="btn btn-primary btn-lg numV" value=""> << </button>
      </div>




<!-- buttons for entering routing numbers-->

      <div class="btn-group" data-toggle="buttons">
       <button id='btn1' class="btn btn-primary btn-lg numR" value='1'>1</button>

        <button id='btn2' class="btn btn-primary btn-lg numR" value='2'> 2</button>

         <button id='btn3' class="btn btn-primary btn-lg numR" value='3'> 3</button>

          <button id='btn4' class="btn btn-primary btn-lg numR" value='4'> 4</button>

           <button id='btn5' class="btn btn-primary btn-lg numR" value='5'> 5</button>

            <button id='btn6' class="btn btn-primary btn-lg numR" value='6'> 6</button>

             <button id='btn7' class="btn btn-primary btn-lg numR" value='7'> 7</button>

              <button id='btn8' class="btn btn-primary btn-lg numR" value='8'> 8</button>

               <button id='btn9' class="btn btn-primary btn-lg numR" value='9'> 9</button>

                <button id='btn0' class="btn btn-primary btn-lg numR" value='0'> 0 </button>
                 <button id= 'backSpaceR' class="btn btn-primary btn-lg numR" value=""> << </button>
      </div>





<!-- buttons for entering account  numbers-->



            <div class="btn-group" data-toggle="buttons">
       <button id='btn1' class="btn btn-primary btn-lg numCC" value='1'>1</button>

        <button id='btn2' class="btn btn-primary btn-lg numCC" value='2'> 2</button>

         <button id='btn3' class="btn btn-primary btn-lg numCC" value='3'> 3</button>

          <button id='btn4' class="btn btn-primary btn-lg numCC" value='4'> 4</button>

           <button id='btn5' class="btn btn-primary btn-lg numCC" value='5'> 5</button>

            <button id='btn6' class="btn btn-primary btn-lg numCC" value='6'> 6</button>

             <button id='btn7' class="btn btn-primary btn-lg numCC" value='7'> 7</button>

              <button id='btn8' class="btn btn-primary btn-lg numCC" value='8'> 8</button>

               <button id='btn9' class="btn btn-primary btn-lg numCC" value='9'> 9</button>

                <button id='btn0' class="btn btn-primary btn-lg numCC" value='0'> 0 </button>
                 <button id= 'backSpaceCC' class="btn btn-primary btn-lg numCC" value=""> << </button>
      </div>
      
    </form>    
      


<!-- buttons for quantty ammount-->
    
<!-- <div class="qtyty2">
     

</div>
 -->












<!--fin -->    

<div class="fin2">

  <div class='confBack2'>

<div class='confirm2'> 
  <h2><b> Confirm</b></h2>

</div>



<div class='back2'> 
  <h2><b>Go Back</b></h2>
  
</div>
</div>


  <label id="submit2" class="btn btn-default btn-lg finB" role="button" type="submit"
   name="" value="submit2">SUBMIT</label>
  
  

  
  
    <button id="exit2" class="btn btn-default btn-lg finB" role="button" type="submit" 
  name="refill" value="submit">EXIT</button>





  




   </div>
  </div>



  






</div>




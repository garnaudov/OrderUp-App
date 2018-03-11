<!-- Panel Cart -->
    <div id="panel-cart">
        <div class="panel-cart-container">
            <div class="panel-cart-title">
                <h5 class="title">Вашата поръчка</h5>
                <button class="close" data-toggle="panel-cart"><i class="ti ti-close"></i></button>
            </div>
            <div class="panel-cart-content">
                <table id="cartTable" class="table-cart">
                    <tbody class="table-body">
                        <tr>
                        </tr>
                    </tbody>
                </table>
                <h4>&nbsp;&nbsp;&nbsp;Допълнителна поръчка:</h4><span class="oder-order"></span>
                <div class="cart-summary">                    
                    <hr class="hr-sm">
                    <div class="row text-lg">
                        <div class="col-7 text-right text-muted">Всичко:</div>
                        <div class="col-5 product-final-price"><strong></strong></div>
                    </div>

                </div>

                <div class="center">
                <style type="text/css">
                    .hide-price {
						display:none;
                    }
                    .hide-description {
						display:none;
                    }
                </style>
                <div class="hide-form">
                    <form method="post" action="index.php">
                        <input name="hide-description" id="hidden-description" class="hide-description" type="text" />
                        <input name="hide-price" id="hidden-price" class="hide-price"  type="text" /><form>
						<label for="tableNo"><span>&nbsp;&nbsp;&nbsp;Номер на маса: </label></span><input name="tableNo" id="tableNo" class="tableNo form-control-sm" type="number" value="1" min="1" max="30" required/>                        
						<br><br>
                        <input type="submit" id="order-finish" class="btn btn-secondary  btn-lg send-order" value="Изпрати поръчката!"/></form>
						
                    </form>
                </div>
        

    </div>
            </div>
        </div>
   
    </div>  

             <!-- Panel Mobile -->
    <nav id="panel-mobile">
        <div class="module module-logo bg-dark dark">
            
                <img src="assets/img/logo-light.svg" alt="" width="88">
           
            <button class="close" data-toggle="panel-mobile"><i class="ti ti-close"></i></button>
        </div>
        <nav class="module module-navigation"></nav>        
    </nav>


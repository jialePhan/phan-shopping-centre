<div class="header-nav animate-dropdown" style="background: #3f3f3f; ">
    <div class="container">
        <div class="yamm navbar navbar-default" role="navigation">
            <div class="navbar-header">
                <button data-target="#mc-horizontal-menu-collapse" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="nav-bg-class">
                <div class="navbar-collapse collapse" id="mc-horizontal-menu-collapse">
	<div class="nav-outer">
		<ul class="nav navbar-nav ">
			<li class="dropdown yamm" >
				<a data-hover="dropdown" class="dropdown-toggle" onMouseOver="this.style.background='red'" onMouseOut="this.style.background='#3f3f3f'">PHAN SHOPPING</a>				
            </li>
			
        </ul><!-- /.navbar-nav -->
        <ul class="nav navbar-nav navbar-right">
      <li><div class="animate-dropdown top-cart-row">
<!-- ============================================================= SHOPPING CART DROPDOWN ============================================================= -->
<?php
if(!empty($_SESSION['cart'])){
	?>
	<div class="dropdown dropdown-cart">
		<a href="#" class="dropdown-toggle lnk-cart" data-toggle="dropdown">
			<div class="items-cart-inner" >
				<div class="total-price-basket" style="border: solid 2px black; border-right: none;">
					<span class="lbl">cart -</span>
					<span class="total-price">
						<span class="sign">RM </span>
						<span class="value"><?php echo $_SESSION['tp']; ?></span>
					</span>
				</div>
				<div class="basket" style="border: solid 2px black; ">
					<i class="glyphicon glyphicon-shopping-cart"></i>
				</div>
				<div class="basket-item-count"><span class="count"><?php echo $_SESSION['qnty'];?></span></div>
			
		    </div>
		</a>
		<ul class="dropdown-menu">
		
		 <?php
    $sql = "SELECT * FROM products WHERE id IN(";
			foreach($_SESSION['cart'] as $id => $value){
			$sql .=$id. ",";
			}
			$sql=substr($sql,0,-1) . ") ORDER BY id ASC";
			$query = mysqli_query($con,$sql);
			$totalprice=0;
			$totalqunty=0;
			if(!empty($query)){
			while($row = mysqli_fetch_array($query)){
				$quantity=$_SESSION['cart'][$row['id']]['quantity'];
				$subtotal= $_SESSION['cart'][$row['id']]['quantity']*$row['productPriceBeforeDiscount']+$row['shippingCharge'];
				$totalprice += $subtotal;
				$_SESSION['qnty']=$totalqunty+=$quantity;

	?>
		
		
			<li>
				<div class="cart-item product-summary">
					<div class="row">
						<div class="col-xs-4">
							<div class="image">
								<a href="product-details.php?pid=<?php echo $row['id'];?>"><img  src="admin/productimages/<?php echo $row['id'];?>/<?php echo $row['productImage1'];?>" width="35" height="50" alt=""></a>
							</div>
						</div>
						<div class="col-xs-7">
							
							<h3 class="name"><a href="product-details.php?pid=<?php echo $row['id'];?>"><?php echo $row['productName']; ?></a></h3>
							<div class="price">RM <?php echo ($row['productPriceBeforeDiscount']+$row['shippingCharge']); ?>*<?php echo $_SESSION['cart'][$row['id']]['quantity']; ?></div>
						</div>
						
					</div>
				</div><!-- /.cart-item -->
			
				<?php } }?>
				<div class="clearfix"></div>
			<hr>
		
			<div class="clearfix cart-total">
				<div class="pull-right">
					
						<span class="text"></span><span class='price'>Total: RM <?php echo $_SESSION['tp']="$totalprice". ".00"; ?></span>
						
				</div>
			
				<div class="clearfix"></div>
					
				<a href="my-cart.php" class="btn btn-upper btn-primary btn-block m-t-20">My Cart</a>	
			</div><!-- /.cart-total-->
					
				
		</li>
		</ul><!-- /.dropdown-menu-->
	</div><!-- /.dropdown-cart -->
<?php } else { ?>
<div class="dropdown dropdown-cart">
		<a href="#" class="dropdown-toggle lnk-cart" data-toggle="dropdown">
			<div class="items-cart-inner">
				<div class="total-price-basket">
					<span class="lbl">cart -</span>
					<span class="total-price">
						<span class="sign">RM </span>
						<span class="value">00.00</span>
					</span>
				</div>
				<div class="basket">
					<i class="glyphicon glyphicon-shopping-cart"></i>
				</div>
				<div class="basket-item-count"><span class="count">0</span></div>
			
		    </div>
		</a>
		<ul class="dropdown-menu">
		
	
		
		
			<li>
				<div class="cart-item product-summary">
					<div class="row">
						<div class="col-xs-12">
							Your Shopping Cart is Empty.
						</div>
						
						
					</div>
				</div><!-- /.cart-item -->
			
				
			<hr>
		
			<div class="clearfix cart-total">
				
				<div class="clearfix"></div>
					
				<a href="index.php" class="btn btn-upper btn-primary btn-block m-t-20">Continue Shopping</a>	
			</div><!-- /.cart-total-->
					
				
		</li>
		</ul><!-- /.dropdown-menu-->
	</div>
	<?php }?>

</div>
</li>
      </ul>
        
		<div class="clearfix"></div>				
	</div>
</div>

            </div>
        </div>
    </div>
</div>

<nav class="navbar navbar-default">
  <div class="container">

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" >
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.php" data-hover="dropdown" class="dropdown-toggle">Home</a></li>        
      </ul>
      <form class="navbar-form navbar-left" name="search" method="post" action="search-result.php">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search"name="product" required="required" />
        </div>
        <button type="submit" class="btn btn-default" name="search">Submit</button>
	  </form>
      <ul class="nav navbar-nav navbar-right">
      <li><a href="aboutus.php" data-hover="dropdown" class="dropdown-toggle">About Us</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
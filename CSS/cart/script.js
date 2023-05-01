/*The querySelector() method returns the first element that matches a CSS selector. and querySelectorAll() returns all elements.*/
const btnCart=document.querySelector('#cart-icon');
const cart=document.querySelector('.cart');
const btnClose=document.querySelector('#cart-close');

/*These variables are used to manipulate the cart icon, the cart itself, and the close button that appears when the cart is open.

Next, there is an event listener that listens for the DOMContentLoaded event. When the event fires, the loadFood() function is called. */
btnCart.addEventListener('click',()=>{
  cart.classList.add('cart-active');
});

btnClose.addEventListener('click',()=>{
  cart.classList.remove('cart-active');
});
/*The DOMContentLoaded event fires when the initial HTML document has been completely loaded and parsed, 
without waiting for stylesheets, images, and subframes to finish loading.*/
document.addEventListener('DOMContentLoaded',loadFood);

function loadFood(){
  loadContent();

}
/*This function, in turn, calls the loadContent() function.

The loadContent() function performs the following actions:
The addEventListener() method attaches an event handler to a document - document.addEventListener(event, function, Capture)
1. It attaches click event listeners to all the "Remove" buttons in the cart, using the querySelectorAll() method and a forEach() loop.
2. It attaches change event listeners to all the quantity input elements in the cart, using the querySelectorAll() method and a forEach() loop.
3. It attaches click event listeners to all the "Add to Cart" buttons on the web page, using the querySelectorAll() method and a forEach() loop.
4. It calls the updateTotal() function to update the total price displayed in the cart.
*/
function loadContent(){
  //Remove Food Items  From Cart
  let btnRemove=document.querySelectorAll('.cart-remove');
  btnRemove.forEach((btn)=>{
    btn.addEventListener('click',removeItem);
  });
/*The removeItem() function is called when the user clicks the "Remove" button for an item in the cart. 
This function removes the item from the itemList array, which stores all the items in the cart. 
It also removes the corresponding HTML element from the cart and then calls the loadContent() function to update the remaining items in the cart.*/
  //Product Item Change Event
  let qtyElements=document.querySelectorAll('.cart-quantity');
  qtyElements.forEach((input)=>{
    input.addEventListener('change',changeQty);
  });

  //Product Cart
  
  let cartBtns=document.querySelectorAll('.add-cart');
  cartBtns.forEach((btn)=>{
    btn.addEventListener('click',addCart);
  });

  updateTotal();
}


//Remove Item
function removeItem(){
  if(confirm('Are Your Sure to Remove')){
    let title=this.parentElement.querySelector('.cart-food-title').innerHTML; //get the node name of the parent element of the currently executing child element
    itemList=itemList.filter(el=>el.title!=title); /* filter() method creates a shallow copy of a portion of a given array, 
    filtered down to just the elements from the given array that pass the test implemented by the provided function.*/
    this.parentElement.remove();
    loadContent();
  }
}

//Change Quantity
function changeQty(){
  if(isNaN(this.value) || this.value<1){
    this.value=1;
  }
  loadContent();
}
/*The changeQty() function is called when the user changes the quantity of an item in the cart. 
This function checks that the quantity entered is a valid number greater than or equal to 1. If the quantity is invalid, it is set to 1. 
The loadContent() function is then called to update the total price and the item quantities in the cart.*/
let itemList=[];
/*The addCart() function is called when the user clicks the "Add to Cart" button for a product on the web page. 
This function creates a new product object based on the title, price, and image source of the product, and then checks whether the product 
is already in the cart using the find() method. If the product is not in the cart, it is added to the itemList array, 
and the createCartProduct() function is called to create a new HTML element for the product, which is then appended to the cart. 
Finally, the loadContent() function is called to update the total price and the item quantities in the cart.*/
//Add Cart
function addCart(){
 let food=this.parentElement;
 let title=food.querySelector('.food-title').innerHTML;
 let price=food.querySelector('.food-price').innerHTML;
 let imgSrc=food.querySelector('.food-img').src;
 //console.log(title,price,imgSrc);
 
 let newProduct={title,price,imgSrc}

 //Check Product already Exist in Cart
 if(itemList.find((el)=>el.title==newProduct.title)){
  alert("Product Already added in Cart");
  return;
 }else{
  itemList.push(newProduct);
 }


let newProductElement= createCartProduct(title,price,imgSrc);
let element=document.createElement('div');
element.innerHTML=newProductElement;
let cartBasket=document.querySelector('.cart-content');
cartBasket.append(element);
loadContent();
}


function createCartProduct(title,price,imgSrc){

  return `
  <div class="cart-box">
  <img src="${imgSrc}" class="cart-img">
  <div class="detail-box">
    <div class="cart-food-title">${title}</div>
    <div class="price-box">
      <div class="cart-price">${price}</div>
       <div class="cart-amt">${price}</div>
   </div>
    <input type="number" value="1" class="cart-quantity">
  </div>
  <ion-icon name="trash" class="cart-remove"></ion-icon>
</div>
  `;
}
/*The createCartProduct() function takes in the title, price, and image source of a product and returns an HTML string that creates a new product 
element for the cart.

The updateTotal() function updates the total price displayed in the cart and the item count displayed in the cart icon. 
It does this by iterating over all the products in the cart, calculating the total price and updating the item quantity and 
price for each product element. Finally, it updates the item count displayed in the cart icon and shows or hides the count element 
based on whether there are items in the cart or not.*/
function updateTotal()
{
  const cartItems=document.querySelectorAll('.cart-box');
  const totalValue=document.querySelector('.total-price');

  let total=0;

  cartItems.forEach(product=>{
    let priceElement=product.querySelector('.cart-price');
    let price=parseFloat(priceElement.innerHTML.replace("Rs.",""));
    let qty=product.querySelector('.cart-quantity').value;
    total+=(price*qty);
    product.querySelector('.cart-amt').innerText="Rs."+(price*qty);

  });

  totalValue.innerHTML='Rs.'+total;


  // Add Product Count in Cart Icon

  const cartCount=document.querySelector('.cart-count');
  let count=itemList.length;
  cartCount.innerHTML=count;

  if(count==0){
    cartCount.style.display='none';
  }else{
    cartCount.style.display='block';
  }


}
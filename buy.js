


//  Lấy element có id=clickme lưu vào biến button
 var closing= document.getElementById('submit');
            

 closing.addEventListener('click', function(){
  alert("Gửi Thành Công !");

 });

 var closing1= document.getElementById('send');
 closing1.addEventListener('click', function(){
    alert("Gửi Thành Công !");
  
   });


   const btn = document.querySelectorAll("button")
   // console.log(btn)
   btn.forEach(function(button){
   
       // console.log(button,index) {
           button.addEventListener("click",function(event){{
               var btnItem =event.target
               var product = btnItem.parentElement
               var productImg = product.querySelector("img").src
               var productName = product.querySelector("h1").innerText
               var productPrice = product.querySelector("span").innerText
               addcart(productPrice,productName,productImg)
   
           }})
   
   
   
   })
   function addcart(productPrice,productName,productImg) {
       var addtr = document.createElement("tr")
       var cartItem = document.querySelectorAll("tbody tr")
       for (var i=0;i<cartItem.length;i++){
         var productT = document.querySelectorAll(".tittle")
         if (productT[i].innerHTML == productName){
   
             alert("Your Product Is Already In The Cart !")
             return
         }
       }
       var trcontent = '<tr><td style="display: flex; align-items: center;"><img style="width: 70px;" src="'+productImg+'" alt=""><span class="tittle">'+productName+'</span></td><td><p><span class="prices">'+productPrice+'</span><sup>đ</sup></p></td><td><input style="width: 30px; outline: none;" type="number" value="1" min="0"></td> <td style="cursor: pointer;"><span class="cart-delete">Delete</span></i></td></tr>'
       addtr.innerHTML = trcontent
       var cartTable = document.querySelector("tbody")
       // console.log(cartTable)
       cartTable.append(addtr)
       carttotal()
       deleteCart()
   }
   
   
   //-----------------------totalprice---------------
   
   function carttotal (){
       var cartItem = document.querySelectorAll("tbody tr")
       var totalC = 0
       for (var i=0;i<cartItem.length;i++){
           var inputValue = cartItem[i].querySelector("input").value
           // console.log(inputValue)
           var productPrice = cartItem[i].querySelector(".prices").innerHTML
           // console.log(productPrice)
           totalA = inputValue*productPrice*1000
           // totalB = totalA.toLocaleString('de-DE')
           // console.log(totalB)
           totalC = totalC + totalA
           // totalD = totalC.toLocaleString('de-DE')
           
       }
   
    var cartTotalA = document.querySelector(".price-total span")
    var cartPrice = document.querySelector("#cart_icon span")
   cartTotalA.innerHTML = totalC.toLocaleString('de-DE')
   cartPrice.innerHTML = totalC.toLocaleString('de-DE')
   inputchange()
   // console.log(cartTotalA)
   }
   
   //-----------------------Delete cart---------------
   function deleteCart(){
       var cartItem = document.querySelectorAll("tbody tr")
       for (var i=0;i<cartItem.length;i++){
           var productT = document.querySelectorAll(".cart-delete")
           productT[i].addEventListener("click",function(event){
               var cartDelete = event.target
               var cartitemR = cartDelete.parentElement.parentElement
               cartitemR.remove()
               carttotal ()
               // console.log(cartitemR)
           })
           
           
         }
   }
   
   function inputchange () {
       var cartItem = document.querySelectorAll("tbody tr")
       for (var i=0;i<cartItem.length;i++){
           var inputValue = cartItem[i].querySelector("input")
               inputValue.addEventListener("change",function(){
                    carttotal()
               })
           
           
         }
       }
   
       const cartbtn = document.querySelector(".fa-times-circle")
       const cartshow = document.querySelector(".fa-cart-plus")
       cartshow.addEventListener("click", function(){
           console.log(cartshow)
           document.querySelector("#cart").style.right = "0"
       })
   
       cartbtn.addEventListener("click", function(){
           console.log(cartshow)
           document.querySelector("#cart").style.right = "-100%"
       })
       
   
        // Lấy element có id=clickme lưu vào biến button
        var closing= document.getElementById('closing');
               
        // Khi click vào element chứa trong button thì thực hiện một function, 
        // bên trong function thông báo lên Hello World!
       closing.addEventListener('click', function(){
         alert("Order Success ! ");
          
        });
   
   
       //  ================================
    // lấy phần Modal
    var modal = document.getElementById('modalAdd');
            
    // Lấy phần button mở Modal
    var btnAdd = document.getElementById("btnAdd");
    // Lấy phần span đóng Modal
    var span = document.getElementsByClassName("close4")[0];
    var add = document.getElementsByClassName("add")[0];
    var huy = document.getElementsByClassName("huy")[0];
    // Khi button được click thi mở Modal
    btnAdd.onclick = function() {
        modal.style.display = "block";
       //  console.log(btnAdd)
    }
    console.log(btnAdd)
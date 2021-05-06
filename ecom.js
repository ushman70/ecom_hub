// DOM variables



// BestSellers JSON




// Slideshow
(()=>{
    const slideshow = {
        items: [],
        timer: 0,
        delay: 3000,
        init: function(){
          if( document.querySelector('.slideshow')) {
              let divC = document.createElement('div');
              divC.className = 'content';
              document.querySelector('.slideshow').appendChild(divC);

              let link = document.createElement('link');
              link.rel = 'stylesheet';
              link.href = './ecom.css';
              document.head.appendChild(link);

              let url = './slideshow.json';
              fetch(url, {
                method: 'GET', 
                mode: 'cors'
              })
              .then((response) => {
                 return response.json();
              })
              .then(slideshow.loadContents)
              .catch((err) => {
                  console.log('ERROR', err);
              });
          }
        },
        loadContents: function(data){
            let df = new DocumentFragment();
            data.items.forEach((item, idx) => {
             let div = slideshow.createItem(item, idx);
             df.appendChild(div);

            })
            document.querySelector('.slideshow .content').appendChild(df);
            document.querySelector('.slideshow-item').classList.add('current');
            slideshow.items = document.querySelectorAll('.slideshow-item');
            slideshow.start();
            
        },
        createItem: function(item, index){
            let div = document.createElement('div');
            div.classList.add('slideshow-item');
            div.setAttribute('data-index', index);
            let title = document.createElement('h1');
            title.textContent = item.title;
            div.appendChild(title);
            let img = document.createElement('img');
            img.src = './img/' + item.img;
            div.appendChild(img);
            let p = document.createElement('p');
            p.classList.add('slide-para');
            p.textContent = item.msg;
            div.appendChild(p);
            return div;
            
        },
        switchItem: function(index, ev){
            if(ev) {
                ev.preventDefault();
            }
            let current = document.querySelector('.current')
            current.classList.remove('current');
            current.classList.add('leaving');
            setTimeout(() =>{
                current.classList.remove('leaving');
            }, 800)
            slideshow.items[index].classList.add('current');
        },
        start: function(){
            slideshow.timer = setInterval(() => {
                let [first, ...rest] = slideshow.items;
                slideshow.items = [...rest, first];
                slideshow.switchItem(0);
            }, slideshow.delay);
        }
    }
    document.addEventListener('DOMContentLoaded', slideshow.init);
})();


$(document).ready(function(){



    
        
  
  let $qty_up = $(".qty .qty-up");
  let $qty_down = $(".qty .qty-down");
  let $deal_price = $("#deal-price");
  // let $input = $(".qty .qty_input");

  
  // click on qty up button
  $qty_up.click(function(e){
       e.preventDefault();
      let $input = $(`.qty_input[data-id='${$(this).data("id")}']`);
      let $price = $(`.product_price[data-id='${$(this).data("id")}']`);

      // change product price using ajax call
      $.ajax({url: "ajax.php", type : 'post', data : { itemid : $(this).data("id")}, success: function(result){
              let obj = JSON.parse(result);
              let item_price = obj[0]['item_price'];
              

              if($input.val() >= 1 && $input.val() <= 9){
                  $input.val(function(i, oldval){
                      return ++oldval;
                  });

                 
                  

                  
              }

          }}); // closing ajax request
  }); // closing qty up button

  // click on qty down button
  $qty_down.click(function(e){

      let $input = $(`.qty_input[data-id='${$(this).data("id")}']`);
      let $price = $(`.product_price[data-id='${$(this).data("id")}']`);

      // change product price using ajax call
      $.ajax({url: "ajax.php", type : 'post', data : { itemid : $(this).data("id")}, success: function(result){
              let obj = JSON.parse(result);
              let item_price = obj[0]['item_price'];

              if($input.val() > 1 && $input.val() <= 10){
                  $input.val(function(i, oldval){
                      return --oldval;
                  });


                  // increase price of the product
                  $price.text(parseInt(item_price * $input.val()).toFixed(2));

                  // set subtotal price
                  let subtotal = parseInt($deal_price.text()) - parseInt(item_price);
                  $deal_price.text(subtotal.toFixed(2));
              }

          }}); // closing ajax request
  }); // closing qty down button
  
  
});
  

 
 var deal = document.getElementById('deal-price');
 var quantity = document.getElementById('quan');
 var d = deal.textContent;
 var e = deal.innerHTML;
 var all = document.getElementById('allitems');
 var ac = all.textContent;

 document.createElement('hr');






 
 
 


 











 






  




    
    
    
       
    
  














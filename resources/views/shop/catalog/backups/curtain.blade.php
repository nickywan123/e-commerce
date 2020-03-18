@extends('layouts.shop.main')

@section('content')




<!-- ------------------------------------>

<div class="container-fluid">
  <div class="row">
    <div class="col-md-2 d-none d-md-block">
      <ul class="list-group border-right">
        <li class="list-group-item">
    
             <ul class="list-group">
    
                <li style="color:black">
                    <strong>Panel</strong>
                </li>
                <li>
                    <a class="text-capitalize" style="font-weight: 520; color:black;" href="/shop/category/">A Company</a>
    
                    
                    <ul class="list-group">
                      
                      <li>
                        <a class="text-capitalize" style="font-weight: 490; color:black;" href="/shop/category/">B Company</a>
                     
                        <ul class="list-group">
                          
                          <li>
                            <a class="text-capitalize" style="font-weight: 400; color:black;" href="/shop/category/">C Company</a>
                          </li>
                          
                        </ul>
                      
                      </li>
                   
                    </ul> <br>
    
                    
                </li>
                 
             </ul> <br>
    
    
               
    
            <ul class="list-group">
    
                <li style="color:black">
                    <strong>Price</strong>
                </li>
                <li>
                    <a class="text-capitalize" style="font-weight: 520; color:black;" href="/shop/category/">Under RM25 </a>
    
                    
                    <ul class="list-group">
                      
                      <li>
                        <a class="text-capitalize" style="font-weight: 490; color:black;" href="/shop/category/">RM 25 to RM 50</a>
                     
                        <ul class="list-group">
                          
                          <li>
                            <a class="text-capitalize" style="font-weight: 400; color:black;" href="/shop/category/">RM50 to RM100</a>
                          </li>
                          
                          <ul class="list-group">
                          
                            <li>
                              <a class="text-capitalize" style="font-weight: 400; color:black;" href="/shop/category/">RM100 to RM200</a>
                            </li>
    
                            <ul class="list-group">
                          
                                <li>
                                  <a class="text-capitalize" style="font-weight: 400; color:black;" href="/shop/category/">>RM200 & Above</a>
                                </li>
                            </ul>
                          </ul>
                          
                        </ul>
                      
                      </li>
                   
                    </ul> 
    
                    
                </li>
                 
             </ul>
    
                  <input type="number" placeholder="Min" id="quantity" name="quantity" min="1" max="300">
                  <input type="number" placeholder="Max" id="quantity" name="quantity" min="1" max="300">
     <br> <br>
                
    
    
     <ul class="list-group">
    
        <li style="color:black">
            <strong>Color</strong>
        </li>
        <li>
            <a class="text-capitalize" style="font-weight: 520; color:black;" href="#"><input type="checkbox" id="white" name="white" value="white">
                <label for="white">WHITE</label> </a>
    
            
            <ul class="list-group">
              
              <li>
                <a class="text-capitalize" style="font-weight: 490; color:black;" href="#"><input type="checkbox" id="beige" name="beige" value="beige">
                    <label for="beige">BEIGE</label></a>
             
                <ul class="list-group">
                  
                  <li>
                    <a class="text-capitalize" style="font-weight: 400; color:black;" href="#"><input type="checkbox" id="red" name="red" value="red">
                        <label for="red">RED</label></a>
                  </li>
                  
                  <ul class="list-group">
                  
                    <li>
                      <a class="text-capitalize" style="font-weight: 400; color:black;" href="#"><input type="checkbox" id="maroon" name="maroon" value="maroon">
                        <label for="maroon">MAROON</label></a>
                    </li>
    
                    <ul class="list-group">
                  
                        <li>
                          <a class="text-capitalize" style="font-weight: 400; color:black;" href="#"><input type="checkbox" id="grey" name="grey" value="grey">
                            <label for="grey">GREY</label></a>
                        </li>
                        <ul class="list-group">
                  
                            <li>
                              <a class="text-capitalize" style="font-weight: 400; color:black;" href="#"><input type="checkbox" id="black" name="black" value="black">
                                <label for="black">BLACK</label></a>
                            </li>
                    </ul>
                  </ul>
                  
                </ul>
              
              </li>
           
            </ul> 
    
            
        </li>
         
     </ul>
    
    
            
     <ul class="list-group">
    
        <li style="color:black">
            <strong>Ratings</strong>
        </li>
        <li>
            <a class="text-capitalize" style="font-weight: 520; color:black;" href="#"> <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span> </a>
    
            
            <ul class="list-group">
              
              <li>
                <a class="text-capitalize" style="font-weight: 490; color:black;" href="#"> <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                    
                </a>
              
                <ul class="list-group">
                  
                  <li>
                    <a class="text-capitalize" style="font-weight: 400; color:black;" href="#"><span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star "></span>
                        <span class="fa fa-star"></span>
                        </a>
                  </li>
                  
                  <ul class="list-group">
                  
                    <li>
                      <a class="text-capitalize" style="font-weight: 400; color:black;" href="#"><span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star "></span>
                        <span class="fa fa-star"></span></a>
                    </li>
    
                    <ul class="list-group">
                  
                        <li>
                          <a class="text-capitalize" style="font-weight: 400; color:black;" href="#"> <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star "></span>
                            <span class="fa fa-star "></span>
                            <span class="fa fa-star"></span>
                           </a>
                        </li>
                       
                  </ul>
                  
                </ul>
              
              </li>
           
            </ul> 
    
            
        </li>
         
     </ul>

    </div>
    <div class="col-md-10">
      <div class="row">

        <div class=" col-md-10"><h3 style="color:black;">Featured Categories</h3><br> <hr></div> 
        
        </div>

      <div class="row">
        <div class="col-6 col-md-3 text-center">
          <div class="dropdown">
            <a id="menu1"  >
              <img class="image" src="{{asset('images/brown-curtain.jpg')}}">
            </a> <br> <br>
            <span class="text-capitalize "><strong>Curtain A</strong> </span>
            <ul class="dropdown-menu text-center" role="menu" aria-labelledby="menu1">
              <li role="presentation"><a role="menuitem" tabindex="-1" href="/category/curtain/pinch-pleat">Pinch pleat curtains</a></li>
              <li role="presentation"><a role="menuitem" tabindex="-1" href="/category/bedsheet-mattress/canopy-bed">Rod-pocket curtains</a></li>
              <li role="presentation"><a role="menuitem" tabindex="-1" href="/category/bedsheet-mattress/canopy-bed">Pencil pleat curtains</a></li>
              <li role="presentation" class="divider"></li>
              <li role="presentation"><a role="menuitem" tabindex="-1" href="/category/bedsheet-mattress/canopy-bed">Tab-top curtains</a></li>
            </ul>
          </div> <br>
        </div>
        <div class="col-6 col-md-3 text-center">
          <div class="dropdown">
            <a id="menu1" >
              <img class="image" src="{{asset('images/dunelm-curtain.jpg')}}">
            </a><br> <br>
            <span class="text-capitalize "> <strong>Curtain B</strong> </span>
            <ul class="dropdown-menu text-center" role="menu" aria-labelledby="menu1">
              <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Sub Item 1</a></li>
              <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Sub Item 2</a></li>
              <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Sub Item 3</a></li>
              <li role="presentation" class="divider"></li>
              <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Sub Item 4</a></li>
            </ul>
          </div> 
          
    
        </div>
        <div class="col-6 col-md-3 text-center">
          <div class="dropdown">
            <a id="menu1">
              <img class="image" src="{{asset('images/gold-curtain.jpg')}}">
            </a><br> <br>
            <span class="text-capitalize "> <strong>Curtain C</strong> </span>
            <ul class="dropdown-menu text-center" role="menu" aria-labelledby="menu1">
              <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Sub Item 1</a></li>
              <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Sub Item 2</a></li>
              <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Sub Item 3</a></li>
              <li role="presentation" class="divider"></li>
              <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Sub Item 4</a></li>
            </ul>
          </div> 
        </div>
        <div class="col-6 col-md-3 text-center">
          <div class="dropdown">
            <a id="menu1" >
              <img class="image" src="{{asset('images/Leaf-Curtain.jpg')}}">
            </a> <br> <br>
            <span class="text-capitalize "> <strong>Curtain D</strong> </span>
            <ul class="dropdown-menu text-center" role="menu" aria-labelledby="menu1">
              <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Sub Item 1</a></li>
              <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Sub Item 2</a></li>
              <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Sub Item 3</a></li>
              <li role="presentation" class="divider"></li>
              <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Sub Item 4</a></li>
            </ul>
          </div> 
        </div>
      </div>

       <div class="row">

        <div class="col-md-10"><h3 style="color:black;">Featured Deals</h3><br> <hr></div> 
        
        </div>

        <div class="row">
   <div class="col-6 col-md-3 text-center">
    <a href="#" id="menu1">
      <img class="product-item" src="{{asset('images/curtain-01.jpg')}}">
    </a> <br> <br>
    <span class="text-capitalize" data-toggle="tooltip" data-placement="right" title="Lorem Ipsum y of type and scrambled it"><strong>[COMPANY NAME]</strong>
      <br>

      <span> Curtain,soft,50cm</span>
      <h3><strong>RM200</strong></h3>
      <ul>

        <li>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span>(60) </span>
        </li>
        <ul><br>
   </div>

   <div class="col-6 col-md-3 text-center">

    <a href="#" id="menu1">
      <img class="product-item" src="{{asset('images/curtain-2.jpg')}}">
    </a> <br> <br>
    <span class="text-capitalize" data-toggle="tooltip" data-placement="right" title="Lorem Ipsum y of type and scrambled it"><strong>[COMPANY NAME]</strong>
      <br>

      <span> Curtain,soft,50cm</span>
      <h3><strong>RM20</strong></h3>
      <ul>

        <li>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span>(60) </span>
        </li>
        <ul><br>
   </div>

   <div class="col-6 col-md-3 text-center">

    <a href="#" id="menu1">
      <img class="product-item" src="{{asset('images/curtain-3.jpg')}}">
    </a> <br> <br>
    <span class="text-capitalize" data-toggle="tooltip" data-placement="right" title="Lorem Ipsum y of type and scrambled it"><strong>[COMPANY NAME]</strong>
      <br>

      <span> Curtain,soft,50cm</span>
      <h3><strong>RM50</strong></h3>
      <ul>

        <li>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span>(60) </span>
        </li>
        <ul><br>
   </div>

   <div class="col-6 col-md-3 text-center">

    <a href="#" id="menu1">
      <img class="product-item" src="{{asset('images/curtain-4.jpg')}}">
    </a> <br> <br>
    <span class="text-capitalize" data-toggle="tooltip" data-placement="right" title="Lorem Ipsum y of type and scrambled it"><strong>[COMPANY NAME]</strong>
      <br>

      <span> Curtain,soft,50cm</span>
      <h3><strong>RM20</strong></h3>
      <ul>

        <li>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span>(60) </span>
        </li>
        <ul><br>
   </div>

        </div>



    </div>
  </div>



@endsection

@push('style')

<style>
  @media (min-width:280px) {
    .dropdown:hover .dropdown-menu {
      display: block;
      margin-top: 0;
      transition: all 1.5s;
      transform: scale(1.0);

      transition: .3s ease-in-out;

    }

  }

  .product-item {

    height: 150px;
    width: 150px;

  }


  ul {

    list-style-type: none;
  }


  .image {
    -webkit-transform: scale(1);
    transform: scale(1);
    -webkit-transition: .3s ease-in-out;
    transition: .3s ease-in-out;
    border-radius: 100%;
    height: 150px;
    width: 150px;
  }

  .image:hover {
    transform: scale(0.5);


  }

  .checked {
    color: orange;
  }



</style>
@endpush
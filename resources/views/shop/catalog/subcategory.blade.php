@extends('layouts.shop.main')

@section('content')




<div>
    {{ Breadcrumbs::render('shop.category.subcategory', $category, $subcategory) }}
    <h3 style="text-align: center; font-family:verdana;">Featured Categories</h3> 
<br>

  <div class="container-fluid">
          
 
    <div class="row">  
                        
              <div class="col-lg-2 col-md-6  col-sm-6 col-xs-12 order-first order-lg-last text-center " >
                <div class="dropdown" >
                  <a type="button" id="menu1" data-toggle="dropdown">
                    <img class="image" src="{{asset('images/pillow1.jpg')}}"  >    
                  </a> <br> <br>
                  <span class="text-capitalize" ><strong >Pillow</strong></span> 
                  <ul class="dropdown-menu text-center" role="menu" aria-labelledby="menu1" >
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="/shop/category/electrical">Memory Foams</a></li>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Latex Pillow </a></li>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Down Pillow</a></li>
                    <li role="presentation" class="divider"></li>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Feather Pillow</a></li>
                  </ul>
                </div>  <br> <br>

 
                <h2 style="text-align: center; font-family:verdana;">Foams</h2> <br>
               <!-- List of sub products -->
                  <a type="button" id="menu1">
                    <img class="product-item" src="{{asset('images/pillow1.jpg')}}" >    
                  </a> <br> <br>
                  <span class="text-capitalize" data-toggle="tooltip" data-placement="right" title="Lorem Ipsum y of type and scrambled it"><strong>[COMPANY NAME]</strong>
                  </span> <br>
                  <span> Pillow,soft,50cm</span>
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
                  
                  <a type="button" id="menu1">
                    <img class="product-item" src="{{asset('images/pillow1.jpg')}}" >    
                  </a> <br> <br>
                  <span class="text-capitalize" data-toggle="tooltip" data-placement="right" title="Lorem Ipsum y of type and scrambled it"><strong>[COMPANY NAME]</strong>
                  <br>
                  
                  <span> Pillow,soft,50cm</span>
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

                  <a type="button" id="menu1">
                    <img class="product-item" src="{{asset('images/pillow1.jpg')}}" >    
                  </a> <br> <br>
                  <span class="text-capitalize" data-toggle="tooltip" data-placement="right" title="Lorem Ipsum y of type and scrambled it"><strong>[COMPANY NAME]</strong>
                    <br>
                    
                    <span> Pillow,soft,50cm</span>
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
              
                  <a type="button" id="menu1">
                    <img class="product-item" src="{{asset('images/pillow1.jpg')}}" >    
                  </a> <br> <br>
                  <span class="text-capitalize" data-toggle="tooltip" data-placement="right" title="Lorem Ipsum y of type and scrambled it"><strong>[COMPANY NAME]</strong>
                    <br>
                    
                    <span> Pillow,soft,50cm</span>
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

              
              <div class="col-lg-2 col-md-6 col-sm-6 col-xs-12  order-first order-lg-last text-center">
                <div class="dropdown">
                  <a type="button" id="menu1" data-toggle="dropdown">
                    <img class="image" src="{{asset('images/curtain.jpg')}}" >    
                  </a> <br> <br>
                  <span class="text-capitalize "> <strong>Bedframe</strong> </span>
                  <ul class="dropdown-menu text-center" role="menu" aria-labelledby="menu1">
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Sub Item 1</a></li>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Sub Item 2</a></li>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Sub Item 3</a></li>
                    <li role="presentation" class="divider"></li>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Sub Item 4</a></li>
                  </ul>
                </div> <br> <br><br> <br><br> <br> <br> 
                
            <!-- List of sub products -->
            
           <a type="button" id="menu1">
          <img class="product-item" src="{{asset('images/pillow2.jpg')}}" >    
        </a> <br> <br> 
        <span class="text-capitalize" data-toggle="tooltip" data-placement="right" title="Lorem Ipsum y of type and scrambled it"><strong>[COMPANY NAME]</strong>
          <br>
          
          <span> Pillow,soft,50cm</span>
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

        <a type="button" id="menu1">
          <img class="product-item" src="{{asset('images/pillow2.jpg')}}" >    
        </a> <br> <br>
        <span class="text-capitalize" data-toggle="tooltip" data-placement="right" title="Lorem Ipsum y of type and scrambled it"><strong>[COMPANY NAME]</strong>
          <br>
          
          <span> Pillow,soft,50cm</span>
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

        <a type="button" id="menu1">
          <img class="product-item" src="{{asset('images/pillow2.jpg')}}" >    
        </a> <br> <br>
        <span class="text-capitalize" data-toggle="tooltip" data-placement="right" title="Lorem Ipsum y of type and scrambled it"><strong>[COMPANY NAME]</strong>
          <br>
          
          <span> Pillow,soft,50cm</span>
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

        <a type="button" id="menu1">
          <img class="product-item" src="{{asset('images/pillow3.jpg')}}" >    
        </a> <br> <br>
        <span class="text-capitalize" data-toggle="tooltip" data-placement="right" title="Lorem Ipsum y of type and scrambled it"><strong>[COMPANY NAME]</strong>
          <br>
          
          <span> Pillow,soft,50cm</span>
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

     

              <div class="col-lg-2 col-md-6 col-sm-6 col-xs-12  order-first order-lg-last text-center">
                <div class="dropdown">
                  <a type="button" id="menu1" data-toggle="dropdown">
                    <img class="image" src="{{asset('images/pink-bed-sheet.jpg')}}" >    
                  </a><br> <br>
                  <span class="text-capitalize "> <strong>Mattress</strong> </span>
                  <ul class="dropdown-menu text-center" role="menu" aria-labelledby="menu1">
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Sub Item 1</a></li>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Sub Item 2</a></li>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Sub Item 3</a></li>
                    <li role="presentation" class="divider"></li>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Sub Item 4</a></li>
                  </ul>
                </div> <br> <br><br> <br><br><br> <br>
                
                 <!-- List of sub products -->
           <a type="button" id="menu1">
            <img class="product-item" src="{{asset('images/pillow3.jpg')}}" >    
          </a> <br> <br>
          <span class="text-capitalize" data-toggle="tooltip" data-placement="right" title="Lorem Ipsum y of type and scrambled it"><strong>[COMPANY NAME]</strong>
            <br>
            
            <span> Pillow,soft,50cm</span>
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

          <a type="button" id="menu1">
            <img class="product-item" src="{{asset('images/pillow3.jpg')}}" >    
          </a> <br> <br>
          <span class="text-capitalize" data-toggle="tooltip" data-placement="right" title="Lorem Ipsum y of type and scrambled it"><strong>[COMPANY NAME]</strong>
            <br>
            
            <span> Pillow,soft,50cm</span>
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

          <a type="button" id="menu1">
            <img class="product-item" src="{{asset('images/pillow3.jpg')}}" >    
          </a> <br> <br>
          <span class="text-capitalize" data-toggle="tooltip" data-placement="right" title="Lorem Ipsum y of type and scrambled it"><strong>[COMPANY NAME]</strong>
            <br>
            
            <span> Pillow,soft,50cm</span>
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

          <a type="button" id="menu1">
            <img class="product-item" src="{{asset('images/pillow3.jpg')}}" >    
          </a> <br> <br>
          <span class="text-capitalize" data-toggle="tooltip" data-placement="right" title="Lorem Ipsum y of type and scrambled it"><strong>[COMPANY NAME]</strong>
            <br>
            
            <span> Pillow,soft,50cm</span>
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
              
              <div class="col-lg-2 col-md-6 col-sm-6 col-xs-12  order-first order-lg-last text-center">
                <div class="dropdown">
                  <a  type="button" id="menu1" data-toggle="dropdown">
                    <img class="image" src="{{asset('images/pink-bed-sheet.jpg')}}" >    
                  </a> <br> <br>
                  <span class="text-capitalize "> <strong>BabyCot</strong> </span>
                  <ul class="dropdown-menu text-center" role="menu" aria-labelledby="menu1">
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Sub Item 1</a></li>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Sub Item 2</a></li>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Sub Item 3</a></li>
                    <li role="presentation" class="divider"></li>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Sub Item 4</a></li>
                  </ul>
                </div> <br> <br><br> <br><br> <br><br>
               

             <!-- List of sub products -->
                <a type="button" id="menu1">
                  <img class="product-item" src="{{asset('images/bedding.jpg')}}" >    
                </a> <br> <br>
                <span class="text-capitalize" data-toggle="tooltip" data-placement="right" title="Lorem Ipsum y of type and scrambled it"><strong>[COMPANY NAME]</strong>
                  <br>
                  
                  <span> Pillow,soft,50cm</span>
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


                <a type="button" id="menu1">
                  <img class="product-item" src="{{asset('images/bedding.jpg')}}" >    
                </a> <br> <br>
                <span class="text-capitalize" data-toggle="tooltip" data-placement="right" title="Lorem Ipsum y of type and scrambled it"><strong>[COMPANY NAME]</strong>
                  <br>
                  
                  <span> Pillow,soft,50cm</span>
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


                <a type="button" id="menu1">
                  <img class="product-item" src="{{asset('images/bedding.jpg')}}" >    
                </a> <br> <br>
                <span class="text-capitalize" data-toggle="tooltip" data-placement="right" title="Lorem Ipsum y of type and scrambled it"><strong>[COMPANY NAME]</strong>
                  <br>
                  
                  <span> Pillow,soft,50cm</span>
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


                <a type="button" id="menu1">
                  <img class="product-item" src="{{asset('images/bedding.jpg')}}" >    
                </a> <br> <br>
                <span class="text-capitalize" data-toggle="tooltip" data-placement="right" title="Lorem Ipsum y of type and scrambled it"><strong>[COMPANY NAME]</strong>
                  <br>
                  
                  <span> Pillow,soft,50cm</span>
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
              
              <div class="col-lg-2 col-md-6 col-sm-6 col-xs-12  order-first order-lg-last text-center">
                <div class="dropdown">
                  <a type="button" id="menu1" data-toggle="dropdown">
                    <img class="image" src="{{asset('images/pink-bed-sheet.jpg')}}" >    
                  </a> <br> <br>
                  <span class="text-capitalize "> <strong>Curtain</strong> </span>
                  <ul class="dropdown-menu text-center" role="menu" aria-labelledby="menu1">
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Sub Item 1</a></li>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Sub Item 2</a></li>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Sub Item 3</a></li>
                    <li role="presentation" class="divider"></li>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Sub Item 4</a></li>
                  </ul>
                </div> <br> <br><br> <br><br> <br><br> 
              
                <!-- List of sub products -->
                <a type="button" id="menu1">
                  <img class="product-item" src="{{asset('images/california-king-bed-11.jpg')}}" >    
                </a> <br> <br>
                <span class="text-capitalize" data-toggle="tooltip" data-placement="right" title="Lorem Ipsum y of type and scrambled it"><strong>[COMPANY NAME]</strong>
                  <br>
                  
                  <span> Pillow,soft,50cm</span>
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

                <a type="button" id="menu1">
                  <img class="product-item" src="{{asset('images/california-king-bed-11.jpg')}}" >    
                </a> <br> <br>
                <span class="text-capitalize" data-toggle="tooltip" data-placement="right" title="Lorem Ipsum y of type and scrambled it"><strong>[COMPANY NAME]</strong>
                  <br>
                  
                  <span> Pillow,soft,50cm</span>
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

                <a type="button" id="menu1">
                  <img class="product-item" src="{{asset('images/california-king-bed-11.jpg')}}" >    
                </a> <br> <br>
                <span class="text-capitalize" data-toggle="tooltip" data-placement="right" title="Lorem Ipsum y of type and scrambled it"><strong>[COMPANY NAME]</strong>
                  <br>
                  
                  <span> Pillow,soft,50cm</span>
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

                <a type="button" id="menu1">
                  <img class="product-item" src="{{asset('images/california-king-bed-11.jpg')}}" >    
                </a> <br> <br>
                <span class="text-capitalize" data-toggle="tooltip" data-placement="right" title="Lorem Ipsum y of type and scrambled it"><strong>[COMPANY NAME]</strong>
                  <br>
                  
                  <span> Pillow,soft,50cm</span>
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
              

             
            <!-- Sidebar Filter -->
            <div class="col-lg-2 col-md-12 col-sm-12 col-xs-12"  >
                <!-- Related Categories -->
                <ul class="list-group border-right" >
                    <li class="list-group-item" >
         
                        <ul class="list-group" >

                            @foreach ($allCategories as $relatedCategory)
                            <li>
                                <a class="text-capitalize" style="font-weight: 520;" href="/shop/category/{{ $relatedCategory->slug }}">{{ $relatedCategory->name }}</a>

                                @if($relatedCategory->id == $category->id)
                                 <ul class="list-group">
                                    @foreach($category->subcategories as $childCategory)
                                    <li>
                                         <a class="text-capitalize" style="font-weight: 490;" href="/shop/category/{{ $category->slug }}/{{ $childCategory->slug }}">{{ $childCategory->name }}</a> 
                                        @if($childCategory->id == $subcategory->id)
                                        <ul class="list-group">
                                            @foreach($subcategory->types as $childType)
                                            <li>
                                                <a class="text-capitalize" style="font-weight: 400;" href="/shop/category/{{ $category->slug }}/{{ $childCategory->slug }}/{{ $childType->slug }}">{{ $childType->name }}</a>
                                            </li>
                                            @endforeach 
                                        </ul>
                                        @endif
                                    </li>
                                    @endforeach
                                </ul> <br>
                              
                             @endif 
                            </li>
                            @endforeach
                        </ul> <br>
                        <ul> 
                            <strong>PRICE</strong>
                               <li>Under RM25 </li> 
                               <li>RM 25 to RM 50 </li>
                               <li>RM50 to RM100 </li>
                               <li>RM100 to RM200 </li>
                               <li>RM200 & Above </li>
                               
                               <input type="number" placeholder="Min" id="quantity" name="quantity" min="1" max="300">
                               <input type="number" placeholder="Max" id="quantity" name="quantity" min="1" max="300">
                               </ul> <br>
                               
                               <ul>
                               <strong>COLOR</strong>
                               <li><input type="checkbox" id="white" name="white" value="white">
                                   <label for="white">WHITE</label>
                               </li><br>
                               <li><input type="checkbox" id="beige" name="beige" value="beige">
                                   <label for="beige">BEIGE</label>
                               </li><br>
                               <li><input type="checkbox" id="red" name="red" value="red">
                                   <label for="red">RED</label>
                               </li><br>
                               <li><input type="checkbox" id="maroon" name="maroon" value="maroon">
                                   <label for="beige">MAROON</label>
                               </li><br>
                               <li><input type="checkbox" id="grey" name="grey" value="grey">
                                   <label for="grey">GREY</label>
                               </li><br>
                               <li><input type="checkbox" id="black" name="black" value="black">
                                   <label for="black">BLACK</label>
                               </li><br>
                               </ul>

                               <ul>
                                  <strong>RATINGS</strong> 
                                  <li>
                                   <span class="fa fa-star checked"></span>
                                   <span class="fa fa-star checked"></span>
                                   <span class="fa fa-star checked"></span>
                                   <span class="fa fa-star checked"></span>
                                   <span class="fa fa-star checked"></span>
                                          
                               </li>
                               <li>
                                   <span class="fa fa-star checked"></span>
                                   <span class="fa fa-star checked"></span>
                                   <span class="fa fa-star checked"></span>
                                   <span class="fa fa-star checked"></span>
                                   <span class="fa fa-star"></span>
                                          and up
                               </li>
                               <li>
                                   <span class="fa fa-star checked"></span>
                                   <span class="fa fa-star checked"></span>
                                   <span class="fa fa-star checked"></span>
                                   <span class="fa fa-star "></span>
                                   <span class="fa fa-star"></span>
                                          and up
                               </li>
                               <li>
                                   <span class="fa fa-star checked"></span>
                                   <span class="fa fa-star checked"></span>
                                   <span class="fa fa-star "></span>
                                   <span class="fa fa-star "></span>
                                   <span class="fa fa-star"></span>
                                          and up
                               </li>
                               <li>
                                   <span class="fa fa-star checked"></span>
                                   <span class="fa fa-star "></span>
                                   <span class="fa fa-star "></span>
                                   <span class="fa fa-star "></span>
                                   <span class="fa fa-star"></span>
                                          and up
                               </li>
                               </ul>
                    </li>
                </ul>                
             
            </div>
                    
          </div>
              
    </div>    

</div>

  @endsection

@push('style')

<style>

 @media (min-width:480px) {
.dropdown:hover .dropdown-menu {
    display: block;
    margin-top: 0; 
    transition: all 1.5s;
    transform:scale(1.0);
  
	transition:.3s ease-in-out;

  

 
}
 
 }  

.product-item{

  height: 150px;
  width: 150px;

}


.image{
	-webkit-transform: scale(1);
	transform: scale(1);
	-webkit-transition: .3s ease-in-out;
	transition: .3s ease-in-out;
  border-radius: 100%;
  height: 250px;
  width: 250px;
}

.image:hover{
  transform: scale(0.5);
  

}

.checked {
  color: orange;
}


/* .round-background {
  height: 200px;
  width: 200px;
  background-color:  ;
  border-radius: 50%;
  display: inline-block;
} */



</style>
@endpush
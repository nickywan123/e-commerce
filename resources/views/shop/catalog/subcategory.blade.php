@extends('layouts.shop.main')

@section('content')


<style>
    .checked {
  color: orange;
}
</style>



<div>
    {{ Breadcrumbs::render('shop.category.subcategory', $category, $subcategory) }}
    
    
  <div class="container">
            <div class="row">        
              <div class="col-3">
                <div class="dropdown">
                  <button class="btn btn-default round-background " type="button" id="menu1" data-toggle="dropdown">
                    <img src="{{asset('images/bedsheet.jpg')}}" style=" border-radius: 50%;  height: 150px; ">    
                  </button><hr>
                  <span class="text-capitalize"><strong>Bed Sheet</strong></span>
                  <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Sub Item 1</a></li><hr>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Sub Item 2</a></li><hr>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Sub Item 3</a></li><hr>
                    <li role="presentation" class="divider"></li>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Sub Item 4</a></li>
                  </ul>
                </div>  
              </div>  
              <div class="col-3">
                <div class="dropdown">
                  <button class="btn btn-default round-background " type="button" id="menu1" data-toggle="dropdown">
                    <img src="{{asset('images/curtain.jpg')}}" style=" border-radius: 50%;  height: 150px;">    
                  </button><hr>
                  <span class="text-capitalize"> <strong>Curtain</strong> </span>
                  <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Sub Item 1</a></li><hr>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Sub Item 2</a></li><hr>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Sub Item 3</a></li><hr>
                    <li role="presentation" class="divider"></li>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Sub Item 4</a></li>
                  </ul>
                </div> 
              </div>
              <div class="col-3">
                <div class="dropdown">
                  <button class="btn btn-default round-background " type="button" id="menu1" data-toggle="dropdown">
                    <img src="{{asset('images/pink-bed-sheet.jpg')}}" style=" border-radius: 50%;  height: 150px;">    
                  </button><hr>
                  <span class="text-capitalize"> <strong>Curtain</strong> </span>
                  <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Sub Item 1</a></li><hr>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Sub Item 2</a></li><hr>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Sub Item 3</a></li><hr>
                    <li role="presentation" class="divider"></li>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Sub Item 4</a></li>
                  </ul>
                </div> 
              </div>
              
             
              <div class="col-3">
                <div class="dropdown">
                  <button class="btn btn-default round-background " type="button" id="menu1" data-toggle="dropdown">
                    <img src="{{asset('images/curtain.jpg')}}" style=" border-radius: 50%;  height: 150px;">    
                  </button><hr>
                  <span class="text-capitalize"> <strong>Curtain</strong> </span>
                  <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Sub Item 1</a></li><hr>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Sub Item 2</a></li><hr>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Sub Item 3</a></li><hr>
                    <li role="presentation" class="divider"></li>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Sub Item 4</a></li>
                  </ul>
                </div> 
              </div>
            </div>
          </div>
          
    
    <div class="container">
      <div class="row">
            <!-- Options / Recommendation -->
            <div class="col-md-3 col-sm-12 hidden-sm" style="border: 1px solid #e5e5e5; padding: 10px; right:33%; bottom: 220px; ">
                <!-- Related Categories -->
                <ul class="list-group">
                    <li class="list-group-item">
         
                        <ul class="list-group">

                            @foreach ($allCategories as $relatedCategory)
                            <li class="list-group-item">
                                <a class="text-capitalize" style="font-weight: 520;" href="/shop/category/{{ $relatedCategory->slug }}">{{ $relatedCategory->name }}</a>

                                @if($relatedCategory->id == $category->id)
                                 <ul class="list-group">
                                    @foreach($category->subcategories as $childCategory)
                                    <li class="list-group-item">
                                         <a class="text-capitalize" style="font-weight: 490;" href="/shop/category/{{ $category->slug }}/{{ $childCategory->slug }}">{{ $childCategory->name }}</a> 
                                        @if($childCategory->id == $subcategory->id)
                                        <ul class="list-group">
                                            @foreach($subcategory->types as $childType)
                                            <li class="list-group-item">
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
.list-group-item {
        border: 0;
        padding: .15rem .75rem;
    }


.round-background {
  height: 170px;
  width: 170px;
  background-color:  ;
  border-radius: 50%;
  display: inline-block;
}


</style>
@endpush
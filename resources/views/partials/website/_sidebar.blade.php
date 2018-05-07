<div class="col-md-3 col-sm-4 col-xs-3">
  <div class="mm-toggle-wrap">
    <div class="mm-toggle"> <i class="fa fa-align-justify"></i> </div>
    <span class="mm-label hidden-xs">Categories</span> </div>
  <div class="mega-container visible-lg visible-md visible-sm">
    <div class="navleft-container">
      <div class="mega-menu-title">
        <h3>shop by category</h3>
      </div>
      <div class="mega-menu-category">
        <ul class="nav">
          @foreach ($categories as $category)
            <li> <a href="{{route('category', $category->id) }}"><i class="icon fa fa-female fa-fw"></i> {{ $category->name }}</a>
              <div class="wrap-popup">
                <div class="popup">
                  <div class="row">
                    <div class="col-md-4 col-sm-6">
                      <ul class="nav">
                        @foreach ($subcategories as $subcategory)
                          @if($subcategory->category_id == $category->id)
                          <li><a href="shop_grid.html"></a>{{ $subcategory->name }}</li>
                          @endif
                        @endforeach
                        </ul>
                    </div>
                    {{-- <div class="col-md-4 col-sm-6 has-sep">
                      <h3>Shoes</h3>
                      <ul class="nav">
                        <li> <a href="shop_grid.html">Tandoor & Grills</a> </li>
                        <li> <a href="shop_grid.html">Baking Tools</a> </li>
                        <li> <a href="shop_grid.html">Retina Display </a> </li>
                        <li> <a href="shop_grid.html">Washers</a> </li>
                      </ul>
                      <br>
                      <h3>Jewellery </h3>
                      <ul class="nav">
                        <li> <a href="shop_grid.html">Toasters</a> </li>
                        <li> <a href="shop_grid.html">Water Purifiers</a> </li>
                        <li> <a href="shop_grid.html">Glasses</a> </li>
                        <li> <a href="shop_grid.html">Lunch Boxes</a> </li>
                        <li> <a href="shop_grid.html">Knives</a> </li>
                      </ul>
                    </div> --}}
                    {{-- <div class="col-md-4 has-sep hidden-sm">
                      <div class="custom-menu-right">
                        <div class="box-banner media">
                          <div class="add-desc">
                            <h3>New Jeans<br>
                              collection </h3>
                            <div class="price-sale">2017</div>
                            <a href="#">Shop Now</a> </div>
                          <div class="add-right"><img src="images/menu-img1.jpg" alt=""></div>
                        </div>
                        <div class="box-banner media">
                          <div class="add-desc">
                            <h3>Save up to</h3>
                            <div class="price-sale">70 <sup>%</sup><sub>off</sub></div>
                            <a href="#">Shopping Now</a> </div>
                          <div class="add-right"><img src="images/menu-img2.jpg" alt=""></div>
                        </div>
                      </div>
                    </div> --}}
                  </div>
                </div>
              </div>
            </li>

          @endforeach
          {{-- <li> <a href="#"><i class="icon fa fa-male fa-fw"></i> Men</a>
            <div class="wrap-popup">
              <div class="popup">
                <div class="row">
                  <div class="col-md-4 col-sm-6">
                    <ul class="nav">
                      <li><a href="shop_grid.html"><span>Sofas & Couches</span></a></li>
                      <li><a href="shop_grid.html"><span>Study Tables</span></a></li>
                      <li><a href="shop_grid.html"><span>Bean Bags</span> </a></li>
                      <li><a href="shop_grid.html"><span>Bedside Tables</span> </a></li>
                      <li> <a href="shop_grid.html"><span>Sofa cum Beds</span></a></li>
                      <li><a href="shop_grid.html"><span>Bookshelves </span></a></li>
                      <li><a href="shop_grid.html"><span>T.V. & Entertainment Units</span></a></li>
                      <li><a href="shop_grid.html"><span>Center Tables </span></a></li>
                      <li><a href="shop_grid.html"><span>Cabinets</span></a></li>
                    </ul>
                  </div>
                  <div class="col-md-4 col-sm-6 has-sep">
                    <ul class="nav">
                      <li><a href="shop_grid.html"><span>Partitions</span></a></li>
                      <li><a href="shop_grid.html"><span>High-speed</span></a></li>
                      <li><a href="shop_grid.html"><span>Bean Bags </span> </a></li>
                      <li><a href="shop_grid.html"><span>Covers & Refills</span> </a></li>
                      <li> <a href="shop_grid.html"><span>Footstools</span></a></li>
                      <li><a href="shop_grid.html"><span>Inflatable Sofas</span></a></li>
                      <li><a href="shop_grid.html"><span>Ottomans</span></a></li>
                      <li><a href="shop_grid.html"><span>Cabinets</span></a></li>
                      <li><a href="shop_grid.html"><span>Wall Shelves</span></a></li>
                    </ul>
                  </div>
                  <div class="col-md-4 has-sep hidden-sm">
                    <div class="custom-menu-right">
                      <div class="box-banner menu-banner">
                        <div class="add-right"><a href="#"><img src="images/menu-img4.jpg" alt=""></a></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li class="nosub"><a href="#"><i class="icon fa fa-camera fa-fw"></i> Electronics</a></li>
          <li> <a href="shop_grid.html"><i class="icon fa fa-linux fa-fw"></i> Kids</a>
            <div class="wrap-popup column2">
              <div class="popup">
                <div class="row">
                  <div class="col-sm-6">
                    <h3>Furniture</h3>
                    <ul class="nav">
                      <li> <a href="shop_grid.html"> Kids' Beds </a> </li>
                      <li> <a href="shop_grid-2.html"> Wall Stickers </a> </li>
                      <li> <a href="shop_grid.html"> Humidifiers </a> </li>
                      <li> <a href="shop_grid.html"> Indoor Lighting </a> </li>
                    </ul>
                  </div>
                  <div class="col-sm-6 has-sep">
                    <h3> New arrivals </h3>
                    <ul class="nav">
                      <li> <a href="shop_grid.html"> Art Prints </a> </li>
                      <li> <a href="shop_grid.html"> Posters</a> </li>
                      <li> <a href="shop_grid.html"> Paintings </a> </li>
                      <li> <a href="shop_grid.html"> Drawings </a> </li>
                    </ul>
                  </div>
                  <div class="col-sm-12"> <a class="ads1" href="#"><img class="img-responsive" src="images/menu-img3.jpg" alt=""></a> </div>
                </div>
              </div>
            </div>
          </li>
          <li> <a href="shop_grid.html"><i class="icon fa fa-heart fa-fw"></i> Fashion</a>
            <div class="wrap-popup column1">
              <div class="popup">
                <ul class="nav">
                  <li><a href="shop_grid.html"><span>Frying Pans</span></a></li>
                  <li><a href="shop_grid.html"><span>Dinner Sets</span></a></li>
                  <li><a href="shop_grid.html"><span>Baking Tools</span></a></li>
                  <li><a href="shop_grid.html"><span>Spatulas</span></a></li>
                  <li><a href="shop_grid.html"><span>Gas Stoves</span></a></li>
                  <li><a href="shop_grid.html"><span>Glasses</span></a></li>
                  <li><a href="shop_grid.html"><span>Racks & Holders</span></a></li>
                  <li><a href="shop_grid.html"><span>Knives</span></a></li>
                  <li><a href="shop_grid.html"><span>Tableware</span></a></li>
                  <li><a href="shop_grid.html"><span>Kitchen Tools</span></a></li>
                </ul>
              </div>
            </div>
          </li>
          <li><a href="#"><i class="icon fa fa-codepen fa-fw"></i> Accessories</a>
            <div class="wrap-popup column1">
              <div class="popup">
                <ul class="nav">
                  <li> <a href="shop_grid.html"> Super Pillow </a> </li>
                  <li> <a href="shop_grid.html"> Hodak Chair</a> </li>
                  <li> <a href="shop_grid.html"> Pendant Light </a> </li>
                  <li> <a href="shop_grid.html"> Shoe Saver </a> </li>
                </ul>
              </div>
            </div>
          </li>
          <li class="nosub"><a href="shop_grid.html"><i class="icon fa fa-shopping-basket fa-fw"></i> Trends</a></li>
          <li class="nosub"><a href="shop_grid.html"><i class="icon fa fa-lightbulb-o fa-fw"></i> Lightings</a></li> --}}
        </ul>
      </div>
    </div>
  </div>
</div>

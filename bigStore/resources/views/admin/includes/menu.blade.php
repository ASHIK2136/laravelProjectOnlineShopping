<div class="sidebar-menu">
   
    <div style="border-top:1px ridge rgba(255, 255, 255, 0.15)"></div>
    <div class="menu">
        <ul id="menu" >
            <li><a href="{{url('/home')}}"><i class="fa fa-tachometer"></i> <span>Dashboard</span><div class="clearfix"></div></a></li>

            <li id="menu-academico" ><a href="#"><i class="fa fa-list-ul" aria-hidden="true"></i><span>Category</span> <span class="fa fa-angle-right" style="float: right"></span><div class="clearfix"></div></a>
                <ul id="menu-academico-sub" >
                    <li id="menu-academico-avaliacoes" ><a href="{{url('/addCategory')}}">Add Category</a></li>
                    <li id="menu-academico-avaliacoes" ><a href="{{url('/manageCategory')}}">Manage Category</a></li>
                </ul>
            </li>
            <li id="menu-academico" ><a href="#"><i class="fa fa-list-ul" aria-hidden="true"></i><span>Manufacture</span> <span class="fa fa-angle-right" style="float: right"></span><div class="clearfix"></div></a>
                <ul id="menu-academico-sub" >
                    <li id="menu-academico-avaliacoes" ><a href="{{url('/addManufacture')}}">Add Manufacture</a></li>
                    <li id="menu-academico-avaliacoes" ><a href="{{url('/manageManufacture')}}">Manage Manufacture</a></li>
                </ul>
            </li>
            <li id="menu-academico" ><a href="#"><i class="fa fa-list-ul" aria-hidden="true"></i><span>Product</span> <span class="fa fa-angle-right" style="float: right"></span><div class="clearfix"></div></a>
                <ul id="menu-academico-sub" >
                    <li id="menu-academico-avaliacoes" ><a href="{{url('/addProduct')}}">Add Product</a></li>
                    <li id="menu-academico-avaliacoes" ><a href="{{url('/manageProduct')}}">Manage Product</a></li>
                </ul>
            </li>
            <li id="menu-academico" ><a href="#"><i class="fa fa-list-ul" aria-hidden="true"></i><span>Slider Option</span> <span class="fa fa-angle-right" style="float: right"></span><div class="clearfix"></div></a>
                <ul id="menu-academico-sub" >
                    <li id="menu-academico-avaliacoes" ><a href="{{url('/addSlider')}}">Add Slider</a></li>
                    <li id="menu-academico-avaliacoes" ><a href="{{url('/manageSlider')}}">Manage Manage</a></li>
                </ul>
            </li>
            <li id="menu-academico" ><a href="#"><i class="fa fa-file-text-o"></i>  <span>Pages</span> <span class="fa fa-angle-right" style="float: right"></span><div class="clearfix"></div></a>
                <ul id="menu-academico-sub" >
                    <li id="menu-academico-avaliacoes" ><a href="{{url('/logout')}}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a></li>
                    <form id="logout-form" action="{{url('/logout')}}" method="POST" style="display: none;">
                        {{csrf_field()}}
                    </form>

                </ul>
            </li>
        </ul>
    </div>
</div>